<?php
class CkCsv {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCsv') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCsv();
	}

	function get_Utf8() {
		return CkCsv_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCsv_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkCsv_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkCsv_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkCsv_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkCsv_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkCsv_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkCsv_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkCsv_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkCsv_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkCsv_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkCsv_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkCsv_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkCsv_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkCsv_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkCsv_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkCsv_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkCsv_SaveLastError($this->_cPtr,$path);
	}

	function get_AutoTrim() {
		return CkCsv_get_AutoTrim($this->_cPtr);
	}

	function put_AutoTrim($newVal) {
		CkCsv_put_AutoTrim($this->_cPtr,$newVal);
	}

	function get_Crlf() {
		return CkCsv_get_Crlf($this->_cPtr);
	}

	function put_Crlf($newVal) {
		CkCsv_put_Crlf($this->_cPtr,$newVal);
	}

	function get_Delimiter($str) {
		CkCsv_get_Delimiter($this->_cPtr,$str);
	}

	function delimiter() {
		return CkCsv_delimiter($this->_cPtr);
	}

	function put_Delimiter($newVal) {
		CkCsv_put_Delimiter($this->_cPtr,$newVal);
	}

	function get_EscapeBackslash() {
		return CkCsv_get_EscapeBackslash($this->_cPtr);
	}

	function put_EscapeBackslash($newVal) {
		CkCsv_put_EscapeBackslash($this->_cPtr,$newVal);
	}

	function get_HasColumnNames() {
		return CkCsv_get_HasColumnNames($this->_cPtr);
	}

	function put_HasColumnNames($newVal) {
		CkCsv_put_HasColumnNames($this->_cPtr,$newVal);
	}

	function get_NumColumns() {
		return CkCsv_get_NumColumns($this->_cPtr);
	}

	function get_NumRows() {
		return CkCsv_get_NumRows($this->_cPtr);
	}

	function DeleteColumn($index) {
		return CkCsv_DeleteColumn($this->_cPtr,$index);
	}

	function DeleteColumnByName($columnName) {
		return CkCsv_DeleteColumnByName($this->_cPtr,$columnName);
	}

	function DeleteRow($index) {
		return CkCsv_DeleteRow($this->_cPtr,$index);
	}

	function getCell($row,$col) {
		return CkCsv_getCell($this->_cPtr,$row,$col);
	}

	function cell($row,$col) {
		return CkCsv_cell($this->_cPtr,$row,$col);
	}

	function getCellByName($row,$columnName) {
		return CkCsv_getCellByName($this->_cPtr,$row,$columnName);
	}

	function cellByName($row,$columnName) {
		return CkCsv_cellByName($this->_cPtr,$row,$columnName);
	}

	function getColumnName($index) {
		return CkCsv_getColumnName($this->_cPtr,$index);
	}

	function columnName($index) {
		return CkCsv_columnName($this->_cPtr,$index);
	}

	function GetIndex($columnName) {
		return CkCsv_GetIndex($this->_cPtr,$columnName);
	}

	function GetNumCols($row) {
		return CkCsv_GetNumCols($this->_cPtr,$row);
	}

	function LoadFile($path) {
		return CkCsv_LoadFile($this->_cPtr,$path);
	}

	function LoadFile2($path,$charset) {
		return CkCsv_LoadFile2($this->_cPtr,$path,$charset);
	}

	function LoadFromString($csvData) {
		return CkCsv_LoadFromString($this->_cPtr,$csvData);
	}

	function RowMatches($row,$matchPattern,$bCaseSensitive) {
		return CkCsv_RowMatches($this->_cPtr,$row,$matchPattern,$bCaseSensitive);
	}

	function SaveFile($path) {
		return CkCsv_SaveFile($this->_cPtr,$path);
	}

	function SaveFile2($path,$charset) {
		return CkCsv_SaveFile2($this->_cPtr,$path,$charset);
	}

	function saveToString() {
		return CkCsv_saveToString($this->_cPtr);
	}

	function SetCell($row,$col,$content) {
		return CkCsv_SetCell($this->_cPtr,$row,$col,$content);
	}

	function SetCellByName($row,$columnName,$content) {
		return CkCsv_SetCellByName($this->_cPtr,$row,$columnName,$content);
	}

	function SetColumnName($index,$columnName) {
		return CkCsv_SetColumnName($this->_cPtr,$index,$columnName);
	}

	function SortByColumn($columnName,$bAscending,$bCaseSensitive) {
		return CkCsv_SortByColumn($this->_cPtr,$columnName,$bAscending,$bCaseSensitive);
	}
}


?>