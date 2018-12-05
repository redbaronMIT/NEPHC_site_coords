<?php
namespace Moto\Application\Theme\InputFilter; use Moto; class UpdateGridOption extends Moto\InputFilter\AbstractInputFilter { protected $_name = 'theme.UpdateGridOption'; public function init() { $this->add(array( 'name' => 'gutter-width', 'required' => false, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), array( 'name' => 'Moto\Filter\DefaultFilter', 'options' => array( 'value' => '30px' ) ), ), 'validators' => array( array( 'name' => 'InArray', 'options' => array( 'haystack' => array('60px', '50px', '40px', '30px', '20px', '10px') ) ), ), )); if (Moto\Features::isEnabled('theme_grid_fixed_row_width')) { $this->add(array( 'name' => 'fixed-row-width', 'required' => true, 'filters' => array( array('name' => 'StripTags'), array('name' => 'StringTrim'), ), 'validators' => array( array( 'name' => 'InArray', 'options' => array( 'haystack' => array('980px', '1024px', '1200px', '1300px', '1600px', '1920px') ) ), ), )); } } }