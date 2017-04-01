<?php
class CkZip {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkZip') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkZip();
	}

	function get_Utf8() {
		return CkZip_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkZip_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkZip_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AbortCurrent() {
		return CkZip_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkZip_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_AppendFromDir($str) {
		CkZip_get_AppendFromDir($this->_cPtr,$str);
	}

	function appendFromDir() {
		return CkZip_appendFromDir($this->_cPtr);
	}

	function put_AppendFromDir($newVal) {
		CkZip_put_AppendFromDir($this->_cPtr,$newVal);
	}

	function get_CaseSensitive() {
		return CkZip_get_CaseSensitive($this->_cPtr);
	}

	function put_CaseSensitive($newVal) {
		CkZip_put_CaseSensitive($this->_cPtr,$newVal);
	}

	function get_ClearArchiveAttribute() {
		return CkZip_get_ClearArchiveAttribute($this->_cPtr);
	}

	function put_ClearArchiveAttribute($newVal) {
		CkZip_put_ClearArchiveAttribute($this->_cPtr,$newVal);
	}

	function get_ClearReadOnlyAttr() {
		return CkZip_get_ClearReadOnlyAttr($this->_cPtr);
	}

	function put_ClearReadOnlyAttr($newVal) {
		CkZip_put_ClearReadOnlyAttr($this->_cPtr,$newVal);
	}

	function get_Comment($str) {
		CkZip_get_Comment($this->_cPtr,$str);
	}

	function comment() {
		return CkZip_comment($this->_cPtr);
	}

	function put_Comment($newVal) {
		CkZip_put_Comment($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkZip_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkZip_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkZip_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_DecryptPassword($str) {
		CkZip_get_DecryptPassword($this->_cPtr,$str);
	}

	function decryptPassword() {
		return CkZip_decryptPassword($this->_cPtr);
	}

	function put_DecryptPassword($newVal) {
		CkZip_put_DecryptPassword($this->_cPtr,$newVal);
	}

	function get_DiscardPaths() {
		return CkZip_get_DiscardPaths($this->_cPtr);
	}

	function put_DiscardPaths($newVal) {
		CkZip_put_DiscardPaths($this->_cPtr,$newVal);
	}

	function get_Encryption() {
		return CkZip_get_Encryption($this->_cPtr);
	}

	function put_Encryption($newVal) {
		CkZip_put_Encryption($this->_cPtr,$newVal);
	}

	function get_EncryptKeyLength() {
		return CkZip_get_EncryptKeyLength($this->_cPtr);
	}

	function put_EncryptKeyLength($newVal) {
		CkZip_put_EncryptKeyLength($this->_cPtr,$newVal);
	}

	function get_EncryptPassword($str) {
		CkZip_get_EncryptPassword($this->_cPtr,$str);
	}

	function encryptPassword() {
		return CkZip_encryptPassword($this->_cPtr);
	}

	function put_EncryptPassword($newVal) {
		CkZip_put_EncryptPassword($this->_cPtr,$newVal);
	}

	function get_FileCount() {
		return CkZip_get_FileCount($this->_cPtr);
	}

	function get_FileName($str) {
		CkZip_get_FileName($this->_cPtr,$str);
	}

	function fileName() {
		return CkZip_fileName($this->_cPtr);
	}

	function put_FileName($newVal) {
		CkZip_put_FileName($this->_cPtr,$newVal);
	}

	function get_HasZipFormatErrors() {
		return CkZip_get_HasZipFormatErrors($this->_cPtr);
	}

	function get_HeartbeatMs() {
		return CkZip_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkZip_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_IgnoreAccessDenied() {
		return CkZip_get_IgnoreAccessDenied($this->_cPtr);
	}

	function put_IgnoreAccessDenied($newVal) {
		CkZip_put_IgnoreAccessDenied($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkZip_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkZip_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkZip_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkZip_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkZip_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkZip_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkZip_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkZip_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumEntries() {
		return CkZip_get_NumEntries($this->_cPtr);
	}

	function get_OemCodePage() {
		return CkZip_get_OemCodePage($this->_cPtr);
	}

	function put_OemCodePage($newVal) {
		CkZip_put_OemCodePage($this->_cPtr,$newVal);
	}

	function get_OverwriteExisting() {
		return CkZip_get_OverwriteExisting($this->_cPtr);
	}

	function put_OverwriteExisting($newVal) {
		CkZip_put_OverwriteExisting($this->_cPtr,$newVal);
	}

	function get_PasswordProtect() {
		return CkZip_get_PasswordProtect($this->_cPtr);
	}

	function put_PasswordProtect($newVal) {
		CkZip_put_PasswordProtect($this->_cPtr,$newVal);
	}

	function get_PathPrefix($str) {
		CkZip_get_PathPrefix($this->_cPtr,$str);
	}

	function pathPrefix() {
		return CkZip_pathPrefix($this->_cPtr);
	}

	function put_PathPrefix($newVal) {
		CkZip_put_PathPrefix($this->_cPtr,$newVal);
	}

	function get_PercentDoneScale() {
		return CkZip_get_PercentDoneScale($this->_cPtr);
	}

	function put_PercentDoneScale($newVal) {
		CkZip_put_PercentDoneScale($this->_cPtr,$newVal);
	}

	function get_TempDir($str) {
		CkZip_get_TempDir($this->_cPtr,$str);
	}

	function tempDir() {
		return CkZip_tempDir($this->_cPtr);
	}

	function put_TempDir($newVal) {
		CkZip_put_TempDir($this->_cPtr,$newVal);
	}

	function get_TextFlag() {
		return CkZip_get_TextFlag($this->_cPtr);
	}

	function put_TextFlag($newVal) {
		CkZip_put_TextFlag($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkZip_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkZip_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkZip_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkZip_version($this->_cPtr);
	}

	function get_Zipx() {
		return CkZip_get_Zipx($this->_cPtr);
	}

	function put_Zipx($newVal) {
		CkZip_put_Zipx($this->_cPtr,$newVal);
	}

	function get_ZipxDefaultAlg($str) {
		CkZip_get_ZipxDefaultAlg($this->_cPtr,$str);
	}

	function zipxDefaultAlg() {
		return CkZip_zipxDefaultAlg($this->_cPtr);
	}

	function put_ZipxDefaultAlg($newVal) {
		CkZip_put_ZipxDefaultAlg($this->_cPtr,$newVal);
	}

	function AddNoCompressExtension($fileExtension) {
		CkZip_AddNoCompressExtension($this->_cPtr,$fileExtension);
	}

	function AppendBase64($fileName,$encodedCompressedData) {
		$r=CkZip_AppendBase64($this->_cPtr,$fileName,$encodedCompressedData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendCompressed($filename,$inData) {
		$r=CkZip_AppendCompressed($this->_cPtr,$filename,$inData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendData($fileName,$inData) {
		$r=CkZip_AppendData($this->_cPtr,$fileName,$inData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendDataEncoded($filename,$encoding,$data) {
		$r=CkZip_AppendDataEncoded($this->_cPtr,$filename,$encoding,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendFiles($filePattern,$recurse) {
		return CkZip_AppendFiles($this->_cPtr,$filePattern,$recurse);
	}

	function AppendFilesAsync($filePattern,$recurse) {
		$r=CkZip_AppendFilesAsync($this->_cPtr,$filePattern,$recurse);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AppendFilesEx($filePattern,$recurse,$saveExtraPath,$archiveOnly,$includeHidden,$includeSystem) {
		return CkZip_AppendFilesEx($this->_cPtr,$filePattern,$recurse,$saveExtraPath,$archiveOnly,$includeHidden,$includeSystem);
	}

	function AppendFilesExAsync($filePattern,$recurse,$saveExtraPath,$archiveOnly,$includeHidden,$includeSystem) {
		$r=CkZip_AppendFilesExAsync($this->_cPtr,$filePattern,$recurse,$saveExtraPath,$archiveOnly,$includeHidden,$includeSystem);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AppendHex($fileName,$encodedCompressedData) {
		$r=CkZip_AppendHex($this->_cPtr,$fileName,$encodedCompressedData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendMultiple($fileSpecs,$recurse) {
		return CkZip_AppendMultiple($this->_cPtr,$fileSpecs,$recurse);
	}

	function AppendMultipleAsync($fileSpecs,$recurse) {
		$r=CkZip_AppendMultipleAsync($this->_cPtr,$fileSpecs,$recurse);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AppendNew($fileName) {
		$r=CkZip_AppendNew($this->_cPtr,$fileName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendNewDir($dirName) {
		$r=CkZip_AppendNewDir($this->_cPtr,$dirName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendOneFileOrDir($fileOrDirPath,$saveExtraPath) {
		return CkZip_AppendOneFileOrDir($this->_cPtr,$fileOrDirPath,$saveExtraPath);
	}

	function AppendOneFileOrDirAsync($fileOrDirPath,$saveExtraPath) {
		$r=CkZip_AppendOneFileOrDirAsync($this->_cPtr,$fileOrDirPath,$saveExtraPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AppendString($internalZipFilepath,$textData) {
		$r=CkZip_AppendString($this->_cPtr,$internalZipFilepath,$textData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendString2($internalZipFilepath,$textData,$charset) {
		$r=CkZip_AppendString2($this->_cPtr,$internalZipFilepath,$textData,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function AppendZip($zipFileName) {
		return CkZip_AppendZip($this->_cPtr,$zipFileName);
	}

	function CloseZip() {
		CkZip_CloseZip($this->_cPtr);
	}

	function DeleteEntry($entry) {
		return CkZip_DeleteEntry($this->_cPtr,$entry);
	}

	function ExcludeDir($dirName) {
		CkZip_ExcludeDir($this->_cPtr,$dirName);
	}

	function Extract($dirPath) {
		return CkZip_Extract($this->_cPtr,$dirPath);
	}

	function ExtractAsync($dirPath) {
		$r=CkZip_ExtractAsync($this->_cPtr,$dirPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ExtractInto($dirPath) {
		return CkZip_ExtractInto($this->_cPtr,$dirPath);
	}

	function ExtractMatching($dirPath,$pattern) {
		return CkZip_ExtractMatching($this->_cPtr,$dirPath,$pattern);
	}

	function ExtractNewer($dirPath) {
		return CkZip_ExtractNewer($this->_cPtr,$dirPath);
	}

	function ExtractOne($entry,$dirPath) {
		return CkZip_ExtractOne($this->_cPtr,$entry,$dirPath);
	}

	function FirstEntry() {
		$r=CkZip_FirstEntry($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function FirstMatchingEntry($pattern) {
		$r=CkZip_FirstMatchingEntry($this->_cPtr,$pattern);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function getDirectoryAsXML() {
		return CkZip_getDirectoryAsXML($this->_cPtr);
	}

	function directoryAsXML() {
		return CkZip_directoryAsXML($this->_cPtr);
	}

	function GetEntryByID($entryID) {
		$r=CkZip_GetEntryByID($this->_cPtr,$entryID);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function GetEntryByIndex($index) {
		$r=CkZip_GetEntryByIndex($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function GetEntryByName($entryName) {
		$r=CkZip_GetEntryByName($this->_cPtr,$entryName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function GetExclusions() {
		$r=CkZip_GetExclusions($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function InsertNew($fileName,$beforeIndex) {
		$r=CkZip_InsertNew($this->_cPtr,$fileName,$beforeIndex);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkZipEntry($r);
		}
		return $r;
	}

	function IsNoCompressExtension($fileExtension) {
		return CkZip_IsNoCompressExtension($this->_cPtr,$fileExtension);
	}

	function IsPasswordProtected($zipFilename) {
		return CkZip_IsPasswordProtected($this->_cPtr,$zipFilename);
	}

	function IsUnlocked() {
		return CkZip_IsUnlocked($this->_cPtr);
	}

	function NewZip($zipFilePath) {
		return CkZip_NewZip($this->_cPtr,$zipFilePath);
	}

	function OpenBd($binData) {
		return CkZip_OpenBd($this->_cPtr,$binData);
	}

	function OpenFromByteData($byteData) {
		return CkZip_OpenFromByteData($this->_cPtr,$byteData);
	}

	function OpenFromMemory($inData) {
		return CkZip_OpenFromMemory($this->_cPtr,$inData);
	}

	function OpenZip($zipPath) {
		return CkZip_OpenZip($this->_cPtr,$zipPath);
	}

	function OpenZipAsync($zipPath) {
		$r=CkZip_OpenZipAsync($this->_cPtr,$zipPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function QuickAppend($ZipFileName) {
		return CkZip_QuickAppend($this->_cPtr,$ZipFileName);
	}

	function QuickAppendAsync($ZipFileName) {
		$r=CkZip_QuickAppendAsync($this->_cPtr,$ZipFileName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RemoveNoCompressExtension($fileExtension) {
		CkZip_RemoveNoCompressExtension($this->_cPtr,$fileExtension);
	}

	function SaveLastError($path) {
		return CkZip_SaveLastError($this->_cPtr,$path);
	}

	function SetCompressionLevel($level) {
		CkZip_SetCompressionLevel($this->_cPtr,$level);
	}

	function SetExclusions($excludePatterns) {
		CkZip_SetExclusions($this->_cPtr,$excludePatterns);
	}

	function SetPassword($password) {
		CkZip_SetPassword($this->_cPtr,$password);
	}

	function UnlockComponent($regCode) {
		return CkZip_UnlockComponent($this->_cPtr,$regCode);
	}

	function Unzip($dirPath) {
		return CkZip_Unzip($this->_cPtr,$dirPath);
	}

	function UnzipAsync($dirPath) {
		$r=CkZip_UnzipAsync($this->_cPtr,$dirPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnzipInto($dirPath) {
		return CkZip_UnzipInto($this->_cPtr,$dirPath);
	}

	function UnzipIntoAsync($dirPath) {
		$r=CkZip_UnzipIntoAsync($this->_cPtr,$dirPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnzipMatching($dirPath,$pattern,$verbose) {
		return CkZip_UnzipMatching($this->_cPtr,$dirPath,$pattern,$verbose);
	}

	function UnzipMatchingAsync($dirPath,$pattern,$verbose) {
		$r=CkZip_UnzipMatchingAsync($this->_cPtr,$dirPath,$pattern,$verbose);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnzipMatchingInto($dirPath,$pattern,$verbose) {
		return CkZip_UnzipMatchingInto($this->_cPtr,$dirPath,$pattern,$verbose);
	}

	function UnzipMatchingIntoAsync($dirPath,$pattern,$verbose) {
		$r=CkZip_UnzipMatchingIntoAsync($this->_cPtr,$dirPath,$pattern,$verbose);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnzipNewer($dirPath) {
		return CkZip_UnzipNewer($this->_cPtr,$dirPath);
	}

	function UnzipNewerAsync($dirPath) {
		$r=CkZip_UnzipNewerAsync($this->_cPtr,$dirPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function VerifyPassword() {
		return CkZip_VerifyPassword($this->_cPtr);
	}

	function WriteBd($binData) {
		return CkZip_WriteBd($this->_cPtr,$binData);
	}

	function WriteBdAsync($binData) {
		$r=CkZip_WriteBdAsync($this->_cPtr,$binData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteToMemory($outData) {
		return CkZip_WriteToMemory($this->_cPtr,$outData);
	}

	function WriteToMemoryAsync() {
		$r=CkZip_WriteToMemoryAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteZip() {
		return CkZip_WriteZip($this->_cPtr);
	}

	function WriteZipAsync() {
		$r=CkZip_WriteZipAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteZipAndClose() {
		return CkZip_WriteZipAndClose($this->_cPtr);
	}

	function WriteZipAndCloseAsync() {
		$r=CkZip_WriteZipAndCloseAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}
}


?>