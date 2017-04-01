<?php
class CkTask {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkTask') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkTask();
	}

	function get_Utf8() {
		return CkTask_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkTask_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkTask_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkTask_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkTask_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_Finished() {
		return CkTask_get_Finished($this->_cPtr);
	}

	function get_HeartbeatMs() {
		return CkTask_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkTask_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_Inert() {
		return CkTask_get_Inert($this->_cPtr);
	}

	function get_KeepProgressLog() {
		return CkTask_get_KeepProgressLog($this->_cPtr);
	}

	function put_KeepProgressLog($newVal) {
		CkTask_put_KeepProgressLog($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkTask_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkTask_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkTask_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkTask_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkTask_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkTask_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkTask_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkTask_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Live() {
		return CkTask_get_Live($this->_cPtr);
	}

	function get_PercentDone() {
		return CkTask_get_PercentDone($this->_cPtr);
	}

	function get_ProgressLogSize() {
		return CkTask_get_ProgressLogSize($this->_cPtr);
	}

	function get_ResultErrorText($str) {
		CkTask_get_ResultErrorText($this->_cPtr,$str);
	}

	function resultErrorText() {
		return CkTask_resultErrorText($this->_cPtr);
	}

	function get_ResultType($str) {
		CkTask_get_ResultType($this->_cPtr,$str);
	}

	function resultType() {
		return CkTask_resultType($this->_cPtr);
	}

	function get_Status($str) {
		CkTask_get_Status($this->_cPtr,$str);
	}

	function status() {
		return CkTask_status($this->_cPtr);
	}

	function get_StatusInt() {
		return CkTask_get_StatusInt($this->_cPtr);
	}

	function get_TaskId() {
		return CkTask_get_TaskId($this->_cPtr);
	}

	function get_TaskSuccess() {
		return CkTask_get_TaskSuccess($this->_cPtr);
	}

	function get_UserData($str) {
		CkTask_get_UserData($this->_cPtr,$str);
	}

	function userData() {
		return CkTask_userData($this->_cPtr);
	}

	function put_UserData($newVal) {
		CkTask_put_UserData($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkTask_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkTask_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkTask_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkTask_version($this->_cPtr);
	}

	function Cancel() {
		return CkTask_Cancel($this->_cPtr);
	}

	function ClearProgressLog() {
		CkTask_ClearProgressLog($this->_cPtr);
	}

	function CopyResultBytes($outBytes) {
		return CkTask_CopyResultBytes($this->_cPtr,$outBytes);
	}

	function GetResultBool() {
		return CkTask_GetResultBool($this->_cPtr);
	}

	function GetResultBytes($outBytes) {
		return CkTask_GetResultBytes($this->_cPtr,$outBytes);
	}

	function GetResultInt() {
		return CkTask_GetResultInt($this->_cPtr);
	}

	function getResultString() {
		return CkTask_getResultString($this->_cPtr);
	}

	function resultString() {
		return CkTask_resultString($this->_cPtr);
	}

	function progressInfoName($index) {
		return CkTask_progressInfoName($this->_cPtr,$index);
	}

	function progressInfoValue($index) {
		return CkTask_progressInfoValue($this->_cPtr,$index);
	}

	function RemoveProgressInfo($index) {
		CkTask_RemoveProgressInfo($this->_cPtr,$index);
	}

	function Run() {
		return CkTask_Run($this->_cPtr);
	}

	function RunSynchronously() {
		return CkTask_RunSynchronously($this->_cPtr);
	}

	function SaveLastError($path) {
		return CkTask_SaveLastError($this->_cPtr,$path);
	}

	function SleepMs($numMs) {
		CkTask_SleepMs($this->_cPtr,$numMs);
	}

	function Wait($maxWaitMs) {
		return CkTask_Wait($this->_cPtr,$maxWaitMs);
	}
}


?>