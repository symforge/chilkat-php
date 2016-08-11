<?php
class CkHashtable {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkHashtable') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkHashtable();
	}

	function get_Utf8() {
		return CkHashtable_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkHashtable_put_Utf8($this->_cPtr,$b);
	}

	function AddInt($key,$value) {
		return CkHashtable_AddInt($this->_cPtr,$key,$value);
	}

	function AddStr($key,$value) {
		return CkHashtable_AddStr($this->_cPtr,$key,$value);
	}

	function Clear() {
		CkHashtable_Clear($this->_cPtr);
	}

	function ClearWithNewCapacity($capacity) {
		return CkHashtable_ClearWithNewCapacity($this->_cPtr,$capacity);
	}

	function Contains($key) {
		return CkHashtable_Contains($this->_cPtr,$key);
	}

	function LookupInt($key) {
		return CkHashtable_LookupInt($this->_cPtr,$key);
	}

	function lookupStr($key) {
		return CkHashtable_lookupStr($this->_cPtr,$key);
	}

	function Remove($key) {
		return CkHashtable_Remove($this->_cPtr,$key);
	}
}


?>