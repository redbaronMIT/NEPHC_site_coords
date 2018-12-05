<?php
namespace Moto\System\Plugins; use Moto; class PluginItem { protected $_rawData; protected $_meta; protected $_path; public function __construct($rawData) { $this->_rawData = $rawData; $this->_meta = $rawData['meta']; $this->_path = $rawData['folder']; } public function getName() { return $this->_meta['name']; } public function getLabel() { return $this->_meta['label']; } public function getVersion() { return $this->_meta['version']; } public function getBuild() { return $this->_meta['build']; } final public function getPath() { return $this->_path; } final public function getAbsolutePath() { return Moto\System::getAbsolutePath($this->getPath()); } final public function getRelativePath() { return Moto\System::getRelativePath($this->getPath()); } final public function getAbsoluteUrl() { return Moto\System::getAbsoluteUrl($this->getPath()); } final public function getRelativeUrl() { return Moto\System::getRelativeUrl($this->getPath()); } public function metaGet($name, $default = null) { return Moto\Util::getValue($this->_meta, $name, $default); } public function metaHas($name) { return Moto\Util::arrayHas($this->_meta, $name); } public function isInstalled() { return Moto\System\PluginManager::isInstalled($this->getName()); } public function isActivated() { return Moto\System\PluginManager::isActivated($this->getName()); } public function toArray($keys = null) { $result = $this->_meta; $result['installed'] = $this->isInstalled(); $result['activated'] = $this->isActivated(); $result['path'] = $this->getPath(); if (is_string($keys) && $keys === '@default') { $keys = array( 'name', 'version', 'build', 'label', 'description_short', 'description_long', 'preview_small', 'preview_large', 'installed', 'activated', ); } if (!empty($keys)) { return Moto\Util::arrayOnly($result, $keys); } return $result; } } 