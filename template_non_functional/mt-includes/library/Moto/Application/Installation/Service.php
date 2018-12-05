<?php
namespace Moto\Application\Installation; use Moto\Json\Server; use Moto; class Service extends Moto\Service\AbstractStaticService { protected static $_resourceName = null; public static function isAllowed($privilege) { return true; } public static function process($request = null) { if (null === $request) { $request = static::getRequest()->getParams(); } Moto\System\Exception::enableAutoLogging(); $filter = new InputFilter\Process(); if (!empty($request['website']) && !empty($request['website']['address'])) { $request['website.address'] = $request['website']['address']; } if (empty($request['productInfo'])) { try { $request['productInfo'] = Moto\System\ProductInformation::getFromFile(); } catch (\Exception $e) { } } $filter->setData($request); if (!$filter->isValid()) { throw new Server\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, $filter->getMessagesKeys()); } $values = $filter->getValues(); try { $timezone = null; if (function_exists('date_default_timezone_get')) { $timezone = @date_default_timezone_get(); } if (empty($timezone)) { $timezone = 'UTC'; } if (function_exists('date_default_timezone_set')) { @date_default_timezone_set($timezone); } $processor = new Processor($values); $result = $processor->execute(); } catch (\Exception $e) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_INSTALLATION_FAILED_MESSAGE, Moto\System\Exception::ERROR_INSTALLATION_FAILED_CODE, $processor->getErrors()); } return $result; } public static function isInstalled() { return Moto\System::isInstalled(); } public static function installPlugin($name) { if (!Moto\System::isInstalled()) { throw new Moto\System\Exception('COMMON.MESSAGES.SYSTEM_NOT_INSTALLED', Moto\System\Exception::ERROR_CONFLICT_CODE, array('ERROR_MESSAGE.SYSTEM_NOT_INSTALLED')); } $plugin = Moto\System\PluginManager::findLocalPluginByName($name); if (!$plugin) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_NOT_FOUND_MESSAGE, Moto\System\Exception::ERROR_NOT_FOUND_CODE); } Moto\System\Exception::enableAutoLogging(); Moto\System\PluginManager::install($name); Moto\System\PluginManager::activate($name); return $plugin->toArray('@default'); } public static function installNextPlugin() { if (!Moto\System::isInstalled()) { throw new Moto\System\Exception('COMMON.MESSAGES.SYSTEM_NOT_INSTALLED', Moto\System\Exception::ERROR_CONFLICT_CODE, array('ERROR_MESSAGE.SYSTEM_NOT_INSTALLED')); } $plugins = Moto\System\PluginManager::findLocalPlugins()->getNotInstalled(); if (!$plugins->count()) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_NOT_FOUND_MESSAGE, Moto\System\Exception::ERROR_NOT_FOUND_CODE); } return array( 'count' => ($plugins->count() - 1), 'installed' => $plugins->get(0)->getName(), 'plugin' => static::installPlugin($plugins->get(0)->getName()), ); } public static function removeTemporaryFiles() { if (!Moto\System::isInstalled()) { throw new Moto\System\Exception('COMMON.MESSAGES.SYSTEM_NOT_INSTALLED', Moto\System\Exception::ERROR_CONFLICT_CODE, array('ERROR_MESSAGE.SYSTEM_NOT_INSTALLED')); } $path = Moto\System::getAbsolutePath('@website/mt-install'); if (file_exists($path)) { @Moto\Util::deleteDir($path); } if (file_exists($path)) { throw new Moto\System\Exception('COMMON.MESSAGES.CANT_REMOVE_INSTALLATION_DIR', Moto\System\Exception::ERROR_CONFLICT_CODE, array('ERROR_MESSAGE.CANT_REMOVE_INSTALLATION_DIR')); } return true; } } 