<?php
class CkStringArray {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkStringArray') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkStringArray();
	}

	function get_Utf8() {
		return CkStringArray_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkStringArray_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkStringArray_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkStringArray_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkStringArray_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkStringArray_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkStringArray_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkStringArray_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkStringArray_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkStringArray_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkStringArray_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkStringArray_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkStringArray_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkStringArray_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkStringArray_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkStringArray_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkStringArray_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkStringArray_SaveLastError($this->_cPtr,$path);
	}

	function get_Count() {
		return CkStringArray_get_Count($this->_cPtr);
	}

	function get_Crlf() {
		return CkStringArray_get_Crlf($this->_cPtr);
	}

	function put_Crlf($newVal) {
		CkStringArray_put_Crlf($this->_cPtr,$newVal);
	}

	function get_Length() {
		return CkStringArray_get_Length($this->_cPtr);
	}

	function get_Trim() {
		return CkStringArray_get_Trim($this->_cPtr);
	}

	function put_Trim($newVal) {
		CkStringArray_put_Trim($this->_cPtr,$newVal);
	}

	function get_Unique() {
		return CkStringArray_get_Unique($this->_cPtr);
	}

	function put_Unique($newVal) {
		CkStringArray_put_Unique($this->_cPtr,$newVal);
	}

	function Append($str) {
		return CkStringArray_Append($this->_cPtr,$str);
	}

	function AppendSerialized($encodedStr) {
		return CkStringArray_AppendSerialized($this->_cPtr,$encodedStr);
	}

	function Clear() {
		CkStringArray_Clear($this->_cPtr);
	}

	function Contains($str) {
		return CkStringArray_Contains($this->_cPtr,$str);
	}

	function Find($str,$firstIndex) {
		return CkStringArray_Find($this->_cPtr,$str,$firstIndex);
	}

	function FindFirstMatch($str,$firstIndex) {
		return CkStringArray_FindFirstMatch($this->_cPtr,$str,$firstIndex);
	}

	function getString($index) {
		return CkStringArray_getString($this->_cPtr,$index);
	}

	function string($index) {
		return CkStringArray_string($this->_cPtr,$index);
	}

	function GetStringLen($index) {
		return CkStringArray_GetStringLen($this->_cPtr,$index);
	}

	function InsertAt($index,$str) {
		CkStringArray_InsertAt($this->_cPtr,$index,$str);
	}

	function lastString() {
		return CkStringArray_lastString($this->_cPtr);
	}

	function LoadFromFile($filename) {
		return CkStringArray_LoadFromFile($this->_cPtr,$filename);
	}

	function LoadFromFile2($filename,$charset) {
		return CkStringArray_LoadFromFile2($this->_cPtr,$filename,$charset);
	}

	function LoadFromText($str) {
		CkStringArray_LoadFromText($this->_cPtr,$str);
	}

	function LoadTaskResult($task) {
		return CkStringArray_LoadTaskResult($this->_cPtr,$task);
	}

	function pop() {
		return CkStringArray_pop($this->_cPtr);
	}

	function Prepend($str) {
		CkStringArray_Prepend($this->_cPtr,$str);
	}

	function Remove($str) {
		CkStringArray_Remove($this->_cPtr,$str);
	}

	function RemoveAt($index) {
		return CkStringArray_RemoveAt($this->_cPtr,$index);
	}

	function ReplaceAt($index,$str) {
		CkStringArray_ReplaceAt($this->_cPtr,$index,$str);
	}

	function SaveNthToFile($index,$filename) {
		return CkStringArray_SaveNthToFile($this->_cPtr,$index,$filename);
	}

	function SaveToFile($filename) {
		return CkStringArray_SaveToFile($this->_cPtr,$filename);
	}

	function SaveToFile2($filename,$charset) {
		return CkStringArray_SaveToFile2($this->_cPtr,$filename,$charset);
	}

	function saveToText() {
		return CkStringArray_saveToText($this->_cPtr);
	}

	function serialize() {
		return CkStringArray_serialize($this->_cPtr);
	}

	function Sort($ascending) {
		CkStringArray_Sort($this->_cPtr,$ascending);
	}

	function SplitAndAppend($str,$boundary) {
		CkStringArray_SplitAndAppend($this->_cPtr,$str,$boundary);
	}

	function strAt($index) {
		return CkStringArray_strAt($this->_cPtr,$index);
	}

	function Subtract($sa) {
		CkStringArray_Subtract($this->_cPtr,$sa);
	}

	function Union($sa) {
		CkStringArray_Union($this->_cPtr,$sa);
	}
}


?>