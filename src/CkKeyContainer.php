<?php
class CkKeyContainer {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkKeyContainer') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkKeyContainer();
	}

	function get_Utf8() {
		return CkKeyContainer_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkKeyContainer_put_Utf8($this->_cPtr,$b);
	}

	function get_IsOpen() {
		return CkKeyContainer_get_IsOpen($this->_cPtr);
	}

	function get_IsMachineKeyset() {
		return CkKeyContainer_get_IsMachineKeyset($this->_cPtr);
	}

	function get_ContainerName($name) {
		CkKeyContainer_get_ContainerName($this->_cPtr,$name);
	}

	function CreateContainer($name,$machineKeyset) {
		return CkKeyContainer_CreateContainer($this->_cPtr,$name,$machineKeyset);
	}

	function OpenContainer($name,$needPrivateKeyAccess,$machineKeyset) {
		return CkKeyContainer_OpenContainer($this->_cPtr,$name,$needPrivateKeyAccess,$machineKeyset);
	}

	function DeleteContainer() {
		return CkKeyContainer_DeleteContainer($this->_cPtr);
	}

	function CloseContainer() {
		CkKeyContainer_CloseContainer($this->_cPtr);
	}

	function GenerateKeyPair($bKeyExchangePair,$keyLengthInBits) {
		return CkKeyContainer_GenerateKeyPair($this->_cPtr,$bKeyExchangePair,$keyLengthInBits);
	}

	function GetPrivateKey($bKeyExchangePair) {
		$r=CkKeyContainer_GetPrivateKey($this->_cPtr,$bKeyExchangePair);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPrivateKey($r);
		}
		return $r;
	}

	function GetPublicKey($bKeyExchangePair) {
		$r=CkKeyContainer_GetPublicKey($this->_cPtr,$bKeyExchangePair);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPublicKey($r);
		}
		return $r;
	}

	function ImportPublicKey($key,$bKeyExchangePair) {
		return CkKeyContainer_ImportPublicKey($this->_cPtr,$key,$bKeyExchangePair);
	}

	function ImportPrivateKey($key,$bKeyExchangePair) {
		return CkKeyContainer_ImportPrivateKey($this->_cPtr,$key,$bKeyExchangePair);
	}

	function FetchContainerNames($bMachineKeyset) {
		return CkKeyContainer_FetchContainerNames($this->_cPtr,$bMachineKeyset);
	}

	function GetNumContainers($bMachineKeyset) {
		return CkKeyContainer_GetNumContainers($this->_cPtr,$bMachineKeyset);
	}

	function getNthContainerName($bMachineKeyset,$index) {
		return CkKeyContainer_getNthContainerName($this->_cPtr,$bMachineKeyset,$index);
	}

	function containerName() {
		return CkKeyContainer_containerName($this->_cPtr);
	}

	function generateUuid() {
		return CkKeyContainer_generateUuid($this->_cPtr);
	}

	function SaveLastError($filename) {
		return CkKeyContainer_SaveLastError($this->_cPtr,$filename);
	}

	function lastErrorText() {
		return CkKeyContainer_lastErrorText($this->_cPtr);
	}

	function lastErrorXml() {
		return CkKeyContainer_lastErrorXml($this->_cPtr);
	}

	function lastErrorHtml() {
		return CkKeyContainer_lastErrorHtml($this->_cPtr);
	}
}


?>