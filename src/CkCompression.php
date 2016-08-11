<?php
class CkCompression {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCompression') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCompression();
	}

	function get_Utf8() {
		return CkCompression_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCompression_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkCompression_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkCompression_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkCompression_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkCompression_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkCompression_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkCompression_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkCompression_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkCompression_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkCompression_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkCompression_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkCompression_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkCompression_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkCompression_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkCompression_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkCompression_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkCompression_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkCompression_SaveLastError($this->_cPtr,$path);
	}

	function get_Algorithm($str) {
		CkCompression_get_Algorithm($this->_cPtr,$str);
	}

	function algorithm() {
		return CkCompression_algorithm($this->_cPtr);
	}

	function put_Algorithm($newVal) {
		CkCompression_put_Algorithm($this->_cPtr,$newVal);
	}

	function get_Charset($str) {
		CkCompression_get_Charset($this->_cPtr,$str);
	}

	function charset() {
		return CkCompression_charset($this->_cPtr);
	}

	function put_Charset($newVal) {
		CkCompression_put_Charset($this->_cPtr,$newVal);
	}

	function get_EncodingMode($str) {
		CkCompression_get_EncodingMode($this->_cPtr,$str);
	}

	function encodingMode() {
		return CkCompression_encodingMode($this->_cPtr);
	}

	function put_EncodingMode($newVal) {
		CkCompression_put_EncodingMode($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkCompression_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkCompression_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function BeginCompressBytes($data,$outData) {
		return CkCompression_BeginCompressBytes($this->_cPtr,$data,$outData);
	}

	function BeginCompressBytesAsync($data) {
		$r=CkCompression_BeginCompressBytesAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function beginCompressBytesENC($data) {
		return CkCompression_beginCompressBytesENC($this->_cPtr,$data);
	}

	function BeginCompressBytesENCAsync($data) {
		$r=CkCompression_BeginCompressBytesENCAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function BeginCompressString($str,$outData) {
		return CkCompression_BeginCompressString($this->_cPtr,$str,$outData);
	}

	function BeginCompressStringAsync($str) {
		$r=CkCompression_BeginCompressStringAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function beginCompressStringENC($str) {
		return CkCompression_beginCompressStringENC($this->_cPtr,$str);
	}

	function BeginCompressStringENCAsync($str) {
		$r=CkCompression_BeginCompressStringENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function BeginDecompressBytes($data,$outData) {
		return CkCompression_BeginDecompressBytes($this->_cPtr,$data,$outData);
	}

	function BeginDecompressBytesAsync($data) {
		$r=CkCompression_BeginDecompressBytesAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function BeginDecompressBytesENC($str,$outData) {
		return CkCompression_BeginDecompressBytesENC($this->_cPtr,$str,$outData);
	}

	function BeginDecompressBytesENCAsync($str) {
		$r=CkCompression_BeginDecompressBytesENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function beginDecompressString($data) {
		return CkCompression_beginDecompressString($this->_cPtr,$data);
	}

	function BeginDecompressStringAsync($data) {
		$r=CkCompression_BeginDecompressStringAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function beginDecompressStringENC($str) {
		return CkCompression_beginDecompressStringENC($this->_cPtr,$str);
	}

	function BeginDecompressStringENCAsync($str) {
		$r=CkCompression_BeginDecompressStringENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressBytes($data,$outData) {
		return CkCompression_CompressBytes($this->_cPtr,$data,$outData);
	}

	function CompressBytesAsync($data) {
		$r=CkCompression_CompressBytesAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function compressBytesENC($data) {
		return CkCompression_compressBytesENC($this->_cPtr,$data);
	}

	function CompressBytesENCAsync($data) {
		$r=CkCompression_CompressBytesENCAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressFile($srcPath,$destPath) {
		return CkCompression_CompressFile($this->_cPtr,$srcPath,$destPath);
	}

	function CompressFileAsync($srcPath,$destPath) {
		$r=CkCompression_CompressFileAsync($this->_cPtr,$srcPath,$destPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressStream($strm) {
		return CkCompression_CompressStream($this->_cPtr,$strm);
	}

	function CompressStreamAsync($strm) {
		$r=CkCompression_CompressStreamAsync($this->_cPtr,$strm);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CompressString($str,$outData) {
		return CkCompression_CompressString($this->_cPtr,$str,$outData);
	}

	function CompressStringAsync($str) {
		$r=CkCompression_CompressStringAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function compressStringENC($str) {
		return CkCompression_compressStringENC($this->_cPtr,$str);
	}

	function CompressStringENCAsync($str) {
		$r=CkCompression_CompressStringENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DecompressBytes($data,$outData) {
		return CkCompression_DecompressBytes($this->_cPtr,$data,$outData);
	}

	function DecompressBytesAsync($data) {
		$r=CkCompression_DecompressBytesAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DecompressBytesENC($str,$outData) {
		return CkCompression_DecompressBytesENC($this->_cPtr,$str,$outData);
	}

	function DecompressBytesENCAsync($str) {
		$r=CkCompression_DecompressBytesENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DecompressFile($srcPath,$destPath) {
		return CkCompression_DecompressFile($this->_cPtr,$srcPath,$destPath);
	}

	function DecompressFileAsync($srcPath,$destPath) {
		$r=CkCompression_DecompressFileAsync($this->_cPtr,$srcPath,$destPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DecompressStream($strm) {
		return CkCompression_DecompressStream($this->_cPtr,$strm);
	}

	function DecompressStreamAsync($strm) {
		$r=CkCompression_DecompressStreamAsync($this->_cPtr,$strm);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function decompressString($data) {
		return CkCompression_decompressString($this->_cPtr,$data);
	}

	function DecompressStringAsync($data) {
		$r=CkCompression_DecompressStringAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function decompressStringENC($str) {
		return CkCompression_decompressStringENC($this->_cPtr,$str);
	}

	function DecompressStringENCAsync($str) {
		$r=CkCompression_DecompressStringENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function EndCompressBytes($outData) {
		return CkCompression_EndCompressBytes($this->_cPtr,$outData);
	}

	function EndCompressBytesAsync() {
		$r=CkCompression_EndCompressBytesAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function endCompressBytesENC() {
		return CkCompression_endCompressBytesENC($this->_cPtr);
	}

	function EndCompressBytesENCAsync() {
		$r=CkCompression_EndCompressBytesENCAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function EndCompressString($outData) {
		return CkCompression_EndCompressString($this->_cPtr,$outData);
	}

	function EndCompressStringAsync() {
		$r=CkCompression_EndCompressStringAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function endCompressStringENC() {
		return CkCompression_endCompressStringENC($this->_cPtr);
	}

	function EndCompressStringENCAsync() {
		$r=CkCompression_EndCompressStringENCAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function EndDecompressBytes($outData) {
		return CkCompression_EndDecompressBytes($this->_cPtr,$outData);
	}

	function EndDecompressBytesAsync() {
		$r=CkCompression_EndDecompressBytesAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function EndDecompressBytesENC($outData) {
		return CkCompression_EndDecompressBytesENC($this->_cPtr,$outData);
	}

	function EndDecompressBytesENCAsync() {
		$r=CkCompression_EndDecompressBytesENCAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function endDecompressString() {
		return CkCompression_endDecompressString($this->_cPtr);
	}

	function EndDecompressStringAsync() {
		$r=CkCompression_EndDecompressStringAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function endDecompressStringENC() {
		return CkCompression_endDecompressStringENC($this->_cPtr);
	}

	function EndDecompressStringENCAsync() {
		$r=CkCompression_EndDecompressStringENCAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function MoreCompressBytes($data,$outData) {
		return CkCompression_MoreCompressBytes($this->_cPtr,$data,$outData);
	}

	function MoreCompressBytesAsync($data) {
		$r=CkCompression_MoreCompressBytesAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function moreCompressBytesENC($data) {
		return CkCompression_moreCompressBytesENC($this->_cPtr,$data);
	}

	function MoreCompressBytesENCAsync($data) {
		$r=CkCompression_MoreCompressBytesENCAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function MoreCompressString($str,$outData) {
		return CkCompression_MoreCompressString($this->_cPtr,$str,$outData);
	}

	function MoreCompressStringAsync($str) {
		$r=CkCompression_MoreCompressStringAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function moreCompressStringENC($str) {
		return CkCompression_moreCompressStringENC($this->_cPtr,$str);
	}

	function MoreCompressStringENCAsync($str) {
		$r=CkCompression_MoreCompressStringENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function MoreDecompressBytes($data,$outData) {
		return CkCompression_MoreDecompressBytes($this->_cPtr,$data,$outData);
	}

	function MoreDecompressBytesAsync($data) {
		$r=CkCompression_MoreDecompressBytesAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function MoreDecompressBytesENC($str,$outData) {
		return CkCompression_MoreDecompressBytesENC($this->_cPtr,$str,$outData);
	}

	function MoreDecompressBytesENCAsync($str) {
		$r=CkCompression_MoreDecompressBytesENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function moreDecompressString($data) {
		return CkCompression_moreDecompressString($this->_cPtr,$data);
	}

	function MoreDecompressStringAsync($data) {
		$r=CkCompression_MoreDecompressStringAsync($this->_cPtr,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function moreDecompressStringENC($str) {
		return CkCompression_moreDecompressStringENC($this->_cPtr,$str);
	}

	function MoreDecompressStringENCAsync($str) {
		$r=CkCompression_MoreDecompressStringENCAsync($this->_cPtr,$str);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnlockComponent($unlockCode) {
		return CkCompression_UnlockComponent($this->_cPtr,$unlockCode);
	}
}


?>