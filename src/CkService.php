<?php
class CkService {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkService') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkService();
	}

	function get_Utf8() {
		return CkService_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkService_put_Utf8($this->_cPtr,$b);
	}

	function SaveLastError($filename) {
		return CkService_SaveLastError($this->_cPtr,$filename);
	}

	function lastErrorText() {
		return CkService_lastErrorText($this->_cPtr);
	}

	function lastErrorXml() {
		return CkService_lastErrorXml($this->_cPtr);
	}

	function lastErrorHtml() {
		return CkService_lastErrorHtml($this->_cPtr);
	}

	function Install() {
		return CkService_Install($this->_cPtr);
	}

	function Uninstall() {
		return CkService_Uninstall($this->_cPtr);
	}

	function Start() {
		return CkService_Start($this->_cPtr);
	}

	function Stop() {
		return CkService_Stop($this->_cPtr);
	}

	function get_ServiceName($str) {
		CkService_get_ServiceName($this->_cPtr,$str);
	}

	function serviceName() {
		return CkService_serviceName($this->_cPtr);
	}

	function put_ServiceName($newVal) {
		CkService_put_ServiceName($this->_cPtr,$newVal);
	}

	function get_DisplayName($str) {
		CkService_get_DisplayName($this->_cPtr,$str);
	}

	function displayName() {
		return CkService_displayName($this->_cPtr);
	}

	function put_DisplayName($newVal) {
		CkService_put_DisplayName($this->_cPtr,$newVal);
	}

	function get_ExeFilename($str) {
		CkService_get_ExeFilename($this->_cPtr,$str);
	}

	function exeFilename() {
		return CkService_exeFilename($this->_cPtr);
	}

	function put_ExeFilename($newVal) {
		CkService_put_ExeFilename($this->_cPtr,$newVal);
	}

	function get_AutoStart() {
		return CkService_get_AutoStart($this->_cPtr);
	}

	function put_AutoStart($newVal) {
		CkService_put_AutoStart($this->_cPtr,$newVal);
	}

	function SetAutoStart() {
		return CkService_SetAutoStart($this->_cPtr);
	}

	function SetDemandStart() {
		return CkService_SetDemandStart($this->_cPtr);
	}

	function Disable() {
		return CkService_Disable($this->_cPtr);
	}

	function IsAutoStart() {
		return CkService_IsAutoStart($this->_cPtr);
	}

	function IsDemandStart() {
		return CkService_IsDemandStart($this->_cPtr);
	}

	function IsDisabled() {
		return CkService_IsDisabled($this->_cPtr);
	}

	function IsInstalled() {
		return CkService_IsInstalled($this->_cPtr);
	}

	function IsRunning() {
		return CkService_IsRunning($this->_cPtr);
	}
}


?>