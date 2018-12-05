<?php
namespace Moto\Application\Installation; use Moto; use Zend\Db; class Processor { protected $_params = array(); protected $_options = array( 'ignoreExistsData' => false, 'firstUserRole' => 'root', ); protected $_databaseAdapter = null; protected $_language = null; protected $_role = null; protected $_user = null; protected $_errors = array(); protected $_services = array(); protected $_sqlParser = null; public function __construct($params = null) { $this->setParams($params); Moto\Hook::trigger('Installer: Instance.created', $this); } public function getOption($name, $default = null) { return (array_key_exists($name, $this->_options) ? $this->_options[$name] : $default); } public function setOption($name, $value) { $this->_options[$name] = $value; return $this; } public function setParams($params) { if (!is_array($params)) { throw new \Exception('Bad params'); } $this->_params = $this->_merge($this->_params, $params); return $this; } public function getParams() { return $this->_params; } protected function _merge(array $a, array $b, $keepNumeric = false) { foreach ($b as $key => $value) { if (array_key_exists($key, $a)) { if (is_int($key) && !$keepNumeric) { $a[] = $value; } elseif (is_array($value) && is_array($a[$key])) { $a[$key] = static::_merge($a[$key], $value, $keepNumeric); } else { $a[$key] = $value; } } else { $a[$key] = $value; } } return $a; } public function canExecute() { $result = true; $result &= !empty($this->_params); $result &= !MOTO_INSTALLED; return $result; } public function preCheckInstallation() { $themeName = $this->_getCurrentThemeName(); if (!$themeName) { throw new Moto\System\Exception('ERROR_MESSAGE.COULD_FIND_CURRENT_THEME'); } $themeDir = Moto\System::getAbsolutePath('@themes/' . $themeName); $sqlFile = $themeDir . '/sql/data.sql'; if (!file_exists($sqlFile)) { throw new Moto\System\Exception('ERROR_MESSAGE.THEME_CONTENT_FILE_NOT_EXISTS'); } } function execute() { try { $this->preCheckInstallation(); if (MOTO_INSTALLED) { if (!$this->getOption('ignoreExistsData', false)) { Moto\System\Log::error('@INSTALL : ALREADY INSTALLED'); throw new Moto\System\Exception('ERROR_MESSAGE.ALREADY_INSTALLED'); } } Moto\System\Log::info('@INSTALL : Start'); Moto\Hook::trigger('Installer: executing', $this); $databaseOptions = Moto\Config::get('database', array()); $databaseOptions = array_merge($databaseOptions, $this->_params['database']); Moto\Config::set('database', $databaseOptions); Moto\System\Log::info('@INSTALL : Database Data Importing'); $this->_importDataBase(); Moto\System\Log::info('@INSTALL : Basic Database Imported'); $databaseAdapter = $this->getDatabaseAdapter(); Moto\Config::set('databaseAdapter', $databaseAdapter); Moto\Application\Model\AbstractTable::setDefaultAdapter($databaseAdapter); Moto\Application\Model\AbstractTable::setTablePrefix($this->_params['database']['prefix']); $this->_updateProductInformation(); Moto\System\Log::info('@INSTALL : Init Settings'); Moto\Website\Settings::init(); Moto\System\Log::info('@INSTALL : Load Extra Info'); $this->_loadExtraInfo(); Moto\System\Log::info('@INSTALL : Creating Admin User'); $this->_createAdminUser(); Moto\System\Log::info('@INSTALL : Admin User Created'); Moto\System\Log::info('@INSTALL : Saving Website Settings'); $this->_saveWebsiteSetting(); Moto\System\Log::info('@INSTALL : Website Settings Saved'); Moto\System\Log::info('@INSTALL : Saving File Settings'); $this->_saveSettings(); Moto\System\Log::info('@INSTALL : File Settings Saved'); Moto\System\Log::info('@INSTALL : Installing Content Taxonomy'); if (!Moto\Application\Content\TaxonomyProvider::install()) { Moto\System\Log::error('@INSTALL : Content Taxonomy Not Installed'); throw new \Exception('ERROR_MESSAGE.CONTENT_TAXONOMY_NOT_INSTALLED'); } Moto\System\Log::info('@INSTALL : Activating Theme'); if ($this->_activateTheme()) { Moto\System\Log::info('@INSTALL : Theme Activated'); } else { Moto\System\Log::error('@INSTALL : Theme Not Activated'); throw new \Exception('ERROR_MESSAGE.THEME_NOT_ACTIVATED'); } if (Moto\Features::isEnabled('theme_content_blog')) { Moto\System\Log::info('@INSTALL : Installing Extra Content'); if ($this->_installContentSections()) { Moto\System\Log::info('@INSTALL : Extra Content Installed'); } else { Moto\System\Log::error('@INSTALL : Extra Content Not Installed'); throw new \Exception('ERROR_MESSAGE.EXTRA_CONTENT_NOT_INSTALLED'); } } if ($this->_installNotFoundPopup()) { Moto\System\Log::info('@INSTALL : Not Found Popup Installed'); } else { Moto\System\Log::error('@INSTALL : Not Found Popup Not Installed'); throw new \Exception('ERROR_MESSAGE.EXTRA_CONTENT_NOT_INSTALLED'); } Moto\System\Log::info('@INSTALL : Check and create audio player preset'); Moto\Update\Upgrade::checkAndCreateAudioPlayerPreset(); Moto\System\Log::info('@INSTALL : Check and create Social Links Extended preset'); Moto\Update\Upgrade::checkAndCreateSocialLinksExtendedPresets(); Moto\System\Log::info('@INSTALL : Check `Back To Top` button settings'); Moto\Update\Upgrade::upgradeBackToTopButton(); Moto\System\Log::info('@INSTALL : Check `Tabs` preset'); Moto\Update\Upgrade::checkAndCreateTabsPresets(); Moto\System\Log::info('@INSTALL : Check `Cookie Notification` preset'); Moto\Update\Upgrade::checkAndCreateCookieNotificationPresets(); Moto\System\Log::info('@INSTALL : Add system.engine'); $this->_installSystemEngine(); Moto\Website\Settings::loadData(true); Moto\System\Log::info('@INSTALL : Check and create password protected page'); Moto\Update\Upgrade::checkAndCreatePasswordProtectedPage(); Moto\System\Log::info('@INSTALL : Check and create under construction page'); Moto\Update\Upgrade::checkAndCreateUnderConstructionPage(); Moto\System\Log::info('@INSTALL : Check and upgrade tabs presets for vertical mode'); Moto\Update\Upgrade::upgradeTabsPresetsForVerticalMode(); Moto\System\Log::info('@INSTALL : Check and create tile_gallery presets'); Moto\Update\Upgrade::checkAndCreateTileGalleryPresets(); Moto\System\Log::info('@INSTALL : Check and create post_tags presets'); Moto\Update\Upgrade::checkAndCreateTagListPresets(); Moto\System\Log::info('@INSTALL : Check and create category_list presets'); Moto\Update\Upgrade::checkAndCreateCategoryListPresets(); $pageUpdated = Moto\Database\Page::where('type', '=', 'blog.index')->update(array('name' => 'Blog Main Page')); if ($pageUpdated) { Moto\System\Log::notice('@INSTALL : rename Blog to Blog Main Page successfully'); } $this->_rebuild(); $this->_updateBrandInfo(); Moto\Hook::trigger('Installer: executed', $this); Moto\System\Log::info('@INSTALL : Done'); } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $e) { if (!$this->isError()) { $this->_errors[] = $e->getPrevious() ? $e->getPrevious()->getMessage() : $e->getMessage(); } throw $e; } catch (\Exception $e) { if (!$this->isError()) { $this->_errors[] = $e->getMessage(); } throw $e; } return true; } public function getErrors() { return $this->_errors; } public function isError() { return (!empty($this->_errors)); } private function _saveSettings() { $file = Moto\System::getAbsolutePath('@websiteSettings'); $userSettings = ''; foreach ($this->_params['database'] as $key => $value) { $userSettings .= '$config["database"]["' . $key . '"] = base64_decode(\'' . base64_encode($value) . '\');' . "\n"; } $settings = file_get_contents($file); $settings = preg_replace('/(\/\* USER_SETTINGS:START \*\/)(.*)(\/\* USER_SETTINGS:END \*\/)/uis', "$1\n$userSettings\n$3", $settings); $settings = str_replace("define('MOTO_INSTALLED', false)", "define('MOTO_INSTALLED', true)", $settings); Moto\Util::filePutContents($file, $settings); return true; } private function _importDataBase() { $status = true; $parser = $this->_getSqlParser(); if ($this->isDataAlreadyExists() || MOTO_INSTALLED) { if (!$this->getOption('ignoreExistsData', false)) { throw new \Exception('ERROR_MESSAGE.DATABASE.DATA_ALREADY_EXISTS'); } } $queries = $parser->parseFile(WEBSITE_INSTALL_DIR . '/sql/structure.sql'); $status &= $this->_executeQueries($queries, 'ERROR_MESSAGE.DATABASE.IMPORT_STRUCTURE'); $queries = $parser->parseFile(WEBSITE_INSTALL_DIR . '/sql/data.sql'); $status &= $this->_executeQueries($queries, 'ERROR_MESSAGE.DATABASE.IMPORT_DATA'); return $status; } private function _getSqlParser() { if (null === $this->_sqlParser) { $this->_sqlParser = new Moto\Sql\Parser(); $this->_sqlParser->setTablePrefix($this->_params['database']['prefix']); } return $this->_sqlParser; } public function isDataAlreadyExists() { $databaseAdapter = $this->getDatabaseAdapter(); $sql = "SHOW TABLES LIKE '" . $this->_params['database']['prefix'] . "settings'"; $result = $databaseAdapter->query($sql)->execute(); return (boolean) $result->current(); } public function getDatabaseAdapter() { if (null == $this->_databaseAdapter) { $databaseConfig = array_merge(Moto\Config::get('database'), $this->_params['database']); try { Moto\Hook::trigger('Installer: creatingDatabaseAdapter', $databaseConfig); $this->_databaseAdapter = new Db\Adapter\Adapter($databaseConfig); $schema = $this->_databaseAdapter->getCurrentSchema(); $isConnected = $this->_databaseAdapter->getDriver()->getConnection()->isConnected(); Moto\Database\Provider::initEloquent($this->_databaseAdapter, $databaseConfig); Moto\Hook::trigger('Installer: createDatabaseAdapter', $this->_databaseAdapter); } catch (\Exception $e) { throw new \Exception('ERROR_MESSAGE.DATABASE.CONNECT'); } } return $this->_databaseAdapter; } protected function _executeQueries($queries, $message = null) { $result = false; try { $databaseAdapter = $this->getDatabaseAdapter(); for ($i = 0, $count = count($queries); $i < $count; $i++) { $query = $queries[$i]; if (empty($query) || empty($query['sql'])) { continue; } $result = $databaseAdapter->query($query['sql'])->execute(); } } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $e) { if (!empty($message)) { $this->setError($message); } throw $e; } catch (\Exception $e) { if (!empty($message)) { $this->setError($message); } throw $e; } return !!$result; } public function setError($message, $namespace = null) { if ($namespace) { $this->_errors[$namespace] = $message; } else { $this->_errors[] = $message; } } protected function _loadExtraInfo() { $table = new Moto\Application\Languages\LanguagesTable(); $this->_language = $table->getByLocale($this->_params['language']); if (!$this->_language) { $this->_language = $table->getById(1); } if ($this->_language) { $this->_params['admin']['language_id'] = $this->_language->id; } $table = new Moto\Application\Roles\RolesTable(); $this->_role = $table->getByName($this->getOption('firstUserRole')); if (!$this->_role) { $this->_role = $table->getById(3); } if ($this->_role) { $this->_params['admin']['role_id'] = $this->_role->id; } } protected function _createAdminUser() { $this->_user = Moto\Application\Users\Service::save($this->_params['admin']); Moto\Authentication\Service::setUser($this->_user); } protected function _saveWebsiteSetting() { if (!empty($this->_params['website.address']) && empty($this->_params['website']['address'])) { $this->_params['website']['address'] = $this->_params['website.address']; } $settings = array( 'website' => array( 'language_id' => $this->_language->id, 'language_code' => $this->_language->code, 'language_locale' => $this->_language->locale, 'seo_html_attribute_lang' => $this->_language->code, 'address' => $this->_params['website']['address'] ) ); Moto\Application\Settings\Service::save($settings); } protected function _activateTheme() { try { $themeName = $this->_getCurrentThemeName(); $themeDir = Moto\System::getAbsolutePath('@themes/' . $themeName); $sqlFile = $themeDir . '/sql/data.sql'; $parser = $this->_getSqlParser(); if (file_exists($sqlFile)) { $queries = $parser->parseFile($sqlFile); $this->_executeQueries($queries); } else { throw new \Exception('ERROR_MESSAGE.THEME_DATA_FILE_NOT_EXISTS'); } Moto\Website\Theme::activate($themeName, 'install'); Moto\Website\Theme::init(); } catch (\Exception $e) { Moto\System\Log::error(__CLASS__ . '->' . __FUNCTION__ . ': ' . $e->getMessage()); return false; } return true; } protected function _installContentSections() { try { $sections = array('blog'); foreach ($sections as $type) { Moto\System\Log::info('@INSTALL : CONTENT_SECTION : Start Check or Install [ ' . ucfirst($type) . ' ]'); $contentSectionHelper = Moto\System\ContentSectionHelper::get($type); $contentSectionHelper->checkOrInstall(); Moto\System\Log::info('@INSTALL : CONTENT_SECTION : Done [ ' . ucfirst($type) . ' ]'); } } catch (\Exception $e) { Moto\System\Log::error(__CLASS__ . '->' . __FUNCTION__ . ': ' . $e->getMessage()); return false; } return true; } protected function _installNotFoundPopup() { try { Moto\System\Log::info('@INSTALL : Start Install [ NotFoundPopup ]'); $contentSectionHelper = Moto\System\ContentSectionHelper::get('NotFoundPopup'); $contentSectionHelper->checkOrInstall(); Moto\System\Log::info('@INSTALL : Done [ NotFoundPopup ]'); } catch (\Exception $e) { Moto\System\Log::error(__CLASS__ . '->' . __FUNCTION__ . ': ' . $e->getMessage()); return false; } return true; } protected function _installSystemEngine() { $themeInfo = Moto\Website\Theme::getInfo(); if (!isset($themeInfo['engine'])) { $engineType = 'WebsiteBuilder'; } else { $engineType = $themeInfo['engine']; } if ($engineType !== 'WebsiteBuilder' && $engineType !== 'LandingBuilder') { $engineType = 'LandingBuilder'; } $engine = Moto\System\Settings::getEngine(); if (!$engine->installEngine($engineType)) { Moto\System\Log::error('@INSTALL : CAN NOT INSTALL ENGINE TYPE'); } } protected function _rebuild() { try { } catch (\Exception $e) { return false; } return true; } protected function _updateProductInformation() { Moto\System\Log::info('@INSTALL : Update product information'); if (!Moto\System\ProductInformation::update(Moto\Util::getValue($this->_params, 'productInfo'))) { Moto\System\Log::critical('@INSTALL : Cant update product information'); } } protected function _updateBrandInfo() { try { Moto\Authentication\AuthenticationService::getInstance(); Moto\System\Brand::getInstance()->getUpdatedBrandInfo(); } catch (\Exception $e) { } } public static function prepareInstallationData() { $plugins = Moto\System\PluginManager::findLocalPlugins(); $pluginsList = array(); if ($plugins) { $pluginsList = $plugins->toArray(array('name', 'label', 'version', 'build', 'installed', 'activated')); } $data = array( 'html5Mode' => false, 'apiUrl' => 'api.php', 'env' => APPLICATION_ENV, 'environment' => array( 'php' => PHP_VERSION, 'engine' => array( 'build' => Moto\Version::getBuild(), 'version' => Moto\Version::getVersion(), ), 'website' => defined('WEBSITE_DIR') ? WEBSITE_DIR : null, 'web' => Moto\Util::getValue($_SERVER, 'DOCUMENT_ROOT'), 'os' => PHP_OS, ), 'externalModules' => Moto\Util::getValue(Moto\System::getConfig(), 'externalModules'), 'engine' => array( 'build' => Moto\Version::getBuild(), 'version' => Moto\Version::getVersion(), ), 'productInfo' => Moto\System\ProductInformation::getFromFile(), 'themesList' => null, 'currentTheme' => null, 'pluginsList' => $pluginsList, ); try { $themesList = Moto\Application\Themes\Service::getList(); } catch (\Exception $e) { Moto\System\Log::critical('[Installation] Cant retrieve themes list'); $themesList = null; } if ($themesList && $themesList->meta->total) { $themes = array(); foreach ($themesList->records as $record) { $theme = array( 'folder' => Moto\Util::getValue($record, 'name'), 'name' => Moto\Util::getValue($record, 'info.name'), 'template_id' => Moto\Util::getValue($record, 'info.template_id'), 'label' => Moto\Util::getValue($record, 'info.label'), 'build' => Moto\Util::getValue($record, 'info.build'), 'version' => Moto\Util::getValue($record, 'info.version'), ); $themes[] = $theme; } $data['themesList'] = $themes; $data['currentTheme'] = $themes[0]; } return $data; } protected function _getCurrentThemeName() { try { $themes = Moto\Application\Themes\Service::getList(); } catch (\Exception $e) { Moto\System\Log::warning('[Installation] Cant retrieve themes list'); return null; } if (!$themes || $themes->meta->total < 1) { return null; } $theme = array_shift($themes->records); $themeName = $theme['name']; if (defined('APPLICATION_ENV') && APPLICATION_ENV !== 'production') { $themeName = Moto\Config::get('__BuilderThemeName__', $themeName); } return $themeName; } } 