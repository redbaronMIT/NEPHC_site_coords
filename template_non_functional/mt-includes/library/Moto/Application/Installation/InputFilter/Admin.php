<?php
namespace Moto\Application\Installation\InputFilter; use Moto\Application\Users; class Admin extends Users\NewUserFilter { public function init() { parent::init(); $this->remove('role_id'); $this->remove('language_id'); $this->remove('send_email'); } protected function _addElementEmail() { $this->add(array( 'name' => 'email', 'required' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'EmailAddress', 'options' => array( 'useMxCheck' => false, 'useDeepMxCheck' => false, 'useDomainCheck' => false, ), ) ), )); } }