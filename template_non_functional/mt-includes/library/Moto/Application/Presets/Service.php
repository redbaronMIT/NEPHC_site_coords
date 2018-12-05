<?php
namespace Moto\Application\Presets; use Moto\Json\Request; use Moto\Json\Server; use Moto\Json\Response; use Moto\Application\Presets\InputFilter; use Moto; class Service extends Moto\Service\AbstractStaticService { protected static $_resourceName = 'presets'; protected static $_resourcePrivilegesMap = array( 'getList' => 'get', 'getById' => 'get', ); public static function getList($request = null) { if (null === $request) $request = static::getRequest()->getParams(); $filter = new InputFilter\GetList(); $filter->setData($request); if (!$filter->isValid()) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, $filter->getMessagesKeys()); } $request = $filter->getValues(); $table = new PresetsTable(); $styles = $table->getList($request); if (!$styles) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_NOT_FOUND_MESSAGE, Moto\System\Exception::ERROR_NOT_FOUND_CODE); } $result = new Response\Collection($styles); return $result; } public function getById($id) { $id = (int)$id; $table = new PresetsTable(); $style = $table->getById($id); if (!$style) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_NOT_FOUND_MESSAGE, Moto\System\Exception::ERROR_NOT_FOUND_CODE); } return $style; } public static function save($request = null) { if (null === $request) $request = static::getRequest()->getParams(); $isNew = false; if (empty($request['id'])) { $isNew = true; } $filter = ($isNew ? new InputFilter\Create() : new InputFilter\Update()); $filter->setData($request); if (!$filter->isValid()) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, $filter->getMessagesKeys()); } $values = $filter->getValues(); $table = new PresetsTable(); $table->useResultAsModel(true); if ($isNew) { $preset = new PresetModel(); } else { $preset = $table->getById($values['id']); if (!$preset) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_NOT_FOUND_MESSAGE, Moto\System\Exception::ERROR_NOT_FOUND_CODE); } } $preset->setFromArray($values); $table->save($preset); Moto\System\Style::rebuildAll(); return $preset; } }