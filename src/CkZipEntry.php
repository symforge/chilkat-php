<?php
class CkZipEntry {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkZipEntry') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkZipEntry();
	}

	function get_Utf8() {
		return CkZipEntry_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkZipEntry_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkZipEntry_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_Comment($str) {
		CkZipEntry_get_Comment($this->_cPtr,$str);
	}

	function comment() {
		return CkZipEntry_comment($this->_cPtr);
	}

	function put_Comment($newVal) {
		CkZipEntry_put_Comment($this->_cPtr,$newVal);
	}

	function get_CompressedLength() {
		return CkZipEntry_get_CompressedLength($this->_cPtr);
	}

	function get_CompressedLengthStr($str) {
		CkZipEntry_get_CompressedLengthStr($this->_cPtr,$str);
	}

	function compressedLengthStr() {
		return CkZipEntry_compressedLengthStr($this->_cPtr);
	}

	function get_CompressionLevel() {
		return CkZipEntry_get_CompressionLevel($this->_cPtr);
	}

	function put_CompressionLevel($newVal) {
		CkZipEntry_put_CompressionLevel($this->_cPtr,$newVal);
	}

	function get_CompressionMethod() {
		return CkZipEntry_get_CompressionMethod($this->_cPtr);
	}

	function put_CompressionMethod($newVal) {
		CkZipEntry_put_CompressionMethod($this->_cPtr,$newVal);
	}

	function get_Crc() {
		return CkZipEntry_get_Crc($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkZipEntry_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkZipEntry_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkZipEntry_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_EntryID() {
		return CkZipEntry_get_EntryID($this->_cPtr);
	}

	function get_EntryType() {
		return CkZipEntry_get_EntryType($this->_cPtr);
	}

	function get_FileDateTime($outSysTime) {
		CkZipEntry_get_FileDateTime($this->_cPtr,$outSysTime);
	}

	function put_FileDateTime($sysTime) {
		CkZipEntry_put_FileDateTime($this->_cPtr,$sysTime);
	}

	function get_FileDateTimeStr($str) {
		CkZipEntry_get_FileDateTimeStr($this->_cPtr,$str);
	}

	function fileDateTimeStr() {
		return CkZipEntry_fileDateTimeStr($this->_cPtr);
	}

	function put_FileDateTimeStr($newVal) {
		CkZipEntry_put_FileDateTimeStr($this->_cPtr,$newVal);
	}

	function get_FileName($str) {
		CkZipEntry_get_FileName($this->_cPtr,$str);
	}

	function fileName() {
		return CkZipEntry_fileName($this->_cPtr);
	}

	function put_FileName($newVal) {
		CkZipEntry_put_FileName($this->_cPtr,$newVal);
	}

	function get_FileNameHex($str) {
		CkZipEntry_get_FileNameHex($this->_cPtr,$str);
	}

	function fileNameHex() {
		return CkZipEntry_fileNameHex($this->_cPtr);
	}

	function get_HeartbeatMs() {
		return CkZipEntry_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkZipEntry_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_IsDirectory() {
		return CkZipEntry_get_IsDirectory($this->_cPtr);
	}

	function get_LastErrorHtml($str) {
		CkZipEntry_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkZipEntry_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkZipEntry_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkZipEntry_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkZipEntry_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkZipEntry_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkZipEntry_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkZipEntry_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_TextFlag() {
		return CkZipEntry_get_TextFlag($this->_cPtr);
	}

	function put_TextFlag($newVal) {
		CkZipEntry_put_TextFlag($this->_cPtr,$newVal);
	}

	function get_UncompressedLength() {
		return CkZipEntry_get_UncompressedLength($this->_cPtr);
	}

	function get_UncompressedLengthStr($str) {
		CkZipEntry_get_UncompressedLengthStr($this->_cPtr,$str);
	}

	function uncompressedLengthStr() {
		return CkZipEntry_uncompressedLengthStr($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkZipEntry_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkZipEntry_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkZipEntry_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkZipEntry_version($this->_cPtr);
	}

	function AppendData($inData) {
		return CkZipEntry_AppendData($this->_cPtr,$inData);
	}

	function AppendDataAsync($inData) {
		$r=CkZipEntry_AppendDataAsync($this->_cPtr,$inData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AppendString($strContent,$charset) {
		return CkZipEntry_AppendString($this->_cPtr,$strContent,$charset);
	}

	function AppendStringAsync($strContent,$charset) {
		$r=CkZipEntry_AppendStringAsync($this->_cPtr,$strContent,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Copy($outData) {
		return CkZipEntry_Copy($this->_cPtr,$outData);
	}

	function copyToBase64() {
		return CkZipEntry_copyToBase64($this->_cPtr);
	}

	function copyToHex() {
		return CkZipEntry_copyToHex($this->_cPtr);
	}

	function Extract($dirPath) {
		return CkZipEntry_Extract($this->_cPtr,$dirPath);
	}

	function ExtractAsync($dirPath) {
		$r=CkZipEntry_ExtractAsync($this->_cPtr,$dirPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ExtractInto($dirPath) {
		return CkZipEntry_ExtractInto($this->_cPtr,$dirPath);
	}

	function ExtractIntoAsync($dirPath) {
		$r=CkZipEntry_ExtractIntoAsync($this->_cPtr,$dirPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetDt() {
		$r=CkZipEntry_GetDt($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function Inflate($outData) {
		return CkZipEntry_Inflate($this->_cPtr,$outData);
	}

	function InflateAsync() {
		$r=CkZipEntry_InflateAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function NextEntry() {
		$r=CkZipEntry_NextEntry($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function NextMatchingEntry($matchStr) {
		$r=CkZipEntry_NextMatchingEntry($this->_cPtr,$matchStr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function ReplaceData($inData) {
		return CkZipEntry_ReplaceData($this->_cPtr,$inData);
	}

	function ReplaceString($strContent,$charset) {
		return CkZipEntry_ReplaceString($this->_cPtr,$strContent,$charset);
	}

	function SaveLastError($path) {
		return CkZipEntry_SaveLastError($this->_cPtr,$path);
	}

	function SetDt($dt) {
		CkZipEntry_SetDt($this->_cPtr,$dt);
	}

	function unzipToString($lineEndingBehavior,$srcCharset) {
		return CkZipEntry_unzipToString($this->_cPtr,$lineEndingBehavior,$srcCharset);
	}

	function UnzipToStringAsync($lineEndingBehavior,$srcCharset) {
		$r=CkZipEntry_UnzipToStringAsync($this->_cPtr,$lineEndingBehavior,$srcCharset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}
}


?>