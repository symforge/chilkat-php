<?php
class CkTaskChain {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkTaskChain') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkTaskChain();
	}

	function get_Utf8() {
		return CkTaskChain_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkTaskChain_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkTaskChain_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkTaskChain_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkTaskChain_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_Finished() {
		return CkTaskChain_get_Finished($this->_cPtr);
	}

	function get_HeartbeatMs() {
		return CkTaskChain_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkTaskChain_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_Inert() {
		return CkTaskChain_get_Inert($this->_cPtr);
	}

	function get_LastErrorHtml($str) {
		CkTaskChain_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkTaskChain_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkTaskChain_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkTaskChain_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkTaskChain_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkTaskChain_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkTaskChain_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkTaskChain_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Live() {
		return CkTaskChain_get_Live($this->_cPtr);
	}

	function get_NumTasks() {
		return CkTaskChain_get_NumTasks($this->_cPtr);
	}

	function get_Status($str) {
		CkTaskChain_get_Status($this->_cPtr,$str);
	}

	function status() {
		return CkTaskChain_status($this->_cPtr);
	}

	function get_StatusInt() {
		return CkTaskChain_get_StatusInt($this->_cPtr);
	}

	function get_StopOnFailedTask() {
		return CkTaskChain_get_StopOnFailedTask($this->_cPtr);
	}

	function put_StopOnFailedTask($newVal) {
		CkTaskChain_put_StopOnFailedTask($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkTaskChain_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkTaskChain_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkTaskChain_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkTaskChain_version($this->_cPtr);
	}

	function Append($task) {
		return CkTaskChain_Append($this->_cPtr,$task);
	}

	function Cancel() {
		return CkTaskChain_Cancel($this->_cPtr);
	}

	function GetTask($index) {
		$r=CkTaskChain_GetTask($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Run() {
		return CkTaskChain_Run($this->_cPtr);
	}

	function RunSynchronously() {
		return CkTaskChain_RunSynchronously($this->_cPtr);
	}

	function SaveLastError($path) {
		return CkTaskChain_SaveLastError($this->_cPtr,$path);
	}

	function SleepMs($numMs) {
		CkTaskChain_SleepMs($this->_cPtr,$numMs);
	}

	function Wait($maxWaitMs) {
		return CkTaskChain_Wait($this->_cPtr,$maxWaitMs);
	}
}


?>