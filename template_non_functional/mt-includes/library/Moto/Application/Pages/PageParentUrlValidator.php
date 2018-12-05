<?php
namespace Moto\Application\Pages; use Zend\Validator\Db; class PageParentUrlValidator extends Db\NoRecordExists { protected $options = array( 'parent_field' => 'parent_id', 'parent_default_value' => 0, ); protected $_context = array(); public function getSelect() { $select = parent::getSelect(); $field = $this->getOption('parent_field'); if (!isset($this->_context[$field])) { $this->_context[$field] = $this->getOption('parent_default_value'); } $where = array( $field => (int)$this->_context[$field] ); $select->where($where); return $select; } public function isValid($value, array $context = array()) { $this->_context = $context; return parent::isValid($value, $context); } }