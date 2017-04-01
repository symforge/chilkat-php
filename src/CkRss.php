<?php
class CkRss {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkRss') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkRss();
	}

	function get_Utf8() {
		return CkRss_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkRss_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkRss_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_DebugLogFilePath($str) {
		CkRss_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkRss_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkRss_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkRss_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkRss_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkRss_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkRss_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkRss_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkRss_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkRss_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkRss_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumChannels() {
		return CkRss_get_NumChannels($this->_cPtr);
	}

	function get_NumItems() {
		return CkRss_get_NumItems($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkRss_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkRss_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkRss_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkRss_version($this->_cPtr);
	}

	function AddNewChannel() {
		$r=CkRss_AddNewChannel($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkRss($r);
		}
		return $r;
	}

	function AddNewImage() {
		$r=CkRss_AddNewImage($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkRss($r);
		}
		return $r;
	}

	function AddNewItem() {
		$r=CkRss_AddNewItem($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkRss($r);
		}
		return $r;
	}

	function DownloadRss($url) {
		return CkRss_DownloadRss($this->_cPtr,$url);
	}

	function DownloadRssAsync($url) {
		$r=CkRss_DownloadRssAsync($this->_cPtr,$url);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getAttr($tag,$attrName) {
		return CkRss_getAttr($this->_cPtr,$tag,$attrName);
	}

	function attr($tag,$attrName) {
		return CkRss_attr($this->_cPtr,$tag,$attrName);
	}

	function GetChannel($index) {
		$r=CkRss_GetChannel($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkRss($r);
		}
		return $r;
	}

	function GetCount($tag) {
		return CkRss_GetCount($this->_cPtr,$tag);
	}

	function GetDate($tag,$outSysTime) {
		return CkRss_GetDate($this->_cPtr,$tag,$outSysTime);
	}

	function getDateStr($tag) {
		return CkRss_getDateStr($this->_cPtr,$tag);
	}

	function dateStr($tag) {
		return CkRss_dateStr($this->_cPtr,$tag);
	}

	function GetImage() {
		$r=CkRss_GetImage($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkRss($r);
		}
		return $r;
	}

	function GetInt($tag) {
		return CkRss_GetInt($this->_cPtr,$tag);
	}

	function GetItem($index) {
		$r=CkRss_GetItem($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkRss($r);
		}
		return $r;
	}

	function getString($tag) {
		return CkRss_getString($this->_cPtr,$tag);
	}

	function string($tag) {
		return CkRss_string($this->_cPtr,$tag);
	}

	function LoadRssFile($filePath) {
		return CkRss_LoadRssFile($this->_cPtr,$filePath);
	}

	function LoadRssString($rssString) {
		return CkRss_LoadRssString($this->_cPtr,$rssString);
	}

	function mGetAttr($tag,$index,$attrName) {
		return CkRss_mGetAttr($this->_cPtr,$tag,$index,$attrName);
	}

	function mGetString($tag,$index) {
		return CkRss_mGetString($this->_cPtr,$tag,$index);
	}

	function MSetAttr($tag,$idx,$attrName,$value) {
		return CkRss_MSetAttr($this->_cPtr,$tag,$idx,$attrName,$value);
	}

	function MSetString($tag,$idx,$value) {
		return CkRss_MSetString($this->_cPtr,$tag,$idx,$value);
	}

	function NewRss() {
		CkRss_NewRss($this->_cPtr);
	}

	function Remove($tag) {
		CkRss_Remove($this->_cPtr,$tag);
	}

	function SaveLastError($path) {
		return CkRss_SaveLastError($this->_cPtr,$path);
	}

	function SetAttr($tag,$attrName,$value) {
		CkRss_SetAttr($this->_cPtr,$tag,$attrName,$value);
	}

	function SetDate($tag,$dateTime) {
		CkRss_SetDate($this->_cPtr,$tag,$dateTime);
	}

	function SetDateNow($tag) {
		CkRss_SetDateNow($this->_cPtr,$tag);
	}

	function SetDateStr($tag,$dateTimeStr) {
		CkRss_SetDateStr($this->_cPtr,$tag,$dateTimeStr);
	}

	function SetInt($tag,$value) {
		CkRss_SetInt($this->_cPtr,$tag,$value);
	}

	function SetString($tag,$value) {
		CkRss_SetString($this->_cPtr,$tag,$value);
	}

	function toXmlString() {
		return CkRss_toXmlString($this->_cPtr);
	}
}


?>