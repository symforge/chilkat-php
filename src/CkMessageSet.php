<?php
class CkMessageSet {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkMessageSet') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkMessageSet();
	}

	function get_Utf8() {
		return CkMessageSet_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkMessageSet_put_Utf8($this->_cPtr,$b);
	}

	function get_Count() {
		return CkMessageSet_get_Count($this->_cPtr);
	}

	function get_HasUids() {
		return CkMessageSet_get_HasUids($this->_cPtr);
	}

	function put_HasUids($newVal) {
		CkMessageSet_put_HasUids($this->_cPtr,$newVal);
	}

	function ContainsId($id) {
		return CkMessageSet_ContainsId($this->_cPtr,$id);
	}

	function FromCompactString($str) {
		return CkMessageSet_FromCompactString($this->_cPtr,$str);
	}

	function GetId($index) {
		return CkMessageSet_GetId($this->_cPtr,$index);
	}

	function InsertId($id) {
		CkMessageSet_InsertId($this->_cPtr,$id);
	}

	function LoadTaskResult($task) {
		return CkMessageSet_LoadTaskResult($this->_cPtr,$task);
	}

	function RemoveId($id) {
		CkMessageSet_RemoveId($this->_cPtr,$id);
	}

	function toCommaSeparatedStr() {
		return CkMessageSet_toCommaSeparatedStr($this->_cPtr);
	}

	function toCompactString() {
		return CkMessageSet_toCompactString($this->_cPtr);
	}
}


?>