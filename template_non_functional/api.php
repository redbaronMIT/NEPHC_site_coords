<?php
error_reporting(E_ALL); @ini_set('display_errors', 'off'); @ini_set('log_errors', 'on'); require_once __DIR__ . '/common.php'; $server = Moto\Json\Server::getInstance(); $server->assignClass('Website\Widgets\ContactForm\Service', 'Widget.ContactForm'); $server->setReturnResponse(true); $response = $server->handle(); echo $response; 