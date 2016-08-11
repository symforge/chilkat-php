<?php
class CkSFtp {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkSFtp') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkSFtp();
	}

	function get_Utf8() {
		return CkSFtp_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkSFtp_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkSFtp_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkSFtp_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkSFtp_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkSFtp_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkSFtp_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkSFtp_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkSFtp_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkSFtp_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkSFtp_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkSFtp_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkSFtp_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkSFtp_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkSFtp_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkSFtp_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkSFtp_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkSFtp_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkSFtp_SaveLastError($this->_cPtr,$path);
	}

	function get_AccumulateBuffer($outBytes) {
		CkSFtp_get_AccumulateBuffer($this->_cPtr,$outBytes);
	}

	function get_AuthFailReason() {
		return CkSFtp_get_AuthFailReason($this->_cPtr);
	}

	function get_BandwidthThrottleDown() {
		return CkSFtp_get_BandwidthThrottleDown($this->_cPtr);
	}

	function put_BandwidthThrottleDown($newVal) {
		CkSFtp_put_BandwidthThrottleDown($this->_cPtr,$newVal);
	}

	function get_BandwidthThrottleUp() {
		return CkSFtp_get_BandwidthThrottleUp($this->_cPtr);
	}

	function put_BandwidthThrottleUp($newVal) {
		CkSFtp_put_BandwidthThrottleUp($this->_cPtr,$newVal);
	}

	function get_ClientIdentifier($str) {
		CkSFtp_get_ClientIdentifier($this->_cPtr,$str);
	}

	function clientIdentifier() {
		return CkSFtp_clientIdentifier($this->_cPtr);
	}

	function put_ClientIdentifier($newVal) {
		CkSFtp_put_ClientIdentifier($this->_cPtr,$newVal);
	}

	function get_ClientIpAddress($str) {
		CkSFtp_get_ClientIpAddress($this->_cPtr,$str);
	}

	function clientIpAddress() {
		return CkSFtp_clientIpAddress($this->_cPtr);
	}

	function put_ClientIpAddress($newVal) {
		CkSFtp_put_ClientIpAddress($this->_cPtr,$newVal);
	}

	function get_ConnectTimeoutMs() {
		return CkSFtp_get_ConnectTimeoutMs($this->_cPtr);
	}

	function put_ConnectTimeoutMs($newVal) {
		CkSFtp_put_ConnectTimeoutMs($this->_cPtr,$newVal);
	}

	function get_DisconnectCode() {
		return CkSFtp_get_DisconnectCode($this->_cPtr);
	}

	function get_DisconnectReason($str) {
		CkSFtp_get_DisconnectReason($this->_cPtr,$str);
	}

	function disconnectReason() {
		return CkSFtp_disconnectReason($this->_cPtr);
	}

	function get_EnableCache() {
		return CkSFtp_get_EnableCache($this->_cPtr);
	}

	function put_EnableCache($newVal) {
		CkSFtp_put_EnableCache($this->_cPtr,$newVal);
	}

	function get_EnableCompression() {
		return CkSFtp_get_EnableCompression($this->_cPtr);
	}

	function put_EnableCompression($newVal) {
		CkSFtp_put_EnableCompression($this->_cPtr,$newVal);
	}

	function get_FilenameCharset($str) {
		CkSFtp_get_FilenameCharset($this->_cPtr,$str);
	}

	function filenameCharset() {
		return CkSFtp_filenameCharset($this->_cPtr);
	}

	function put_FilenameCharset($newVal) {
		CkSFtp_put_FilenameCharset($this->_cPtr,$newVal);
	}

	function get_ForceCipher($str) {
		CkSFtp_get_ForceCipher($this->_cPtr,$str);
	}

	function forceCipher() {
		return CkSFtp_forceCipher($this->_cPtr);
	}

	function put_ForceCipher($newVal) {
		CkSFtp_put_ForceCipher($this->_cPtr,$newVal);
	}

	function get_ForceV3() {
		return CkSFtp_get_ForceV3($this->_cPtr);
	}

	function put_ForceV3($newVal) {
		CkSFtp_put_ForceV3($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkSFtp_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkSFtp_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_HostKeyAlg($str) {
		CkSFtp_get_HostKeyAlg($this->_cPtr,$str);
	}

	function hostKeyAlg() {
		return CkSFtp_hostKeyAlg($this->_cPtr);
	}

	function put_HostKeyAlg($newVal) {
		CkSFtp_put_HostKeyAlg($this->_cPtr,$newVal);
	}

	function get_HostKeyFingerprint($str) {
		CkSFtp_get_HostKeyFingerprint($this->_cPtr,$str);
	}

	function hostKeyFingerprint() {
		return CkSFtp_hostKeyFingerprint($this->_cPtr);
	}

	function get_HttpProxyAuthMethod($str) {
		CkSFtp_get_HttpProxyAuthMethod($this->_cPtr,$str);
	}

	function httpProxyAuthMethod() {
		return CkSFtp_httpProxyAuthMethod($this->_cPtr);
	}

	function put_HttpProxyAuthMethod($newVal) {
		CkSFtp_put_HttpProxyAuthMethod($this->_cPtr,$newVal);
	}

	function get_HttpProxyDomain($str) {
		CkSFtp_get_HttpProxyDomain($this->_cPtr,$str);
	}

	function httpProxyDomain() {
		return CkSFtp_httpProxyDomain($this->_cPtr);
	}

	function put_HttpProxyDomain($newVal) {
		CkSFtp_put_HttpProxyDomain($this->_cPtr,$newVal);
	}

	function get_HttpProxyHostname($str) {
		CkSFtp_get_HttpProxyHostname($this->_cPtr,$str);
	}

	function httpProxyHostname() {
		return CkSFtp_httpProxyHostname($this->_cPtr);
	}

	function put_HttpProxyHostname($newVal) {
		CkSFtp_put_HttpProxyHostname($this->_cPtr,$newVal);
	}

	function get_HttpProxyPassword($str) {
		CkSFtp_get_HttpProxyPassword($this->_cPtr,$str);
	}

	function httpProxyPassword() {
		return CkSFtp_httpProxyPassword($this->_cPtr);
	}

	function put_HttpProxyPassword($newVal) {
		CkSFtp_put_HttpProxyPassword($this->_cPtr,$newVal);
	}

	function get_HttpProxyPort() {
		return CkSFtp_get_HttpProxyPort($this->_cPtr);
	}

	function put_HttpProxyPort($newVal) {
		CkSFtp_put_HttpProxyPort($this->_cPtr,$newVal);
	}

	function get_HttpProxyUsername($str) {
		CkSFtp_get_HttpProxyUsername($this->_cPtr,$str);
	}

	function httpProxyUsername() {
		return CkSFtp_httpProxyUsername($this->_cPtr);
	}

	function put_HttpProxyUsername($newVal) {
		CkSFtp_put_HttpProxyUsername($this->_cPtr,$newVal);
	}

	function get_IdleTimeoutMs() {
		return CkSFtp_get_IdleTimeoutMs($this->_cPtr);
	}

	function put_IdleTimeoutMs($newVal) {
		CkSFtp_put_IdleTimeoutMs($this->_cPtr,$newVal);
	}

	function get_IncludeDotDirs() {
		return CkSFtp_get_IncludeDotDirs($this->_cPtr);
	}

	function put_IncludeDotDirs($newVal) {
		CkSFtp_put_IncludeDotDirs($this->_cPtr,$newVal);
	}

	function get_InitializeFailCode() {
		return CkSFtp_get_InitializeFailCode($this->_cPtr);
	}

	function get_InitializeFailReason($str) {
		CkSFtp_get_InitializeFailReason($this->_cPtr,$str);
	}

	function initializeFailReason() {
		return CkSFtp_initializeFailReason($this->_cPtr);
	}

	function get_IsConnected() {
		return CkSFtp_get_IsConnected($this->_cPtr);
	}

	function get_KeepSessionLog() {
		return CkSFtp_get_KeepSessionLog($this->_cPtr);
	}

	function put_KeepSessionLog($newVal) {
		CkSFtp_put_KeepSessionLog($this->_cPtr,$newVal);
	}

	function get_MaxPacketSize() {
		return CkSFtp_get_MaxPacketSize($this->_cPtr);
	}

	function put_MaxPacketSize($newVal) {
		CkSFtp_put_MaxPacketSize($this->_cPtr,$newVal);
	}

	function get_PasswordChangeRequested() {
		return CkSFtp_get_PasswordChangeRequested($this->_cPtr);
	}

	function get_PercentDoneScale() {
		return CkSFtp_get_PercentDoneScale($this->_cPtr);
	}

	function put_PercentDoneScale($newVal) {
		CkSFtp_put_PercentDoneScale($this->_cPtr,$newVal);
	}

	function get_PreferIpv6() {
		return CkSFtp_get_PreferIpv6($this->_cPtr);
	}

	function put_PreferIpv6($newVal) {
		CkSFtp_put_PreferIpv6($this->_cPtr,$newVal);
	}

	function get_PreserveDate() {
		return CkSFtp_get_PreserveDate($this->_cPtr);
	}

	function put_PreserveDate($newVal) {
		CkSFtp_put_PreserveDate($this->_cPtr,$newVal);
	}

	function get_ProtocolVersion() {
		return CkSFtp_get_ProtocolVersion($this->_cPtr);
	}

	function get_ReadDirMustMatch($str) {
		CkSFtp_get_ReadDirMustMatch($this->_cPtr,$str);
	}

	function readDirMustMatch() {
		return CkSFtp_readDirMustMatch($this->_cPtr);
	}

	function put_ReadDirMustMatch($newVal) {
		CkSFtp_put_ReadDirMustMatch($this->_cPtr,$newVal);
	}

	function get_ReadDirMustNotMatch($str) {
		CkSFtp_get_ReadDirMustNotMatch($this->_cPtr,$str);
	}

	function readDirMustNotMatch() {
		return CkSFtp_readDirMustNotMatch($this->_cPtr);
	}

	function put_ReadDirMustNotMatch($newVal) {
		CkSFtp_put_ReadDirMustNotMatch($this->_cPtr,$newVal);
	}

	function get_SessionLog($str) {
		CkSFtp_get_SessionLog($this->_cPtr,$str);
	}

	function sessionLog() {
		return CkSFtp_sessionLog($this->_cPtr);
	}

	function get_SoRcvBuf() {
		return CkSFtp_get_SoRcvBuf($this->_cPtr);
	}

	function put_SoRcvBuf($newVal) {
		CkSFtp_put_SoRcvBuf($this->_cPtr,$newVal);
	}

	function get_SoSndBuf() {
		return CkSFtp_get_SoSndBuf($this->_cPtr);
	}

	function put_SoSndBuf($newVal) {
		CkSFtp_put_SoSndBuf($this->_cPtr,$newVal);
	}

	function get_SocksHostname($str) {
		CkSFtp_get_SocksHostname($this->_cPtr,$str);
	}

	function socksHostname() {
		return CkSFtp_socksHostname($this->_cPtr);
	}

	function put_SocksHostname($newVal) {
		CkSFtp_put_SocksHostname($this->_cPtr,$newVal);
	}

	function get_SocksPassword($str) {
		CkSFtp_get_SocksPassword($this->_cPtr,$str);
	}

	function socksPassword() {
		return CkSFtp_socksPassword($this->_cPtr);
	}

	function put_SocksPassword($newVal) {
		CkSFtp_put_SocksPassword($this->_cPtr,$newVal);
	}

	function get_SocksPort() {
		return CkSFtp_get_SocksPort($this->_cPtr);
	}

	function put_SocksPort($newVal) {
		CkSFtp_put_SocksPort($this->_cPtr,$newVal);
	}

	function get_SocksUsername($str) {
		CkSFtp_get_SocksUsername($this->_cPtr,$str);
	}

	function socksUsername() {
		return CkSFtp_socksUsername($this->_cPtr);
	}

	function put_SocksUsername($newVal) {
		CkSFtp_put_SocksUsername($this->_cPtr,$newVal);
	}

	function get_SocksVersion() {
		return CkSFtp_get_SocksVersion($this->_cPtr);
	}

	function put_SocksVersion($newVal) {
		CkSFtp_put_SocksVersion($this->_cPtr,$newVal);
	}

	function get_SyncMustMatch($str) {
		CkSFtp_get_SyncMustMatch($this->_cPtr,$str);
	}

	function syncMustMatch() {
		return CkSFtp_syncMustMatch($this->_cPtr);
	}

	function put_SyncMustMatch($newVal) {
		CkSFtp_put_SyncMustMatch($this->_cPtr,$newVal);
	}

	function get_SyncMustNotMatch($str) {
		CkSFtp_get_SyncMustNotMatch($this->_cPtr,$str);
	}

	function syncMustNotMatch() {
		return CkSFtp_syncMustNotMatch($this->_cPtr);
	}

	function put_SyncMustNotMatch($newVal) {
		CkSFtp_put_SyncMustNotMatch($this->_cPtr,$newVal);
	}

	function get_SyncedFiles($str) {
		CkSFtp_get_SyncedFiles($this->_cPtr,$str);
	}

	function syncedFiles() {
		return CkSFtp_syncedFiles($this->_cPtr);
	}

	function put_SyncedFiles($newVal) {
		CkSFtp_put_SyncedFiles($this->_cPtr,$newVal);
	}

	function get_TcpNoDelay() {
		return CkSFtp_get_TcpNoDelay($this->_cPtr);
	}

	function put_TcpNoDelay($newVal) {
		CkSFtp_put_TcpNoDelay($this->_cPtr,$newVal);
	}

	function get_UploadChunkSize() {
		return CkSFtp_get_UploadChunkSize($this->_cPtr);
	}

	function put_UploadChunkSize($newVal) {
		CkSFtp_put_UploadChunkSize($this->_cPtr,$newVal);
	}

	function get_UtcMode() {
		return CkSFtp_get_UtcMode($this->_cPtr);
	}

	function put_UtcMode($newVal) {
		CkSFtp_put_UtcMode($this->_cPtr,$newVal);
	}

	function get_AbortCurrent() {
		return CkSFtp_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkSFtp_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_SyncDirectives($str) {
		CkSFtp_get_SyncDirectives($this->_cPtr,$str);
	}

	function syncDirectives() {
		return CkSFtp_syncDirectives($this->_cPtr);
	}

	function put_SyncDirectives($newVal) {
		CkSFtp_put_SyncDirectives($this->_cPtr,$newVal);
	}

	function AccumulateBytes($handle,$maxBytes) {
		return CkSFtp_AccumulateBytes($this->_cPtr,$handle,$maxBytes);
	}

	function AccumulateBytesAsync($handle,$maxBytes) {
		$r=CkSFtp_AccumulateBytesAsync($this->_cPtr,$handle,$maxBytes);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function add64($n1,$n2) {
		return CkSFtp_add64($this->_cPtr,$n1,$n2);
	}

	function AuthenticatePk($username,$privateKey) {
		return CkSFtp_AuthenticatePk($this->_cPtr,$username,$privateKey);
	}

	function AuthenticatePkAsync($username,$privateKey) {
		$r=CkSFtp_AuthenticatePkAsync($this->_cPtr,$username,$privateKey);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AuthenticatePw($login,$password) {
		return CkSFtp_AuthenticatePw($this->_cPtr,$login,$password);
	}

	function AuthenticatePwAsync($login,$password) {
		$r=CkSFtp_AuthenticatePwAsync($this->_cPtr,$login,$password);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AuthenticatePwPk($username,$password,$privateKey) {
		return CkSFtp_AuthenticatePwPk($this->_cPtr,$username,$password,$privateKey);
	}

	function AuthenticatePwPkAsync($username,$password,$privateKey) {
		$r=CkSFtp_AuthenticatePwPkAsync($this->_cPtr,$username,$password,$privateKey);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ClearAccumulateBuffer() {
		CkSFtp_ClearAccumulateBuffer($this->_cPtr);
	}

	function ClearCache() {
		CkSFtp_ClearCache($this->_cPtr);
	}

	function ClearSessionLog() {
		CkSFtp_ClearSessionLog($this->_cPtr);
	}

	function CloseHandle($handle) {
		return CkSFtp_CloseHandle($this->_cPtr,$handle);
	}

	function CloseHandleAsync($handle) {
		$r=CkSFtp_CloseHandleAsync($this->_cPtr,$handle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Connect($hostname,$port) {
		return CkSFtp_Connect($this->_cPtr,$hostname,$port);
	}

	function ConnectAsync($hostname,$port) {
		$r=CkSFtp_ConnectAsync($this->_cPtr,$hostname,$port);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ConnectThroughSsh($sshConn,$hostname,$port) {
		return CkSFtp_ConnectThroughSsh($this->_cPtr,$sshConn,$hostname,$port);
	}

	function ConnectThroughSshAsync($sshConn,$hostname,$port) {
		$r=CkSFtp_ConnectThroughSshAsync($this->_cPtr,$sshConn,$hostname,$port);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CopyFileAttr($localFilename,$remoteFilename,$bIsHandle) {
		return CkSFtp_CopyFileAttr($this->_cPtr,$localFilename,$remoteFilename,$bIsHandle);
	}

	function CopyFileAttrAsync($localFilename,$remoteFilename,$bIsHandle) {
		$r=CkSFtp_CopyFileAttrAsync($this->_cPtr,$localFilename,$remoteFilename,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CreateDir($path) {
		return CkSFtp_CreateDir($this->_cPtr,$path);
	}

	function CreateDirAsync($path) {
		$r=CkSFtp_CreateDirAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Disconnect() {
		CkSFtp_Disconnect($this->_cPtr);
	}

	function DownloadFile($handle,$toFilename) {
		return CkSFtp_DownloadFile($this->_cPtr,$handle,$toFilename);
	}

	function DownloadFileAsync($handle,$toFilename) {
		$r=CkSFtp_DownloadFileAsync($this->_cPtr,$handle,$toFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DownloadFileByName($remoteFilePath,$localFilePath) {
		return CkSFtp_DownloadFileByName($this->_cPtr,$remoteFilePath,$localFilePath);
	}

	function DownloadFileByNameAsync($remoteFilePath,$localFilePath) {
		$r=CkSFtp_DownloadFileByNameAsync($this->_cPtr,$remoteFilePath,$localFilePath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Eof($handle) {
		return CkSFtp_Eof($this->_cPtr,$handle);
	}

	function GetFileCreateDt($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileCreateDt($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetFileCreateDtAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileCreateDtAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetFileCreateTime($filenameOrHandle,$bFollowLinks,$bIsHandle,$outSysTime) {
		return CkSFtp_GetFileCreateTime($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle,$outSysTime);
	}

	function getFileCreateTimeStr($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_getFileCreateTimeStr($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function fileCreateTimeStr($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_fileCreateTimeStr($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function GetFileCreateTimeStrAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileCreateTimeStrAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getFileGroup($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_getFileGroup($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function fileGroup($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_fileGroup($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function GetFileGroupAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileGroupAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetFileLastAccess($filenameOrHandle,$bFollowLinks,$bIsHandle,$outSysTime) {
		return CkSFtp_GetFileLastAccess($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle,$outSysTime);
	}

	function GetFileLastAccessDt($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileLastAccessDt($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetFileLastAccessDtAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileLastAccessDtAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getFileLastAccessStr($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_getFileLastAccessStr($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function fileLastAccessStr($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_fileLastAccessStr($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function GetFileLastAccessStrAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileLastAccessStrAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetFileLastModified($filenameOrHandle,$bFollowLinks,$bIsHandle,$outSysTime) {
		return CkSFtp_GetFileLastModified($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle,$outSysTime);
	}

	function GetFileLastModifiedDt($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileLastModifiedDt($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetFileLastModifiedDtAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileLastModifiedDtAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getFileLastModifiedStr($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_getFileLastModifiedStr($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function fileLastModifiedStr($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_fileLastModifiedStr($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function GetFileLastModifiedStrAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileLastModifiedStrAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getFileOwner($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_getFileOwner($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function fileOwner($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_fileOwner($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function GetFileOwnerAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFileOwnerAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetFilePermissions($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_GetFilePermissions($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function GetFilePermissionsAsync($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		$r=CkSFtp_GetFilePermissionsAsync($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetFileSize32($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_GetFileSize32($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function GetFileSize64($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_GetFileSize64($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function getFileSizeStr($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_getFileSizeStr($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function fileSizeStr($filenameOrHandle,$bFollowLinks,$bIsHandle) {
		return CkSFtp_fileSizeStr($this->_cPtr,$filenameOrHandle,$bFollowLinks,$bIsHandle);
	}

	function InitializeSftp() {
		return CkSFtp_InitializeSftp($this->_cPtr);
	}

	function InitializeSftpAsync() {
		$r=CkSFtp_InitializeSftpAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function LastReadFailed($handle) {
		return CkSFtp_LastReadFailed($this->_cPtr,$handle);
	}

	function LastReadNumBytes($handle) {
		return CkSFtp_LastReadNumBytes($this->_cPtr,$handle);
	}

	function openDir($path) {
		return CkSFtp_openDir($this->_cPtr,$path);
	}

	function OpenDirAsync($path) {
		$r=CkSFtp_OpenDirAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function openFile($remoteFilePath,$access,$createDisp) {
		return CkSFtp_openFile($this->_cPtr,$remoteFilePath,$access,$createDisp);
	}

	function OpenFileAsync($remoteFilePath,$access,$createDisp) {
		$r=CkSFtp_OpenFileAsync($this->_cPtr,$remoteFilePath,$access,$createDisp);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ReadDir($handle) {
		$r=CkSFtp_ReadDir($this->_cPtr,$handle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkSFtpDir($r);
		}
		return $r;
	}

	function ReadDirAsync($handle) {
		$r=CkSFtp_ReadDirAsync($this->_cPtr,$handle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ReadFileBytes($handle,$numBytes,$outBytes) {
		return CkSFtp_ReadFileBytes($this->_cPtr,$handle,$numBytes,$outBytes);
	}

	function ReadFileBytesAsync($handle,$numBytes) {
		$r=CkSFtp_ReadFileBytesAsync($this->_cPtr,$handle,$numBytes);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ReadFileBytes32($handle,$offset,$numBytes,$outBytes) {
		return CkSFtp_ReadFileBytes32($this->_cPtr,$handle,$offset,$numBytes,$outBytes);
	}

	function ReadFileBytes64($handle,$offset64,$numBytes,$outBytes) {
		return CkSFtp_ReadFileBytes64($this->_cPtr,$handle,$offset64,$numBytes,$outBytes);
	}

	function ReadFileBytes64s($handle,$offset64,$numBytes,$outBytes) {
		return CkSFtp_ReadFileBytes64s($this->_cPtr,$handle,$offset64,$numBytes,$outBytes);
	}

	function readFileText($handle,$numBytes,$charset) {
		return CkSFtp_readFileText($this->_cPtr,$handle,$numBytes,$charset);
	}

	function ReadFileTextAsync($handle,$numBytes,$charset) {
		$r=CkSFtp_ReadFileTextAsync($this->_cPtr,$handle,$numBytes,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function readFileText32($handle,$offset32,$numBytes,$charset) {
		return CkSFtp_readFileText32($this->_cPtr,$handle,$offset32,$numBytes,$charset);
	}

	function readFileText64($handle,$offset64,$numBytes,$charset) {
		return CkSFtp_readFileText64($this->_cPtr,$handle,$offset64,$numBytes,$charset);
	}

	function readFileText64s($handle,$offset64,$numBytes,$charset) {
		return CkSFtp_readFileText64s($this->_cPtr,$handle,$offset64,$numBytes,$charset);
	}

	function realPath($originalPath,$composePath) {
		return CkSFtp_realPath($this->_cPtr,$originalPath,$composePath);
	}

	function RealPathAsync($originalPath,$composePath) {
		$r=CkSFtp_RealPathAsync($this->_cPtr,$originalPath,$composePath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RemoveDir($path) {
		return CkSFtp_RemoveDir($this->_cPtr,$path);
	}

	function RemoveDirAsync($path) {
		$r=CkSFtp_RemoveDirAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RemoveFile($filename) {
		return CkSFtp_RemoveFile($this->_cPtr,$filename);
	}

	function RemoveFileAsync($filename) {
		$r=CkSFtp_RemoveFileAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RenameFileOrDir($oldPath,$newPath) {
		return CkSFtp_RenameFileOrDir($this->_cPtr,$oldPath,$newPath);
	}

	function RenameFileOrDirAsync($oldPath,$newPath) {
		$r=CkSFtp_RenameFileOrDirAsync($this->_cPtr,$oldPath,$newPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ResumeDownloadFileByName($remoteFilePath,$localFilePath) {
		return CkSFtp_ResumeDownloadFileByName($this->_cPtr,$remoteFilePath,$localFilePath);
	}

	function ResumeDownloadFileByNameAsync($remoteFilePath,$localFilePath) {
		$r=CkSFtp_ResumeDownloadFileByNameAsync($this->_cPtr,$remoteFilePath,$localFilePath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ResumeUploadFileByName($remoteFilePath,$localFilePath) {
		return CkSFtp_ResumeUploadFileByName($this->_cPtr,$remoteFilePath,$localFilePath);
	}

	function ResumeUploadFileByNameAsync($remoteFilePath,$localFilePath) {
		$r=CkSFtp_ResumeUploadFileByNameAsync($this->_cPtr,$remoteFilePath,$localFilePath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetCreateDt($pathOrHandle,$bIsHandle,$createTime) {
		return CkSFtp_SetCreateDt($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
	}

	function SetCreateDtAsync($pathOrHandle,$bIsHandle,$createTime) {
		$r=CkSFtp_SetCreateDtAsync($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetCreateTime($pathOrHandle,$bIsHandle,$createTime) {
		return CkSFtp_SetCreateTime($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
	}

	function SetCreateTimeStr($pathOrHandle,$bIsHandle,$dateTimeStr) {
		return CkSFtp_SetCreateTimeStr($this->_cPtr,$pathOrHandle,$bIsHandle,$dateTimeStr);
	}

	function SetCreateTimeStrAsync($pathOrHandle,$bIsHandle,$dateTimeStr) {
		$r=CkSFtp_SetCreateTimeStrAsync($this->_cPtr,$pathOrHandle,$bIsHandle,$dateTimeStr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetLastAccessDt($pathOrHandle,$bIsHandle,$createTime) {
		return CkSFtp_SetLastAccessDt($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
	}

	function SetLastAccessDtAsync($pathOrHandle,$bIsHandle,$createTime) {
		$r=CkSFtp_SetLastAccessDtAsync($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetLastAccessTime($pathOrHandle,$bIsHandle,$createTime) {
		return CkSFtp_SetLastAccessTime($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
	}

	function SetLastAccessTimeStr($pathOrHandle,$bIsHandle,$dateTimeStr) {
		return CkSFtp_SetLastAccessTimeStr($this->_cPtr,$pathOrHandle,$bIsHandle,$dateTimeStr);
	}

	function SetLastAccessTimeStrAsync($pathOrHandle,$bIsHandle,$dateTimeStr) {
		$r=CkSFtp_SetLastAccessTimeStrAsync($this->_cPtr,$pathOrHandle,$bIsHandle,$dateTimeStr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetLastModifiedDt($pathOrHandle,$bIsHandle,$createTime) {
		return CkSFtp_SetLastModifiedDt($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
	}

	function SetLastModifiedDtAsync($pathOrHandle,$bIsHandle,$createTime) {
		$r=CkSFtp_SetLastModifiedDtAsync($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetLastModifiedTime($pathOrHandle,$bIsHandle,$createTime) {
		return CkSFtp_SetLastModifiedTime($this->_cPtr,$pathOrHandle,$bIsHandle,$createTime);
	}

	function SetLastModifiedTimeStr($pathOrHandle,$bIsHandle,$dateTimeStr) {
		return CkSFtp_SetLastModifiedTimeStr($this->_cPtr,$pathOrHandle,$bIsHandle,$dateTimeStr);
	}

	function SetLastModifiedTimeStrAsync($pathOrHandle,$bIsHandle,$dateTimeStr) {
		$r=CkSFtp_SetLastModifiedTimeStrAsync($this->_cPtr,$pathOrHandle,$bIsHandle,$dateTimeStr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetOwnerAndGroup($pathOrHandle,$bIsHandle,$owner,$group) {
		return CkSFtp_SetOwnerAndGroup($this->_cPtr,$pathOrHandle,$bIsHandle,$owner,$group);
	}

	function SetOwnerAndGroupAsync($pathOrHandle,$bIsHandle,$owner,$group) {
		$r=CkSFtp_SetOwnerAndGroupAsync($this->_cPtr,$pathOrHandle,$bIsHandle,$owner,$group);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetPermissions($pathOrHandle,$bIsHandle,$perm) {
		return CkSFtp_SetPermissions($this->_cPtr,$pathOrHandle,$bIsHandle,$perm);
	}

	function SetPermissionsAsync($pathOrHandle,$bIsHandle,$perm) {
		$r=CkSFtp_SetPermissionsAsync($this->_cPtr,$pathOrHandle,$bIsHandle,$perm);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SyncTreeDownload($remoteRoot,$localRoot,$mode,$recurse) {
		return CkSFtp_SyncTreeDownload($this->_cPtr,$remoteRoot,$localRoot,$mode,$recurse);
	}

	function SyncTreeDownloadAsync($remoteRoot,$localRoot,$mode,$recurse) {
		$r=CkSFtp_SyncTreeDownloadAsync($this->_cPtr,$remoteRoot,$localRoot,$mode,$recurse);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SyncTreeUpload($localBaseDir,$remoteBaseDir,$mode,$bRecurse) {
		return CkSFtp_SyncTreeUpload($this->_cPtr,$localBaseDir,$remoteBaseDir,$mode,$bRecurse);
	}

	function SyncTreeUploadAsync($localBaseDir,$remoteBaseDir,$mode,$bRecurse) {
		$r=CkSFtp_SyncTreeUploadAsync($this->_cPtr,$localBaseDir,$remoteBaseDir,$mode,$bRecurse);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnlockComponent($unlockCode) {
		return CkSFtp_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function UploadFile($handle,$localFilePath) {
		return CkSFtp_UploadFile($this->_cPtr,$handle,$localFilePath);
	}

	function UploadFileAsync($handle,$localFilePath) {
		$r=CkSFtp_UploadFileAsync($this->_cPtr,$handle,$localFilePath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UploadFileByName($remoteFilePath,$localFilePath) {
		return CkSFtp_UploadFileByName($this->_cPtr,$remoteFilePath,$localFilePath);
	}

	function UploadFileByNameAsync($remoteFilePath,$localFilePath) {
		$r=CkSFtp_UploadFileByNameAsync($this->_cPtr,$remoteFilePath,$localFilePath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteFileBytes($handle,$data) {
		return CkSFtp_WriteFileBytes($this->_cPtr,$handle,$data);
	}

	function WriteFileBytesAsync($handle,$data) {
		$r=CkSFtp_WriteFileBytesAsync($this->_cPtr,$handle,$data);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteFileBytes32($handle,$offset,$data) {
		return CkSFtp_WriteFileBytes32($this->_cPtr,$handle,$offset,$data);
	}

	function WriteFileBytes64($handle,$offset64,$data) {
		return CkSFtp_WriteFileBytes64($this->_cPtr,$handle,$offset64,$data);
	}

	function WriteFileBytes64s($handle,$offset64,$data) {
		return CkSFtp_WriteFileBytes64s($this->_cPtr,$handle,$offset64,$data);
	}

	function WriteFileText($handle,$charset,$textData) {
		return CkSFtp_WriteFileText($this->_cPtr,$handle,$charset,$textData);
	}

	function WriteFileTextAsync($handle,$charset,$textData) {
		$r=CkSFtp_WriteFileTextAsync($this->_cPtr,$handle,$charset,$textData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function WriteFileText32($handle,$offset32,$charset,$textData) {
		return CkSFtp_WriteFileText32($this->_cPtr,$handle,$offset32,$charset,$textData);
	}

	function WriteFileText64($handle,$offset64,$charset,$textData) {
		return CkSFtp_WriteFileText64($this->_cPtr,$handle,$offset64,$charset,$textData);
	}

	function WriteFileText64s($handle,$offset64,$charset,$textData) {
		return CkSFtp_WriteFileText64s($this->_cPtr,$handle,$offset64,$charset,$textData);
	}
}


?>