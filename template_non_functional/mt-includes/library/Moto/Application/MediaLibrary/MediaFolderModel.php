<?php
namespace Moto\Application\MediaLibrary; use Moto\Application\Model\AbstractModel; class MediaFolderModel extends AbstractModel { protected $_fields = array( 'id' => array(), 'name' => array(), 'parent_id' => array( 'default' => 0 ), 'order' => array( 'default' => 0 ), 'modified' => array(), 'created' => array(), 'del' => array( 'default' => 0 ), ); public function __construct() { parent::__construct(); $this->created = date('Y-m-d H:i:s'); $this->modified = $this->created; } public function setName($name = '') { if (is_string($name)) { $this->name = $name; } } }