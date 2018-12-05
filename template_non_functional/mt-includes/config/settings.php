<?php
defined('MOTO_ENGINE') or die;
define('MOTO_INSTALLED', true);

if (!isset($config))
    $config = array();

/* USER_SETTINGS:START */
$config["database"]["hostname"] = base64_decode('bG9jYWxob3N0');
$config["database"]["username"] = base64_decode('bmVwaGM=');
$config["database"]["database"] = base64_decode('d3B0ZW1wbGF0ZQ==');
$config["database"]["password"] = base64_decode('bmVwaGM=');
$config["database"]["prefix"] = base64_decode('');

/* USER_SETTINGS:END */

return $config;
