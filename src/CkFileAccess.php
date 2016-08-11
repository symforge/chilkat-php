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

	function get_Version($str) {
		CkFileAccess_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkFileAccess_version($this->_cPtr);
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

	function get_VerboseLogging() {
		return CkFileAccess_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkFileAccess_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkFileAccess_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkFileAccess_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkFileAccess_SaveLastError($this->_cPtr,$path);
	}

	function get_CurrentDir($str) {
		CkFileAccess_get_CurrentDir($this->_cPtr,$str);
	}

	function currentDir() {
		return CkFileAccess_currentDir($this->_cPtr);
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

	function AppendAnsi($text) {
		return CkFileAccess_AppendAnsi($this->_cPtr,$text);
	}

	function AppendText($text,$charset) {
		return CkFileAccess_AppendText($this->_cPtr,$text,$charset);
	}

	function AppendUnicodeBOM() {
		return CkFileAccess_AppendUnicodeBOM($this->_cPtr);
	}

	function AppendUtf8BOM() {
		return CkFileAccess_AppendUtf8BOM($this->_cPtr);
	}

	function DirAutoCreate($path) {
		return CkFileAccess_DirAutoCreate($this->_cPtr,$path);
	}

	function DirCreate($path) {
		return CkFileAccess_DirCreate($this->_cPtr,$path);
	}

	function DirDelete($path) {
		return CkFileAccess_DirDelete($this->_cPtr,$path);
	}

	function DirEnsureExists($filePath) {
		return CkFileAccess_DirEnsureExists($this->_cPtr,$filePath);
	}

	function FileClose() {
		CkFileAccess_FileClose($this->_cPtr);
	}

	function FileContentsEqual($path1,$path2) {
		return CkFileAccess_FileContentsEqual($this->_cPtr,$path1,$path2);
	}

	function FileCopy($existing,$newFilename,$failIfExists) {
		return CkFileAccess_FileCopy($this->_cPtr,$existing,$newFilename,$failIfExists);
	}

	function FileDelete($filename) {
		return CkFileAccess_FileDelete($this->_cPtr,$filename);
	}

	function FileExists($path) {
		return CkFileAccess_FileExists($this->_cPtr,$path);
	}

	function FileExists3($path) {
		return CkFileAccess_FileExists3($this->_cPtr,$path);
	}

	function FileOpen($filename,$accessMode,$shareMode,$createDisp,$attr) {
		return CkFileAccess_FileOpen($this->_cPtr,$filename,$accessMode,$shareMode,$createDisp,$attr);
	}

	function FileRead($numBytes,$outBytes) {
		return CkFileAccess_FileRead($this->_cPtr,$numBytes,$outBytes);
	}

	function FileRename($existing,$newFilename) {
		return CkFileAccess_FileRename($this->_cPtr,$existing,$newFilename);
	}

	function FileSeek($offset,$origin) {
		return CkFileAccess_FileSeek($this->_cPtr,$offset,$origin);
	}

	function FileSize($filename) {
		return CkFileAccess_FileSize($this->_cPtr,$filename);
	}

	function FileWrite($data) {
		return CkFileAccess_FileWrite($this->_cPtr,$data);
	}

	function genBlockId($index,$length,$encoding) {
		return CkFileAccess_genBlockId($this->_cPtr,$index,$length,$encoding);
	}

	function GetNumBlocks($blockSize) {
		return CkFileAccess_GetNumBlocks($this->_cPtr,$blockSize);
	}

	function getTempFilename($dirName,$prefix) {
		return CkFileAccess_getTempFilename($this->_cPtr,$dirName,$prefix);
	}

	function tempFilename($dirName,$prefix) {
		return CkFileAccess_tempFilename($this->_cPtr,$dirName,$prefix);
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

	function readBinaryToEncoded($filename,$encoding) {
		return CkFileAccess_readBinaryToEncoded($this->_cPtr,$filename,$encoding);
	}

	function ReadBlock($blockIndex,$blockSize,$outBytes) {
		return CkFileAccess_ReadBlock($this->_cPtr,$blockIndex,$blockSize,$outBytes);
	}

	function ReadEntireFile($filename,$outBytes) {
		return CkFileAccess_ReadEntireFile($this->_cPtr,$filename,$outBytes);
	}

	function readEntireTextFile($filename,$charset) {
		return CkFileAccess_readEntireTextFile($this->_cPtr,$filename,$charset);
	}

	function ReassembleFile($partsDirPath,$partPrefix,$partExtension,$reassembledFilename) {
		return CkFileAccess_ReassembleFile($this->_cPtr,$partsDirPath,$partPrefix,$partExtension,$reassembledFilename);
	}

	function ReplaceStrings($path,$charset,$existingString,$replacementString) {
		return CkFileAccess_ReplaceStrings($this->_cPtr,$path,$charset,$existingString,$replacementString);
	}

	function SetCurrentDir($path) {
		return CkFileAccess_SetCurrentDir($this->_cPtr,$path);
	}

	function SetFileTimes($path,$create,$lastAccess,$lastModified) {
		return CkFileAccess_SetFileTimes($this->_cPtr,$path,$create,$lastAccess,$lastModified);
	}

	function SetLastModified($path,$lastModified) {
		return CkFileAccess_SetLastModified($this->_cPtr,$path,$lastModified);
	}

	function SplitFile($fileToSplit,$partPrefix,$partExtension,$partSize,$destDir) {
		return CkFileAccess_SplitFile($this->_cPtr,$fileToSplit,$partPrefix,$partExtension,$partSize,$destDir);
	}

	function TreeDelete($path) {
		return CkFileAccess_TreeDelete($this->_cPtr,$path);
	}

	function WriteEntireFile($filename,$fileData) {
		return CkFileAccess_WriteEntireFile($this->_cPtr,$filename,$fileData);
	}

	function WriteEntireTextFile($filename,$fileData,$charset,$includePreamble) {
		return CkFileAccess_WriteEntireTextFile($this->_cPtr,$filename,$fileData,$charset,$includePreamble);
	}
}


?>