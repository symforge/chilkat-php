<?php
class CkStringBuilder {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkStringBuilder') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkStringBuilder();
	}

	function get_Utf8() {
		return CkStringBuilder_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkStringBuilder_put_Utf8($this->_cPtr,$b);
	}

	function get_Length() {
		return CkStringBuilder_get_Length($this->_cPtr);
	}

	function Append($value) {
		return CkStringBuilder_Append($this->_cPtr,$value);
	}

	function AppendInt($value) {
		return CkStringBuilder_AppendInt($this->_cPtr,$value);
	}

	function AppendInt64($value) {
		return CkStringBuilder_AppendInt64($this->_cPtr,$value);
	}

	function AppendEncoded($binaryData,$encoding) {
		return CkStringBuilder_AppendEncoded($this->_cPtr,$binaryData,$encoding);
	}

	function Clear() {
		CkStringBuilder_Clear($this->_cPtr);
	}

	function Replace($value,$replacement) {
		CkStringBuilder_Replace($this->_cPtr,$value,$replacement);
	}

	function getAsString() {
		return CkStringBuilder_getAsString($this->_cPtr);
	}

	function asString() {
		return CkStringBuilder_asString($this->_cPtr);
	}

	function Equals($str,$caseSensitive) {
		return CkStringBuilder_Equals($this->_cPtr,$str,$caseSensitive);
	}

	function Contains($str,$caseSensitive) {
		return CkStringBuilder_Contains($this->_cPtr,$str,$caseSensitive);
	}
}


?>