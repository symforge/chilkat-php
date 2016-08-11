<?php
class CkGlobal {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkGlobal') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkGlobal();
	}

	function get_Utf8() {
		return CkGlobal_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkGlobal_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkGlobal_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkGlobal_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkGlobal_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkGlobal_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkGlobal_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkGlobal_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkGlobal_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkGlobal_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkGlobal_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkGlobal_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkGlobal_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkGlobal_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkGlobal_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkGlobal_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkGlobal_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkGlobal_SaveLastError($this->_cPtr,$path);
	}

	function get_AnsiCodePage() {
		return CkGlobal_get_AnsiCodePage($this->_cPtr);
	}

	function put_AnsiCodePage($newVal) {
		CkGlobal_put_AnsiCodePage($this->_cPtr,$newVal);
	}

	function get_DefaultNtlmVersion() {
		return CkGlobal_get_DefaultNtlmVersion($this->_cPtr);
	}

	function put_DefaultNtlmVersion($newVal) {
		CkGlobal_put_DefaultNtlmVersion($this->_cPtr,$newVal);
	}

	function get_DefaultUtf8() {
		return CkGlobal_get_DefaultUtf8($this->_cPtr);
	}

	function put_DefaultUtf8($newVal) {
		CkGlobal_put_DefaultUtf8($this->_cPtr,$newVal);
	}

	function get_DnsTimeToLive() {
		return CkGlobal_get_DnsTimeToLive($this->_cPtr);
	}

	function put_DnsTimeToLive($newVal) {
		CkGlobal_put_DnsTimeToLive($this->_cPtr,$newVal);
	}

	function get_EnableDnsCaching() {
		return CkGlobal_get_EnableDnsCaching($this->_cPtr);
	}

	function put_EnableDnsCaching($newVal) {
		CkGlobal_put_EnableDnsCaching($this->_cPtr,$newVal);
	}

	function get_MaxThreads() {
		return CkGlobal_get_MaxThreads($this->_cPtr);
	}

	function put_MaxThreads($newVal) {
		CkGlobal_put_MaxThreads($this->_cPtr,$newVal);
	}

	function get_ThreadPoolLogPath($str) {
		CkGlobal_get_ThreadPoolLogPath($this->_cPtr,$str);
	}

	function threadPoolLogPath() {
		return CkGlobal_threadPoolLogPath($this->_cPtr);
	}

	function put_ThreadPoolLogPath($newVal) {
		CkGlobal_put_ThreadPoolLogPath($this->_cPtr,$newVal);
	}

	function DnsClearCache() {
		return CkGlobal_DnsClearCache($this->_cPtr);
	}

	function FinalizeThreadPool() {
		return CkGlobal_FinalizeThreadPool($this->_cPtr);
	}

	function UnlockBundle($bundleUnlockCode) {
		return CkGlobal_UnlockBundle($this->_cPtr,$bundleUnlockCode);
	}
}


?>