<?php
namespace Moto\Application\Sitemap; use Moto\Application\Util; use Moto\Json\Request; use Moto\Json\Response; use Moto\Json\Server; use Moto; class Service extends Moto\Service\AbstractStaticService { protected static $_resourceName = 'sitemap'; protected static $_resourcePrivilegesMap = array( 'getSettings' => 'get', 'saveSettings' => 'set', 'getInfo' => 'get', 'generateAll' => 'set', ); public static function getSettings() { return Moto\Website\SitemapService::getSettings(); } public static function saveSettings($request = null) { if (null === $request) { $request = static::getRequest()->getParams(); } $filter = new InputFilter\SaveSettings(); $filter->setData($request); if (!$filter->isValid()) { throw new Server\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, $filter->getMessagesKeys()); } $values = $filter->getValues(); Moto\Website\SitemapService::saveSettings($values); return $values; } public static function getInfo() { return array( 'file' => Moto\Website\SitemapService::getPrimaryFileInformation(), ); } public static function generateAll($request = null) { if (null === $request) { $request = static::getRequest()->getParams(); } $confirmed = Moto\Util::getValue($request, 'confirmed'); if (!$confirmed && Moto\Website\SitemapService::isPrimaryFileExists()) { throw new Server\Exception(Moto\System\Exception::ERROR_NEED_CONFIRMATION, Moto\System\Exception::ERROR_CONFLICT_CODE); } Moto\Website\SitemapService::generateAll(); return static::getInfo(); } } 