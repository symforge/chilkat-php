<?php
class CkDh {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkDh') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkDh();
	}

	function get_Utf8() {
		return CkDh_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkDh_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkDh_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkDh_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkDh_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkDh_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkDh_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkDh_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkDh_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkDh_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkDh_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkDh_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkDh_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkDh_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkDh_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkDh_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkDh_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkDh_SaveLastError($this->_cPtr,$path);
	}

	function get_G() {
		return CkDh_get_G($this->_cPtr);
	}

	function get_P($str) {
		CkDh_get_P($this->_cPtr,$str);
	}

	function p() {
		return CkDh_p($this->_cPtr);
	}

	function createE($numBits) {
		return CkDh_createE($this->_cPtr,$numBits);
	}

	function findK($e) {
		return CkDh_findK($this->_cPtr,$e);
	}

	function GenPG($numBits,$g) {
		return CkDh_GenPG($this->_cPtr,$numBits,$g);
	}

	function SetPG($p,$g) {
		return CkDh_SetPG($this->_cPtr,$p,$g);
	}

	function UnlockComponent($unlockCode) {
		return CkDh_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function UseKnownPrime($index) {
		CkDh_UseKnownPrime($this->_cPtr,$index);
	}
}


?>