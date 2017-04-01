<?php
class CkHtmlToXml {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkHtmlToXml') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkHtmlToXml();
	}

	function get_Utf8() {
		return CkHtmlToXml_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkHtmlToXml_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkHtmlToXml_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkHtmlToXml_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkHtmlToXml_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_DropCustomTags() {
		return CkHtmlToXml_get_DropCustomTags($this->_cPtr);
	}

	function put_DropCustomTags($newVal) {
		CkHtmlToXml_put_DropCustomTags($this->_cPtr,$newVal);
	}

	function get_Html($str) {
		CkHtmlToXml_get_Html($this->_cPtr,$str);
	}

	function html() {
		return CkHtmlToXml_html($this->_cPtr);
	}

	function put_Html($newVal) {
		CkHtmlToXml_put_Html($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkHtmlToXml_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkHtmlToXml_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkHtmlToXml_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkHtmlToXml_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkHtmlToXml_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkHtmlToXml_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkHtmlToXml_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkHtmlToXml_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Nbsp() {
		return CkHtmlToXml_get_Nbsp($this->_cPtr);
	}

	function put_Nbsp($newVal) {
		CkHtmlToXml_put_Nbsp($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkHtmlToXml_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkHtmlToXml_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkHtmlToXml_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkHtmlToXml_version($this->_cPtr);
	}

	function get_XmlCharset($str) {
		CkHtmlToXml_get_XmlCharset($this->_cPtr,$str);
	}

	function xmlCharset() {
		return CkHtmlToXml_xmlCharset($this->_cPtr);
	}

	function put_XmlCharset($newVal) {
		CkHtmlToXml_put_XmlCharset($this->_cPtr,$newVal);
	}

	function ConvertFile($inHtmlPath,$destXmlPath) {
		return CkHtmlToXml_ConvertFile($this->_cPtr,$inHtmlPath,$destXmlPath);
	}

	function DropTagType($tagName) {
		CkHtmlToXml_DropTagType($this->_cPtr,$tagName);
	}

	function DropTextFormattingTags() {
		CkHtmlToXml_DropTextFormattingTags($this->_cPtr);
	}

	function IsUnlocked() {
		return CkHtmlToXml_IsUnlocked($this->_cPtr);
	}

	function ReadFile($path,$outBytes) {
		return CkHtmlToXml_ReadFile($this->_cPtr,$path,$outBytes);
	}

	function readFileToString($filename,$srcCharset) {
		return CkHtmlToXml_readFileToString($this->_cPtr,$filename,$srcCharset);
	}

	function SaveLastError($path) {
		return CkHtmlToXml_SaveLastError($this->_cPtr,$path);
	}

	function SetHtmlBytes($inData) {
		CkHtmlToXml_SetHtmlBytes($this->_cPtr,$inData);
	}

	function SetHtmlFromFile($filename) {
		return CkHtmlToXml_SetHtmlFromFile($this->_cPtr,$filename);
	}

	function toXml() {
		return CkHtmlToXml_toXml($this->_cPtr);
	}

	function UndropTagType($tagName) {
		CkHtmlToXml_UndropTagType($this->_cPtr,$tagName);
	}

	function UndropTextFormattingTags() {
		CkHtmlToXml_UndropTextFormattingTags($this->_cPtr);
	}

	function UnlockComponent($unlockCode) {
		return CkHtmlToXml_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function WriteFile($path,$fileData) {
		return CkHtmlToXml_WriteFile($this->_cPtr,$path,$fileData);
	}

	function WriteStringToFile($stringToWrite,$filename,$charset) {
		return CkHtmlToXml_WriteStringToFile($this->_cPtr,$stringToWrite,$filename,$charset);
	}

	function xml() {
		return CkHtmlToXml_xml($this->_cPtr);
	}
}


?>