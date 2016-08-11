<?php
class CkAuthAws {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkAuthAws') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkAuthAws();
	}

	function get_Utf8() {
		return CkAuthAws_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkAuthAws_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkAuthAws_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkAuthAws_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkAuthAws_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkAuthAws_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkAuthAws_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkAuthAws_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkAuthAws_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkAuthAws_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkAuthAws_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkAuthAws_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkAuthAws_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkAuthAws_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkAuthAws_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkAuthAws_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkAuthAws_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkAuthAws_SaveLastError($this->_cPtr,$path);
	}

	function get_AccessKey($str) {
		CkAuthAws_get_AccessKey($this->_cPtr,$str);
	}

	function accessKey() {
		return CkAuthAws_accessKey($this->_cPtr);
	}

	function put_AccessKey($newVal) {
		CkAuthAws_put_AccessKey($this->_cPtr,$newVal);
	}

	function get_CanonicalizedResourceV2($str) {
		CkAuthAws_get_CanonicalizedResourceV2($this->_cPtr,$str);
	}

	function canonicalizedResourceV2() {
		return CkAuthAws_canonicalizedResourceV2($this->_cPtr);
	}

	function put_CanonicalizedResourceV2($newVal) {
		CkAuthAws_put_CanonicalizedResourceV2($this->_cPtr,$newVal);
	}

	function get_PrecomputedMd5($str) {
		CkAuthAws_get_PrecomputedMd5($this->_cPtr,$str);
	}

	function precomputedMd5() {
		return CkAuthAws_precomputedMd5($this->_cPtr);
	}

	function put_PrecomputedMd5($newVal) {
		CkAuthAws_put_PrecomputedMd5($this->_cPtr,$newVal);
	}

	function get_PrecomputedSha256($str) {
		CkAuthAws_get_PrecomputedSha256($this->_cPtr,$str);
	}

	function precomputedSha256() {
		return CkAuthAws_precomputedSha256($this->_cPtr);
	}

	function put_PrecomputedSha256($newVal) {
		CkAuthAws_put_PrecomputedSha256($this->_cPtr,$newVal);
	}

	function get_Region($str) {
		CkAuthAws_get_Region($this->_cPtr,$str);
	}

	function region() {
		return CkAuthAws_region($this->_cPtr);
	}

	function put_Region($newVal) {
		CkAuthAws_put_Region($this->_cPtr,$newVal);
	}

	function get_SecretKey($str) {
		CkAuthAws_get_SecretKey($this->_cPtr,$str);
	}

	function secretKey() {
		return CkAuthAws_secretKey($this->_cPtr);
	}

	function put_SecretKey($newVal) {
		CkAuthAws_put_SecretKey($this->_cPtr,$newVal);
	}

	function get_ServiceName($str) {
		CkAuthAws_get_ServiceName($this->_cPtr,$str);
	}

	function serviceName() {
		return CkAuthAws_serviceName($this->_cPtr);
	}

	function put_ServiceName($newVal) {
		CkAuthAws_put_ServiceName($this->_cPtr,$newVal);
	}

	function get_SignatureVersion() {
		return CkAuthAws_get_SignatureVersion($this->_cPtr);
	}

	function put_SignatureVersion($newVal) {
		CkAuthAws_put_SignatureVersion($this->_cPtr,$newVal);
	}
}


?>