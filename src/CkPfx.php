<?php
class CkPfx {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkPfx') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkPfx();
	}

	function get_Utf8() {
		return CkPfx_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkPfx_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkPfx_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkPfx_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkPfx_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkPfx_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkPfx_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkPfx_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkPfx_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkPfx_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkPfx_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkPfx_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkPfx_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkPfx_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkPfx_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkPfx_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkPfx_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkPfx_SaveLastError($this->_cPtr,$path);
	}

	function get_NumCerts() {
		return CkPfx_get_NumCerts($this->_cPtr);
	}

	function get_NumPrivateKeys() {
		return CkPfx_get_NumPrivateKeys($this->_cPtr);
	}

	function AddCert($cert,$includeChain) {
		return CkPfx_AddCert($this->_cPtr,$cert,$includeChain);
	}

	function AddPrivateKey($privKey,$certChain) {
		return CkPfx_AddPrivateKey($this->_cPtr,$privKey,$certChain);
	}

	function GetCert($index) {
		$r=CkPfx_GetCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetPrivateKey($index) {
		$r=CkPfx_GetPrivateKey($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPrivateKey($r);
		}
		return $r;
	}

	function LoadPem($pemStr,$password) {
		return CkPfx_LoadPem($this->_cPtr,$pemStr,$password);
	}

	function LoadPfxBytes($pfxData,$password) {
		return CkPfx_LoadPfxBytes($this->_cPtr,$pfxData,$password);
	}

	function LoadPfxEncoded($encodedData,$encoding,$password) {
		return CkPfx_LoadPfxEncoded($this->_cPtr,$encodedData,$encoding,$password);
	}

	function LoadPfxFile($path,$password) {
		return CkPfx_LoadPfxFile($this->_cPtr,$path,$password);
	}

	function ToBinary($password,$outBytes) {
		return CkPfx_ToBinary($this->_cPtr,$password,$outBytes);
	}

	function toEncodedString($password,$encoding) {
		return CkPfx_toEncodedString($this->_cPtr,$password,$encoding);
	}

	function ToFile($password,$path) {
		return CkPfx_ToFile($this->_cPtr,$password,$path);
	}

	function ToJavaKeyStore($alias,$password) {
		$r=CkPfx_ToJavaKeyStore($this->_cPtr,$alias,$password);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJavaKeyStore($r);
		}
		return $r;
	}

	function toPem() {
		return CkPfx_toPem($this->_cPtr);
	}

	function toPemEx($extendedAttrs,$noKeys,$noCerts,$noCaCerts,$encryptAlg,$password) {
		return CkPfx_toPemEx($this->_cPtr,$extendedAttrs,$noKeys,$noCerts,$noCaCerts,$encryptAlg,$password);
	}

	function UseCertVault($vault) {
		return CkPfx_UseCertVault($this->_cPtr,$vault);
	}
}


?>