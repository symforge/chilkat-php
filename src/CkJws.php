<?php
class CkJws {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkJws') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkJws();
	}

	function get_Utf8() {
		return CkJws_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkJws_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkJws_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkJws_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkJws_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkJws_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkJws_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkJws_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkJws_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkJws_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkJws_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkJws_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkJws_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumSignatures() {
		return CkJws_get_NumSignatures($this->_cPtr);
	}

	function get_PreferCompact() {
		return CkJws_get_PreferCompact($this->_cPtr);
	}

	function put_PreferCompact($newVal) {
		CkJws_put_PreferCompact($this->_cPtr,$newVal);
	}

	function get_PreferFlattened() {
		return CkJws_get_PreferFlattened($this->_cPtr);
	}

	function put_PreferFlattened($newVal) {
		CkJws_put_PreferFlattened($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkJws_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkJws_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkJws_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkJws_version($this->_cPtr);
	}

	function createJws() {
		return CkJws_createJws($this->_cPtr);
	}

	function CreateJwsSb($sbJws) {
		return CkJws_CreateJwsSb($this->_cPtr,$sbJws);
	}

	function getPayload($charset) {
		return CkJws_getPayload($this->_cPtr,$charset);
	}

	function payload($charset) {
		return CkJws_payload($this->_cPtr,$charset);
	}

	function GetPayloadBd($binData) {
		return CkJws_GetPayloadBd($this->_cPtr,$binData);
	}

	function GetPayloadSb($charset,$sbPayload) {
		return CkJws_GetPayloadSb($this->_cPtr,$charset,$sbPayload);
	}

	function GetProtectedHeader($index) {
		$r=CkJws_GetProtectedHeader($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function GetUnprotectedHeader($index) {
		$r=CkJws_GetUnprotectedHeader($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function LoadJws($jwsStr) {
		return CkJws_LoadJws($this->_cPtr,$jwsStr);
	}

	function LoadJwsSb($sbJws) {
		return CkJws_LoadJwsSb($this->_cPtr,$sbJws);
	}

	function SaveLastError($path) {
		return CkJws_SaveLastError($this->_cPtr,$path);
	}

	function SetMacKey($index,$key,$encoding) {
		return CkJws_SetMacKey($this->_cPtr,$index,$key,$encoding);
	}

	function SetMacKeyBd($index,$key) {
		return CkJws_SetMacKeyBd($this->_cPtr,$index,$key);
	}

	function SetPayload($payload,$charset,$includeBom) {
		return CkJws_SetPayload($this->_cPtr,$payload,$charset,$includeBom);
	}

	function SetPayloadBd($binData) {
		return CkJws_SetPayloadBd($this->_cPtr,$binData);
	}

	function SetPayloadSb($sbPayload,$charset,$includeBom) {
		return CkJws_SetPayloadSb($this->_cPtr,$sbPayload,$charset,$includeBom);
	}

	function SetPrivateKey($index,$privKey) {
		return CkJws_SetPrivateKey($this->_cPtr,$index,$privKey);
	}

	function SetProtectedHeader($index,$json) {
		return CkJws_SetProtectedHeader($this->_cPtr,$index,$json);
	}

	function SetPublicKey($index,$pubKey) {
		return CkJws_SetPublicKey($this->_cPtr,$index,$pubKey);
	}

	function SetUnprotectedHeader($index,$json) {
		return CkJws_SetUnprotectedHeader($this->_cPtr,$index,$json);
	}

	function Validate($index) {
		return CkJws_Validate($this->_cPtr,$index);
	}
}


?>

?>