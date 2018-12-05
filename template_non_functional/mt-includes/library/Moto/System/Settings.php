<?php
namespace Moto\System; use Moto; use Zend\Db\Sql; class Settings { const SETTING_NAMESPACE = 'system'; protected static $_data = array(); protected static $_rows = array(); protected static $_table = null; protected static $_initialized = false; protected static $_engine; public static function init() { if (static::$_initialized) { return; } static::$_initialized = true; static::loadData(true); Moto\Config::set('settings.' . self::SETTING_NAMESPACE, self::getPublicData()); } public static function getTable() { if (null === self::$_table) { self::$_table = new Moto\Application\Settings\SettingsTable(); } return self::$_table; } public static function loadData($reload = false) { if (!$reload && !empty(self::$_data)) { return true; } $table = self::getTable(); $where = new Sql\Where(); $items = $table->fetchFromResultSet($table->select($where)); for ($i = 0, $count = count($items); $i < $count; $i++) { $name = $items[$i]->name; $namespace = strtok($name, '.'); $name = strtok('.'); $items[$i]->value = Moto\Util::decodeValue($items[$i]->value, (isset($items[$i]->type) ? $items[$i]->type : null)); self::$_data[$namespace][$name] = $items[$i]->value; self::$_rows[$namespace][$name] = $items[$i]; } static::_onLoadData(); return true; } protected static function _onLoadData() { } public static function sanitizeValue($name, $value) { if (is_array($value) || is_object($value)) { $value = json_encode($value); } if (is_bool($value)) { $value *= 1; } return $value; } public static function set($name, $value) { $namespace = static::SETTING_NAMESPACE; if (empty($namespace)) { return false; } self::_initNamespace($namespace); $name = trim($name); if (empty($name)) { return false; } if (!static::isExists($name)) { return static::add($name, $value); } $item = self::$_rows[$namespace][$name]; $value = static::sanitizeValue($name, $value); if ($item->type !== 'object') { $oldValue = static::get($name, false); $oldValue = static::sanitizeValue($name, $oldValue); if ($value === $oldValue) { return false; } } $table = self::getTable(); $item->value = $value; if (!$table->save($item)) { return false; } $item->value = Moto\Util::decodeValue($item->value, (isset($item->type) ? $item->type : null)); self::$_data[$namespace][$name] = $item->value; return true; } public static function add($name, $value = '', $type = 'string') { $namespace = static::SETTING_NAMESPACE; if (empty($namespace)) { return false; } self::_initNamespace($namespace); $name = trim($name); if (empty($name)) { return false; } if (static::isExists($name)) { return static::set($name, $value); } $value = static::sanitizeValue($name, $value); $table = self::getTable(); $item = $table->create(); $item->name = $namespace . '.' . $name; $item->value = $value; if (isset($item->type)) { $item->type = $type; } self::$_rows[$namespace][$name] = $item; if (!$table->save($item)) { return false; } $item->value = Moto\Util::decodeValue($item->value, (isset($item->type) ? $item->type : null)); self::$_data[$namespace][$name] = $item->value; return true; } public static function delete($name) { $namespace = static::SETTING_NAMESPACE; if (empty($namespace)) { return false; } self::_initNamespace($namespace); $name = trim($name); if (empty($name) || !static::isExists($name)) { return false; } $table = self::getTable(); $table->delete(array( 'id' => self::$_rows[$namespace][$name]->id )); unset(self::$_data[$namespace][$name]); return true; } public static function get($name = null, $default = null) { return static::_get(static::SETTING_NAMESPACE, $name, $default); } protected static function _get($namespace, $name = null, $default = null) { if (empty($namespace)) { return $default; } self::_initNamespace($namespace); if (null == $name) { return self::$_data[$namespace]; } $name = trim($name); if (empty($name)) { return $default; } return (array_key_exists($name, self::$_data[$namespace]) ? self::$_data[$namespace][$name] : $default); } public static function isExists($name) { $namespace = static::SETTING_NAMESPACE; if (empty($namespace)) { return null; } self::_initNamespace($namespace); $name = trim($name); return (!empty($name) && array_key_exists($name, self::$_data[$namespace])); } protected static function _initNamespace($namespace) { if (!array_key_exists($namespace, self::$_data)) { self::$_data[$namespace] = array(); } if (!array_key_exists($namespace, self::$_rows)) { self::$_rows[$namespace] = array(); } } public static function onUpdated() { static::loadData(true); } public static function getPublicData() { $data = self::_get(self::SETTING_NAMESPACE); $data['engine'] = static::getEngine()->getPublicData(); $data = Moto\Util::arrayOnly($data, array('version', 'build', 'engine')); return $data; } public static function exportFeatures() { return static::getEngine()->exportFeatures(); } public static function getEngine() { if (!static::$_engine) { static::$_engine = new Engine(self::_get(self::SETTING_NAMESPACE, 'engine')); } return static::$_engine; } public static function getAddressHash() { $address = static::get('address'); $address = preg_replace('/^https?:\/\/(.*)$/', '$1', strtolower($address)); return md5($address); } } class Engine { CONST TYPE_WEBSITE_BUILDER = 'WebsiteBuilder'; CONST TYPE_LANDING_BUILDER = 'LandingBuilder'; protected $_version = 1; protected $_type = 'WebsiteBuilder'; protected $_features = array( 'WebsiteBuilder' => array( 'engine_password_protection' => 1, 'engine_permalink' => 1, 'engine_dashboard' => 1, 'engine_grid_settings' => 1, 'engine_redirects' => 1, 'engine_seo_settings' => 1, 'engine_page_edit_url' => 1, 'engine_pages_unlimited_mode' => 1, 'engine_subscription' => 1, ), 'LandingBuilder' => array( 'engine_password_protection' => 0, 'engine_permalink' => 0, 'engine_dashboard' => 0, 'engine_grid_settings' => 0, 'engine_redirects' => 0, 'engine_seo_settings' => 0, 'engine_page_edit_url' => 0, 'engine_pages_unlimited_mode' => 0, 'engine_subscription' => 0, 'theme_content_blog' => 0 ), ); protected $_brands = array( 'LandingBuilder' => array( 'features' => array( 'cp_tutorial_center' => false, ), 'translations' => array( 'CONTROL_PANEL' => array( 'NAME' => 'MotoCMS Landing Builder', ), ) ), ); public function __construct($data) { if (is_string($data)) { $data = $this->_decryptToObject($data); if (empty($data)) { return; } } $this->_setLicenceData($data); } protected function _setLicenceData($value) { $this->_version = Moto\Util::getFrom($value, 'version', $this->_version); $this->_type = Moto\Util::getFrom($value, 'type', $this->_type); $this->_updateBrand(); } public function checkSystemEngineData($value) { if (!is_string($value)) { return false; } $data = $this->_decryptToObject($value); if (!is_object($data)) { return false; } if (!in_array($data->type, array('LandingBuilder', 'WebsiteBuilder'))) { return false; } if (!in_array($data->version, array(1))) { return false; } return true; } public function installEngine($engineType) { if (!Moto\System::isInstallEngine()) { return false; } if (!in_array($engineType, array(static::TYPE_WEBSITE_BUILDER, static::TYPE_LANDING_BUILDER))) { return false; } $data = (object) array( 'type' => $engineType, 'version' => $this->_version, 'updated_at' => time(), ); $value = $this->_encryptObject($data); if (is_string($value) && !empty($value)) { Moto\System\Settings::set('engine', $value); Moto\System\Settings::loadData(true); } return true; } public function updateSystemEngineData($value) { if (!$this->checkSystemEngineData($value)) { return false; } $data = $this->_decryptToObject($value); $this->_setLicenceData($data); $data->updated_at = time(); $value = $this->_encryptObject($data); if (is_string($value) && !empty($value)) { Moto\System\Settings::set('engine', $value); } return true; } protected function _getEncryptionKey() { Moto\Authentication\AuthenticationService::getInstance(); return Moto\Config::get('__product_id__'); } protected function _decryptToObject($value, $key = null) { if (!is_string($value)) { return null; } if ($key == null) { $key = $this->_getEncryptionKey(); } $isLegacyEncrypted = false; try { $data = Moto\System\Encryption::decrypt($value, false, $key); } catch(\Exception $e) { $data = Moto\System\Encryption::decryptLegacy(trim($value), $key); $isLegacyEncrypted = true; } if (empty($data)) { return null; } if ($data[0] !== '{') { $data = base64_decode($data); $data = trim($data); } if ($data[0] === '{') { $data = json_decode($data); } if (!is_object($data)) { return null; } if ($isLegacyEncrypted) { $value = $this->_encryptObject($data); if (is_string($value) && !empty($value)) { Moto\System\Settings::set('engine', $value); } } return $data; } protected function _encryptObject($object, $key = null) { if (!is_object($object)) { return null; } if ($key == null) { $key = $this->_getEncryptionKey(); } $data = Moto\System\Encryption::encrypt($object, Moto\System\Encryption::METHOD_JSON, $key); return $data; } public function exportFeatures() { return Moto\Util::getFrom($this->_features, $this->_type, array()); } public function isLandingBuilder() { return $this->_type == static::TYPE_LANDING_BUILDER; } public function getPublicData() { return array( 'type' => $this->_type, ); } protected function _updateBrand() { if (empty($this->_brands[$this->_type]) || !is_array($this->_brands[$this->_type])) { return; } $brand = Moto\System\Brand::getInstance(); if ($brand->getName() === 'motocms') { $brand->updateData($this->_brands[$this->_type]); } } } 