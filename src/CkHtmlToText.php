<?php
class CkHtmlToText {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkHtmlToText') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkHtmlToText();
	}

	function get_Utf8() {
		return CkHtmlToText_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkHtmlToText_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkHtmlToText_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkHtmlToText_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkHtmlToText_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkHtmlToText_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkHtmlToText_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkHtmlToText_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkHtmlToText_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkHtmlToText_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkHtmlToText_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkHtmlToText_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkHtmlToText_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkHtmlToText_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkHtmlToText_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkHtmlToText_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkHtmlToText_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkHtmlToText_SaveLastError($this->_cPtr,$path);
	}

	function get_DecodeHtmlEntities() {
		return CkHtmlToText_get_DecodeHtmlEntities($this->_cPtr);
	}

	function put_DecodeHtmlEntities($newVal) {
		CkHtmlToText_put_DecodeHtmlEntities($this->_cPtr,$newVal);
	}

	function get_RightMargin() {
		return CkHtmlToText_get_RightMargin($this->_cPtr);
	}

	function put_RightMargin($newVal) {
		CkHtmlToText_put_RightMargin($this->_cPtr,$newVal);
	}

	function get_SuppressLinks() {
		return CkHtmlToText_get_SuppressLinks($this->_cPtr);
	}

	function put_SuppressLinks($newVal) {
		CkHtmlToText_put_SuppressLinks($this->_cPtr,$newVal);
	}

	function IsUnlocked() {
		return CkHtmlToText_IsUnlocked($this->_cPtr);
	}

	function readFileToString($filename,$srcCharset) {
		return CkHtmlToText_readFileToString($this->_cPtr,$filename,$srcCharset);
	}

	function toText($html) {
		return CkHtmlToText_toText($this->_cPtr,$html);
	}

	function UnlockComponent($code) {
		return CkHtmlToText_UnlockComponent($this->_cPtr,$code);
	}

	function WriteStringToFile($str,$filename,$charset) {
		return CkHtmlToText_WriteStringToFile($this->_cPtr,$str,$filename,$charset);
	}
}


?>