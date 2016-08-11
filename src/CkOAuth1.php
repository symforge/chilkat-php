<?php
class CkOAuth1 {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkOAuth1') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkOAuth1();
	}

	function get_Utf8() {
		return CkOAuth1_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkOAuth1_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkOAuth1_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkOAuth1_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkOAuth1_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkOAuth1_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkOAuth1_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkOAuth1_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkOAuth1_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkOAuth1_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkOAuth1_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkOAuth1_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkOAuth1_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkOAuth1_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkOAuth1_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkOAuth1_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkOAuth1_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkOAuth1_SaveLastError($this->_cPtr,$path);
	}

	function get_AuthorizationHeader($str) {
		CkOAuth1_get_AuthorizationHeader($this->_cPtr,$str);
	}

	function authorizationHeader() {
		return CkOAuth1_authorizationHeader($this->_cPtr);
	}

	function get_BaseString($str) {
		CkOAuth1_get_BaseString($this->_cPtr,$str);
	}

	function baseString() {
		return CkOAuth1_baseString($this->_cPtr);
	}

	function get_ConsumerKey($str) {
		CkOAuth1_get_ConsumerKey($this->_cPtr,$str);
	}

	function consumerKey() {
		return CkOAuth1_consumerKey($this->_cPtr);
	}

	function put_ConsumerKey($newVal) {
		CkOAuth1_put_ConsumerKey($this->_cPtr,$newVal);
	}

	function get_ConsumerSecret($str) {
		CkOAuth1_get_ConsumerSecret($this->_cPtr,$str);
	}

	function consumerSecret() {
		return CkOAuth1_consumerSecret($this->_cPtr);
	}

	function put_ConsumerSecret($newVal) {
		CkOAuth1_put_ConsumerSecret($this->_cPtr,$newVal);
	}

	function get_EncodedSignature($str) {
		CkOAuth1_get_EncodedSignature($this->_cPtr,$str);
	}

	function encodedSignature() {
		return CkOAuth1_encodedSignature($this->_cPtr);
	}

	function get_GeneratedUrl($str) {
		CkOAuth1_get_GeneratedUrl($this->_cPtr,$str);
	}

	function generatedUrl() {
		return CkOAuth1_generatedUrl($this->_cPtr);
	}

	function get_HmacKey($str) {
		CkOAuth1_get_HmacKey($this->_cPtr,$str);
	}

	function hmacKey() {
		return CkOAuth1_hmacKey($this->_cPtr);
	}

	function get_Nonce($str) {
		CkOAuth1_get_Nonce($this->_cPtr,$str);
	}

	function nonce() {
		return CkOAuth1_nonce($this->_cPtr);
	}

	function put_Nonce($newVal) {
		CkOAuth1_put_Nonce($this->_cPtr,$newVal);
	}

	function get_OauthMethod($str) {
		CkOAuth1_get_OauthMethod($this->_cPtr,$str);
	}

	function oauthMethod() {
		return CkOAuth1_oauthMethod($this->_cPtr);
	}

	function put_OauthMethod($newVal) {
		CkOAuth1_put_OauthMethod($this->_cPtr,$newVal);
	}

	function get_OauthUrl($str) {
		CkOAuth1_get_OauthUrl($this->_cPtr,$str);
	}

	function oauthUrl() {
		return CkOAuth1_oauthUrl($this->_cPtr);
	}

	function put_OauthUrl($newVal) {
		CkOAuth1_put_OauthUrl($this->_cPtr,$newVal);
	}

	function get_OauthVersion($str) {
		CkOAuth1_get_OauthVersion($this->_cPtr,$str);
	}

	function oauthVersion() {
		return CkOAuth1_oauthVersion($this->_cPtr);
	}

	function put_OauthVersion($newVal) {
		CkOAuth1_put_OauthVersion($this->_cPtr,$newVal);
	}

	function get_QueryString($str) {
		CkOAuth1_get_QueryString($this->_cPtr,$str);
	}

	function queryString() {
		return CkOAuth1_queryString($this->_cPtr);
	}

	function get_Signature($str) {
		CkOAuth1_get_Signature($this->_cPtr,$str);
	}

	function signature() {
		return CkOAuth1_signature($this->_cPtr);
	}

	function get_SignatureMethod($str) {
		CkOAuth1_get_SignatureMethod($this->_cPtr,$str);
	}

	function signatureMethod() {
		return CkOAuth1_signatureMethod($this->_cPtr);
	}

	function put_SignatureMethod($newVal) {
		CkOAuth1_put_SignatureMethod($this->_cPtr,$newVal);
	}

	function get_Timestamp($str) {
		CkOAuth1_get_Timestamp($this->_cPtr,$str);
	}

	function timestamp() {
		return CkOAuth1_timestamp($this->_cPtr);
	}

	function put_Timestamp($newVal) {
		CkOAuth1_put_Timestamp($this->_cPtr,$newVal);
	}

	function get_Token($str) {
		CkOAuth1_get_Token($this->_cPtr,$str);
	}

	function token() {
		return CkOAuth1_token($this->_cPtr);
	}

	function put_Token($newVal) {
		CkOAuth1_put_Token($this->_cPtr,$newVal);
	}

	function get_TokenSecret($str) {
		CkOAuth1_get_TokenSecret($this->_cPtr,$str);
	}

	function tokenSecret() {
		return CkOAuth1_tokenSecret($this->_cPtr);
	}

	function put_TokenSecret($newVal) {
		CkOAuth1_put_TokenSecret($this->_cPtr,$newVal);
	}

	function AddParam($name,$value) {
		return CkOAuth1_AddParam($this->_cPtr,$name,$value);
	}

	function GenNonce($numBytes) {
		return CkOAuth1_GenNonce($this->_cPtr,$numBytes);
	}

	function GenTimestamp() {
		return CkOAuth1_GenTimestamp($this->_cPtr);
	}

	function Generate() {
		return CkOAuth1_Generate($this->_cPtr);
	}

	function RemoveParam($name) {
		return CkOAuth1_RemoveParam($this->_cPtr,$name);
	}
}


?>