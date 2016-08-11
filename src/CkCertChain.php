<?php
class CkCertChain {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCertChain') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCertChain();
	}

	function get_Utf8() {
		return CkCertChain_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCertChain_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkCertChain_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkCertChain_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkCertChain_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkCertChain_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkCertChain_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkCertChain_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkCertChain_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkCertChain_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkCertChain_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkCertChain_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkCertChain_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkCertChain_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkCertChain_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkCertChain_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkCertChain_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkCertChain_SaveLastError($this->_cPtr,$path);
	}

	function get_NumCerts() {
		return CkCertChain_get_NumCerts($this->_cPtr);
	}

	function get_NumExpiredCerts() {
		return CkCertChain_get_NumExpiredCerts($this->_cPtr);
	}

	function get_ReachesRoot() {
		return CkCertChain_get_ReachesRoot($this->_cPtr);
	}

	function GetCert($index) {
		$r=CkCertChain_GetCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function IsRootTrusted($trustedRoots) {
		return CkCertChain_IsRootTrusted($this->_cPtr,$trustedRoots);
	}

	function VerifyCertSignatures() {
		return CkCertChain_VerifyCertSignatures($this->_cPtr);
	}
}


?>