<?php
namespace Moto\Application\Settings; use Moto\InputFilter\AbstractInputFilter; use Moto; class SaveWebsiteSettingsFilter extends AbstractInputFilter { protected $_name = 'settingsWebsite.save'; public function init() { $this->add(array( 'name' => 'title', 'required' => false, 'allow_empty' => false, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'NotEmpty', 'break_chain_on_failure' => true ), array( 'name' => 'StringLength', 'options' => array( 'encoding' => 'UTF-8', 'min' => 1, 'max' => 200, ), ), ), )); $this->add(array( 'name' => 'address', 'required' => false, 'allow_empty' => false, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), array( 'name' => 'Moto\Filter\UriNormalize', 'options' => array( 'removeFragment' => true ) ), ), 'validators' => array( array( 'name' => 'StringLength', 'options' => array( 'encoding' => 'UTF-8', 'min' => 1, 'max' => 200, ), 'break_chain_on_failure' => true ), array( 'name' => 'Uri', 'options' => array( 'allowAbsolute' => true, 'allowRelative' => false, ), ) ), )); $this->add(array( 'name' => 'language_id', 'allow_empty' => false, 'required' => false, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'Digits', 'break_chain_on_failure' => true ), array( 'name' => 'Db\RecordExists', 'options' => array( 'table' => Moto\Config::get('database.prefix') . 'languages', 'field' => 'id', 'adapter' => Moto\Config::get('databaseAdapter') ) ) ), )); $this->add(array( 'name' => 'main_page', 'required' => false, 'allow_empty' => false, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim') ), 'validators' => array( array( 'name' => 'Digits', 'break_chain_on_failure' => true ), array( 'name' => 'Db\RecordExists', 'options' => array( 'table' => Moto\Config::get('database.prefix') . 'pages', 'field' => 'id', 'adapter' => Moto\Config::get('databaseAdapter') ) ) ), )); } } 