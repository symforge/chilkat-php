<?php
class CkUnixCompress {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkUnixCompress') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkUnixCompress();
	}

	function get_Utf8() {
		return CkUnixCompress_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkUnixCompress_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkUnixCompress_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkUnixCompress_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkUnixCompress_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkUnixCompress_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkUnixCompress_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkUnixCompress_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkUnixCompress_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkUnixCompress_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkUnixCompress_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkUnixCompress_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkUnixCompress_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkUnixCompress_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkUnixCompress_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkUnixCompress_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkUnixCompress_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkUnixCompress_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkUnixCompress_SaveLastError($this->_cPtr,$path);
	}

	function get_HeartbeatMs() {
		return CkUnixCompress_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkUnixCompress_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_AbortCurrent() {
		return CkUnixCompress_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkUnixCompress_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function CompressFile($inFilename,$destPath) {
		return CkUnixCompress_CompressFile($this->_cPtr,$inFilename,$destPath);
	}

	function CompressFileAsync($inFilename,$destPath) {
		$r=CkUnixCompress_CompressFileAsync($this->_cPtr,$inFilename,$destPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressFileToMem($inFilename,$outData) {
		return CkUnixCompress_CompressFileToMem($this->_cPtr,$inFilename,$outData);
	}

	function CompressFileToMemAsync($inFilename) {
		$r=CkUnixCompress_CompressFileToMemAsync($this->_cPtr,$inFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressMemToFile($inData,$destPath) {
		return CkUnixCompress_CompressMemToFile($this->_cPtr,$inData,$destPath);
	}

	function CompressMemory($inData,$outData) {
		return CkUnixCompress_CompressMemory($this->_cPtr,$inData,$outData);
	}

	function CompressString($inStr,$charset,$outBytes) {
		return CkUnixCompress_CompressString($this->_cPtr,$inStr,$charset,$outBytes);
	}

	function CompressStringToFile($inStr,$charset,$destPath) {
		return CkUnixCompress_CompressStringToFile($this->_cPtr,$inStr,$charset,$destPath);
	}

	function IsUnlocked() {
		return CkUnixCompress_IsUnlocked($this->_cPtr);
	}

	function UnTarZ($zFilename,$destDir,$bNoAbsolute) {
		return CkUnixCompress_UnTarZ($this->_cPtr,$zFilename,$destDir,$bNoAbsolute);
	}

	function UnTarZAsync($zFilename,$destDir,$bNoAbsolute) {
		$r=CkUnixCompress_UnTarZAsync($this->_cPtr,$zFilename,$destDir,$bNoAbsolute);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UncompressFile($inFilename,$destPath) {
		return CkUnixCompress_UncompressFile($this->_cPtr,$inFilename,$destPath);
	}

	function UncompressFileAsync($inFilename,$destPath) {
		$r=CkUnixCompress_UncompressFileAsync($this->_cPtr,$inFilename,$destPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UncompressFileToMem($inFilename,$outData) {
		return CkUnixCompress_UncompressFileToMem($this->_cPtr,$inFilename,$outData);
	}

	function UncompressFileToMemAsync($inFilename) {
		$r=CkUnixCompress_UncompressFileToMemAsync($this->_cPtr,$inFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function uncompressFileToString($inFilename,$inCharset) {
		return CkUnixCompress_uncompressFileToString($this->_cPtr,$inFilename,$inCharset);
	}

	function UncompressFileToStringAsync($inFilename,$inCharset) {
		$r=CkUnixCompress_UncompressFileToStringAsync($this->_cPtr,$inFilename,$inCharset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UncompressMemToFile($inData,$destPath) {
		return CkUnixCompress_UncompressMemToFile($this->_cPtr,$inData,$destPath);
	}

	function UncompressMemory($inData,$outData) {
		return CkUnixCompress_UncompressMemory($this->_cPtr,$inData,$outData);
	}

	function uncompressString($inData,$inCharset) {
		return CkUnixCompress_uncompressString($this->_cPtr,$inData,$inCharset);
	}

	function UnlockComponent($unlockCode) {
		return CkUnixCompress_UnlockComponent($this->_cPtr,$unlockCode);
	}
}


?>