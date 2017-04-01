<?php
class CkPrivateKey {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkPrivateKey') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkPrivateKey();
	}

	function get_Utf8() {
		return CkPrivateKey_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkPrivateKey_put_Utf8($this->_cPtr,$b);
	}

	function get_BitLength() {
		return CkPrivateKey_get_BitLength($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkPrivateKey_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkPrivateKey_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkPrivateKey_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_KeyType($str) {
		CkPrivateKey_get_KeyType($this->_cPtr,$str);
	}

	function keyType() {
		return CkPrivateKey_keyType($this->_cPtr);
	}

	function get_LastErrorHtml($str) {
		CkPrivateKey_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkPrivateKey_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkPrivateKey_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkPrivateKey_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkPrivateKey_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkPrivateKey_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkPrivateKey_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkPrivateKey_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Pkcs8EncryptAlg($str) {
		CkPrivateKey_get_Pkcs8EncryptAlg($this->_cPtr,$str);
	}

	function pkcs8EncryptAlg() {
		return CkPrivateKey_pkcs8EncryptAlg($this->_cPtr);
	}

	function put_Pkcs8EncryptAlg($newVal) {
		CkPrivateKey_put_Pkcs8EncryptAlg($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkPrivateKey_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkPrivateKey_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkPrivateKey_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkPrivateKey_version($this->_cPtr);
	}

	function getJwk() {
		return CkPrivateKey_getJwk($this->_cPtr);
	}

	function jwk() {
		return CkPrivateKey_jwk($this->_cPtr);
	}

	function getJwkThumbprint($hashAlg) {
		return CkPrivateKey_getJwkThumbprint($this->_cPtr,$hashAlg);
	}

	function jwkThumbprint($hashAlg) {
		return CkPrivateKey_jwkThumbprint($this->_cPtr,$hashAlg);
	}

	function GetPkcs1($outBytes) {
		return CkPrivateKey_GetPkcs1($this->_cPtr,$outBytes);
	}

	function getPkcs1ENC($encoding) {
		return CkPrivateKey_getPkcs1ENC($this->_cPtr,$encoding);
	}

	function pkcs1ENC($encoding) {
		return CkPrivateKey_pkcs1ENC($this->_cPtr,$encoding);
	}

	function getPkcs1Pem() {
		return CkPrivateKey_getPkcs1Pem($this->_cPtr);
	}

	function pkcs1Pem() {
		return CkPrivateKey_pkcs1Pem($this->_cPtr);
	}

	function GetPkcs8($outData) {
		return CkPrivateKey_GetPkcs8($this->_cPtr,$outData);
	}

	function getPkcs8ENC($encoding) {
		return CkPrivateKey_getPkcs8ENC($this->_cPtr,$encoding);
	}

	function pkcs8ENC($encoding) {
		return CkPrivateKey_pkcs8ENC($this->_cPtr,$encoding);
	}

	function GetPkcs8Encrypted($password,$outBytes) {
		return CkPrivateKey_GetPkcs8Encrypted($this->_cPtr,$password,$outBytes);
	}

	function getPkcs8EncryptedENC($encoding,$password) {
		return CkPrivateKey_getPkcs8EncryptedENC($this->_cPtr,$encoding,$password);
	}

	function pkcs8EncryptedENC($encoding,$password) {
		return CkPrivateKey_pkcs8EncryptedENC($this->_cPtr,$encoding,$password);
	}

	function getPkcs8EncryptedPem($password) {
		return CkPrivateKey_getPkcs8EncryptedPem($this->_cPtr,$password);
	}

	function pkcs8EncryptedPem($password) {
		return CkPrivateKey_pkcs8EncryptedPem($this->_cPtr,$password);
	}

	function getPkcs8Pem() {
		return CkPrivateKey_getPkcs8Pem($this->_cPtr);
	}

	function pkcs8Pem() {
		return CkPrivateKey_pkcs8Pem($this->_cPtr);
	}

	function GetPublicKey() {
		$r=CkPrivateKey_GetPublicKey($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPublicKey($r);
		}
		return $r;
	}

	function GetRsaDer($outData) {
		return CkPrivateKey_GetRsaDer($this->_cPtr,$outData);
	}

	function getRsaPem() {
		return CkPrivateKey_getRsaPem($this->_cPtr);
	}

	function rsaPem() {
		return CkPrivateKey_rsaPem($this->_cPtr);
	}

	function getXml() {
		return CkPrivateKey_getXml($this->_cPtr);
	}

	function xml() {
		return CkPrivateKey_xml($this->_cPtr);
	}

	function LoadEncryptedPem($pemStr,$password) {
		return CkPrivateKey_LoadEncryptedPem($this->_cPtr,$pemStr,$password);
	}

	function LoadEncryptedPemFile($path,$password) {
		return CkPrivateKey_LoadEncryptedPemFile($this->_cPtr,$path,$password);
	}

	function LoadJwk($jsonStr) {
		return CkPrivateKey_LoadJwk($this->_cPtr,$jsonStr);
	}

	function LoadPem($str) {
		return CkPrivateKey_LoadPem($this->_cPtr,$str);
	}

	function LoadPemFile($path) {
		return CkPrivateKey_LoadPemFile($this->_cPtr,$path);
	}

	function LoadPkcs1($data) {
		return CkPrivateKey_LoadPkcs1($this->_cPtr,$data);
	}

	function LoadPkcs1File($path) {
		return CkPrivateKey_LoadPkcs1File($this->_cPtr,$path);
	}

	function LoadPkcs8($data) {
		return CkPrivateKey_LoadPkcs8($this->_cPtr,$data);
	}

	function LoadPkcs8Encrypted($data,$password) {
		return CkPrivateKey_LoadPkcs8Encrypted($this->_cPtr,$data,$password);
	}

	function LoadPkcs8EncryptedFile($path,$password) {
		return CkPrivateKey_LoadPkcs8EncryptedFile($this->_cPtr,$path,$password);
	}

	function LoadPkcs8File($path) {
		return CkPrivateKey_LoadPkcs8File($this->_cPtr,$path);
	}

	function LoadRsaDer($data) {
		return CkPrivateKey_LoadRsaDer($this->_cPtr,$data);
	}

	function LoadRsaDerFile($path) {
		return CkPrivateKey_LoadRsaDerFile($this->_cPtr,$path);
	}

	function LoadXml($xml) {
		return CkPrivateKey_LoadXml($this->_cPtr,$xml);
	}

	function LoadXmlFile($path) {
		return CkPrivateKey_LoadXmlFile($this->_cPtr,$path);
	}

	function SaveLastError($path) {
		return CkPrivateKey_SaveLastError($this->_cPtr,$path);
	}

	function SavePemFile($path) {
		return CkPrivateKey_SavePemFile($this->_cPtr,$path);
	}

	function SavePkcs1File($path) {
		return CkPrivateKey_SavePkcs1File($this->_cPtr,$path);
	}

	function SavePkcs8EncryptedFile($password,$path) {
		return CkPrivateKey_SavePkcs8EncryptedFile($this->_cPtr,$password,$path);
	}

	function SavePkcs8EncryptedPemFile($password,$path) {
		return CkPrivateKey_SavePkcs8EncryptedPemFile($this->_cPtr,$password,$path);
	}

	function SavePkcs8File($path) {
		return CkPrivateKey_SavePkcs8File($this->_cPtr,$path);
	}

	function SavePkcs8PemFile($path) {
		return CkPrivateKey_SavePkcs8PemFile($this->_cPtr,$path);
	}

	function SaveRsaDerFile($path) {
		return CkPrivateKey_SaveRsaDerFile($this->_cPtr,$path);
	}

	function SaveRsaPemFile($path) {
		return CkPrivateKey_SaveRsaPemFile($this->_cPtr,$path);
	}

	function SaveXmlFile($path) {
		return CkPrivateKey_SaveXmlFile($this->_cPtr,$path);
	}
}


?>