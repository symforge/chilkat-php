<?php
class CkUpload {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkUpload') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkUpload();
	}

	function get_Utf8() {
		return CkUpload_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkUpload_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkUpload_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AbortCurrent() {
		return CkUpload_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkUpload_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_BandwidthThrottleUp() {
		return CkUpload_get_BandwidthThrottleUp($this->_cPtr);
	}

	function put_BandwidthThrottleUp($newVal) {
		CkUpload_put_BandwidthThrottleUp($this->_cPtr,$newVal);
	}

	function get_ChunkSize() {
		return CkUpload_get_ChunkSize($this->_cPtr);
	}

	function put_ChunkSize($newVal) {
		CkUpload_put_ChunkSize($this->_cPtr,$newVal);
	}

	function get_ClientIpAddress($str) {
		CkUpload_get_ClientIpAddress($this->_cPtr,$str);
	}

	function clientIpAddress() {
		return CkUpload_clientIpAddress($this->_cPtr);
	}

	function put_ClientIpAddress($newVal) {
		CkUpload_put_ClientIpAddress($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkUpload_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkUpload_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkUpload_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_Expect100Continue() {
		return CkUpload_get_Expect100Continue($this->_cPtr);
	}

	function put_Expect100Continue($newVal) {
		CkUpload_put_Expect100Continue($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkUpload_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkUpload_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_Hostname($str) {
		CkUpload_get_Hostname($this->_cPtr,$str);
	}

	function hostname() {
		return CkUpload_hostname($this->_cPtr);
	}

	function put_Hostname($newVal) {
		CkUpload_put_Hostname($this->_cPtr,$newVal);
	}

	function get_IdleTimeoutMs() {
		return CkUpload_get_IdleTimeoutMs($this->_cPtr);
	}

	function put_IdleTimeoutMs($newVal) {
		CkUpload_put_IdleTimeoutMs($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkUpload_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkUpload_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkUpload_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkUpload_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkUpload_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkUpload_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkUpload_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkUpload_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Login($str) {
		CkUpload_get_Login($this->_cPtr,$str);
	}

	function login() {
		return CkUpload_login($this->_cPtr);
	}

	function put_Login($newVal) {
		CkUpload_put_Login($this->_cPtr,$newVal);
	}

	function get_NumBytesSent() {
		return CkUpload_get_NumBytesSent($this->_cPtr);
	}

	function get_Password($str) {
		CkUpload_get_Password($this->_cPtr,$str);
	}

	function password() {
		return CkUpload_password($this->_cPtr);
	}

	function put_Password($newVal) {
		CkUpload_put_Password($this->_cPtr,$newVal);
	}

	function get_Path($str) {
		CkUpload_get_Path($this->_cPtr,$str);
	}

	function path() {
		return CkUpload_path($this->_cPtr);
	}

	function put_Path($newVal) {
		CkUpload_put_Path($this->_cPtr,$newVal);
	}

	function get_PercentDoneScale() {
		return CkUpload_get_PercentDoneScale($this->_cPtr);
	}

	function put_PercentDoneScale($newVal) {
		CkUpload_put_PercentDoneScale($this->_cPtr,$newVal);
	}

	function get_PercentUploaded() {
		return CkUpload_get_PercentUploaded($this->_cPtr);
	}

	function get_Port() {
		return CkUpload_get_Port($this->_cPtr);
	}

	function put_Port($newVal) {
		CkUpload_put_Port($this->_cPtr,$newVal);
	}

	function get_PreferIpv6() {
		return CkUpload_get_PreferIpv6($this->_cPtr);
	}

	function put_PreferIpv6($newVal) {
		CkUpload_put_PreferIpv6($this->_cPtr,$newVal);
	}

	function get_ProxyDomain($str) {
		CkUpload_get_ProxyDomain($this->_cPtr,$str);
	}

	function proxyDomain() {
		return CkUpload_proxyDomain($this->_cPtr);
	}

	function put_ProxyDomain($newVal) {
		CkUpload_put_ProxyDomain($this->_cPtr,$newVal);
	}

	function get_ProxyLogin($str) {
		CkUpload_get_ProxyLogin($this->_cPtr,$str);
	}

	function proxyLogin() {
		return CkUpload_proxyLogin($this->_cPtr);
	}

	function put_ProxyLogin($newVal) {
		CkUpload_put_ProxyLogin($this->_cPtr,$newVal);
	}

	function get_ProxyPassword($str) {
		CkUpload_get_ProxyPassword($this->_cPtr,$str);
	}

	function proxyPassword() {
		return CkUpload_proxyPassword($this->_cPtr);
	}

	function put_ProxyPassword($newVal) {
		CkUpload_put_ProxyPassword($this->_cPtr,$newVal);
	}

	function get_ProxyPort() {
		return CkUpload_get_ProxyPort($this->_cPtr);
	}

	function put_ProxyPort($newVal) {
		CkUpload_put_ProxyPort($this->_cPtr,$newVal);
	}

	function get_ResponseBody($outBytes) {
		CkUpload_get_ResponseBody($this->_cPtr,$outBytes);
	}

	function get_ResponseHeader($str) {
		CkUpload_get_ResponseHeader($this->_cPtr,$str);
	}

	function responseHeader() {
		return CkUpload_responseHeader($this->_cPtr);
	}

	function get_ResponseStatus() {
		return CkUpload_get_ResponseStatus($this->_cPtr);
	}

	function get_Ssl() {
		return CkUpload_get_Ssl($this->_cPtr);
	}

	function put_Ssl($newVal) {
		CkUpload_put_Ssl($this->_cPtr,$newVal);
	}

	function get_SslAllowedCiphers($str) {
		CkUpload_get_SslAllowedCiphers($this->_cPtr,$str);
	}

	function sslAllowedCiphers() {
		return CkUpload_sslAllowedCiphers($this->_cPtr);
	}

	function put_SslAllowedCiphers($newVal) {
		CkUpload_put_SslAllowedCiphers($this->_cPtr,$newVal);
	}

	function get_SslProtocol($str) {
		CkUpload_get_SslProtocol($this->_cPtr,$str);
	}

	function sslProtocol() {
		return CkUpload_sslProtocol($this->_cPtr);
	}

	function put_SslProtocol($newVal) {
		CkUpload_put_SslProtocol($this->_cPtr,$newVal);
	}

	function get_TlsPinSet($str) {
		CkUpload_get_TlsPinSet($this->_cPtr,$str);
	}

	function tlsPinSet() {
		return CkUpload_tlsPinSet($this->_cPtr);
	}

	function put_TlsPinSet($newVal) {
		CkUpload_put_TlsPinSet($this->_cPtr,$newVal);
	}

	function get_TotalUploadSize() {
		return CkUpload_get_TotalUploadSize($this->_cPtr);
	}

	function get_UploadInProgress() {
		return CkUpload_get_UploadInProgress($this->_cPtr);
	}

	function get_UploadSuccess() {
		return CkUpload_get_UploadSuccess($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkUpload_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkUpload_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkUpload_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkUpload_version($this->_cPtr);
	}

	function AbortUpload() {
		CkUpload_AbortUpload($this->_cPtr);
	}

	function AddCustomHeader($name,$value) {
		CkUpload_AddCustomHeader($this->_cPtr,$name,$value);
	}

	function AddFileReference($name,$filename) {
		CkUpload_AddFileReference($this->_cPtr,$name,$filename);
	}

	function AddParam($name,$value) {
		CkUpload_AddParam($this->_cPtr,$name,$value);
	}

	function BeginUpload() {
		return CkUpload_BeginUpload($this->_cPtr);
	}

	function BlockingUpload() {
		return CkUpload_BlockingUpload($this->_cPtr);
	}

	function BlockingUploadAsync() {
		$r=CkUpload_BlockingUploadAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ClearFileReferences() {
		CkUpload_ClearFileReferences($this->_cPtr);
	}

	function ClearParams() {
		CkUpload_ClearParams($this->_cPtr);
	}

	function SaveLastError($path) {
		return CkUpload_SaveLastError($this->_cPtr,$path);
	}

	function SleepMs($millisec) {
		CkUpload_SleepMs($this->_cPtr,$millisec);
	}

	function UploadToMemory($outData) {
		return CkUpload_UploadToMemory($this->_cPtr,$outData);
	}
}


?>