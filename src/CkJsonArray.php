<?php
class CkJsonArray {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkJsonArray') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkJsonArray();
	}

	function get_Utf8() {
		return CkJsonArray_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkJsonArray_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkJsonArray_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkJsonArray_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkJsonArray_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_EmitCompact() {
		return CkJsonArray_get_EmitCompact($this->_cPtr);
	}

	function put_EmitCompact($newVal) {
		CkJsonArray_put_EmitCompact($this->_cPtr,$newVal);
	}

	function get_EmitCrlf() {
		return CkJsonArray_get_EmitCrlf($this->_cPtr);
	}

	function put_EmitCrlf($newVal) {
		CkJsonArray_put_EmitCrlf($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkJsonArray_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkJsonArray_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkJsonArray_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkJsonArray_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkJsonArray_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkJsonArray_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkJsonArray_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkJsonArray_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Size() {
		return CkJsonArray_get_Size($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkJsonArray_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkJsonArray_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkJsonArray_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkJsonArray_version($this->_cPtr);
	}

	function AddArrayAt($index) {
		return CkJsonArray_AddArrayAt($this->_cPtr,$index);
	}

	function AddBoolAt($index,$value) {
		return CkJsonArray_AddBoolAt($this->_cPtr,$index,$value);
	}

	function AddIntAt($index,$value) {
		return CkJsonArray_AddIntAt($this->_cPtr,$index,$value);
	}

	function AddNullAt($index) {
		return CkJsonArray_AddNullAt($this->_cPtr,$index);
	}

	function AddNumberAt($index,$numericStr) {
		return CkJsonArray_AddNumberAt($this->_cPtr,$index,$numericStr);
	}

	function AddObjectAt($index) {
		return CkJsonArray_AddObjectAt($this->_cPtr,$index);
	}

	function AddStringAt($index,$value) {
		return CkJsonArray_AddStringAt($this->_cPtr,$index,$value);
	}

	function ArrayAt($index) {
		$r=CkJsonArray_ArrayAt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonArray($r);
		}
		return $r;
	}

	function BoolAt($index) {
		return CkJsonArray_BoolAt($this->_cPtr,$index);
	}

	function DeleteAt($index) {
		return CkJsonArray_DeleteAt($this->_cPtr,$index);
	}

	function emit() {
		return CkJsonArray_emit($this->_cPtr);
	}

	function EmitSb($sb) {
		return CkJsonArray_EmitSb($this->_cPtr,$sb);
	}

	function IntAt($index) {
		return CkJsonArray_IntAt($this->_cPtr,$index);
	}

	function IsNullAt($index) {
		return CkJsonArray_IsNullAt($this->_cPtr,$index);
	}

	function Load($jsonArray) {
		return CkJsonArray_Load($this->_cPtr,$jsonArray);
	}

	function LoadSb($sb) {
		return CkJsonArray_LoadSb($this->_cPtr,$sb);
	}

	function ObjectAt($index) {
		$r=CkJsonArray_ObjectAt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function SaveLastError($path) {
		return CkJsonArray_SaveLastError($this->_cPtr,$path);
	}

	function SetBoolAt($index,$value) {
		return CkJsonArray_SetBoolAt($this->_cPtr,$index,$value);
	}

	function SetIntAt($index,$value) {
		return CkJsonArray_SetIntAt($this->_cPtr,$index,$value);
	}

	function SetNullAt($index) {
		return CkJsonArray_SetNullAt($this->_cPtr,$index);
	}

	function SetNumberAt($index,$value) {
		return CkJsonArray_SetNumberAt($this->_cPtr,$index,$value);
	}

	function SetStringAt($index,$value) {
		return CkJsonArray_SetStringAt($this->_cPtr,$index,$value);
	}

	function stringAt($index) {
		return CkJsonArray_stringAt($this->_cPtr,$index);
	}

	function TypeAt($index) {
		return CkJsonArray_TypeAt($this->_cPtr,$index);
	}
}


?>