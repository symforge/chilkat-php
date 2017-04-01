<?php
class CkJavaKeyStore {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkJavaKeyStore') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkJavaKeyStore();
	}

	function get_Utf8() {
		return CkJavaKeyStore_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkJavaKeyStore_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkJavaKeyStore_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkJavaKeyStore_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkJavaKeyStore_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkJavaKeyStore_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkJavaKeyStore_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkJavaKeyStore_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkJavaKeyStore_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkJavaKeyStore_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkJavaKeyStore_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkJavaKeyStore_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkJavaKeyStore_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumPrivateKeys() {
		return CkJavaKeyStore_get_NumPrivateKeys($this->_cPtr);
	}

	function get_NumSecretKeys() {
		return CkJavaKeyStore_get_NumSecretKeys($this->_cPtr);
	}

	function get_NumTrustedCerts() {
		return CkJavaKeyStore_get_NumTrustedCerts($this->_cPtr);
	}

	function get_RequireCompleteChain() {
		return CkJavaKeyStore_get_RequireCompleteChain($this->_cPtr);
	}

	function put_RequireCompleteChain($newVal) {
		CkJavaKeyStore_put_RequireCompleteChain($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkJavaKeyStore_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkJavaKeyStore_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_VerifyKeyedDigest() {
		return CkJavaKeyStore_get_VerifyKeyedDigest($this->_cPtr);
	}

	function put_VerifyKeyedDigest($newVal) {
		CkJavaKeyStore_put_VerifyKeyedDigest($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkJavaKeyStore_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkJavaKeyStore_version($this->_cPtr);
	}

	function AddPfx($pfx,$alias,$password) {
		return CkJavaKeyStore_AddPfx($this->_cPtr,$pfx,$alias,$password);
	}

	function AddPrivateKey($cert,$alias,$password) {
		return CkJavaKeyStore_AddPrivateKey($this->_cPtr,$cert,$alias,$password);
	}

	function AddSecretKey($encodedKeyBytes,$encoding,$algorithm,$alias,$password) {
		return CkJavaKeyStore_AddSecretKey($this->_cPtr,$encodedKeyBytes,$encoding,$algorithm,$alias,$password);
	}

	function AddTrustedCert($cert,$alias) {
		return CkJavaKeyStore_AddTrustedCert($this->_cPtr,$cert,$alias);
	}

	function ChangePassword($index,$oldPassword,$newPassword) {
		return CkJavaKeyStore_ChangePassword($this->_cPtr,$index,$oldPassword,$newPassword);
	}

	function FindCertChain($alias,$caseSensitive) {
		$r=CkJavaKeyStore_FindCertChain($this->_cPtr,$alias,$caseSensitive);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertChain($r);
		}
		return $r;
	}

	function FindPrivateKey($password,$alias,$caseSensitive) {
		$r=CkJavaKeyStore_FindPrivateKey($this->_cPtr,$password,$alias,$caseSensitive);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPrivateKey($r);
		}
		return $r;
	}

	function FindTrustedCert($alias,$caseSensitive) {
		$r=CkJavaKeyStore_FindTrustedCert($this->_cPtr,$alias,$caseSensitive);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetCertChain($index) {
		$r=CkJavaKeyStore_GetCertChain($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertChain($r);
		}
		return $r;
	}

	function GetPrivateKey($password,$index) {
		$r=CkJavaKeyStore_GetPrivateKey($this->_cPtr,$password,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPrivateKey($r);
		}
		return $r;
	}

	function getPrivateKeyAlias($index) {
		return CkJavaKeyStore_getPrivateKeyAlias($this->_cPtr,$index);
	}

	function privateKeyAlias($index) {
		return CkJavaKeyStore_privateKeyAlias($this->_cPtr,$index);
	}

	function getSecretKey($password,$index,$encoding) {
		return CkJavaKeyStore_getSecretKey($this->_cPtr,$password,$index,$encoding);
	}

	function secretKey($password,$index,$encoding) {
		return CkJavaKeyStore_secretKey($this->_cPtr,$password,$index,$encoding);
	}

	function getSecretKeyAlias($index) {
		return CkJavaKeyStore_getSecretKeyAlias($this->_cPtr,$index);
	}

	function secretKeyAlias($index) {
		return CkJavaKeyStore_secretKeyAlias($this->_cPtr,$index);
	}

	function GetTrustedCert($index) {
		$r=CkJavaKeyStore_GetTrustedCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function getTrustedCertAlias($index) {
		return CkJavaKeyStore_getTrustedCertAlias($this->_cPtr,$index);
	}

	function trustedCertAlias($index) {
		return CkJavaKeyStore_trustedCertAlias($this->_cPtr,$index);
	}

	function LoadBinary($password,$jksData) {
		return CkJavaKeyStore_LoadBinary($this->_cPtr,$password,$jksData);
	}

	function LoadEncoded($password,$jksEncData,$encoding) {
		return CkJavaKeyStore_LoadEncoded($this->_cPtr,$password,$jksEncData,$encoding);
	}

	function LoadFile($password,$path) {
		return CkJavaKeyStore_LoadFile($this->_cPtr,$password,$path);
	}

	function LoadJwkSet($password,$jwkSet) {
		return CkJavaKeyStore_LoadJwkSet($this->_cPtr,$password,$jwkSet);
	}

	function RemoveEntry($entryType,$index) {
		return CkJavaKeyStore_RemoveEntry($this->_cPtr,$entryType,$index);
	}

	function SaveLastError($path) {
		return CkJavaKeyStore_SaveLastError($this->_cPtr,$path);
	}

	function SetAlias($entryType,$index,$alias) {
		return CkJavaKeyStore_SetAlias($this->_cPtr,$entryType,$index,$alias);
	}

	function ToBinary($password,$outBytes) {
		return CkJavaKeyStore_ToBinary($this->_cPtr,$password,$outBytes);
	}

	function toEncodedString($password,$encoding) {
		return CkJavaKeyStore_toEncodedString($this->_cPtr,$password,$encoding);
	}

	function ToFile($password,$path) {
		return CkJavaKeyStore_ToFile($this->_cPtr,$password,$path);
	}

	function ToJwkSet($password,$sbJwkSet) {
		return CkJavaKeyStore_ToJwkSet($this->_cPtr,$password,$sbJwkSet);
	}

	function ToPem($password) {
		$r=CkJavaKeyStore_ToPem($this->_cPtr,$password);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPem($r);
		}
		return $r;
	}

	function ToPfx($password) {
		$r=CkJavaKeyStore_ToPfx($this->_cPtr,$password);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPfx($r);
		}
		return $r;
	}

	function UnlockComponent($unlockCode) {
		return CkJavaKeyStore_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function UseCertVault($vault) {
		return CkJavaKeyStore_UseCertVault($this->_cPtr,$vault);
	}
}


?>