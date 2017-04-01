<?php
class CkMailboxes {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkMailboxes') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkMailboxes();
	}

	function get_Utf8() {
		return CkMailboxes_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkMailboxes_put_Utf8($this->_cPtr,$b);
	}

	function get_Count() {
		return CkMailboxes_get_Count($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkMailboxes_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkMailboxes_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function getFlags($index) {
		return CkMailboxes_getFlags($this->_cPtr,$index);
	}

	function flags($index) {
		return CkMailboxes_flags($this->_cPtr,$index);
	}

	function GetMailboxIndex($mbxName) {
		return CkMailboxes_GetMailboxIndex($this->_cPtr,$mbxName);
	}

	function getName($index) {
		return CkMailboxes_getName($this->_cPtr,$index);
	}

	function name($index) {
		return CkMailboxes_name($this->_cPtr,$index);
	}

	function getNthFlag($index,$flagIndex) {
		return CkMailboxes_getNthFlag($this->_cPtr,$index,$flagIndex);
	}

	function nthFlag($index,$flagIndex) {
		return CkMailboxes_nthFlag($this->_cPtr,$index,$flagIndex);
	}

	function GetNumFlags($index) {
		return CkMailboxes_GetNumFlags($this->_cPtr,$index);
	}

	function HasFlag($index,$flagName) {
		return CkMailboxes_HasFlag($this->_cPtr,$index,$flagName);
	}

	function HasInferiors($index) {
		return CkMailboxes_HasInferiors($this->_cPtr,$index);
	}

	function IsMarked($index) {
		return CkMailboxes_IsMarked($this->_cPtr,$index);
	}

	function IsSelectable($index) {
		return CkMailboxes_IsSelectable($this->_cPtr,$index);
	}

	function LoadTaskResult($task) {
		return CkMailboxes_LoadTaskResult($this->_cPtr,$task);
	}
}


?>