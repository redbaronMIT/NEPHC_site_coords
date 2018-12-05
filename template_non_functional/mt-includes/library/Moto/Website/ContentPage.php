<?php
namespace Moto\Website; use Moto; class ContentPage { protected $_title = array( 'format' => '', ); protected $_favicon = ''; protected $_headers = array(); protected $_body = ''; protected $_assets = array(); protected $_dependencies = array(); protected $_layout = ''; protected $_pageEntity; protected $_isPreview = false; protected $_isMainPage = false; protected $_isProtectedPage = false; protected $_isRenderingNow = false; protected $_canonicalUrl = null; protected $_contentEntity = null; protected $_templateEntity = null; protected $_renderEngine; public function __construct($page = null) { if ($page instanceof Moto\Application\Pages\PageModel) { $this->setPageEntity($page); } } public function setContentEntity($model) { $this->_contentEntity = $model; } public function getContentEntity() { return $this->_contentEntity; } public function setTemplateEntity($model) { $this->_templateEntity = $model; } public function getTemplateEntity() { return $this->_templateEntity; } public function setPageEntity(Moto\Application\Pages\PageModel $page) { $this->_pageEntity = $page; $template = $page; if ($page->isTemplate()) { $template = $page->getTemplate(); if (!$template) { $template = $page; } } $this->_canonicalUrl = ''; if (!$page->properties->meta->noindex && !$page->properties->meta->hideCanonical && !$page->isNotFoundPage()) { $this->_canonicalUrl = $page->getCanonicalUrl(); } $this->setTemplateEntity($template); $this->setContentEntity($page); return $this; } public function setRenderEngine($engine) { if ($engine instanceof \Twig_Environment) { $this->_renderEngine = $engine; return true; } return false; } public function getRenderEngine() { if (!$this->_renderEngine) { return Moto\Render::getInstance(); } return $this->_renderEngine; } public function setCanonicalUrl($url) { $this->_canonicalUrl = $url; } public function getCanonicalUrl() { return $this->_canonicalUrl; } public function addMetaTag($name, $content = null) { $meta = array(); if (is_array($name)) { $meta = $name; } } public function isPreviewMode() { return (Moto\System\Request::getQuery('mode') === 'preview'); } public function doPreRenderPage($data = array()) { $twig = $this->getRenderEngine(); $twig->addGlobal('isPreRender', true); $this->_doPreRenderSection($this->_templateEntity, $data); $this->_doPreRenderPageSections($data); $twig->addGlobal('isPreRender', false); } public function doPreRenderSection($section, $data = array()) { $twig = $this->getRenderEngine(); $twig->addGlobal('isPreRender', true); $this->_doPreRenderSection($section, $data); $twig->addGlobal('isPreRender', false); } protected function _doPreRenderPageSections($data = array()) { $pageSections = Moto\Util::getValue($this->_templateEntity, 'layout.sections'); if (empty($pageSections) || (!is_array($pageSections) && !is_object($pageSections))) { $this->_doPreRenderSectionByName('header', $data); $this->_doPreRenderSectionByName('footer', $data); return true; } foreach ($pageSections as $sectionName => $section) { $this->_doPreRenderSectionByName($sectionName, $data); } return true; } protected function _doPreRenderSectionByName($name, $data = array()) { $section = $this->_templateEntity->getSection($name); if (!$section) { return true; } return $this->_doPreRenderSection($section, $data); } protected function _doPreRenderSection($section, $data = array()) { if (!$section || !is_object($section)) { return true; } $isPreview = $this->isPreviewMode(); if (($isPreview && !empty($section->content_data)) || empty($section->content)) { $contentHelper = new Moto\Website\PageSectionContent($section); $t0 = microtime(1); $mode = 'v4'; if ($mode === 'v1') { Moto\System\Widgets\Factory::addToCache($contentHelper->getWidgets()); if (Moto\System::isDevelopmentStage()) { Moto\System\Log::debug('ContentPage:PreRenderSection.v1 done by ' . (microtime(1) - $t0)); } } if ($mode === 'v2') { $section->content = $contentHelper->toTemplate(!$isPreview); if (Moto\System::isDevelopmentStage()) { Moto\System\Log::debug('ContentPage:PreRenderSection.v2 done by ' . (microtime(1) - $t0)); } return true; } if ($mode === 'v3') { $section->content = $contentHelper->toWidgetSection(); if (Moto\System::isDevelopmentStage()) { Moto\System\Log::debug('ContentPage:PreRenderSection.v3 done by ' . (microtime(1) - $t0)); } return; } if ($mode === 'v4') { $section->content = $contentHelper->getRawSection(); Moto\System\Widgets\Factory::addToCache($contentHelper->getWidgets()); if (Moto\System::isDevelopmentStage()) { Moto\System\Log::debug('ContentPage:PreRenderSection.v4 done by ' . (microtime(1) - $t0)); } return; } } if (is_string($section->content) && (strlen($section->content) > 1) && $section->content[0] == '{' && $section->content[1] !== '{') { $section->content = json_decode($section->content, true); } if (is_array($section->content)) { $twig = $this->getRenderEngine(); if (Moto\System::isDevelopmentStage()) { Moto\System\Log::debug('@ContentPage.PreRender: array to string "' . $section->name . '" [ ' . $section->id . ' ] ' . get_class($section)); } $section->content = Moto\System\Widgets\Factory::preRender($twig, 'section', $section->content, $data); } else { if (Moto\System::isDevelopmentStage()) { Moto\System\Log::debug('@ContentPage.PreRender: already string "' . $section->name . '" [ ' . $section->id . ' ] ' . get_class($section)); } } return true; } public function getSeoHtml() { return $this->_generateSeoHtml($this->properties); } protected function _generateSeoHtml($properties) { $result = ''; $settings = array('keywords', 'description', 'robots'); foreach ($settings as $key) { $value = Moto\Util::getValue($properties, 'meta.' . $key); if ($value) { $result .= "\n<meta name=\"" . $key . "\" content=\"" . htmlentities($value, ENT_COMPAT, 'UTF-8') . "\" />"; } } $canonicalUrl = trim((string) $this->getCanonicalUrl()); if ($canonicalUrl !== '' && !$properties->meta->noindex && !$properties->meta->hideCanonical && !$this->isNotFoundPage()) { $result .= "\n<link rel=\"canonical\" href=\"" . $this->getCanonicalUrl() . "\" />"; } return $result; } public function getLayoutTemplatePath() { $page = $this->_templateEntity; if (!$page) { return '@layoutTemplates/default/index.html.twig'; } if ($page->type === 'page') { $layoutPath = '@layoutTemplates/' . $page->layout->name . '/index.html.twig'; } else { $layoutPath = '@layoutTemplates/' . str_replace('.', '/', $page->type) . '.html.twig'; } return $layoutPath; } public function __isset($name) { if (!$this->_pageEntity) { Moto\System\Log::debug("Try to check \"{$name}\" on not existed entity"); return null; } return isset($this->_pageEntity->{$name}); } public function __get($name) { if (!$this->_pageEntity) { Moto\System\Log::debug("Try to retrieve \"{$name}\" on not existed entity"); return null; } $method = 'get' . Moto\Util::toStudlyCase($name) . 'Value'; if (method_exists($this, $method)) { return $this->{$method}(); } return $this->_pageEntity->{$name}; } public function __call($name, $arguments) { if (!$this->_pageEntity) { Moto\System\Log::debug("Try to call \"{$name}\" on not existed entity"); return null; } try { return call_user_func_array(array($this->_pageEntity, $name), $arguments); } catch (\Exception $e) { if (Moto\System::isDevelopmentStage()) { throw $e; } return null; } } }