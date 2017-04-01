<?php
class CkScp {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkScp') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkScp();
	}

	function get_Utf8() {
		return CkScp_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkScp_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkScp_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AbortCurrent() {
		return CkScp_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkScp_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkScp_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkScp_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkScp_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkScp_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkScp_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkScp_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkScp_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkScp_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkScp_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkScp_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkScp_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkScp_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkScp_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_PercentDoneScale() {
		return CkScp_get_PercentDoneScale($this->_cPtr);
	}

	function put_PercentDoneScale($newVal) {
		CkScp_put_PercentDoneScale($this->_cPtr,$newVal);
	}

	function get_SyncedFiles($str) {
		CkScp_get_SyncedFiles($this->_cPtr,$str);
	}

	function syncedFiles() {
		return CkScp_syncedFiles($this->_cPtr);
	}

	function put_SyncedFiles($newVal) {
		CkScp_put_SyncedFiles($this->_cPtr,$newVal);
	}

	function get_SyncMustMatch($str) {
		CkScp_get_SyncMustMatch($this->_cPtr,$str);
	}

	function syncMustMatch() {
		return CkScp_syncMustMatch($this->_cPtr);
	}

	function put_SyncMustMatch($newVal) {
		CkScp_put_SyncMustMatch($this->_cPtr,$newVal);
	}

	function get_SyncMustMatchDir($str) {
		CkScp_get_SyncMustMatchDir($this->_cPtr,$str);
	}

	function syncMustMatchDir() {
		return CkScp_syncMustMatchDir($this->_cPtr);
	}

	function put_SyncMustMatchDir($newVal) {
		CkScp_put_SyncMustMatchDir($this->_cPtr,$newVal);
	}

	function get_SyncMustNotMatch($str) {
		CkScp_get_SyncMustNotMatch($this->_cPtr,$str);
	}

	function syncMustNotMatch() {
		return CkScp_syncMustNotMatch($this->_cPtr);
	}

	function put_SyncMustNotMatch($newVal) {
		CkScp_put_SyncMustNotMatch($this->_cPtr,$newVal);
	}

	function get_SyncMustNotMatchDir($str) {
		CkScp_get_SyncMustNotMatchDir($this->_cPtr,$str);
	}

	function syncMustNotMatchDir() {
		return CkScp_syncMustNotMatchDir($this->_cPtr);
	}

	function put_SyncMustNotMatchDir($newVal) {
		CkScp_put_SyncMustNotMatchDir($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkScp_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkScp_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkScp_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkScp_version($this->_cPtr);
	}

	function DownloadBinary($remotePath,$outBytes) {
		return CkScp_DownloadBinary($this->_cPtr,$remotePath,$outBytes);
	}

	function DownloadBinaryAsync($remotePath) {
		$r=CkScp_DownloadBinaryAsync($this->_cPtr,$remotePath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function downloadBinaryEncoded($remotePath,$encoding) {
		return CkScp_downloadBinaryEncoded($this->_cPtr,$remotePath,$encoding);
	}

	function DownloadBinaryEncodedAsync($remotePath,$encoding) {
		$r=CkScp_DownloadBinaryEncodedAsync($this->_cPtr,$remotePath,$encoding);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DownloadFile($remotePath,$localPath) {
		return CkScp_DownloadFile($this->_cPtr,$remotePath,$localPath);
	}

	function DownloadFileAsync($remotePath,$localPath) {
		$r=CkScp_DownloadFileAsync($this->_cPtr,$remotePath,$localPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function downloadString($remotePath,$charset) {
		return CkScp_downloadString($this->_cPtr,$remotePath,$charset);
	}

	function DownloadStringAsync($remotePath,$charset) {
		$r=CkScp_DownloadStringAsync($this->_cPtr,$remotePath,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SaveLastError($path) {
		return CkScp_SaveLastError($this->_cPtr,$path);
	}

	function SyncTreeDownload($remoteRoot,$localRoot,$mode,$bRecurse) {
		return CkScp_SyncTreeDownload($this->_cPtr,$remoteRoot,$localRoot,$mode,$bRecurse);
	}

	function SyncTreeDownloadAsync($remoteRoot,$localRoot,$mode,$bRecurse) {
		$r=CkScp_SyncTreeDownloadAsync($this->_cPtr,$remoteRoot,$localRoot,$mode,$bRecurse);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SyncTreeUpload($localBaseDir,$remoteBaseDir,$mode,$bRecurse) {
		return CkScp_SyncTreeUpload($this->_cPtr,$localBaseDir,$remoteBaseDir,$mode,$bRecurse);
	}

	function SyncTreeUploadAsync($localBaseDir,$remoteBaseDir,$mode,$bRecurse) {
		$r=CkScp_SyncTreeUploadAsync($this->_cPtr,$localBaseDir,$remoteBaseDir,$mode,$bRecurse);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UploadBinary($remotePath,$binData) {
		return CkScp_UploadBinary($this->_cPtr,$remotePath,$binData);
	}

	function UploadBinaryAsync($remotePath,$binData) {
		$r=CkScp_UploadBinaryAsync($this->_cPtr,$remotePath,$binData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UploadBinaryEncoded($remotePath,$encodedData,$encoding) {
		return CkScp_UploadBinaryEncoded($this->_cPtr,$remotePath,$encodedData,$encoding);
	}

	function UploadBinaryEncodedAsync($remotePath,$encodedData,$encoding) {
		$r=CkScp_UploadBinaryEncodedAsync($this->_cPtr,$remotePath,$encodedData,$encoding);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UploadFile($localPath,$remotePath) {
		return CkScp_UploadFile($this->_cPtr,$localPath,$remotePath);
	}

	function UploadFileAsync($localPath,$remotePath) {
		$r=CkScp_UploadFileAsync($this->_cPtr,$localPath,$remotePath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UploadString($remotePath,$textData,$charset) {
		return CkScp_UploadString($this->_cPtr,$remotePath,$textData,$charset);
	}

	function UploadStringAsync($remotePath,$textData,$charset) {
		$r=CkScp_UploadStringAsync($this->_cPtr,$remotePath,$textData,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UseSsh($sshConnection) {
		return CkScp_UseSsh($this->_cPtr,$sshConnection);
	}
}


?>