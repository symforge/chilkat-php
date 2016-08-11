<?php
class CkPublicKey {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkPublicKey') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkPublicKey();
	}

	function get_Utf8() {
		return CkPublicKey_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkPublicKey_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkPublicKey_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkPublicKey_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkPublicKey_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkPublicKey_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkPublicKey_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkPublicKey_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkPublicKey_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkPublicKey_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkPublicKey_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkPublicKey_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkPublicKey_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkPublicKey_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkPublicKey_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkPublicKey_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkPublicKey_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkPublicKey_SaveLastError($this->_cPtr,$path);
	}

	function get_KeyType($str) {
		CkPublicKey_get_KeyType($this->_cPtr,$str);
	}

	function keyType() {
		return CkPublicKey_keyType($this->_cPtr);
	}

	function GetOpenSslDer($outData) {
		return CkPublicKey_GetOpenSslDer($this->_cPtr,$outData);
	}

	function getOpenSslPem() {
		return CkPublicKey_getOpenSslPem($this->_cPtr);
	}

	function openSslPem() {
		return CkPublicKey_openSslPem($this->_cPtr);
	}

	function getPkcs1ENC($encoding) {
		return CkPublicKey_getPkcs1ENC($this->_cPtr,$encoding);
	}

	function pkcs1ENC($encoding) {
		return CkPublicKey_pkcs1ENC($this->_cPtr,$encoding);
	}

	function getPkcs8ENC($encoding) {
		return CkPublicKey_getPkcs8ENC($this->_cPtr,$encoding);
	}

	function pkcs8ENC($encoding) {
		return CkPublicKey_pkcs8ENC($this->_cPtr,$encoding);
	}

	function GetRsaDer($outData) {
		return CkPublicKey_GetRsaDer($this->_cPtr,$outData);
	}

	function getXml() {
		return CkPublicKey_getXml($this->_cPtr);
	}

	function xml() {
		return CkPublicKey_xml($this->_cPtr);
	}

	function LoadBase64($keyStr) {
		return CkPublicKey_LoadBase64($this->_cPtr,$keyStr);
	}

	function LoadOpenSslDer($data) {
		return CkPublicKey_LoadOpenSslDer($this->_cPtr,$data);
	}

	function LoadOpenSslDerFile($path) {
		return CkPublicKey_LoadOpenSslDerFile($this->_cPtr,$path);
	}

	function LoadOpenSslPem($str) {
		return CkPublicKey_LoadOpenSslPem($this->_cPtr,$str);
	}

	function LoadOpenSslPemFile($path) {
		return CkPublicKey_LoadOpenSslPemFile($this->_cPtr,$path);
	}

	function LoadPkcs1Pem($str) {
		return CkPublicKey_LoadPkcs1Pem($this->_cPtr,$str);
	}

	function LoadRsaDer($data) {
		return CkPublicKey_LoadRsaDer($this->_cPtr,$data);
	}

	function LoadRsaDerFile($path) {
		return CkPublicKey_LoadRsaDerFile($this->_cPtr,$path);
	}

	function LoadXml($xml) {
		return CkPublicKey_LoadXml($this->_cPtr,$xml);
	}

	function LoadXmlFile($path) {
		return CkPublicKey_LoadXmlFile($this->_cPtr,$path);
	}

	function SaveOpenSslDerFile($path) {
		return CkPublicKey_SaveOpenSslDerFile($this->_cPtr,$path);
	}

	function SaveOpenSslPemFile($path) {
		return CkPublicKey_SaveOpenSslPemFile($this->_cPtr,$path);
	}

	function SaveRsaDerFile($path) {
		return CkPublicKey_SaveRsaDerFile($this->_cPtr,$path);
	}

	function SaveXmlFile($path) {
		return CkPublicKey_SaveXmlFile($this->_cPtr,$path);
	}

	function LoadFromBinary($keyBytes) {
		return CkPublicKey_LoadFromBinary($this->_cPtr,$keyBytes);
	}

	function LoadFromString($keyString) {
		return CkPublicKey_LoadFromString($this->_cPtr,$keyString);
	}

	function LoadFromFile($path) {
		return CkPublicKey_LoadFromFile($this->_cPtr,$path);
	}

	function GetDer($preferPkcs1,$outBytes) {
		return CkPublicKey_GetDer($this->_cPtr,$preferPkcs1,$outBytes);
	}

	function getPem($preferPkcs1) {
		return CkPublicKey_getPem($this->_cPtr,$preferPkcs1);
	}

	function pem($preferPkcs1) {
		return CkPublicKey_pem($this->_cPtr,$preferPkcs1);
	}

	function getEncoded($preferPkcs1,$encoding) {
		return CkPublicKey_getEncoded($this->_cPtr,$preferPkcs1,$encoding);
	}

	function encoded($preferPkcs1,$encoding) {
		return CkPublicKey_encoded($this->_cPtr,$preferPkcs1,$encoding);
	}

	function SaveDerFile($preferPkcs1,$path) {
		return CkPublicKey_SaveDerFile($this->_cPtr,$preferPkcs1,$path);
	}

	function SavePemFile($preferPkcs1,$path) {
		return CkPublicKey_SavePemFile($this->_cPtr,$preferPkcs1,$path);
	}
}


?>