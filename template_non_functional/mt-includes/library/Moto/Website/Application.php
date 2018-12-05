<?php
namespace Moto\Website; use Moto; use Website; use Zend; class Application { protected $_name = 'website'; protected static $_instance = null; public static $currentContentBlock = null; protected $_renderEngine = null; protected $_response; public function __construct() { $this->init(); } protected function init() { if ($this->isPreviewMode() && !Moto\Website\Settings::get('custom_code_execution', true)) { return; } if (!Moto\Features::isEnabled('engine_code_injection', true)) { return; } Moto\Hook::on(array(Moto\Hook::RENDER_WEBSITE_HEAD_BOTTOM, Moto\Hook::RENDER_WEBSITE_BODY_BOTTOM), function ($event, $value) { $eventName = $event->getName(); switch ($eventName) { case Moto\Hook::RENDER_WEBSITE_HEAD_BOTTOM: $code = trim(Moto\Website\Settings::get('custom_code_header')); break; case Moto\Hook::RENDER_WEBSITE_BODY_BOTTOM: $code = trim(Moto\Website\Settings::get('custom_code_footer')); break; } if (!empty($code)) { $code = "\n<!-- $eventName -->\n$code\n<!-- /$eventName -->\n"; $value .= $code; } return $value; }); } public static function getInstance() { if (null === static::$_instance) { static::$_instance = new static(); } return static::$_instance; } public function getUser() { return Moto\Authentication\Service::getUser(); } public function getRenderEngine() { if (null == $this->_renderEngine) { $twig = Moto\Render::getInstance(); $function = new \Twig_SimpleFunction('arrayToAttributes', function (\Twig_Environment $twig, $attributes, $options = array(), $context = array()) { $result = ''; if (!is_array($attributes) && !is_object($attributes)) { return ''; } foreach ($attributes as $name => $value) { if (is_array($value) || is_object($value)) { $value = json_encode($value); } $result .= ' ' . $name . '="' . twig_escape_filter($twig, $value) . '"'; } return $result; }, array('is_safe' => array('html'), 'needs_environment' => true)); $twig->addFunction($function); $twig->addGlobal('isPreview', $this->isPreviewMode()); $this->_renderEngine = $twig; } return $this->_renderEngine; } public function isPreviewMode() { return (Moto\System\Request::getQuery('mode') === 'preview'); } public function isShowDraft() { return Moto\Authentication\Service::isAuthenticated(); } public function findPageByUrl($relativeUrl) { $pageTable = Moto\System::getDbTable('pages'); if ($relativeUrl === '/') { $page = Moto\Application\Pages\Service::getMainPage(); } else { $page = $pageTable->getByUrl($relativeUrl); } return $page; } public function findPageById($id) { $id = (int) $id; if ($id > 0) { $page = Moto\Application\Pages\Service::getById($id); } else { $page = Moto\Application\Pages\Service::getMainPage(); } return $page; } public function isAllowViewPage($page, $user) { $showDraft = $this->isShowDraft(); $isPreview = $this->isPreviewMode(); if (!$page) { return false; } $pageId = (int) $page->id; if (!$page->isPublished() && !$showDraft) { return false; } if ($page->isPublished() && $page->isPublicationDateInFuture() && !$isPreview) { return false; } if ($page->isTemplate() && !$user) { return false; } $protectedPageId = (int) Moto\Website\Settings::get('password_protected_page_id'); if ($pageId === $protectedPageId && !$user) { return false; } if (!Moto\Features::isEnabled('engine_pages_unlimited_mode') && ($pageId === $protectedPageId || $page->type === 'blog.index' || $page->type === 'blog.post')) { return false; } $underConstruction = Moto\Website\Settings::get('under_construction'); if ($pageId === (int) Moto\Util::getValue($underConstruction, 'page_id') && !$user) { return false; } return true; } public function getPage($url = null) { $isPreview = $this->isPreviewMode(); $user = Moto\System::getUser(); $isNotFoundPage = false; try { $url = (string) Moto\System\Request::getRequestUrl(); if ($url === '') { $url = '/'; } else { $url = '/' . ltrim($url, '/'); $url = rtrim($url, '/') . '/'; } $underConstruction = Moto\Website\Settings::get('under_construction'); if (is_object($underConstruction) && isset($underConstruction->page_id)) { if (isset($underConstruction->enabled) && !$isPreview && !$user && $underConstruction->enabled) { $this->getResponse()->setStatusCode(503); $page = Moto\Application\Pages\Service::getById($underConstruction->page_id); if ($page) { return $page; } } } if ($isPreview) { $page = $this->findPageById(Moto\System\Request::getQuery('page_id')); } else { $page = $this->findPageByUrl($url); } if (!$this->isAllowViewPage($page, $user)) { $page = null; } $protectedPageId = Moto\Website\Settings::get('password_protected_page_id'); if ($page && !$isPreview && !$page->isAllowViewContent($user)) { $protectedPage = $page; if ($protectedPageId) { $page = Moto\Application\Pages\Service::getById($protectedPageId); if ($page) { $page->title = $protectedPage->title; $this->getRenderEngine()->addGlobal('protectedPage', $protectedPage); $this->getResponse()->setStatusCode(403); } } else { $page = null; } } if (!$page) { $this->getResponse()->notFound(); $isNotFoundPage = true; $notFoundPageId = Moto\Website\Settings::get('notfound_page_id'); if ($notFoundPageId) { $page = Moto\Application\Pages\Service::getById($notFoundPageId); } } if (!$page) { throw new Moto\Json\Server\Exception(Moto\System\Exception::ERROR_NOT_FOUND_MESSAGE, Moto\System\Exception::ERROR_NOT_FOUND_CODE); } } catch (Moto\Json\Server\Exception $e) { if ($isNotFoundPage || $e->getMessage() == Moto\System\Exception::ERROR_NOT_FOUND_MESSAGE) { header((empty($_SERVER['SERVER_PROTOCOL']) ? 'HTTP/1.0' : $_SERVER['SERVER_PROTOCOL']) . ' 404 Not Found'); header('Status: 404 Not Found'); } die('Page Not Found.'); } catch (\Exception $e) { if ($isNotFoundPage) { header((empty($_SERVER['SERVER_PROTOCOL']) ? 'HTTP/1.0' : $_SERVER['SERVER_PROTOCOL']) . ' 404 Not Found'); header('Status: 404 Not Found'); } throw $e; } return $page; } public function getResponse() { if (null === $this->_response) { $this->_response = Moto\System::getResponse(); } return $this->_response; } public function getContentBlock($id = null) { if ($id === null) { $id = Moto\System\Request::getParam('id'); } $id = (int) $id; if ($id < 1) { Moto\System\Log::debug('Bad popup id', array( 'id' => $id, )); return null; } $popup = null; try { $popup = Moto\Application\Content\Service::getById($id); } catch (\Exception $e) { Moto\System\Log::debug('Popup not found', array( 'id' => $id, )); } return $popup; } protected function _previewPopup() { $response = $this->getResponse(); $twig = $this->getRenderEngine(); Moto\ClickAction\AbstractClickAction::setUsingPermalinks(Moto\Website\Settings::get('permalinks')); Moto\ClickAction\AbstractClickAction::setUsingHtmlSuffix(Moto\Website\Settings::get('suffix')); $contentBlock = $this->getContentBlock(); if (!$contentBlock) { $response->setContent('Popup not found'); return $response; } if (!self::$currentContentBlock) { self::$currentContentBlock = $contentBlock; } $layoutPath = '@mainTemplates/popup/preview.html.twig'; $pageTemplate = $twig->loadTemplate($layoutPath); $data = array(); $twig->addGlobal('currentContentBlock', $contentBlock); if (class_exists('Moto\Website\ContentBlock')) { $contentPopup = new Moto\Website\ContentBlock($contentBlock); $data['currentContentBlock'] = $contentPopup; } $response->setContent($pageTemplate->render($data)); return $response; } public function handle() { if (Moto\System::getUser() && Moto\System\Request::getParam('mode') === 'preview' && Moto\System\Request::getParam('workspace') === 'content' && Moto\System\Request::getParam('type') === 'popup') { return $this->_previewPopup(); } $response = $this->getResponse(); $twig = $this->getRenderEngine(); Moto\ClickAction\AbstractClickAction::setUsingPermalinks(Moto\Website\Settings::get('permalinks')); Moto\ClickAction\AbstractClickAction::setUsingHtmlSuffix(Moto\Website\Settings::get('suffix')); Moto\Config::set('twig', $twig); $page = $this->getPage(); $contentPage = $this->_sanitizeContentPage($page); if ($this->isPreviewMode()) { $contentPage->setLayoutByName(Moto\System\Request::getQuery('layout')); $sections = Moto\System\Request::getParam('sections'); if (!empty($sections) && $sections) { if ($sections[0] !== '{') { $sections = base64_decode($sections); } $sections = json_decode($sections); $contentPage->setLayoutSectionSettings($sections); } } $data = array( 'page' => $contentPage ); $twig->addGlobal('currentPage', $contentPage); $contentPage->setRenderEngine($twig); $contentPage->doPreRenderPage($data); $data['header'] = $contentPage->getSection('header'); $data['footer'] = $contentPage->getSection('footer'); $layoutPath = $contentPage->getLayoutTemplatePath(); try { $pageTemplate = $twig->loadTemplate($layoutPath); } catch (\Twig_Error_Loader $e) { if (!$this->isPreviewMode()) { Moto\System\Log::debug('Cant load layout template "' . $layoutPath . '"'); } $layoutPath = '@layoutTemplates/default/index.html.twig'; $pageTemplate = $twig->loadTemplate($layoutPath); } $response->setContent($pageTemplate->render($data)); return $response; } protected function _sanitizeContentPage($page) { if ($page instanceof Moto\Website\ContentPage) { return $page; } return new Moto\Website\ContentPage($page); } } 