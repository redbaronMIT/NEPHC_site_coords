<?php
namespace Moto\Filter; use Moto; class BodyContent extends AbstractFilter { public function filter($value) { $value = trim($value); $_value = Moto\Application\Content\Util::checkLinkerContent($value); if ($_value !== $value) { Moto\System\Log::info('Filter.BodyContent : detected Linker'); } return $_value; } } 