<?php
class SYSTEMTIME {

	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		$func = 'SYSTEMTIME_'.$var.'_set';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr,$value);
		if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		$func = 'SYSTEMTIME_'.$var.'_get';
		if (function_exists($func)) return call_user_func($func,$this->_cPtr);
		if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if (function_exists('SYSTEMTIME_'.$var.'_get')) return true;
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_SYSTEMTIME') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_SYSTEMTIME();
	}
}


?>