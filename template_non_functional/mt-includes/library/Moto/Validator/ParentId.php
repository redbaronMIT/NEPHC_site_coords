<?php
 namespace Moto\Validator; use Zend\Validator\Db; class ParentId extends Db\RecordExists { public function isValid($value, array $context = array()) { if ($value == 0) { return true; } $isValid = is_numeric($value); if ($isValid) { $isValid = parent::isValid($value, $context); } else { return false; } return $isValid; } }