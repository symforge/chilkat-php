<?php
class CkAuthAzureStorage {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkAuthAzureStorage') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkAuthAzureStorage();
	}

	function get_Utf8() {
		return CkAuthAzureStorage_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkAuthAzureStorage_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkAuthAzureStorage_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkAuthAzureStorage_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkAuthAzureStorage_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkAuthAzureStorage_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkAuthAzureStorage_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkAuthAzureStorage_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkAuthAzureStorage_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkAuthAzureStorage_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkAuthAzureStorage_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkAuthAzureStorage_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkAuthAzureStorage_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkAuthAzureStorage_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkAuthAzureStorage_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkAuthAzureStorage_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkAuthAzureStorage_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkAuthAzureStorage_SaveLastError($this->_cPtr,$path);
	}

	function get_AccessKey($str) {
		CkAuthAzureStorage_get_AccessKey($this->_cPtr,$str);
	}

	function accessKey() {
		return CkAuthAzureStorage_accessKey($this->_cPtr);
	}

	function put_AccessKey($newVal) {
		CkAuthAzureStorage_put_AccessKey($this->_cPtr,$newVal);
	}

	function get_Account($str) {
		CkAuthAzureStorage_get_Account($this->_cPtr,$str);
	}

	function account() {
		return CkAuthAzureStorage_account($this->_cPtr);
	}

	function put_Account($newVal) {
		CkAuthAzureStorage_put_Account($this->_cPtr,$newVal);
	}

	function get_Scheme($str) {
		CkAuthAzureStorage_get_Scheme($this->_cPtr,$str);
	}

	function scheme() {
		return CkAuthAzureStorage_scheme($this->_cPtr);
	}

	function put_Scheme($newVal) {
		CkAuthAzureStorage_put_Scheme($this->_cPtr,$newVal);
	}

	function get_Service($str) {
		CkAuthAzureStorage_get_Service($this->_cPtr,$str);
	}

	function service() {
		return CkAuthAzureStorage_service($this->_cPtr);
	}

	function put_Service($newVal) {
		CkAuthAzureStorage_put_Service($this->_cPtr,$newVal);
	}

	function get_XMsVersion($str) {
		CkAuthAzureStorage_get_XMsVersion($this->_cPtr,$str);
	}

	function xMsVersion() {
		return CkAuthAzureStorage_xMsVersion($this->_cPtr);
	}

	function put_XMsVersion($newVal) {
		CkAuthAzureStorage_put_XMsVersion($this->_cPtr,$newVal);
	}
}


?>