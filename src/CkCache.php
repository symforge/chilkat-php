<?php
class CkCache {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCache') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCache();
	}

	function get_Utf8() {
		return CkCache_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCache_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkCache_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkCache_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkCache_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkCache_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkCache_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkCache_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkCache_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkCache_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkCache_lastErrorXml($this->_cPtr);
	}

	function get_LastEtagFetched($str) {
		CkCache_get_LastEtagFetched($this->_cPtr,$str);
	}

	function lastEtagFetched() {
		return CkCache_lastEtagFetched($this->_cPtr);
	}

	function get_LastExpirationFetched($outSysTime) {
		CkCache_get_LastExpirationFetched($this->_cPtr,$outSysTime);
	}

	function get_LastExpirationFetchedStr($str) {
		CkCache_get_LastExpirationFetchedStr($this->_cPtr,$str);
	}

	function lastExpirationFetchedStr() {
		return CkCache_lastExpirationFetchedStr($this->_cPtr);
	}

	function get_LastHitExpired() {
		return CkCache_get_LastHitExpired($this->_cPtr);
	}

	function get_LastKeyFetched($str) {
		CkCache_get_LastKeyFetched($this->_cPtr,$str);
	}

	function lastKeyFetched() {
		return CkCache_lastKeyFetched($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkCache_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkCache_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Level() {
		return CkCache_get_Level($this->_cPtr);
	}

	function put_Level($newVal) {
		CkCache_put_Level($this->_cPtr,$newVal);
	}

	function get_NumRoots() {
		return CkCache_get_NumRoots($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkCache_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkCache_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkCache_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkCache_version($this->_cPtr);
	}

	function AddRoot($path) {
		CkCache_AddRoot($this->_cPtr,$path);
	}

	function DeleteAll() {
		return CkCache_DeleteAll($this->_cPtr);
	}

	function DeleteAllExpired() {
		return CkCache_DeleteAllExpired($this->_cPtr);
	}

	function DeleteFromCache($key) {
		return CkCache_DeleteFromCache($this->_cPtr,$key);
	}

	function DeleteOlder($dateTime) {
		return CkCache_DeleteOlder($this->_cPtr,$dateTime);
	}

	function DeleteOlderDt($dateTime) {
		return CkCache_DeleteOlderDt($this->_cPtr,$dateTime);
	}

	function DeleteOlderStr($dateTimeStr) {
		return CkCache_DeleteOlderStr($this->_cPtr,$dateTimeStr);
	}

	function FetchFromCache($key,$outBytes) {
		return CkCache_FetchFromCache($this->_cPtr,$key,$outBytes);
	}

	function fetchText($key) {
		return CkCache_fetchText($this->_cPtr,$key);
	}

	function getEtag($key) {
		return CkCache_getEtag($this->_cPtr,$key);
	}

	function etag($key) {
		return CkCache_etag($this->_cPtr,$key);
	}

	function GetExpiration($key,$outSysTime) {
		return CkCache_GetExpiration($this->_cPtr,$key,$outSysTime);
	}

	function GetExpirationDt($key) {
		$r=CkCache_GetExpirationDt($this->_cPtr,$key);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function getExpirationStr($url) {
		return CkCache_getExpirationStr($this->_cPtr,$url);
	}

	function expirationStr($url) {
		return CkCache_expirationStr($this->_cPtr,$url);
	}

	function getFilename($key) {
		return CkCache_getFilename($this->_cPtr,$key);
	}

	function filename($key) {
		return CkCache_filename($this->_cPtr,$key);
	}

	function getRoot($index) {
		return CkCache_getRoot($this->_cPtr,$index);
	}

	function root($index) {
		return CkCache_root($this->_cPtr,$index);
	}

	function IsCached($key) {
		return CkCache_IsCached($this->_cPtr,$key);
	}

	function SaveLastError($path) {
		return CkCache_SaveLastError($this->_cPtr,$path);
	}

	function SaveText($key,$expireDateTime,$eTag,$itemTextData) {
		return CkCache_SaveText($this->_cPtr,$key,$expireDateTime,$eTag,$itemTextData);
	}

	function SaveTextDt($key,$expireDateTime,$eTag,$itemTextData) {
		return CkCache_SaveTextDt($this->_cPtr,$key,$expireDateTime,$eTag,$itemTextData);
	}

	function SaveTextNoExpire($key,$eTag,$itemTextData) {
		return CkCache_SaveTextNoExpire($this->_cPtr,$key,$eTag,$itemTextData);
	}

	function SaveTextStr($key,$expireDateTime,$eTag,$itemTextData) {
		return CkCache_SaveTextStr($this->_cPtr,$key,$expireDateTime,$eTag,$itemTextData);
	}

	function SaveToCache($key,$expireDateTime,$eTag,$itemData) {
		return CkCache_SaveToCache($this->_cPtr,$key,$expireDateTime,$eTag,$itemData);
	}

	function SaveToCacheDt($key,$expireDateTime,$eTag,$itemData) {
		return CkCache_SaveToCacheDt($this->_cPtr,$key,$expireDateTime,$eTag,$itemData);
	}

	function SaveToCacheNoExpire($key,$eTag,$itemData) {
		return CkCache_SaveToCacheNoExpire($this->_cPtr,$key,$eTag,$itemData);
	}

	function SaveToCacheStr($key,$expireDateTime,$eTag,$itemData) {
		return CkCache_SaveToCacheStr($this->_cPtr,$key,$expireDateTime,$eTag,$itemData);
	}

	function UpdateExpiration($key,$expireDateTime) {
		return CkCache_UpdateExpiration($this->_cPtr,$key,$expireDateTime);
	}

	function UpdateExpirationDt($key,$expireDateTime) {
		return CkCache_UpdateExpirationDt($this->_cPtr,$key,$expireDateTime);
	}

	function UpdateExpirationStr($key,$expireDateTime) {
		return CkCache_UpdateExpirationStr($this->_cPtr,$key,$expireDateTime);
	}
}


?>