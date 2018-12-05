<?php
namespace Moto\Application\Support; use Moto; class Service extends Moto\Service\AbstractStaticService { protected static $_resourceName = 'support'; public static function sendFeedback($request = null) { if (null === $request) { $request = static::getRequest()->getParams(); } $brand = Moto\System\Brand::getInstance(); $user = Moto\System::getUser(); $recipientEmail = trim($brand->getOption('support_feedback_recipient_email')); if (!$user || !$brand->isEnabled('cp_support_feedback') || empty($recipientEmail)) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_ACCESS_DENIED_MESSAGE, Moto\System\Exception::ERROR_ACCESS_DENIED_CODE); } $filter = new Moto\Application\Support\InputFilter\SendFeedBack(); $filter->setData($request); if (!$filter->isValid()) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_BAD_REQUEST_MESSAGE, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, $filter->getMessagesKeys()); } $values = $filter->getValues(); $params = array(); $params['to']['email'] = $recipientEmail; $params['from']['email'] = $user->email; $params['mailName'] = 'feedbackForm'; $params['subject'] = $values['subject']; $params['body'] = $values['body']; $result = false; try { $result = Moto\Application\Util\Mailer::sendMail($params); } catch (\Exception $e) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_MAIL_NOT_SENT, Moto\System\Exception::ERROR_BAD_REQUEST_CODE, array('mailer' => array($e->getMessage()))); } return $result; } }