<?php
namespace Website\Widgets\Accordion; use Moto; class ItemWidget extends Moto\System\Widgets\AbstractContainerWidget { protected $_name = 'accordion.item'; protected static $_defaultProperties = array( 'header' => array( 'content' => '', 'icon' => null, ), ); protected $_templateType = 'templates'; protected $_templatePath = '@websiteWidgets/accordion/templates/item.twig.html'; protected $_widgetId = true; public function isOpenedByDefault() { return array_search($this, $this->_parent->children) === 0 && $this->_parent->properties['expandedFirstItem']; } } 