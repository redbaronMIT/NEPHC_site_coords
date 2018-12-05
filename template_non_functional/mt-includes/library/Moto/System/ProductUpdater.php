<?php
namespace Moto\System; use Moto; use Zend; use InvalidArgumentException; class ProductUpdater { const VERSION = '1'; const MESSAGE_DELIMITER = '@'; const MESSAGE_SUBJECT_UPDATE_INFORMATION = 'UpdateProductInformation'; const BASE_API_URL = 'http://accounts.cms-guide.com/panel'; const ERROR_PRODUCT_IS_NOT_ACTIVATED_MESSAGE = 'ERROR.PRODUCT_IS_NOT_ACTIVATED'; const ERROR_NETWORK_MESSAGE = 'ERROR.NETWORK'; const ERROR_DEFAULT_CODE = 403; protected $_curlDefaultOptions = array( CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_0, CURLOPT_HEADER => 0, CURLOPT_RETURNTRANSFER => true, CURLOPT_CONNECTTIMEOUT => 15, CURLOPT_TIMEOUT => 25 ); protected $_responseSign = null; protected $_remote_ip = null; public function __construct() { $this->_init(); } protected function _init() { if (!Moto\System::isDevelopmentStage()) { return; } } public function syncInformation($user) { $debug = false; if ($debug) { Moto\System\Log::debug(__CLASS__ . '::' . __FUNCTION__ . ': START'); } if (!is_object($user)) { Moto\System\Log::error('[ ' . get_class() . ' ] : Invalid argument "user"'); throw new InvalidArgumentException('Invalid argument "user"'); } $this->_checkDependency(); $message = $this->_createMessage($user, static::MESSAGE_SUBJECT_UPDATE_INFORMATION); if ($debug) { Moto\System\Log::debug(__CLASS__ . '::' . __FUNCTION__ . ': Open message : ' . print_r($message, true)); } $encryptedMessage = $this->_encryptMessage($message); if ($debug) { Moto\System\Log::debug(__CLASS__ . '::' . __FUNCTION__ . ': Encrypted message : ' . print_r($encryptedMessage, true)); } $messageResponse = $this->_sendMessage($encryptedMessage); if ($debug) { Moto\System\Log::debug(__CLASS__ . '::' . __FUNCTION__ . ': Message Response : ' . print_r($messageResponse, true)); } $response = $messageResponse; if ($this->_isEncryptedResponse($messageResponse)) { $response = $this->_decryptMessageResponse($messageResponse); } else { $response = json_decode($response, true); } if ($debug) { Moto\System\Log::debug(__CLASS__ . '::' . __FUNCTION__ . ': Response was encrypted ? ' . var_export($this->_isEncryptedResponse($messageResponse), true)); Moto\System\Log::debug(__CLASS__ . '::' . __FUNCTION__ . ': Response : ' . print_r($response, true)); } $this->_validateResponse($response); $this->_processResponse($response); if ($debug) { Moto\System\Log::debug(__CLASS__ . '::' . __FUNCTION__ . ': DONE'); } return true; } protected function _isEncryptedResponse($response) { return (boolean) preg_match('/^([^@]+)\@/', (string) $response); } protected function _validateResponse($response) { if (!is_array($response)) { throw new Moto\System\Exception(static::ERROR_PRODUCT_IS_NOT_ACTIVATED_MESSAGE, static::ERROR_DEFAULT_CODE, array('key' => 'ERROR.WRONG_RESPONSE_FORMAT', 'error' => 'Invalid Api Response', 'info' => $this->_getShortProductInfo())); } $this->_remote_ip = Moto\Util::getValue($response, 'ip'); if (!Moto\Util::getValue($response, 'status')) { throw new Moto\System\Exception(static::ERROR_PRODUCT_IS_NOT_ACTIVATED_MESSAGE, static::ERROR_DEFAULT_CODE, array('key' => 'ERROR.AUTHORIZATION_FAILED', 'error' => implode(';', Moto\Util::getValue($response, 'errors', array())), 'info' => $this->_getShortProductInfo())); } } protected function _processResponse($response) { Moto\System\ProductInformation::update(Moto\Util::getValue($response, 'data.productInfo')); } protected function _getResponseSign() { if ($this->_responseSign === null) { $this->_responseSign = Moto\Util::generateRandomBytes(16); } return $this->_responseSign; } protected function _createMessage($user, $subject) { $message = array( 'timestamp' => time(), 'response_sign' => base64_encode($this->_getResponseSign()), 'token' => Moto\System\ProductInformation::get('token'), 'sender' => array( 'product_id' => Moto\System\ProductInformation::getProductId(), 'brand' => Moto\System\Brand::getInstance()->getName(), 'host' => $this->getUserHost(), 'user' => Moto\Util::arrayOnly(($user instanceof Moto\Application\Users\UserModel) ? $user->toArray() : (array) $user, array('email', 'name', 'role_id', 'language_locale',)), 'remote_ip' => $this->getRemoteIp(), 'user_agent' => Moto\Util::getValue($_SERVER, 'HTTP_USER_AGENT'), 'website' => array( 'address' => Moto\Website\Settings::get('address'), 'language_code' => Moto\Website\Settings::get('language_code'), 'theme' => Moto\Website\Settings::get('theme'), 'timezone' => Moto\Website\Settings::get('timezone'), 'version' => Moto\System\Settings::get('version'), 'build' => Moto\System\Settings::get('build'), 'engine' => Moto\System\Settings::get('engine'), ), ), 'subject' => $subject, 'env' => array( 'php' => array( 'PHP_VERSION_ID' => defined('PHP_VERSION_ID') ? PHP_VERSION_ID : null, 'PHP_VERSION' => defined('PHP_VERSION') ? PHP_VERSION : null, 'PHP_OS' => defined('PHP_OS') ? PHP_OS : null, ), 'mysql' => Moto\Util::arrayOnly(Moto\System::getDatabaseInformation(), array('driverName', 'serverVersion')), ), ); return $message; } protected function _encryptMessage($rawMessage) { $sign = Moto\System\ProductInformation::get('request_sign'); if (empty($sign)) { throw new Moto\System\Exception(static::ERROR_PRODUCT_IS_NOT_ACTIVATED_MESSAGE, static::ERROR_DEFAULT_CODE, array('key' => 'ERROR.COULDNOT_ENCRYPT_SOURCE', 'info' => $this->_getShortProductInfo())); } $message = Moto\System\Encryption::encrypt($rawMessage, Moto\System\Encryption::METHOD_JSON, $sign); if (empty($message)) { throw new Moto\System\Exception(static::ERROR_PRODUCT_IS_NOT_ACTIVATED_MESSAGE, static::ERROR_DEFAULT_CODE, array('key' => 'ERROR.COULDNOT_ENCRYPT_SOURCE', 'info' => $this->_getShortProductInfo())); } $message = Moto\System\ProductInformation::getProductId() . static::MESSAGE_DELIMITER . $message; return $message; } protected function _decryptMessageResponse($encryptedResponse) { $response = null; try { $response = Moto\System\Encryption::decrypt($encryptedResponse, Moto\System\Encryption::METHOD_JSON, $this->_getResponseSign()); } catch (\Exception $e) { throw new Moto\System\Exception(static::ERROR_PRODUCT_IS_NOT_ACTIVATED_MESSAGE, static::ERROR_DEFAULT_CODE, array('key' => 'ERROR.UNABLE_DECRYPT_REPSONSE', 'error' => $e->getMessage(), 'info' => $this->_getShortProductInfo())); } if (empty($response)) { throw new Moto\System\Exception(static::ERROR_PRODUCT_IS_NOT_ACTIVATED_MESSAGE, static::ERROR_DEFAULT_CODE, array('key' => 'ERROR.REPSONSE_PARSE_ERROR', 'error' => 'Response is empty', 'info' => $this->_getShortProductInfo())); } return $response; } protected function _getApiUrl($action) { $url = static::BASE_API_URL; if (Moto\System::isDevelopmentStage()) { $url = Moto\Config::get('api.productBaseUrl', $url); } return $url . '/' . $action; } protected function _sendMessage($message) { $url = $this->_getApiUrl('sync'); $message = urlencode($message); $ch = curl_init(); curl_setopt_array($ch, $this->_curlDefaultOptions); curl_setopt($ch, CURLOPT_POST, true); curl_setopt($ch, CURLOPT_HEADER, true); curl_setopt($ch, CURLOPT_POSTFIELDS, 'message=' . $message); curl_setopt($ch, CURLOPT_USERAGENT, 'PhpAgent/' . static::VERSION . '/' . PHP_VERSION); curl_setopt($ch, CURLOPT_URL, $url); if (Moto\System::isDevelopmentStage() && Moto\Config::get('proxy.enabled')) { curl_setopt($ch, CURLOPT_PROXY, Moto\Config::get('proxy.host') . ':' . Moto\Config::get('proxy.port')); } $rawResponse = curl_exec($ch); $error = null; $info = curl_getinfo($ch); $httpCode = (int) Moto\Util::getValue($info, 'http_code', 0); if (curl_errno($ch)) { $error = array( 'number' => curl_errno($ch), 'description' => curl_error($ch), ); } else { if ($httpCode !== 200) { $httResponse = new Zend\Http\Response(); $httResponse->setCustomStatusCode($httpCode); $error = array( 'number' => $httpCode, 'description' => $httResponse->getReasonPhrase(), ); } } curl_close($ch); if ($error) { throw new Moto\System\Exception(static::ERROR_NETWORK_MESSAGE, static::ERROR_DEFAULT_CODE, array('info' => $this->_getShortProductInfo(), 'curl' => $error)); } $httResponse = null; try { $httResponse = Zend\Http\Response::fromString($rawResponse); } catch (\Exception $e) { $this->_validateHttpResponse(false); } $responseBody = trim($httResponse->getBody()); $this->_validateHttpResponse($responseBody); return $responseBody; } protected function _validateHttpResponse($response) { $isValid = (is_string($response) && strlen($response) > 10); if ($isValid) { $isValid = ($response[0] === '{' || $this->_isEncryptedResponse($response)); } if (!$isValid) { throw new Moto\System\Exception(static::ERROR_PRODUCT_IS_NOT_ACTIVATED_MESSAGE, static::ERROR_DEFAULT_CODE, array('key' => 'ERROR.WRONG_RESPONSE_FORMAT', 'error' => 'Invalid HTTP Response', 'info' => $this->_getShortProductInfo())); } } protected function _getShortProductInfo() { return array( 'ip' => $this->getRemoteIp(), 'domain' => $this->getUserHost(), 'product_id' => Moto\System\ProductInformation::getProductId(), ); } protected function _checkDependency() { $dependency = array(); if (!extension_loaded('curl') || !function_exists('curl_init') || !function_exists('curl_setopt') || !function_exists('curl_exec') || !function_exists('curl_close') || !function_exists('curl_errno') || !function_exists('curl_error') ) { $dependency[] = 'curl'; } if (!extension_loaded('openssl') || !function_exists('openssl_cipher_iv_length') || !function_exists('openssl_encrypt') || !function_exists('openssl_decrypt') ) { $dependency[] = 'openssl'; } if (count($dependency) !== 0) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_EXTENSION_NOT_EXISTS_MESSAGE, Moto\System\Exception::ERROR_EXTENSION_NOT_EXISTS_CODE, $dependency); } if (!Moto\System\ProductInformation::isReady()) { throw new Moto\System\Exception(Moto\System\Exception::ERROR_EXTENSION_NOT_EXISTS_MESSAGE, Moto\System\Exception::ERROR_EXTENSION_NOT_EXISTS_CODE, '@PRODUCT_INFO'); } return true; } public function getUserHost() { $host = Moto\Util::getValue($_SERVER, 'SERVER_NAME', Moto\Util::getValue($_SERVER, 'HTTP_HOST', '')); $host = trim($host); return $host; } protected function _getHttpRefer() { $refer = (string) Moto\Util::getValue($_SERVER, 'HTTP_REFERER', getenv('HTTP_REFERER')); $refer = trim($refer); return $refer; } public function getRemoteIp() { if ($this->_remote_ip) { return $this->_remote_ip; } return Moto\Util::getValue($_SERVER, 'SERVER_ADDR', ''); } } 