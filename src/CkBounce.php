<?php
class CkBounce {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkBounce') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkBounce();
	}

	function get_Utf8() {
		return CkBounce_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkBounce_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkBounce_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkBounce_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkBounce_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkBounce_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkBounce_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkBounce_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkBounce_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkBounce_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkBounce_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkBounce_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkBounce_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkBounce_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkBounce_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkBounce_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkBounce_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkBounce_SaveLastError($this->_cPtr,$path);
	}

	function get_BounceAddress($str) {
		CkBounce_get_BounceAddress($this->_cPtr,$str);
	}

	function bounceAddress() {
		return CkBounce_bounceAddress($this->_cPtr);
	}

	function get_BounceData($str) {
		CkBounce_get_BounceData($this->_cPtr,$str);
	}

	function bounceData() {
		return CkBounce_bounceData($this->_cPtr);
	}

	function get_BounceType() {
		return CkBounce_get_BounceType($this->_cPtr);
	}

	function ExamineEmail($email) {
		return CkBounce_ExamineEmail($this->_cPtr,$email);
	}

	function ExamineEml($emlFilename) {
		return CkBounce_ExamineEml($this->_cPtr,$emlFilename);
	}

	function ExamineMime($mimeText) {
		return CkBounce_ExamineMime($this->_cPtr,$mimeText);
	}

	function UnlockComponent($unlockCode) {
		return CkBounce_UnlockComponent($this->_cPtr,$unlockCode);
	}
}


?>