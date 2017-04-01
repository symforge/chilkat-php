<?php
class CkBz2 {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkBz2') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkBz2();
	}

	function get_Utf8() {
		return CkBz2_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkBz2_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkBz2_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AbortCurrent() {
		return CkBz2_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkBz2_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkBz2_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkBz2_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkBz2_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkBz2_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkBz2_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkBz2_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkBz2_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkBz2_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkBz2_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkBz2_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkBz2_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkBz2_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkBz2_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkBz2_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkBz2_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkBz2_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkBz2_version($this->_cPtr);
	}

	function CompressFile($inFilename,$toPath) {
		return CkBz2_CompressFile($this->_cPtr,$inFilename,$toPath);
	}

	function CompressFileAsync($inFilename,$toPath) {
		$r=CkBz2_CompressFileAsync($this->_cPtr,$inFilename,$toPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressFileToMem($inFilename,$outBytes) {
		return CkBz2_CompressFileToMem($this->_cPtr,$inFilename,$outBytes);
	}

	function CompressFileToMemAsync($inFilename) {
		$r=CkBz2_CompressFileToMemAsync($this->_cPtr,$inFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressMemory($inData,$outBytes) {
		return CkBz2_CompressMemory($this->_cPtr,$inData,$outBytes);
	}

	function CompressMemoryAsync($inData) {
		$r=CkBz2_CompressMemoryAsync($this->_cPtr,$inData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressMemToFile($inData,$toPath) {
		return CkBz2_CompressMemToFile($this->_cPtr,$inData,$toPath);
	}

	function CompressMemToFileAsync($inData,$toPath) {
		$r=CkBz2_CompressMemToFileAsync($this->_cPtr,$inData,$toPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SaveLastError($path) {
		return CkBz2_SaveLastError($this->_cPtr,$path);
	}

	function UncompressFile($inFilename,$toPath) {
		return CkBz2_UncompressFile($this->_cPtr,$inFilename,$toPath);
	}

	function UncompressFileAsync($inFilename,$toPath) {
		$r=CkBz2_UncompressFileAsync($this->_cPtr,$inFilename,$toPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UncompressFileToMem($inFilename,$outBytes) {
		return CkBz2_UncompressFileToMem($this->_cPtr,$inFilename,$outBytes);
	}

	function UncompressFileToMemAsync($inFilename) {
		$r=CkBz2_UncompressFileToMemAsync($this->_cPtr,$inFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UncompressMemory($inData,$outBytes) {
		return CkBz2_UncompressMemory($this->_cPtr,$inData,$outBytes);
	}

	function UncompressMemoryAsync($inData) {
		$r=CkBz2_UncompressMemoryAsync($this->_cPtr,$inData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UncompressMemToFile($inData,$toPath) {
		return CkBz2_UncompressMemToFile($this->_cPtr,$inData,$toPath);
	}

	function UncompressMemToFileAsync($inData,$toPath) {
		$r=CkBz2_UncompressMemToFileAsync($this->_cPtr,$inData,$toPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnlockComponent($regCode) {
		return CkBz2_UnlockComponent($this->_cPtr,$regCode);
	}
}


?>