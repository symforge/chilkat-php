<?php
class CkHttpResponse {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkHttpResponse') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkHttpResponse();
	}

	function get_Utf8() {
		return CkHttpResponse_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkHttpResponse_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkHttpResponse_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkHttpResponse_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkHttpResponse_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkHttpResponse_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkHttpResponse_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkHttpResponse_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkHttpResponse_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkHttpResponse_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkHttpResponse_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkHttpResponse_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkHttpResponse_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkHttpResponse_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkHttpResponse_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkHttpResponse_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkHttpResponse_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkHttpResponse_SaveLastError($this->_cPtr,$path);
	}

	function get_Body($outBytes) {
		CkHttpResponse_get_Body($this->_cPtr,$outBytes);
	}

	function get_BodyQP($str) {
		CkHttpResponse_get_BodyQP($this->_cPtr,$str);
	}

	function bodyQP() {
		return CkHttpResponse_bodyQP($this->_cPtr);
	}

	function get_BodyStr($str) {
		CkHttpResponse_get_BodyStr($this->_cPtr,$str);
	}

	function bodyStr() {
		return CkHttpResponse_bodyStr($this->_cPtr);
	}

	function get_Charset($str) {
		CkHttpResponse_get_Charset($this->_cPtr,$str);
	}

	function charset() {
		return CkHttpResponse_charset($this->_cPtr);
	}

	function get_ContentLength() {
		return CkHttpResponse_get_ContentLength($this->_cPtr);
	}

	function get_Date($outSysTime) {
		CkHttpResponse_get_Date($this->_cPtr,$outSysTime);
	}

	function get_DateStr($str) {
		CkHttpResponse_get_DateStr($this->_cPtr,$str);
	}

	function dateStr() {
		return CkHttpResponse_dateStr($this->_cPtr);
	}

	function get_Domain($str) {
		CkHttpResponse_get_Domain($this->_cPtr,$str);
	}

	function domain() {
		return CkHttpResponse_domain($this->_cPtr);
	}

	function get_FinalRedirectUrl($str) {
		CkHttpResponse_get_FinalRedirectUrl($this->_cPtr,$str);
	}

	function finalRedirectUrl() {
		return CkHttpResponse_finalRedirectUrl($this->_cPtr);
	}

	function get_FullMime($str) {
		CkHttpResponse_get_FullMime($this->_cPtr,$str);
	}

	function fullMime() {
		return CkHttpResponse_fullMime($this->_cPtr);
	}

	function get_Header($str) {
		CkHttpResponse_get_Header($this->_cPtr,$str);
	}

	function header() {
		return CkHttpResponse_header($this->_cPtr);
	}

	function get_NumCookies() {
		return CkHttpResponse_get_NumCookies($this->_cPtr);
	}

	function get_NumHeaderFields() {
		return CkHttpResponse_get_NumHeaderFields($this->_cPtr);
	}

	function get_StatusCode() {
		return CkHttpResponse_get_StatusCode($this->_cPtr);
	}

	function get_StatusLine($str) {
		CkHttpResponse_get_StatusLine($this->_cPtr,$str);
	}

	function statusLine() {
		return CkHttpResponse_statusLine($this->_cPtr);
	}

	function get_StatusText($str) {
		CkHttpResponse_get_StatusText($this->_cPtr,$str);
	}

	function statusText() {
		return CkHttpResponse_statusText($this->_cPtr);
	}

	function getCookieDomain($index) {
		return CkHttpResponse_getCookieDomain($this->_cPtr,$index);
	}

	function cookieDomain($index) {
		return CkHttpResponse_cookieDomain($this->_cPtr,$index);
	}

	function GetCookieExpires($index,$outSysTime) {
		return CkHttpResponse_GetCookieExpires($this->_cPtr,$index,$outSysTime);
	}

	function getCookieExpiresStr($index) {
		return CkHttpResponse_getCookieExpiresStr($this->_cPtr,$index);
	}

	function cookieExpiresStr($index) {
		return CkHttpResponse_cookieExpiresStr($this->_cPtr,$index);
	}

	function getCookieName($index) {
		return CkHttpResponse_getCookieName($this->_cPtr,$index);
	}

	function cookieName($index) {
		return CkHttpResponse_cookieName($this->_cPtr,$index);
	}

	function getCookiePath($index) {
		return CkHttpResponse_getCookiePath($this->_cPtr,$index);
	}

	function cookiePath($index) {
		return CkHttpResponse_cookiePath($this->_cPtr,$index);
	}

	function getCookieValue($index) {
		return CkHttpResponse_getCookieValue($this->_cPtr,$index);
	}

	function cookieValue($index) {
		return CkHttpResponse_cookieValue($this->_cPtr,$index);
	}

	function getHeaderField($fieldName) {
		return CkHttpResponse_getHeaderField($this->_cPtr,$fieldName);
	}

	function headerField($fieldName) {
		return CkHttpResponse_headerField($this->_cPtr,$fieldName);
	}

	function getHeaderFieldAttr($fieldName,$attrName) {
		return CkHttpResponse_getHeaderFieldAttr($this->_cPtr,$fieldName,$attrName);
	}

	function headerFieldAttr($fieldName,$attrName) {
		return CkHttpResponse_headerFieldAttr($this->_cPtr,$fieldName,$attrName);
	}

	function getHeaderName($index) {
		return CkHttpResponse_getHeaderName($this->_cPtr,$index);
	}

	function headerName($index) {
		return CkHttpResponse_headerName($this->_cPtr,$index);
	}

	function getHeaderValue($index) {
		return CkHttpResponse_getHeaderValue($this->_cPtr,$index);
	}

	function headerValue($index) {
		return CkHttpResponse_headerValue($this->_cPtr,$index);
	}

	function LoadTaskResult($task) {
		return CkHttpResponse_LoadTaskResult($this->_cPtr,$task);
	}

	function SaveBodyBinary($path) {
		return CkHttpResponse_SaveBodyBinary($this->_cPtr,$path);
	}

	function SaveBodyText($bCrlf,$path) {
		return CkHttpResponse_SaveBodyText($this->_cPtr,$bCrlf,$path);
	}

	function urlEncParamValue($encodedParams,$paramName) {
		return CkHttpResponse_urlEncParamValue($this->_cPtr,$encodedParams,$paramName);
	}
}


?>