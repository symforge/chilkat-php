<?php
class CkAuthGoogle {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkAuthGoogle') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkAuthGoogle();
	}

	function get_Utf8() {
		return CkAuthGoogle_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkAuthGoogle_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkAuthGoogle_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkAuthGoogle_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkAuthGoogle_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkAuthGoogle_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkAuthGoogle_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkAuthGoogle_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkAuthGoogle_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkAuthGoogle_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkAuthGoogle_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkAuthGoogle_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkAuthGoogle_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkAuthGoogle_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkAuthGoogle_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkAuthGoogle_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkAuthGoogle_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkAuthGoogle_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkAuthGoogle_SaveLastError($this->_cPtr,$path);
	}

	function get_AccessToken($str) {
		CkAuthGoogle_get_AccessToken($this->_cPtr,$str);
	}

	function accessToken() {
		return CkAuthGoogle_accessToken($this->_cPtr);
	}

	function put_AccessToken($newVal) {
		CkAuthGoogle_put_AccessToken($this->_cPtr,$newVal);
	}

	function get_EmailAddress($str) {
		CkAuthGoogle_get_EmailAddress($this->_cPtr,$str);
	}

	function emailAddress() {
		return CkAuthGoogle_emailAddress($this->_cPtr);
	}

	function put_EmailAddress($newVal) {
		CkAuthGoogle_put_EmailAddress($this->_cPtr,$newVal);
	}

	function get_ExpireNumSeconds() {
		return CkAuthGoogle_get_ExpireNumSeconds($this->_cPtr);
	}

	function put_ExpireNumSeconds($newVal) {
		CkAuthGoogle_put_ExpireNumSeconds($this->_cPtr,$newVal);
	}

	function get_JsonKey($str) {
		CkAuthGoogle_get_JsonKey($this->_cPtr,$str);
	}

	function jsonKey() {
		return CkAuthGoogle_jsonKey($this->_cPtr);
	}

	function put_JsonKey($newVal) {
		CkAuthGoogle_put_JsonKey($this->_cPtr,$newVal);
	}

	function get_NumSecondsRemaining() {
		return CkAuthGoogle_get_NumSecondsRemaining($this->_cPtr);
	}

	function get_Scope($str) {
		CkAuthGoogle_get_Scope($this->_cPtr,$str);
	}

	function scope() {
		return CkAuthGoogle_scope($this->_cPtr);
	}

	function put_Scope($newVal) {
		CkAuthGoogle_put_Scope($this->_cPtr,$newVal);
	}

	function get_SubEmailAddress($str) {
		CkAuthGoogle_get_SubEmailAddress($this->_cPtr,$str);
	}

	function subEmailAddress() {
		return CkAuthGoogle_subEmailAddress($this->_cPtr);
	}

	function put_SubEmailAddress($newVal) {
		CkAuthGoogle_put_SubEmailAddress($this->_cPtr,$newVal);
	}

	function get_Valid() {
		return CkAuthGoogle_get_Valid($this->_cPtr);
	}

	function GetP12() {
		$r=CkAuthGoogle_GetP12($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPfx($r);
		}
		return $r;
	}

	function ObtainAccessToken($connection) {
		return CkAuthGoogle_ObtainAccessToken($this->_cPtr,$connection);
	}

	function ObtainAccessTokenAsync($connection) {
		$r=CkAuthGoogle_ObtainAccessTokenAsync($this->_cPtr,$connection);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetP12($key) {
		return CkAuthGoogle_SetP12($this->_cPtr,$key);
	}
}


?>