<?php
class CkFileAccess {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkFileAccess') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkFileAccess();
	}

	function get_Utf8() {
		return CkFileAccess_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkFileAccess_put_Utf8($this->_cPtr,$b);
	}

	function get_CurrentDir($str) {
		CkFileAccess_get_CurrentDir($this->_cPtr,$str);
	}

	function currentDir() {
		return CkFileAccess_currentDir($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkFileAccess_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkFileAccess_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkFileAccess_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_EndOfFile() {
		return CkFileAccess_get_EndOfFile($this->_cPtr);
	}

	function get_FileOpenError() {
		return CkFileAccess_get_FileOpenError($this->_cPtr);
	}

	function get_FileOpenErrorMsg($str) {
		CkFileAccess_get_FileOpenErrorMsg($this->_cPtr,$str);
	}

	function fileOpenErrorMsg() {
		return CkFileAccess_fileOpenErrorMsg($this->_cPtr);
	}

	function get_LastErrorHtml($str) {
		CkFileAccess_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkFileAccess_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkFileAccess_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkFileAccess_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkFileAccess_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkFileAccess_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkFileAccess_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkFileAccess_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkFileAccess_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkFileAccess_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkFileAccess_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkFileAccess_version($this->_cPtr);
	}

	function AppendAnsi($text) {
		return CkFileAccess_AppendAnsi($this->_cPtr,$text);
	}

	function AppendText($str,$charset) {
		return CkFileAccess_AppendText($this->_cPtr,$str,$charset);
	}

	function AppendUnicodeBOM() {
		return CkFileAccess_AppendUnicodeBOM($this->_cPtr);
	}

	function AppendUtf8BOM() {
		return CkFileAccess_AppendUtf8BOM($this->_cPtr);
	}

	function DirAutoCreate($dirPath) {
		return CkFileAccess_DirAutoCreate($this->_cPtr,$dirPath);
	}

	function DirCreate($dirPath) {
		return CkFileAccess_DirCreate($this->_cPtr,$dirPath);
	}

	function DirDelete($dirPath) {
		return CkFileAccess_DirDelete($this->_cPtr,$dirPath);
	}

	function DirEnsureExists($filePath) {
		return CkFileAccess_DirEnsureExists($this->_cPtr,$filePath);
	}

	function FileClose() {
		CkFileAccess_FileClose($this->_cPtr);
	}

	function FileContentsEqual($filePath1,$filePath2) {
		return CkFileAccess_FileContentsEqual($this->_cPtr,$filePath1,$filePath2);
	}

	function FileCopy($existingFilepath,$newFilepath,$failIfExists) {
		return CkFileAccess_FileCopy($this->_cPtr,$existingFilepath,$newFilepath,$failIfExists);
	}

	function FileDelete($filePath) {
		return CkFileAccess_FileDelete($this->_cPtr,$filePath);
	}

	function FileExists($filePath) {
		return CkFileAccess_FileExists($this->_cPtr,$filePath);
	}

	function FileExists3($path) {
		return CkFileAccess_FileExists3($this->_cPtr,$path);
	}

	function FileOpen($filePath,$accessMode,$shareMode,$createDisposition,$attributes) {
		return CkFileAccess_FileOpen($this->_cPtr,$filePath,$accessMode,$shareMode,$createDisposition,$attributes);
	}

	function FileRead($maxNumBytes,$outBytes) {
		return CkFileAccess_FileRead($this->_cPtr,$maxNumBytes,$outBytes);
	}

	function FileReadBd($maxNumBytes,$binData) {
		return CkFileAccess_FileReadBd($this->_cPtr,$maxNumBytes,$binData);
	}

	function FileRename($existingFilepath,$newFilepath) {
		return CkFileAccess_FileRename($this->_cPtr,$existingFilepath,$newFilepath);
	}

	function FileSeek($offset,$origin) {
		return CkFileAccess_FileSeek($this->_cPtr,$offset,$origin);
	}

	function FileSize($filePath) {
		return CkFileAccess_FileSize($this->_cPtr,$filePath);
	}

	function FileWrite($data) {
		return CkFileAccess_FileWrite($this->_cPtr,$data);
	}

	function FileWriteBd($binData,$offset,$numBytes) {
		return CkFileAccess_FileWriteBd($this->_cPtr,$binData,$offset,$numBytes);
	}

	function genBlockId($index,$length,$encoding) {
		return CkFileAccess_genBlockId($this->_cPtr,$index,$length,$encoding);
	}

	function getDirectoryName($path) {
		return CkFileAccess_getDirectoryName($this->_cPtr,$path);
	}

	function directoryName($path) {
		return CkFileAccess_directoryName($this->_cPtr,$path);
	}

	function getExtension($path) {
		return CkFileAccess_getExtension($this->_cPtr,$path);
	}

	function extension($path) {
		return CkFileAccess_extension($this->_cPtr,$path);
	}

	function getFileName($path) {
		return CkFileAccess_getFileName($this->_cPtr,$path);
	}

	function fileName($path) {
		return CkFileAccess_fileName($this->_cPtr,$path);
	}

	function getFileNameWithoutExtension($path) {
		return CkFileAccess_getFileNameWithoutExtension($this->_cPtr,$path);
	}

	function fileNameWithoutExtension($path) {
		return CkFileAccess_fileNameWithoutExtension($this->_cPtr,$path);
	}

	function GetLastModified($path) {
		$r=CkFileAccess_GetLastModified($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetNumBlocks($blockSize) {
		return CkFileAccess_GetNumBlocks($this->_cPtr,$blockSize);
	}

	function getTempFilename($dirPath,$prefix) {
		return CkFileAccess_getTempFilename($this->_cPtr,$dirPath,$prefix);
	}

	function tempFilename($dirPath,$prefix) {
		return CkFileAccess_tempFilename($this->_cPtr,$dirPath,$prefix);
	}

	function OpenForAppend($filePath) {
		return CkFileAccess_OpenForAppend($this->_cPtr,$filePath);
	}

	function OpenForRead($filePath) {
		return CkFileAccess_OpenForRead($this->_cPtr,$filePath);
	}

	function OpenForReadWrite($filePath) {
		return CkFileAccess_OpenForReadWrite($this->_cPtr,$filePath);
	}

	function OpenForWrite($filePath) {
		return CkFileAccess_OpenForWrite($this->_cPtr,$filePath);
	}

	function readBinaryToEncoded($filePath,$encoding) {
		return CkFileAccess_readBinaryToEncoded($this->_cPtr,$filePath,$encoding);
	}

	function ReadBlock($blockIndex,$blockSize,$outBytes) {
		return CkFileAccess_ReadBlock($this->_cPtr,$blockIndex,$blockSize,$outBytes);
	}

	function ReadEntireFile($filePath,$outBytes) {
		return CkFileAccess_ReadEntireFile($this->_cPtr,$filePath,$outBytes);
	}

	function readEntireTextFile($filePath,$charset) {
		return CkFileAccess_readEntireTextFile($this->_cPtr,$filePath,$charset);
	}

	function ReassembleFile($partsDirPath,$partPrefix,$partExtension,$reassembledFilename) {
		return CkFileAccess_ReassembleFile($this->_cPtr,$partsDirPath,$partPrefix,$partExtension,$reassembledFilename);
	}

	function ReplaceStrings($filePath,$charset,$existingString,$replacementString) {
		return CkFileAccess_ReplaceStrings($this->_cPtr,$filePath,$charset,$existingString,$replacementString);
	}

	function SaveLastError($path) {
		return CkFileAccess_SaveLastError($this->_cPtr,$path);
	}

	function SetCurrentDir($dirPath) {
		return CkFileAccess_SetCurrentDir($this->_cPtr,$dirPath);
	}

	function SetFileTimes($filePath,$createTime,$lastAccessTime,$lastModTime) {
		return CkFileAccess_SetFileTimes($this->_cPtr,$filePath,$createTime,$lastAccessTime,$lastModTime);
	}

	function SetLastModified($filePath,$lastModified) {
		return CkFileAccess_SetLastModified($this->_cPtr,$filePath,$lastModified);
	}

	function SplitFile($fileToSplit,$partPrefix,$partExtension,$partSize,$destDir) {
		return CkFileAccess_SplitFile($this->_cPtr,$fileToSplit,$partPrefix,$partExtension,$partSize,$destDir);
	}

	function TreeDelete($path) {
		return CkFileAccess_TreeDelete($this->_cPtr,$path);
	}

	function WriteEntireFile($filePath,$fileData) {
		return CkFileAccess_WriteEntireFile($this->_cPtr,$filePath,$fileData);
	}

	function WriteEntireTextFile($filePath,$textData,$charset,$includedPreamble) {
		return CkFileAccess_WriteEntireTextFile($this->_cPtr,$filePath,$textData,$charset,$includedPreamble);
	}
}


?>