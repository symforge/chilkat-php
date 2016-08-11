<?php
class CkDateTime {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkDateTime') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkDateTime();
	}

	function get_Utf8() {
		return CkDateTime_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkDateTime_put_Utf8($this->_cPtr,$b);
	}

	function get_IsDst() {
		return CkDateTime_get_IsDst($this->_cPtr);
	}

	function get_UtcOffset() {
		return CkDateTime_get_UtcOffset($this->_cPtr);
	}

	function SetFromCurrentSystemTime() {
		CkDateTime_SetFromCurrentSystemTime($this->_cPtr);
	}

	function SetFromRfc822($rfc822Str) {
		return CkDateTime_SetFromRfc822($this->_cPtr,$rfc822Str);
	}

	function GetAsUnixTimeInt($bLocal) {
		return CkDateTime_GetAsUnixTimeInt($this->_cPtr,$bLocal);
	}

	function GetAsUnixTime64($bLocal) {
		return CkDateTime_GetAsUnixTime64($this->_cPtr,$bLocal);
	}

	function GetAsOleDate($bLocal) {
		return CkDateTime_GetAsOleDate($this->_cPtr,$bLocal);
	}

	function GetAsDosDate($bLocal) {
		return CkDateTime_GetAsDosDate($this->_cPtr,$bLocal);
	}

	function GetAsDateTimeTicks($bLocal) {
		return CkDateTime_GetAsDateTimeTicks($this->_cPtr,$bLocal);
	}

	function SetFromUnixTime64($bLocal,$t) {
		CkDateTime_SetFromUnixTime64($this->_cPtr,$bLocal,$t);
	}

	function SetFromOleDate($bLocal,$dt) {
		CkDateTime_SetFromOleDate($this->_cPtr,$bLocal,$dt);
	}

	function SetFromDosDate($bLocal,$t) {
		CkDateTime_SetFromDosDate($this->_cPtr,$bLocal,$t);
	}

	function SetFromDateTimeTicks($bLocal,$n) {
		CkDateTime_SetFromDateTimeTicks($this->_cPtr,$bLocal,$n);
	}

	function serialize() {
		return CkDateTime_serialize($this->_cPtr);
	}

	function DeSerialize($serializedDateTime) {
		CkDateTime_DeSerialize($this->_cPtr,$serializedDateTime);
	}

	function AddDays($numDays) {
		return CkDateTime_AddDays($this->_cPtr,$numDays);
	}

	function getAsRfc822($bLocal) {
		return CkDateTime_getAsRfc822($this->_cPtr,$bLocal);
	}
}


?>