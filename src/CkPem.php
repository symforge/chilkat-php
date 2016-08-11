<?php
class CkPem {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkPem') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkPem();
	}

	function get_Utf8() {
		return CkPem_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkPem_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkPem_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkPem_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkPem_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkPem_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkPem_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkPem_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkPem_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkPem_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkPem_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkPem_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkPem_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkPem_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkPem_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkPem_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkPem_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkPem_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkPem_SaveLastError($this->_cPtr,$path);
	}

	function get_AppendMode() {
		return CkPem_get_AppendMode($this->_cPtr);
	}

	function put_AppendMode($newVal) {
		CkPem_put_AppendMode($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkPem_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkPem_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_NumCerts() {
		return CkPem_get_NumCerts($this->_cPtr);
	}

	function get_NumCsrs() {
		return CkPem_get_NumCsrs($this->_cPtr);
	}

	function get_NumPrivateKeys() {
		return CkPem_get_NumPrivateKeys($this->_cPtr);
	}

	function get_NumPublicKeys() {
		return CkPem_get_NumPublicKeys($this->_cPtr);
	}

	function get_PrivateKeyFormat($str) {
		CkPem_get_PrivateKeyFormat($this->_cPtr,$str);
	}

	function privateKeyFormat() {
		return CkPem_privateKeyFormat($this->_cPtr);
	}

	function put_PrivateKeyFormat($newVal) {
		CkPem_put_PrivateKeyFormat($this->_cPtr,$newVal);
	}

	function get_PublicKeyFormat($str) {
		CkPem_get_PublicKeyFormat($this->_cPtr,$str);
	}

	function publicKeyFormat() {
		return CkPem_publicKeyFormat($this->_cPtr);
	}

	function put_PublicKeyFormat($newVal) {
		CkPem_put_PublicKeyFormat($this->_cPtr,$newVal);
	}

	function AddCert($cert,$includeChain) {
		return CkPem_AddCert($this->_cPtr,$cert,$includeChain);
	}

	function AddPrivateKey($privateKey) {
		return CkPem_AddPrivateKey($this->_cPtr,$privateKey);
	}

	function AddPrivateKey2($privKey,$certChain) {
		return CkPem_AddPrivateKey2($this->_cPtr,$privKey,$certChain);
	}

	function AddPublicKey($pubkey) {
		return CkPem_AddPublicKey($this->_cPtr,$pubkey);
	}

	function Clear() {
		return CkPem_Clear($this->_cPtr);
	}

	function GetCert($index) {
		$r=CkPem_GetCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function getEncodedItem($itemType,$itemSubType,$encoding,$index) {
		return CkPem_getEncodedItem($this->_cPtr,$itemType,$itemSubType,$encoding,$index);
	}

	function encodedItem($itemType,$itemSubType,$encoding,$index) {
		return CkPem_encodedItem($this->_cPtr,$itemType,$itemSubType,$encoding,$index);
	}

	function GetPrivateKey($index) {
		$r=CkPem_GetPrivateKey($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPrivateKey($r);
		}
		return $r;
	}

	function GetPublicKey($index) {
		$r=CkPem_GetPublicKey($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPublicKey($r);
		}
		return $r;
	}

	function LoadP7b($p7bData) {
		return CkPem_LoadP7b($this->_cPtr,$p7bData);
	}

	function LoadP7bAsync($p7bData) {
		$r=CkPem_LoadP7bAsync($this->_cPtr,$p7bData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function LoadP7bFile($path) {
		return CkPem_LoadP7bFile($this->_cPtr,$path);
	}

	function LoadP7bFileAsync($path) {
		$r=CkPem_LoadP7bFileAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function LoadPem($pemContent,$password) {
		return CkPem_LoadPem($this->_cPtr,$pemContent,$password);
	}

	function LoadPemAsync($pemContent,$password) {
		$r=CkPem_LoadPemAsync($this->_cPtr,$pemContent,$password);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function LoadPemFile($path,$password) {
		return CkPem_LoadPemFile($this->_cPtr,$path,$password);
	}

	function LoadPemFileAsync($path,$password) {
		$r=CkPem_LoadPemFileAsync($this->_cPtr,$path,$password);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RemoveCert($index) {
		return CkPem_RemoveCert($this->_cPtr,$index);
	}

	function RemovePrivateKey($index) {
		return CkPem_RemovePrivateKey($this->_cPtr,$index);
	}

	function ToJks($alias,$password) {
		$r=CkPem_ToJks($this->_cPtr,$alias,$password);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJavaKeyStore($r);
		}
		return $r;
	}

	function toPem() {
		return CkPem_toPem($this->_cPtr);
	}

	function toPemEx($extendedAttrs,$noKeys,$noCerts,$noCaCerts,$encryptAlg,$password) {
		return CkPem_toPemEx($this->_cPtr,$extendedAttrs,$noKeys,$noCerts,$noCaCerts,$encryptAlg,$password);
	}

	function ToPfx() {
		$r=CkPem_ToPfx($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPfx($r);
		}
		return $r;
	}
}


?>