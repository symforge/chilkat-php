<?php
class CkLog {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkLog') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkLog();
	}

	function get_Utf8() {
		return CkLog_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkLog_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkLog_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkLog_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkLog_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkLog_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkLog_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkLog_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkLog_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkLog_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkLog_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkLog_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkLog_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkLog_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkLog_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkLog_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkLog_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkLog_SaveLastError($this->_cPtr,$path);
	}

	function Clear($initialTag) {
		CkLog_Clear($this->_cPtr,$initialTag);
	}

	function EnterContext($tag) {
		CkLog_EnterContext($this->_cPtr,$tag);
	}

	function LeaveContext() {
		CkLog_LeaveContext($this->_cPtr);
	}

	function LogData($tag,$message) {
		CkLog_LogData($this->_cPtr,$tag,$message);
	}

	function LogDataBase64($tag,$data) {
		CkLog_LogDataBase64($this->_cPtr,$tag,$data);
	}

	function LogDataHex($tag,$data) {
		CkLog_LogDataHex($this->_cPtr,$tag,$data);
	}

	function LogDataMax($tag,$message,$maxNumChars) {
		CkLog_LogDataMax($this->_cPtr,$tag,$message,$maxNumChars);
	}

	function LogDateTime($tag,$gmt) {
		CkLog_LogDateTime($this->_cPtr,$tag,$gmt);
	}

	function LogError($message) {
		CkLog_LogError($this->_cPtr,$message);
	}

	function LogInfo($message) {
		CkLog_LogInfo($this->_cPtr,$message);
	}

	function LogInt($tag,$value) {
		CkLog_LogInt($this->_cPtr,$tag,$value);
	}

	function LogInt64($tag,$value) {
		CkLog_LogInt64($this->_cPtr,$tag,$value);
	}

	function LogTimestamp($tag) {
		CkLog_LogTimestamp($this->_cPtr,$tag);
	}
}


?>