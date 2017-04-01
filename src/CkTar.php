<?php
class CkTar {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkTar') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkTar();
	}

	function get_Utf8() {
		return CkTar_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkTar_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkTar_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_CaptureXmlListing() {
		return CkTar_get_CaptureXmlListing($this->_cPtr);
	}

	function put_CaptureXmlListing($newVal) {
		CkTar_put_CaptureXmlListing($this->_cPtr,$newVal);
	}

	function get_Charset($str) {
		CkTar_get_Charset($this->_cPtr,$str);
	}

	function charset() {
		return CkTar_charset($this->_cPtr);
	}

	function put_Charset($newVal) {
		CkTar_put_Charset($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkTar_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkTar_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkTar_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_DirMode() {
		return CkTar_get_DirMode($this->_cPtr);
	}

	function put_DirMode($newVal) {
		CkTar_put_DirMode($this->_cPtr,$newVal);
	}

	function get_DirPrefix($str) {
		CkTar_get_DirPrefix($this->_cPtr,$str);
	}

	function dirPrefix() {
		return CkTar_dirPrefix($this->_cPtr);
	}

	function put_DirPrefix($newVal) {
		CkTar_put_DirPrefix($this->_cPtr,$newVal);
	}

	function get_FileMode() {
		return CkTar_get_FileMode($this->_cPtr);
	}

	function put_FileMode($newVal) {
		CkTar_put_FileMode($this->_cPtr,$newVal);
	}

	function get_GroupId() {
		return CkTar_get_GroupId($this->_cPtr);
	}

	function put_GroupId($newVal) {
		CkTar_put_GroupId($this->_cPtr,$newVal);
	}

	function get_GroupName($str) {
		CkTar_get_GroupName($this->_cPtr,$str);
	}

	function groupName() {
		return CkTar_groupName($this->_cPtr);
	}

	function put_GroupName($newVal) {
		CkTar_put_GroupName($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkTar_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkTar_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkTar_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkTar_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkTar_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkTar_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkTar_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkTar_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkTar_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkTar_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_MatchCaseSensitive() {
		return CkTar_get_MatchCaseSensitive($this->_cPtr);
	}

	function put_MatchCaseSensitive($newVal) {
		CkTar_put_MatchCaseSensitive($this->_cPtr,$newVal);
	}

	function get_MustMatch($str) {
		CkTar_get_MustMatch($this->_cPtr,$str);
	}

	function mustMatch() {
		return CkTar_mustMatch($this->_cPtr);
	}

	function put_MustMatch($newVal) {
		CkTar_put_MustMatch($this->_cPtr,$newVal);
	}

	function get_MustNotMatch($str) {
		CkTar_get_MustNotMatch($this->_cPtr,$str);
	}

	function mustNotMatch() {
		return CkTar_mustNotMatch($this->_cPtr);
	}

	function put_MustNotMatch($newVal) {
		CkTar_put_MustNotMatch($this->_cPtr,$newVal);
	}

	function get_NoAbsolutePaths() {
		return CkTar_get_NoAbsolutePaths($this->_cPtr);
	}

	function put_NoAbsolutePaths($newVal) {
		CkTar_put_NoAbsolutePaths($this->_cPtr,$newVal);
	}

	function get_NumDirRoots() {
		return CkTar_get_NumDirRoots($this->_cPtr);
	}

	function get_PercentDoneScale() {
		return CkTar_get_PercentDoneScale($this->_cPtr);
	}

	function put_PercentDoneScale($newVal) {
		CkTar_put_PercentDoneScale($this->_cPtr,$newVal);
	}

	function get_ScriptFileMode() {
		return CkTar_get_ScriptFileMode($this->_cPtr);
	}

	function put_ScriptFileMode($newVal) {
		CkTar_put_ScriptFileMode($this->_cPtr,$newVal);
	}

	function get_SuppressOutput() {
		return CkTar_get_SuppressOutput($this->_cPtr);
	}

	function put_SuppressOutput($newVal) {
		CkTar_put_SuppressOutput($this->_cPtr,$newVal);
	}

	function get_UntarCaseSensitive() {
		return CkTar_get_UntarCaseSensitive($this->_cPtr);
	}

	function put_UntarCaseSensitive($newVal) {
		CkTar_put_UntarCaseSensitive($this->_cPtr,$newVal);
	}

	function get_UntarDebugLog() {
		return CkTar_get_UntarDebugLog($this->_cPtr);
	}

	function put_UntarDebugLog($newVal) {
		CkTar_put_UntarDebugLog($this->_cPtr,$newVal);
	}

	function get_UntarDiscardPaths() {
		return CkTar_get_UntarDiscardPaths($this->_cPtr);
	}

	function put_UntarDiscardPaths($newVal) {
		CkTar_put_UntarDiscardPaths($this->_cPtr,$newVal);
	}

	function get_UntarFromDir($str) {
		CkTar_get_UntarFromDir($this->_cPtr,$str);
	}

	function untarFromDir() {
		return CkTar_untarFromDir($this->_cPtr);
	}

	function put_UntarFromDir($newVal) {
		CkTar_put_UntarFromDir($this->_cPtr,$newVal);
	}

	function get_UntarMatchPattern($str) {
		CkTar_get_UntarMatchPattern($this->_cPtr,$str);
	}

	function untarMatchPattern() {
		return CkTar_untarMatchPattern($this->_cPtr);
	}

	function put_UntarMatchPattern($newVal) {
		CkTar_put_UntarMatchPattern($this->_cPtr,$newVal);
	}

	function get_UntarMaxCount() {
		return CkTar_get_UntarMaxCount($this->_cPtr);
	}

	function put_UntarMaxCount($newVal) {
		CkTar_put_UntarMaxCount($this->_cPtr,$newVal);
	}

	function get_UserId() {
		return CkTar_get_UserId($this->_cPtr);
	}

	function put_UserId($newVal) {
		CkTar_put_UserId($this->_cPtr,$newVal);
	}

	function get_UserName($str) {
		CkTar_get_UserName($this->_cPtr,$str);
	}

	function userName() {
		return CkTar_userName($this->_cPtr);
	}

	function put_UserName($newVal) {
		CkTar_put_UserName($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkTar_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkTar_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkTar_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkTar_version($this->_cPtr);
	}

	function get_WriteFormat($str) {
		CkTar_get_WriteFormat($this->_cPtr,$str);
	}

	function writeFormat() {
		return CkTar_writeFormat($this->_cPtr);
	}

	function put_WriteFormat($newVal) {
		CkTar_put_WriteFormat($this->_cPtr,$newVal);
	}

	function get_XmlListing($str) {
		CkTar_get_XmlListing($this->_cPtr,$str);
	}

	function xmlListing() {
		return CkTar_xmlListing($this->_cPtr);
	}

	function put_XmlListing($newVal) {
		CkTar_put_XmlListing($this->_cPtr,$newVal);
	}

	function AddDirRoot($dirPath) {
		return CkTar_AddDirRoot($this->_cPtr,$dirPath);
	}

	function AddDirRoot2($rootPrefix,$rootPath) {
		return CkTar_AddDirRoot2($this->_cPtr,$rootPrefix,$rootPath);
	}

	function AddFile($path) {
		return CkTar_AddFile($this->_cPtr,$path);
	}

	function CreateDeb($controlPath,$dataPath,$debPath) {
		return CkTar_CreateDeb($this->_cPtr,$controlPath,$dataPath,$debPath);
	}

	function getDirRoot($index) {
		return CkTar_getDirRoot($this->_cPtr,$index);
	}

	function dirRoot($index) {
		return CkTar_dirRoot($this->_cPtr,$index);
	}

	function listXml($tarPath) {
		return CkTar_listXml($this->_cPtr,$tarPath);
	}

	function ListXmlAsync($tarPath) {
		$r=CkTar_ListXmlAsync($this->_cPtr,$tarPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SaveLastError($path) {
		return CkTar_SaveLastError($this->_cPtr,$path);
	}

	function UnlockComponent($unlockCode) {
		return CkTar_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function Untar($tarPath) {
		return CkTar_Untar($this->_cPtr,$tarPath);
	}

	function UntarAsync($tarPath) {
		$r=CkTar_UntarAsync($this->_cPtr,$tarPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UntarBz2($tarPath) {
		return CkTar_UntarBz2($this->_cPtr,$tarPath);
	}

	function UntarBz2Async($tarPath) {
		$r=CkTar_UntarBz2Async($this->_cPtr,$tarPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UntarFirstMatchingToMemory($tarFileBytes,$matchPattern,$outBytes) {
		return CkTar_UntarFirstMatchingToMemory($this->_cPtr,$tarFileBytes,$matchPattern,$outBytes);
	}

	function UntarFromMemory($tarFileBytes) {
		return CkTar_UntarFromMemory($this->_cPtr,$tarFileBytes);
	}

	function UntarFromMemoryAsync($tarFileBytes) {
		$r=CkTar_UntarFromMemoryAsync($this->_cPtr,$tarFileBytes);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UntarGz($tarPath) {
		return CkTar_UntarGz($this->_cPtr,$tarPath);
	}

	function UntarGzAsync($tarPath) {
		$r=CkTar_UntarGzAsync($this->_cPtr,$tarPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UntarZ($tarPath) {
		return CkTar_UntarZ($this->_cPtr,$tarPath);
	}

	function UntarZAsync($tarPath) {
		$r=CkTar_UntarZAsync($this->_cPtr,$tarPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function VerifyTar($tarPath) {
		return CkTar_VerifyTar($this->_cPtr,$tarPath);
	}

	function VerifyTarAsync($tarPath) {
		$r=CkTar_VerifyTarAsync($this->_cPtr,$tarPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteTar($tarPath) {
		return CkTar_WriteTar($this->_cPtr,$tarPath);
	}

	function WriteTarAsync($tarPath) {
		$r=CkTar_WriteTarAsync($this->_cPtr,$tarPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteTarBz2($bz2Path) {
		return CkTar_WriteTarBz2($this->_cPtr,$bz2Path);
	}

	function WriteTarBz2Async($bz2Path) {
		$r=CkTar_WriteTarBz2Async($this->_cPtr,$bz2Path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteTarGz($gzPath) {
		return CkTar_WriteTarGz($this->_cPtr,$gzPath);
	}

	function WriteTarGzAsync($gzPath) {
		$r=CkTar_WriteTarGzAsync($this->_cPtr,$gzPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}
}


?>