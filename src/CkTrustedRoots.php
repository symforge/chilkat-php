<?php
class CkTrustedRoots {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkTrustedRoots') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkTrustedRoots();
	}

	function get_Utf8() {
		return CkTrustedRoots_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkTrustedRoots_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkTrustedRoots_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkTrustedRoots_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkTrustedRoots_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkTrustedRoots_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkTrustedRoots_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkTrustedRoots_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkTrustedRoots_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkTrustedRoots_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkTrustedRoots_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkTrustedRoots_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkTrustedRoots_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkTrustedRoots_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkTrustedRoots_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkTrustedRoots_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkTrustedRoots_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkTrustedRoots_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkTrustedRoots_SaveLastError($this->_cPtr,$path);
	}

	function get_NumCerts() {
		return CkTrustedRoots_get_NumCerts($this->_cPtr);
	}

	function get_TrustSystemCaRoots() {
		return CkTrustedRoots_get_TrustSystemCaRoots($this->_cPtr);
	}

	function put_TrustSystemCaRoots($newVal) {
		CkTrustedRoots_put_TrustSystemCaRoots($this->_cPtr,$newVal);
	}

	function Activate() {
		return CkTrustedRoots_Activate($this->_cPtr);
	}

	function AddCert($cert) {
		return CkTrustedRoots_AddCert($this->_cPtr,$cert);
	}

	function AddJavaKeyStore($keystore) {
		return CkTrustedRoots_AddJavaKeyStore($this->_cPtr,$keystore);
	}

	function AddJavaKeyStoreAsync($keystore) {
		$r=CkTrustedRoots_AddJavaKeyStoreAsync($this->_cPtr,$keystore);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Deactivate() {
		return CkTrustedRoots_Deactivate($this->_cPtr);
	}

	function GetCert($index) {
		$r=CkTrustedRoots_GetCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function LoadCaCertsPem($path) {
		return CkTrustedRoots_LoadCaCertsPem($this->_cPtr,$path);
	}

	function LoadCaCertsPemAsync($path) {
		$r=CkTrustedRoots_LoadCaCertsPemAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}
}


?>