<?php
class CkXmlCertVault {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkXmlCertVault') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkXmlCertVault();
	}

	function get_Utf8() {
		return CkXmlCertVault_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkXmlCertVault_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkXmlCertVault_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkXmlCertVault_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkXmlCertVault_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkXmlCertVault_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkXmlCertVault_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkXmlCertVault_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkXmlCertVault_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkXmlCertVault_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkXmlCertVault_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkXmlCertVault_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkXmlCertVault_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_MasterPassword($str) {
		CkXmlCertVault_get_MasterPassword($this->_cPtr,$str);
	}

	function masterPassword() {
		return CkXmlCertVault_masterPassword($this->_cPtr);
	}

	function put_MasterPassword($newVal) {
		CkXmlCertVault_put_MasterPassword($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkXmlCertVault_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkXmlCertVault_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkXmlCertVault_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkXmlCertVault_version($this->_cPtr);
	}

	function AddCert($cert) {
		return CkXmlCertVault_AddCert($this->_cPtr,$cert);
	}

	function AddCertBinary($certBytes) {
		return CkXmlCertVault_AddCertBinary($this->_cPtr,$certBytes);
	}

	function AddCertChain($certChain) {
		return CkXmlCertVault_AddCertChain($this->_cPtr,$certChain);
	}

	function AddCertEncoded($encodedBytes,$encoding) {
		return CkXmlCertVault_AddCertEncoded($this->_cPtr,$encodedBytes,$encoding);
	}

	function AddCertFile($path) {
		return CkXmlCertVault_AddCertFile($this->_cPtr,$path);
	}

	function AddCertString($certData) {
		return CkXmlCertVault_AddCertString($this->_cPtr,$certData);
	}

	function AddPemFile($path,$password) {
		return CkXmlCertVault_AddPemFile($this->_cPtr,$path,$password);
	}

	function AddPfx($pfx) {
		return CkXmlCertVault_AddPfx($this->_cPtr,$pfx);
	}

	function AddPfxBinary($pfxBytes,$password) {
		return CkXmlCertVault_AddPfxBinary($this->_cPtr,$pfxBytes,$password);
	}

	function AddPfxEncoded($encodedBytes,$encoding,$password) {
		return CkXmlCertVault_AddPfxEncoded($this->_cPtr,$encodedBytes,$encoding,$password);
	}

	function AddPfxFile($path,$password) {
		return CkXmlCertVault_AddPfxFile($this->_cPtr,$path,$password);
	}

	function getXml() {
		return CkXmlCertVault_getXml($this->_cPtr);
	}

	function xml() {
		return CkXmlCertVault_xml($this->_cPtr);
	}

	function LoadXml($xml) {
		return CkXmlCertVault_LoadXml($this->_cPtr,$xml);
	}

	function LoadXmlFile($path) {
		return CkXmlCertVault_LoadXmlFile($this->_cPtr,$path);
	}

	function SaveLastError($path) {
		return CkXmlCertVault_SaveLastError($this->_cPtr,$path);
	}

	function SaveXml($path) {
		return CkXmlCertVault_SaveXml($this->_cPtr,$path);
	}
}


?>