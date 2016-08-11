<?php
class CkJwt {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkJwt') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkJwt();
	}

	function get_Utf8() {
		return CkJwt_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkJwt_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkJwt_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkJwt_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkJwt_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkJwt_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkJwt_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkJwt_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkJwt_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkJwt_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkJwt_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkJwt_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkJwt_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkJwt_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkJwt_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkJwt_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkJwt_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkJwt_SaveLastError($this->_cPtr,$path);
	}

	function get_AutoCompact() {
		return CkJwt_get_AutoCompact($this->_cPtr);
	}

	function put_AutoCompact($newVal) {
		CkJwt_put_AutoCompact($this->_cPtr,$newVal);
	}

	function createJwt($header,$payload,$password) {
		return CkJwt_createJwt($this->_cPtr,$header,$payload,$password);
	}

	function createJwtPk($header,$payload,$key) {
		return CkJwt_createJwtPk($this->_cPtr,$header,$payload,$key);
	}

	function GenNumericDate($numSecOffset) {
		return CkJwt_GenNumericDate($this->_cPtr,$numSecOffset);
	}

	function getHeader($token) {
		return CkJwt_getHeader($this->_cPtr,$token);
	}

	function header($token) {
		return CkJwt_header($this->_cPtr,$token);
	}

	function getPayload($token) {
		return CkJwt_getPayload($this->_cPtr,$token);
	}

	function payload($token) {
		return CkJwt_payload($this->_cPtr,$token);
	}

	function IsTimeValid($jwt,$leeway) {
		return CkJwt_IsTimeValid($this->_cPtr,$jwt,$leeway);
	}

	function VerifyJwt($token,$password) {
		return CkJwt_VerifyJwt($this->_cPtr,$token,$password);
	}

	function VerifyJwtPk($token,$key) {
		return CkJwt_VerifyJwtPk($this->_cPtr,$token,$key);
	}
}


?>