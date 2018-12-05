<?php
namespace Moto\Website; use Moto; use Website; use Zend; class BlogApplication extends Moto\Website\Application { const PAGE__INDEX = 'index'; const PAGE__POST = 'post'; const PAGE__TAG = 'tag'; const PAGE__CATEGORY = 'category'; protected $_name = 'blog'; protected static $_contentSection = 'blog'; protected static $_mainPage; protected static $_initialized = false; protected static $_rawGlobalRoutes = array( '/{prefix}/*' ); protected static $_globalRoutes; protected $_router; public static function bootstrap() { if (static::$_initialized) { return false; } static::$_initialized = true; if (!static::_isAllowingApplication()) { return false; } Moto\System::registerApplication(static::$_contentSection, __CLASS__, static::_getGlobalRoutes()); return true; } protected static function _isAllowingApplication() { $mainPage = static::getMainPage(); if (!$mainPage) { return false; } return true; } protected static function _getGlobalRoutes() { if (static::$_globalRoutes) { return static::$_globalRoutes; } static::$_globalRoutes = array(); $prefixUri = static::getGlobalPrefixUri(); foreach (static::$_rawGlobalRoutes as $index => $uri) { static::$_globalRoutes[$index] = str_replace('{prefix}', $prefixUri, $uri); } return static::$_globalRoutes; } protected static function getGlobalPrefixUri() { $page = static::getMainPage(); if (!$page) { return static::$_contentSection; } return $page->url; } public static function getMainPage() { if (static::$_mainPage) { return static::$_mainPage; } $table = Moto\System::getDbTable('pages'); $table->useResultAsModel(true); $items = $table->select(array( 'type' => static::$_contentSection. '.index', )); static::$_mainPage = $items->current(); if (!static::$_mainPage) { Moto\System\Log::critical('[ Blog Application ] : cant find a main page'); return null; } return static::$_mainPage; } protected function _getInnerRouter() { if (!$this->_router) { $this->_router = new Moto\System\Router(static::getGlobalPrefixUri()); $this->_router->addPath('/', static::PAGE__INDEX); $this->_router->addPath('/' . static::PAGE__TAG . '/*', static::PAGE__TAG); $this->_router->addPath('/' . static::PAGE__CATEGORY . '/*', static::PAGE__CATEGORY); $this->_router->addPath('/*', static::PAGE__POST); } return $this->_router; } protected static function _getHelper() { return Moto\System\ContentSectionHelper::get(static::$_contentSection); } protected static function _getSettings() { return static::_getHelper()->getCurrentSettings(); } public function findPageByUrl($relativeUrl) { $page = null; $router = $this->_getInnerRouter(); $route = $router->findOne($relativeUrl); switch ($route) { case static::PAGE__TAG: $tag = null; if (preg_match('/\/tag\/([^\/]*)/', $relativeUrl, $match)) { $tag = Moto\Database\ContentTaxonomyBlogTag::query()->where('slug', '=', $match[1])->first(); } if (!$tag) { break; } $settings = static::_getSettings(); $pageId = Moto\Util::getValue($settings, 'tag_template_id'); if (!$pageId) { break; } $template = $this->findPageById($pageId); if ($template) { $page = new Moto\Website\ContentTaxonomyPage(); $page->setTemplateEntity($template); $page->setContentEntity($tag); } break; case static::PAGE__CATEGORY: $category = null; if (preg_match('/\/category\/([^\/]*)/', $relativeUrl, $match)) { $category = Moto\Database\ContentTaxonomyBlogCategory::query()->where('slug', '=', $match[1])->first(); } if (!$category) { break; } $settings = static::_getSettings(); $pageId = Moto\Util::getValue($settings, 'category_template_id'); if (!$pageId) { break; } $template = $this->findPageById($pageId); if ($template) { $page = new Moto\Website\ContentTaxonomyPage(); $page->setTemplateEntity($template); $page->setContentEntity($category); } break; } if (!$page) { $page = parent::findPageByUrl($relativeUrl); } return $page; } protected static function _getResourceType($resource) { if ($resource instanceof Moto\Database\ContentTaxonomyBlogTag) { return static::PAGE__TAG; } if ($resource instanceof Moto\Database\ContentTaxonomyBlogCategory) { return static::PAGE__CATEGORY; } if ($resource instanceof Moto\Database\ContentTaxonomy) { return str_replace('blog.', '', $resource->type); } if ($resource instanceof Moto\Application\Pages\PageModel && $resource->type === 'blog.post') { return static::PAGE__POST; } return null; } public static function getInnerUrl($resource = null, $type = null) { $prefixUri = static::getGlobalPrefixUri(); $url = null; if ($resource === null) { $type = static::PAGE__INDEX; } elseif ($type === null) { $type = static::_getResourceType($resource); } switch ($type) { case static::PAGE__INDEX: $url = $prefixUri; break; case static::PAGE__POST: if (is_object($resource)) { $url = Moto\Website\Pages::getInnerUrl($resource->id); } else { $url = Moto\Website\Pages::getInnerUrl($resource); } break; case static::PAGE__TAG: if (!($resource instanceof Moto\Database\ContentTaxonomy)) { $resource = Moto\Database\ContentTaxonomyBlogTag::find($resource); } if ($resource) { $url = $prefixUri . '/' . static::PAGE__TAG . '/' . $resource->slug; } break; case static::PAGE__CATEGORY: if (!($resource instanceof Moto\Database\ContentTaxonomy)) { $resource = Moto\Database\ContentTaxonomyBlogCategory::find($resource); } if ($resource) { $url = $prefixUri . '/' . static::PAGE__CATEGORY . '/' . $resource->slug; } break; } return $url; } public static function getAbsoluteUrl($resource = null, $type = null) { $url = static::getInnerUrl($resource, $type); if (is_string($url)) { $url = Moto\System::getAbsoluteUrl($url); $url = Moto\ClickAction\Page::buildUrl($url); } return $url; } public static function getRelativeUrl($resource = null, $type = null) { $url = static::getInnerUrl($resource, $type); if (is_string($url)) { $url = Moto\System::getRelativeUrl($url); $url = Moto\ClickAction\Page::buildUrl($url); } return $url; } } 