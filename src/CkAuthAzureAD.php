<?php
class CkAuthAzureAD {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkAuthAzureAD') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkAuthAzureAD();
	}

	function get_Utf8() {
		return CkAuthAzureAD_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkAuthAzureAD_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkAuthAzureAD_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AccessToken($str) {
		CkAuthAzureAD_get_AccessToken($this->_cPtr,$str);
	}

	function accessToken() {
		return CkAuthAzureAD_accessToken($this->_cPtr);
	}

	function put_AccessToken($newVal) {
		CkAuthAzureAD_put_AccessToken($this->_cPtr,$newVal);
	}

	function get_ClientId($str) {
		CkAuthAzureAD_get_ClientId($this->_cPtr,$str);
	}

	function clientId() {
		return CkAuthAzureAD_clientId($this->_cPtr);
	}

	function put_ClientId($newVal) {
		CkAuthAzureAD_put_ClientId($this->_cPtr,$newVal);
	}

	function get_ClientSecret($str) {
		CkAuthAzureAD_get_ClientSecret($this->_cPtr,$str);
	}

	function clientSecret() {
		return CkAuthAzureAD_clientSecret($this->_cPtr);
	}

	function put_ClientSecret($newVal) {
		CkAuthAzureAD_put_ClientSecret($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkAuthAzureAD_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkAuthAzureAD_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkAuthAzureAD_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkAuthAzureAD_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkAuthAzureAD_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkAuthAzureAD_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkAuthAzureAD_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkAuthAzureAD_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkAuthAzureAD_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkAuthAzureAD_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkAuthAzureAD_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumSecondsRemaining() {
		return CkAuthAzureAD_get_NumSecondsRemaining($this->_cPtr);
	}

	function get_Resource($str) {
		CkAuthAzureAD_get_Resource($this->_cPtr,$str);
	}

	function resource() {
		return CkAuthAzureAD_resource($this->_cPtr);
	}

	function put_Resource($newVal) {
		CkAuthAzureAD_put_Resource($this->_cPtr,$newVal);
	}

	function get_TenantId($str) {
		CkAuthAzureAD_get_TenantId($this->_cPtr,$str);
	}

	function tenantId() {
		return CkAuthAzureAD_tenantId($this->_cPtr);
	}

	function put_TenantId($newVal) {
		CkAuthAzureAD_put_TenantId($this->_cPtr,$newVal);
	}

	function get_Valid() {
		return CkAuthAzureAD_get_Valid($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkAuthAzureAD_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkAuthAzureAD_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkAuthAzureAD_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkAuthAzureAD_version($this->_cPtr);
	}

	function ObtainAccessToken($connection) {
		return CkAuthAzureAD_ObtainAccessToken($this->_cPtr,$connection);
	}

	function ObtainAccessTokenAsync($connection) {
		$r=CkAuthAzureAD_ObtainAccessTokenAsync($this->_cPtr,$connection);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SaveLastError($path) {
		return CkAuthAzureAD_SaveLastError($this->_cPtr,$path);
	}
}


?>