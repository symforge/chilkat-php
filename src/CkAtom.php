<?php
class CkAtom {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkAtom') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkAtom();
	}

	function get_Utf8() {
		return CkAtom_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkAtom_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkAtom_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AbortCurrent() {
		return CkAtom_get_AbortCurrent($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkAtom_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkAtom_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkAtom_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkAtom_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkAtom_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkAtom_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkAtom_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkAtom_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkAtom_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkAtom_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkAtom_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumEntries() {
		return CkAtom_get_NumEntries($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkAtom_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkAtom_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkAtom_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkAtom_version($this->_cPtr);
	}

	function AddElement($tag,$value) {
		return CkAtom_AddElement($this->_cPtr,$tag,$value);
	}

	function AddElementDate($tag,$dateTime) {
		return CkAtom_AddElementDate($this->_cPtr,$tag,$dateTime);
	}

	function AddElementDateStr($tag,$dateTimeStr) {
		return CkAtom_AddElementDateStr($this->_cPtr,$tag,$dateTimeStr);
	}

	function AddElementDt($tag,$dateTime) {
		return CkAtom_AddElementDt($this->_cPtr,$tag,$dateTime);
	}

	function AddElementHtml($tag,$htmlStr) {
		return CkAtom_AddElementHtml($this->_cPtr,$tag,$htmlStr);
	}

	function AddElementXHtml($tag,$xmlStr) {
		return CkAtom_AddElementXHtml($this->_cPtr,$tag,$xmlStr);
	}

	function AddElementXml($tag,$xmlStr) {
		return CkAtom_AddElementXml($this->_cPtr,$tag,$xmlStr);
	}

	function AddEntry($xmlStr) {
		CkAtom_AddEntry($this->_cPtr,$xmlStr);
	}

	function AddLink($rel,$href,$title,$typ) {
		CkAtom_AddLink($this->_cPtr,$rel,$href,$title,$typ);
	}

	function AddPerson($tag,$name,$uri,$email) {
		CkAtom_AddPerson($this->_cPtr,$tag,$name,$uri,$email);
	}

	function DeleteElement($tag,$index) {
		CkAtom_DeleteElement($this->_cPtr,$tag,$index);
	}

	function DeleteElementAttr($tag,$index,$attrName) {
		CkAtom_DeleteElementAttr($this->_cPtr,$tag,$index,$attrName);
	}

	function DeletePerson($tag,$index) {
		CkAtom_DeletePerson($this->_cPtr,$tag,$index);
	}

	function DownloadAtom($url) {
		return CkAtom_DownloadAtom($this->_cPtr,$url);
	}

	function DownloadAtomAsync($url) {
		$r=CkAtom_DownloadAtomAsync($this->_cPtr,$url);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getElement($tag,$index) {
		return CkAtom_getElement($this->_cPtr,$tag,$index);
	}

	function element($tag,$index) {
		return CkAtom_element($this->_cPtr,$tag,$index);
	}

	function getElementAttr($tag,$index,$attrName) {
		return CkAtom_getElementAttr($this->_cPtr,$tag,$index,$attrName);
	}

	function elementAttr($tag,$index,$attrName) {
		return CkAtom_elementAttr($this->_cPtr,$tag,$index,$attrName);
	}

	function GetElementCount($tag) {
		return CkAtom_GetElementCount($this->_cPtr,$tag);
	}

	function GetElementDate($tag,$index,$outSysTime) {
		return CkAtom_GetElementDate($this->_cPtr,$tag,$index,$outSysTime);
	}

	function getElementDateStr($tag,$index) {
		return CkAtom_getElementDateStr($this->_cPtr,$tag,$index);
	}

	function elementDateStr($tag,$index) {
		return CkAtom_elementDateStr($this->_cPtr,$tag,$index);
	}

	function GetElementDt($tag,$index) {
		$r=CkAtom_GetElementDt($this->_cPtr,$tag,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetEntry($index) {
		$r=CkAtom_GetEntry($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkAtom($r);
		}
		return $r;
	}

	function getLinkHref($relName) {
		return CkAtom_getLinkHref($this->_cPtr,$relName);
	}

	function linkHref($relName) {
		return CkAtom_linkHref($this->_cPtr,$relName);
	}

	function getPersonInfo($tag,$index,$tag2) {
		return CkAtom_getPersonInfo($this->_cPtr,$tag,$index,$tag2);
	}

	function personInfo($tag,$index,$tag2) {
		return CkAtom_personInfo($this->_cPtr,$tag,$index,$tag2);
	}

	function getTopAttr($attrName) {
		return CkAtom_getTopAttr($this->_cPtr,$attrName);
	}

	function topAttr($attrName) {
		return CkAtom_topAttr($this->_cPtr,$attrName);
	}

	function HasElement($tag) {
		return CkAtom_HasElement($this->_cPtr,$tag);
	}

	function LoadXml($xmlStr) {
		return CkAtom_LoadXml($this->_cPtr,$xmlStr);
	}

	function NewEntry() {
		CkAtom_NewEntry($this->_cPtr);
	}

	function NewFeed() {
		CkAtom_NewFeed($this->_cPtr);
	}

	function SaveLastError($path) {
		return CkAtom_SaveLastError($this->_cPtr,$path);
	}

	function SetElementAttr($tag,$index,$attrName,$attrValue) {
		CkAtom_SetElementAttr($this->_cPtr,$tag,$index,$attrName,$attrValue);
	}

	function SetTopAttr($attrName,$value) {
		CkAtom_SetTopAttr($this->_cPtr,$attrName,$value);
	}

	function toXmlString() {
		return CkAtom_toXmlString($this->_cPtr);
	}

	function UpdateElement($tag,$index,$value) {
		CkAtom_UpdateElement($this->_cPtr,$tag,$index,$value);
	}

	function UpdateElementDate($tag,$index,$dateTime) {
		CkAtom_UpdateElementDate($this->_cPtr,$tag,$index,$dateTime);
	}

	function UpdateElementDateStr($tag,$index,$dateTimeStr) {
		CkAtom_UpdateElementDateStr($this->_cPtr,$tag,$index,$dateTimeStr);
	}

	function UpdateElementDt($tag,$index,$dateTime) {
		CkAtom_UpdateElementDt($this->_cPtr,$tag,$index,$dateTime);
	}

	function UpdateElementHtml($tag,$index,$htmlStr) {
		CkAtom_UpdateElementHtml($this->_cPtr,$tag,$index,$htmlStr);
	}

	function UpdateElementXHtml($tag,$index,$xmlStr) {
		CkAtom_UpdateElementXHtml($this->_cPtr,$tag,$index,$xmlStr);
	}

	function UpdateElementXml($tag,$index,$xmlStr) {
		CkAtom_UpdateElementXml($this->_cPtr,$tag,$index,$xmlStr);
	}

	function UpdatePerson($tag,$index,$name,$uri,$email) {
		CkAtom_UpdatePerson($this->_cPtr,$tag,$index,$name,$uri,$email);
	}
}


?>