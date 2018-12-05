<?php
namespace Moto\Application\MediaLibrary; use Moto\Application\Model\AbstractModel; use Zend\Stdlib\Exception\ExtensionNotLoadedException; use Moto; class MediaItemModel extends AbstractModel { protected $_fields = array( 'id' => array(), 'folder_id' => array( 'default' => 0 ), 'name' => array(), 'path' => array(), 'type' => array( 'default' => 'file' ), 'filesize' => array(), 'properties' => array( 'default' => '' ), 'thumbnails' => array( 'default' => '{}' ), 'title' => array( 'default' => '' ), 'caption' => array( 'default' => '' ), 'alt' => array( 'default' => '' ), 'author_id' => array(), 'is_protected' => array( 'default' => 0, 'type' => 'int', ), 'modified' => array(), 'created' => array(), 'del' => array( 'default' => 0 ), ); protected $_allowedFileFormats = array( 'image' => array('png', 'jpg', 'jpeg', 'gif', 'ico', 'svg'), 'video' => array('mp4', 'avi', 'swf', 'riff', 'webm'), 'audio' => array('mp4', 'mp3'), 'doc' => array('pdf', 'djv', 'djvu', 'doc', 'docx', 'gdoc', 'rtf', 'rtx', 'txt', 'xls', 'xlsx', 'ots', 'odt', 'xml', 'ppt', 'pptx', 'pps', 'log', 'zip.msoffice', 'msoffice', 'csv'), 'archive' => array('zip', 'rar', '7z', 'tar', 'tgz', 'gz', 'gzip', 'bz2') ); protected $_fileFormat; protected $_mimeType; protected $_fileInfo = null; public function __construct() { parent::__construct(); $this->created = date('Y-m-d H:i:s'); $this->modified = $this->created; } public function setDataFromUploadedFile($filePath = '') { if (empty($filePath)) { $filePath = $this->getAbsolutePath(); } if (!file_exists($filePath)) { return false; } require_once(Moto\System::getAbsolutePath('@phpLibrary/Getid3/getid3.php')); ob_start(); try { $getID3 = new \getID3(); } catch (\Exception $e) { ob_get_clean(); Moto\System\Log::emergency('Cant use "getID3" because ...'); Moto\System\Log::emergency("\t" . $e->getMessage()); throw new Moto\System\Exception(Moto\System\Exception::ERROR_FAILED_DEPENDENCY_MESSAGE, Moto\System\Exception::ERROR_FAILED_DEPENDENCY_CODE, array( 'COMMON.ERROR_MESSAGE.DEPENDENCY_GETID3_FAILED', )); } ob_get_clean(); $getID3->option_md5_data = true; $getID3->option_md5_data_source = true; $getID3->encoding = 'UTF-8'; $info = $getID3->analyze($filePath); $this->_fileInfo = $info; $this->name = $info['filename']; $this->filesize = $info['filesize']; $this->_fileFormat = isset($info['fileformat']) ? $info['fileformat'] : null; $this->_mimeType = isset($info['mime_type']) ? $info['mime_type'] : null; $this->type = $this->_getTypeFromFileFormat($this->_fileFormat, $this->_mimeType); $properties = array_intersect_key($info, array_fill_keys( array('audio', 'video', 'mime_type', 'playtime_seconds', 'playtime_string', 'encoding'), null )); if (!isset($info['fileformat']) && strtolower(pathinfo($filePath, PATHINFO_EXTENSION)) == 'ico') { list($imgWidth, $imgHeight) = getimagesize($filePath); if ($imgWidth == 0 ) $imgWidth = 256; if ($imgHeight == 0 ) $imgHeight = 256; $properties = array_merge($properties, array( 'video' => array( 'resolution_x' => $imgWidth, 'resolution_y' => $imgHeight ) )); } $this->properties = \Zend\Json\Json::encode($properties); return $this; } protected function _getFirstNotEmptyValue($array, $default = '') { if (!is_array($array)) { if (is_object($array)) { return $default; } return (string) $array; } $values = array_values($array); foreach($values as $value) { if (is_array($value)) { return $this->_getFirstNotEmptyValue($value, $default); } $value = (string) $value; $value = trim($value); if (!empty($value)) { return $value; } } return $default; } protected function _fillArray($data, $result = array(), $rewrite = true) { foreach($data as $key => $value) { if (!array_key_exists($key, $result) || $rewrite) { $value = $this->_getFirstNotEmptyValue($value); if (!empty($value)) { $result[$key] = $value; } } } return $result; } protected function _updateProperties($data) { $miniTags = array(); if (!empty($this->_fileInfo['tags']['id3v1'])) { $miniTags = $this->_fillArray($this->_fileInfo['tags']['id3v1'], $miniTags); } if (!empty($this->_fileInfo['tags']['id3v2'])) { $miniTags = $this->_fillArray($this->_fileInfo['tags']['id3v2'], $miniTags); } $miniTags = Moto\Util::arrayOnly($miniTags, array('title', 'artist', 'album', 'year', 'genre', 'composer')); if (!empty($miniTags)) { if (json_encode($miniTags)) { $data['tags'] = $miniTags; } elseif (Moto\System::isDevelopmentStage()) { Moto\System\Log::debug('MediaLibrary: cant forming tags from file ' . $this->name); Moto\System\Log::debug('base64_encode(serialize()): ' . base64_encode(serialize($miniTags))); } } return $data; } protected function _getTypeFromFileFormat($fileFormat = '', $mimeType = '') { if (empty($fileFormat) && isset($this->name)) { $fileFormat = strtolower(pathinfo($this->name, PATHINFO_EXTENSION)); } if ($fileFormat == 'mp4' && preg_match('/^audio/', $mimeType)) { return 'audio'; } $fileType = 'file'; foreach($this->_allowedFileFormats as $type => $formats) { if (in_array($fileFormat, $formats)) { $fileType = $type; break; } } return $fileType; } public function toInsert() { $data = parent::toInsert(); if (empty($data['properties'])) { $data['properties'] = '{}'; } if (!is_string($data['properties'])) { $data['properties'] = json_encode($data['properties']); } if (empty($data['thumbnails'])) { $data['thumbnails'] = '{}'; } if (!is_string($data['thumbnails'])) { $data['thumbnails'] = json_encode($data['thumbnails']); } return $data; } public function toUpdate() { $this->modified = date('Y-m-d H:i:s'); $data = parent::toUpdate(); if (empty($data['properties'])) { $data['properties'] = '{}'; } if (!is_string($data['properties'])) { $data['properties'] = json_encode($data['properties']); } if (empty($data['thumbnails'])) { $data['thumbnails'] = '{}'; } if (!is_string($data['thumbnails'])) { $data['thumbnails'] = json_encode($data['thumbnails']); } return $data; } public function getThumbnails() { if (empty($this->thumbnails)) { return $this->thumbnails; } if (is_string($this->thumbnails)) { $this->thumbnails = json_decode($this->thumbnails); } return $this->thumbnails; } public function getThumbnail($name) { $thumbnail = new \stdClass(); $thumbnails = $this->getThumbnails(); if (isset($thumbnails->{$name})) { $thumbnail = $thumbnails->{$name}; if (empty($thumbnail->name)) { $thumbnail->name = $name; } if (empty($thumbnail->path)) { $info = pathinfo($this->path); if (!empty($info['dirname']) && !empty($info['filename'])) { $path = $info['dirname'] . '/thumbnails/' . $info['filename'] . '_' . $name . '_' . $thumbnail->width . 'x' . $thumbnail->height; if (!empty($info['extension'])) { $path .= '.' . $info['extension']; } } $thumbnail->path = $path; } } return $thumbnail; } public function getAbsolutePath() { return Moto\System::getUploadAbsolutePath($this->path); } public function getAbsoluteUrl() { return Moto\System::getUploadAbsoluteUrl($this->path); } public function deleteThumbnails() { $thumbnails = $this->getThumbnails(); if ($thumbnails) { foreach($thumbnails as $thumbnailName => $meta) { try { $thumbnail = $this->getThumbnail($thumbnailName); if (!empty($thumbnail->path)) { Moto\Application\FileManager\Service::delete(array('path' => $thumbnail->path)); } } catch(\Exception $e) { } } } $this->thumbnails = array(); } } 