<?php
namespace Moto\Application\Profile; use Moto; use Moto\Json\Server; use Moto\Json\Request; use Moto\Json\Response; use Moto\Application\Users\UserTable; class Service extends Moto\Service\AbstractStaticService { protected static $_resourceName = 'profile'; public static function save($request = null) { $currentUser = static::_authenticate(); if (null === $request) $request = static::getRequest()->getParams(); $request['id'] = $currentUser->id; $filter = new SaveProfileFilter(); $filter->setData($request); if (!$filter->isValid()) { throw new Server\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, $filter->getMessagesKeys()); } $userTable = new UserTable(); $data = $filter->getValues(); $res = $userTable->updateUser($currentUser->id, $data); if ($res) { static::_updateIdentity(); } return $res; } public static function get() { $user = static::_authenticate(); $data = array( 'name' => $user->name, 'email' => $user->email, 'language_id' => $user->language_id, 'language_code' => $user->language_code, 'language_name' => $user->language_name, ); return $data; } public static function changePassword($request = null) { if (null === $request) $request = static::getRequest()->getParams(); $filter = new ChangePasswordFilter(); $filter->setData($request); if (!$filter->isValid()) { throw new Server\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, $filter->getMessagesKeys()); } $currentUser = static::_authenticate(); $userTable = new UserTable(); $userTable->useResultAsModel(1); $currentUser = $userTable->getUser($currentUser->id); $filteredValues = $filter->getValues(); if (!$currentUser->isValidPassword($filteredValues['old_password'])) { throw new Server\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, array('old_password' => array('MODULE.PROFILE.WRONG_PASSWORD_ERROR'))); } $currentUser->setPassword($filteredValues['new_password']); $res = $userTable->update($currentUser); if ($res) { static::_updateIdentity(); } return $res; } protected static function _authenticate() { $user = Moto\Authentication\Service::getUser(); if (!$user) { throw new Moto\Json\Server\Exception(Moto\System\Exception::ERROR_AUTHORIZATION_DATA_MESSAGE, Moto\System\Exception::ERROR_AUTHORIZATION_DATA_CODE); } return $user; } protected static function _updateIdentity() { $user = Moto\Authentication\Service::getUser(); $table = new UserTable(); $table->useResultAsModel(true); $user = $table->getUser($user->id); Moto\Authentication\Service::updateUser($user); } }