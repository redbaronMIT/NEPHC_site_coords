<?php
require_once __DIR__ . '/common.php'; $twig = Moto\Render::getInstance('admin'); $user = Moto\Authentication\Service::getUser(); $twig->addGlobal('config', Moto\Config::getPublic()); $twig->addGlobal('BRAND', Moto\System\Brand::getInstance()); $twig->addGlobal('SYSTEM', Moto\System\Settings::get()); $twig->addGlobal('user', $user); if ($user) { $template = $twig->loadTemplate('application/index.html'); } else { $template = $twig->loadTemplate('application/guest.html'); } echo $template->render(array()); 