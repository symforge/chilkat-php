<?php
class CkBaseProgress {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkBaseProgress') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkBaseProgress();
	}

	function AbortCheck() {
		return CkBaseProgress_AbortCheck($this->_cPtr);
	}

	function PercentDone($pctDone) {
		return CkBaseProgress_PercentDone($this->_cPtr,$pctDone);
	}

	function ProgressInfo($name,$value) {
		CkBaseProgress_ProgressInfo($this->_cPtr,$name,$value);
	}

	function TaskCompleted($task) {
		CkBaseProgress_TaskCompleted($this->_cPtr,$task);
	}

	function TextData($data) {
		CkBaseProgress_TextData($this->_cPtr,$data);
	}
}


?>