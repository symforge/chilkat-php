<?php
class CkDtObj {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkDtObj') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkDtObj();
	}

	function get_Utf8() {
		return CkDtObj_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkDtObj_put_Utf8($this->_cPtr,$b);
	}

	function get_Utc() {
		return CkDtObj_get_Utc($this->_cPtr);
	}

	function put_Utc($newVal) {
		CkDtObj_put_Utc($this->_cPtr,$newVal);
	}

	function get_Year() {
		return CkDtObj_get_Year($this->_cPtr);
	}

	function put_Year($newVal) {
		CkDtObj_put_Year($this->_cPtr,$newVal);
	}

	function get_Month() {
		return CkDtObj_get_Month($this->_cPtr);
	}

	function put_Month($newVal) {
		CkDtObj_put_Month($this->_cPtr,$newVal);
	}

	function get_Day() {
		return CkDtObj_get_Day($this->_cPtr);
	}

	function put_Day($newVal) {
		CkDtObj_put_Day($this->_cPtr,$newVal);
	}

	function get_Hour() {
		return CkDtObj_get_Hour($this->_cPtr);
	}

	function put_Hour($newVal) {
		CkDtObj_put_Hour($this->_cPtr,$newVal);
	}

	function get_Minute() {
		return CkDtObj_get_Minute($this->_cPtr);
	}

	function put_Minute($newVal) {
		CkDtObj_put_Minute($this->_cPtr,$newVal);
	}

	function get_Second() {
		return CkDtObj_get_Second($this->_cPtr);
	}

	function put_Second($newVal) {
		CkDtObj_put_Second($this->_cPtr,$newVal);
	}

	function get_StructTmYear() {
		return CkDtObj_get_StructTmYear($this->_cPtr);
	}

	function put_StructTmYear($newVal) {
		CkDtObj_put_StructTmYear($this->_cPtr,$newVal);
	}

	function get_StructTmMonth() {
		return CkDtObj_get_StructTmMonth($this->_cPtr);
	}

	function put_StructTmMonth($newVal) {
		CkDtObj_put_StructTmMonth($this->_cPtr,$newVal);
	}

	function serialize() {
		return CkDtObj_serialize($this->_cPtr);
	}

	function DeSerialize($serializedDtObj) {
		CkDtObj_DeSerialize($this->_cPtr,$serializedDtObj);
	}
}


?>