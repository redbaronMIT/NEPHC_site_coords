<?php
namespace Moto\Application\FileManager\InputFilter; use Moto\InputFilter\AbstractInputFilter; class Delete extends AbstractInputFilter { protected $_name = 'fileManager.delete'; public function init() { $this->add(array( 'name' => 'path', 'required' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), array('name' => 'Moto\Filter\RelativePath'), array('name' => 'Moto\Application\FileManager\Filter\UploadsDir') ), 'validators' => array( array( 'name' => 'StringLength', 'options' => array( 'encoding' => 'UTF-8', 'min' => 1, 'max' => 300, ), 'break_chain_on_failure' => true ), array( 'name' => 'Moto\Application\FileManager\Validator\PathExists', 'break_chain_on_failure' => true ), array( 'name' => 'Moto\Application\FileManager\Validator\EmptyDir', ), ), )); } } 