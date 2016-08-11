<?php
class CkOmaDrm {

	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_CkOmaDrm') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkOmaDrm();
	}

	function get_Utf8() {
		return CkOmaDrm_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkOmaDrm_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkOmaDrm_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkOmaDrm_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkOmaDrm_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkOmaDrm_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkOmaDrm_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkOmaDrm_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkOmaDrm_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkOmaDrm_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkOmaDrm_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkOmaDrm_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkOmaDrm_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkOmaDrm_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkOmaDrm_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkOmaDrm_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkOmaDrm_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkOmaDrm_SaveLastError($this->_cPtr,$path);
	}

	function get_Base64Key($str) {
		CkOmaDrm_get_Base64Key($this->_cPtr,$str);
	}

	function base64Key() {
		return CkOmaDrm_base64Key($this->_cPtr);
	}

	function put_Base64Key($newVal) {
		CkOmaDrm_put_Base64Key($this->_cPtr,$newVal);
	}

	function get_ContentType($str) {
		CkOmaDrm_get_ContentType($this->_cPtr,$str);
	}

	function contentType() {
		return CkOmaDrm_contentType($this->_cPtr);
	}

	function put_ContentType($newVal) {
		CkOmaDrm_put_ContentType($this->_cPtr,$newVal);
	}

	function get_ContentUri($str) {
		CkOmaDrm_get_ContentUri($this->_cPtr,$str);
	}

	function contentUri() {
		return CkOmaDrm_contentUri($this->_cPtr);
	}

	function put_ContentUri($newVal) {
		CkOmaDrm_put_ContentUri($this->_cPtr,$newVal);
	}

	function get_DecryptedData($outBytes) {
		CkOmaDrm_get_DecryptedData($this->_cPtr,$outBytes);
	}

	function get_DrmContentVersion() {
		return CkOmaDrm_get_DrmContentVersion($this->_cPtr);
	}

	function get_EncryptedData($outBytes) {
		CkOmaDrm_get_EncryptedData($this->_cPtr,$outBytes);
	}

	function get_Headers($str) {
		CkOmaDrm_get_Headers($this->_cPtr,$str);
	}

	function headers() {
		return CkOmaDrm_headers($this->_cPtr);
	}

	function put_Headers($newVal) {
		CkOmaDrm_put_Headers($this->_cPtr,$newVal);
	}

	function get_IV($outBytes) {
		CkOmaDrm_get_IV($this->_cPtr,$outBytes);
	}

	function put_IV($inBytes) {
		CkOmaDrm_put_IV($this->_cPtr,$inBytes);
	}

	function CreateDcfFile($filename) {
		return CkOmaDrm_CreateDcfFile($this->_cPtr,$filename);
	}

	function getHeaderField($fieldName) {
		return CkOmaDrm_getHeaderField($this->_cPtr,$fieldName);
	}

	function headerField($fieldName) {
		return CkOmaDrm_headerField($this->_cPtr,$fieldName);
	}

	function LoadDcfData($data) {
		return CkOmaDrm_LoadDcfData($this->_cPtr,$data);
	}

	function LoadDcfFile($filename) {
		return CkOmaDrm_LoadDcfFile($this->_cPtr,$filename);
	}

	function LoadUnencryptedData($data) {
		CkOmaDrm_LoadUnencryptedData($this->_cPtr,$data);
	}

	function LoadUnencryptedFile($filename) {
		return CkOmaDrm_LoadUnencryptedFile($this->_cPtr,$filename);
	}

	function SaveDecrypted($filename) {
		return CkOmaDrm_SaveDecrypted($this->_cPtr,$filename);
	}

	function SetEncodedIV($encodedIv,$encoding) {
		CkOmaDrm_SetEncodedIV($this->_cPtr,$encodedIv,$encoding);
	}

	function UnlockComponent($unlockCode) {
		return CkOmaDrm_UnlockComponent($this->_cPtr,$unlockCode);
	}
}


?>