<?php
namespace Moto\Application\Users; use Moto\InputFilter\AbstractInputFilter; use Moto; class ChangeUserRoleBulkFilter extends AbstractInputFilter { protected $_name = 'users.change:role_bulk'; public function init() { $this->add(array( 'name' => 'user_id', 'required' => true, )); $this->add(array( 'name' => 'role_id', 'required' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'Digits', 'break_chain_on_failure' => true, ), array( 'name' => 'Db_RecordExists', 'options' => array( 'table' => Moto\Config::get('database.prefix') . 'roles', 'field' => 'id', 'adapter' => Moto\Config::get('databaseAdapter') ) ) ), )); } }