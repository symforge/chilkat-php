<?php
class CkJwe {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkJwe') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkJwe();
	}

	function get_Utf8() {
		return CkJwe_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkJwe_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkJwe_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkJwe_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkJwe_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkJwe_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkJwe_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkJwe_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkJwe_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkJwe_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkJwe_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkJwe_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkJwe_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumRecipients() {
		return CkJwe_get_NumRecipients($this->_cPtr);
	}

	function get_PreferCompact() {
		return CkJwe_get_PreferCompact($this->_cPtr);
	}

	function put_PreferCompact($newVal) {
		CkJwe_put_PreferCompact($this->_cPtr,$newVal);
	}

	function get_PreferFlattened() {
		return CkJwe_get_PreferFlattened($this->_cPtr);
	}

	function put_PreferFlattened($newVal) {
		CkJwe_put_PreferFlattened($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkJwe_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkJwe_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkJwe_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkJwe_version($this->_cPtr);
	}

	function decrypt($index,$charset) {
		return CkJwe_decrypt($this->_cPtr,$index,$charset);
	}

	function DecryptBd($index,$bd) {
		return CkJwe_DecryptBd($this->_cPtr,$index,$bd);
	}

	function DecryptSb($index,$charset,$contentSb) {
		return CkJwe_DecryptSb($this->_cPtr,$index,$charset,$contentSb);
	}

	function encrypt($content,$charset) {
		return CkJwe_encrypt($this->_cPtr,$content,$charset);
	}

	function EncryptBd($contentBd,$jweSb) {
		return CkJwe_EncryptBd($this->_cPtr,$contentBd,$jweSb);
	}

	function EncryptSb($contentSb,$charset,$jweSb) {
		return CkJwe_EncryptSb($this->_cPtr,$contentSb,$charset,$jweSb);
	}

	function FindRecipient($paramName,$paramValue,$caseSensitive) {
		return CkJwe_FindRecipient($this->_cPtr,$paramName,$paramValue,$caseSensitive);
	}

	function LoadJwe($jwe) {
		return CkJwe_LoadJwe($this->_cPtr,$jwe);
	}

	function LoadJweSb($sb) {
		return CkJwe_LoadJweSb($this->_cPtr,$sb);
	}

	function SaveLastError($path) {
		return CkJwe_SaveLastError($this->_cPtr,$path);
	}

	function SetAad($aad,$charset) {
		return CkJwe_SetAad($this->_cPtr,$aad,$charset);
	}

	function SetAadBd($aad) {
		return CkJwe_SetAadBd($this->_cPtr,$aad);
	}

	function SetPassword($index,$password) {
		return CkJwe_SetPassword($this->_cPtr,$index,$password);
	}

	function SetPrivateKey($index,$privKey) {
		return CkJwe_SetPrivateKey($this->_cPtr,$index,$privKey);
	}

	function SetProtectedHeader($json) {
		return CkJwe_SetProtectedHeader($this->_cPtr,$json);
	}

	function SetPublicKey($index,$pubKey) {
		return CkJwe_SetPublicKey($this->_cPtr,$index,$pubKey);
	}

	function SetRecipientHeader($index,$json) {
		return CkJwe_SetRecipientHeader($this->_cPtr,$index,$json);
	}

	function SetUnprotectedHeader($json) {
		return CkJwe_SetUnprotectedHeader($this->_cPtr,$json);
	}

	function SetWrappingKey($index,$encodedKey,$encoding) {
		return CkJwe_SetWrappingKey($this->_cPtr,$index,$encodedKey,$encoding);
	}
}


?>