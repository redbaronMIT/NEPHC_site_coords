<?php
namespace Moto\Filter; use Moto\Application\Util\UniqueDuplicator; class Duplicate extends AbstractFilter { protected $_options = array( 'duplicator' => null ); public function __construct($options = array()) { parent::setOptions($options); } public function filter($value) { if (!is_string($value)) { return $value; } $duplicator = $this->getOption('duplicator'); return $duplicator->generate($value); } public function setDuplicator($value) { $this->_options['duplicator'] = new UniqueDuplicator($value); return $this; } public function getLastIndex() { $duplicator = $this->getOption('duplicator'); return $duplicator->getDuplicator()->getLastIndex(); } }