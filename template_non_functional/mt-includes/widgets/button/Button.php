<?php
namespace Moto\Widgets\Button; use Website; use Moto; class Button extends Website\Widgets\Button\Widget { public function init() { Moto\System\Log::notice('DEPRECATED_FILE', array( 'class' => __CLASS__, 'file' => __FILE__ )); parent::init(); } }