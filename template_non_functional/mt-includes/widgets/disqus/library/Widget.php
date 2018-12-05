<?php
namespace Website\Widgets\Disqus; use Moto; class Widget extends Moto\System\Widgets\AbstractWidget { protected $_name = 'disqus'; protected static $_defaultProperties = array( 'spacing' => array( 'top' => 'auto', 'right' => 'auto', 'bottom' => 'auto', 'left' => 'auto', ), 'params' => array( 'shortname' => '', 'language' => 'en', 'use_identifier' => false, 'identifier' => '', 'url' => '@dynamic', ), ); protected $_templateType = 'templates'; protected $_widgetId = true; public function getIntegrationShortName() { return Moto\Website\Integration::first('disqus')->shortname; } public function getParam($name, $default = '') { if ($name === 'shortname') { return $this->getIntegrationShortName(); } return $this->getPropertyValue('params.' . $name, $default); } public function getParams() { $params = $this->getPropertyValue('params'); if (!Moto\Util::getValue($params, 'use_identifier')) { $params['identifier'] = ''; } $params['shortname'] = $this->getIntegrationShortName(); return $params; } public function getPageUrl($page = null, $url = '') { if (!$page) { return $url; } $url = $this->getPropertyValue('params.url', '@dynamic'); if ($url == '@permanent') { $url = $page->getInnerUrl(); $url = Moto\System::getAbsoluteUrl('@website/' . $url); $url = rtrim($url, '/') . '/'; } elseif ($url == '@dynamic') { $url = $page->getAbsoluteUrl(); } return $url; } } 