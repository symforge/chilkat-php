<?php
class CkFtp2 {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkFtp2') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkFtp2();
	}

	function get_Utf8() {
		return CkFtp2_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkFtp2_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkFtp2_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkFtp2_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkFtp2_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkFtp2_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkFtp2_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkFtp2_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkFtp2_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkFtp2_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkFtp2_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkFtp2_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkFtp2_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkFtp2_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkFtp2_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkFtp2_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkFtp2_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkFtp2_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkFtp2_SaveLastError($this->_cPtr,$path);
	}

	function get_AbortCurrent() {
		return CkFtp2_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkFtp2_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_Account($str) {
		CkFtp2_get_Account($this->_cPtr,$str);
	}

	function account() {
		return CkFtp2_account($this->_cPtr);
	}

	function put_Account($newVal) {
		CkFtp2_put_Account($this->_cPtr,$newVal);
	}

	function get_ActivePortRangeEnd() {
		return CkFtp2_get_ActivePortRangeEnd($this->_cPtr);
	}

	function put_ActivePortRangeEnd($newVal) {
		CkFtp2_put_ActivePortRangeEnd($this->_cPtr,$newVal);
	}

	function get_ActivePortRangeStart() {
		return CkFtp2_get_ActivePortRangeStart($this->_cPtr);
	}

	function put_ActivePortRangeStart($newVal) {
		CkFtp2_put_ActivePortRangeStart($this->_cPtr,$newVal);
	}

	function get_AllocateSize() {
		return CkFtp2_get_AllocateSize($this->_cPtr);
	}

	function put_AllocateSize($newVal) {
		CkFtp2_put_AllocateSize($this->_cPtr,$newVal);
	}

	function get_AllowMlsd() {
		return CkFtp2_get_AllowMlsd($this->_cPtr);
	}

	function put_AllowMlsd($newVal) {
		CkFtp2_put_AllowMlsd($this->_cPtr,$newVal);
	}

	function get_AsyncBytesReceived() {
		return CkFtp2_get_AsyncBytesReceived($this->_cPtr);
	}

	function get_AsyncBytesReceivedStr($str) {
		CkFtp2_get_AsyncBytesReceivedStr($this->_cPtr,$str);
	}

	function asyncBytesReceivedStr() {
		return CkFtp2_asyncBytesReceivedStr($this->_cPtr);
	}

	function get_AsyncBytesSent() {
		return CkFtp2_get_AsyncBytesSent($this->_cPtr);
	}

	function get_AsyncBytesSentStr($str) {
		CkFtp2_get_AsyncBytesSentStr($this->_cPtr,$str);
	}

	function asyncBytesSentStr() {
		return CkFtp2_asyncBytesSentStr($this->_cPtr);
	}

	function get_AsyncFinished() {
		return CkFtp2_get_AsyncFinished($this->_cPtr);
	}

	function get_AsyncLog($str) {
		CkFtp2_get_AsyncLog($this->_cPtr,$str);
	}

	function asyncLog() {
		return CkFtp2_asyncLog($this->_cPtr);
	}

	function get_AsyncPercentDone() {
		return CkFtp2_get_AsyncPercentDone($this->_cPtr);
	}

	function get_AsyncSuccess() {
		return CkFtp2_get_AsyncSuccess($this->_cPtr);
	}

	function get_AuthSsl() {
		return CkFtp2_get_AuthSsl($this->_cPtr);
	}

	function put_AuthSsl($newVal) {
		CkFtp2_put_AuthSsl($this->_cPtr,$newVal);
	}

	function get_AuthTls() {
		return CkFtp2_get_AuthTls($this->_cPtr);
	}

	function put_AuthTls($newVal) {
		CkFtp2_put_AuthTls($this->_cPtr,$newVal);
	}

	function get_AutoFeat() {
		return CkFtp2_get_AutoFeat($this->_cPtr);
	}

	function put_AutoFeat($newVal) {
		CkFtp2_put_AutoFeat($this->_cPtr,$newVal);
	}

	function get_AutoFix() {
		return CkFtp2_get_AutoFix($this->_cPtr);
	}

	function put_AutoFix($newVal) {
		CkFtp2_put_AutoFix($this->_cPtr,$newVal);
	}

	function get_AutoGetSizeForProgress() {
		return CkFtp2_get_AutoGetSizeForProgress($this->_cPtr);
	}

	function put_AutoGetSizeForProgress($newVal) {
		CkFtp2_put_AutoGetSizeForProgress($this->_cPtr,$newVal);
	}

	function get_AutoOptsUtf8() {
		return CkFtp2_get_AutoOptsUtf8($this->_cPtr);
	}

	function put_AutoOptsUtf8($newVal) {
		CkFtp2_put_AutoOptsUtf8($this->_cPtr,$newVal);
	}

	function get_AutoSetUseEpsv() {
		return CkFtp2_get_AutoSetUseEpsv($this->_cPtr);
	}

	function put_AutoSetUseEpsv($newVal) {
		CkFtp2_put_AutoSetUseEpsv($this->_cPtr,$newVal);
	}

	function get_AutoSyst() {
		return CkFtp2_get_AutoSyst($this->_cPtr);
	}

	function put_AutoSyst($newVal) {
		CkFtp2_put_AutoSyst($this->_cPtr,$newVal);
	}

	function get_AutoXcrc() {
		return CkFtp2_get_AutoXcrc($this->_cPtr);
	}

	function put_AutoXcrc($newVal) {
		CkFtp2_put_AutoXcrc($this->_cPtr,$newVal);
	}

	function get_BandwidthThrottleDown() {
		return CkFtp2_get_BandwidthThrottleDown($this->_cPtr);
	}

	function put_BandwidthThrottleDown($newVal) {
		CkFtp2_put_BandwidthThrottleDown($this->_cPtr,$newVal);
	}

	function get_BandwidthThrottleUp() {
		return CkFtp2_get_BandwidthThrottleUp($this->_cPtr);
	}

	function put_BandwidthThrottleUp($newVal) {
		CkFtp2_put_BandwidthThrottleUp($this->_cPtr,$newVal);
	}

	function get_ClientIpAddress($str) {
		CkFtp2_get_ClientIpAddress($this->_cPtr,$str);
	}

	function clientIpAddress() {
		return CkFtp2_clientIpAddress($this->_cPtr);
	}

	function put_ClientIpAddress($newVal) {
		CkFtp2_put_ClientIpAddress($this->_cPtr,$newVal);
	}

	function get_CommandCharset($str) {
		CkFtp2_get_CommandCharset($this->_cPtr,$str);
	}

	function commandCharset() {
		return CkFtp2_commandCharset($this->_cPtr);
	}

	function put_CommandCharset($newVal) {
		CkFtp2_put_CommandCharset($this->_cPtr,$newVal);
	}

	function get_ConnectFailReason() {
		return CkFtp2_get_ConnectFailReason($this->_cPtr);
	}

	function get_ConnectTimeout() {
		return CkFtp2_get_ConnectTimeout($this->_cPtr);
	}

	function put_ConnectTimeout($newVal) {
		CkFtp2_put_ConnectTimeout($this->_cPtr,$newVal);
	}

	function get_ConnectVerified() {
		return CkFtp2_get_ConnectVerified($this->_cPtr);
	}

	function get_CrlfMode() {
		return CkFtp2_get_CrlfMode($this->_cPtr);
	}

	function put_CrlfMode($newVal) {
		CkFtp2_put_CrlfMode($this->_cPtr,$newVal);
	}

	function get_DataProtection($str) {
		CkFtp2_get_DataProtection($this->_cPtr,$str);
	}

	function dataProtection() {
		return CkFtp2_dataProtection($this->_cPtr);
	}

	function put_DataProtection($newVal) {
		CkFtp2_put_DataProtection($this->_cPtr,$newVal);
	}

	function get_DirListingCharset($str) {
		CkFtp2_get_DirListingCharset($this->_cPtr,$str);
	}

	function dirListingCharset() {
		return CkFtp2_dirListingCharset($this->_cPtr);
	}

	function put_DirListingCharset($newVal) {
		CkFtp2_put_DirListingCharset($this->_cPtr,$newVal);
	}

	function get_DownloadTransferRate() {
		return CkFtp2_get_DownloadTransferRate($this->_cPtr);
	}

	function get_ForcePortIpAddress($str) {
		CkFtp2_get_ForcePortIpAddress($this->_cPtr,$str);
	}

	function forcePortIpAddress() {
		return CkFtp2_forcePortIpAddress($this->_cPtr);
	}

	function put_ForcePortIpAddress($newVal) {
		CkFtp2_put_ForcePortIpAddress($this->_cPtr,$newVal);
	}

	function get_Greeting($str) {
		CkFtp2_get_Greeting($this->_cPtr,$str);
	}

	function greeting() {
		return CkFtp2_greeting($this->_cPtr);
	}

	function get_HasModeZ() {
		return CkFtp2_get_HasModeZ($this->_cPtr);
	}

	function get_HeartbeatMs() {
		return CkFtp2_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkFtp2_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_Hostname($str) {
		CkFtp2_get_Hostname($this->_cPtr,$str);
	}

	function hostname() {
		return CkFtp2_hostname($this->_cPtr);
	}

	function put_Hostname($newVal) {
		CkFtp2_put_Hostname($this->_cPtr,$newVal);
	}

	function get_HttpProxyAuthMethod($str) {
		CkFtp2_get_HttpProxyAuthMethod($this->_cPtr,$str);
	}

	function httpProxyAuthMethod() {
		return CkFtp2_httpProxyAuthMethod($this->_cPtr);
	}

	function put_HttpProxyAuthMethod($newVal) {
		CkFtp2_put_HttpProxyAuthMethod($this->_cPtr,$newVal);
	}

	function get_HttpProxyDomain($str) {
		CkFtp2_get_HttpProxyDomain($this->_cPtr,$str);
	}

	function httpProxyDomain() {
		return CkFtp2_httpProxyDomain($this->_cPtr);
	}

	function put_HttpProxyDomain($newVal) {
		CkFtp2_put_HttpProxyDomain($this->_cPtr,$newVal);
	}

	function get_HttpProxyHostname($str) {
		CkFtp2_get_HttpProxyHostname($this->_cPtr,$str);
	}

	function httpProxyHostname() {
		return CkFtp2_httpProxyHostname($this->_cPtr);
	}

	function put_HttpProxyHostname($newVal) {
		CkFtp2_put_HttpProxyHostname($this->_cPtr,$newVal);
	}

	function get_HttpProxyPassword($str) {
		CkFtp2_get_HttpProxyPassword($this->_cPtr,$str);
	}

	function httpProxyPassword() {
		return CkFtp2_httpProxyPassword($this->_cPtr);
	}

	function put_HttpProxyPassword($newVal) {
		CkFtp2_put_HttpProxyPassword($this->_cPtr,$newVal);
	}

	function get_HttpProxyPort() {
		return CkFtp2_get_HttpProxyPort($this->_cPtr);
	}

	function put_HttpProxyPort($newVal) {
		CkFtp2_put_HttpProxyPort($this->_cPtr,$newVal);
	}

	function get_HttpProxyUsername($str) {
		CkFtp2_get_HttpProxyUsername($this->_cPtr,$str);
	}

	function httpProxyUsername() {
		return CkFtp2_httpProxyUsername($this->_cPtr);
	}

	function put_HttpProxyUsername($newVal) {
		CkFtp2_put_HttpProxyUsername($this->_cPtr,$newVal);
	}

	function get_IdleTimeoutMs() {
		return CkFtp2_get_IdleTimeoutMs($this->_cPtr);
	}

	function put_IdleTimeoutMs($newVal) {
		CkFtp2_put_IdleTimeoutMs($this->_cPtr,$newVal);
	}

	function get_IsConnected() {
		return CkFtp2_get_IsConnected($this->_cPtr);
	}

	function get_KeepSessionLog() {
		return CkFtp2_get_KeepSessionLog($this->_cPtr);
	}

	function put_KeepSessionLog($newVal) {
		CkFtp2_put_KeepSessionLog($this->_cPtr,$newVal);
	}

	function get_LastReply($str) {
		CkFtp2_get_LastReply($this->_cPtr,$str);
	}

	function lastReply() {
		return CkFtp2_lastReply($this->_cPtr);
	}

	function get_ListPattern($str) {
		CkFtp2_get_ListPattern($this->_cPtr,$str);
	}

	function listPattern() {
		return CkFtp2_listPattern($this->_cPtr);
	}

	function put_ListPattern($newVal) {
		CkFtp2_put_ListPattern($this->_cPtr,$newVal);
	}

	function get_LoginVerified() {
		return CkFtp2_get_LoginVerified($this->_cPtr);
	}

	function get_NumFilesAndDirs() {
		return CkFtp2_get_NumFilesAndDirs($this->_cPtr);
	}

	function get_PartialTransfer() {
		return CkFtp2_get_PartialTransfer($this->_cPtr);
	}

	function get_Passive() {
		return CkFtp2_get_Passive($this->_cPtr);
	}

	function put_Passive($newVal) {
		CkFtp2_put_Passive($this->_cPtr,$newVal);
	}

	function get_PassiveUseHostAddr() {
		return CkFtp2_get_PassiveUseHostAddr($this->_cPtr);
	}

	function put_PassiveUseHostAddr($newVal) {
		CkFtp2_put_PassiveUseHostAddr($this->_cPtr,$newVal);
	}

	function get_Password($str) {
		CkFtp2_get_Password($this->_cPtr,$str);
	}

	function password() {
		return CkFtp2_password($this->_cPtr);
	}

	function put_Password($newVal) {
		CkFtp2_put_Password($this->_cPtr,$newVal);
	}

	function get_PercentDoneScale() {
		return CkFtp2_get_PercentDoneScale($this->_cPtr);
	}

	function put_PercentDoneScale($newVal) {
		CkFtp2_put_PercentDoneScale($this->_cPtr,$newVal);
	}

	function get_Port() {
		return CkFtp2_get_Port($this->_cPtr);
	}

	function put_Port($newVal) {
		CkFtp2_put_Port($this->_cPtr,$newVal);
	}

	function get_PreferIpv6() {
		return CkFtp2_get_PreferIpv6($this->_cPtr);
	}

	function put_PreferIpv6($newVal) {
		CkFtp2_put_PreferIpv6($this->_cPtr,$newVal);
	}

	function get_PreferNlst() {
		return CkFtp2_get_PreferNlst($this->_cPtr);
	}

	function put_PreferNlst($newVal) {
		CkFtp2_put_PreferNlst($this->_cPtr,$newVal);
	}

	function get_ProgressMonSize() {
		return CkFtp2_get_ProgressMonSize($this->_cPtr);
	}

	function put_ProgressMonSize($newVal) {
		CkFtp2_put_ProgressMonSize($this->_cPtr,$newVal);
	}

	function get_ProxyHostname($str) {
		CkFtp2_get_ProxyHostname($this->_cPtr,$str);
	}

	function proxyHostname() {
		return CkFtp2_proxyHostname($this->_cPtr);
	}

	function put_ProxyHostname($newVal) {
		CkFtp2_put_ProxyHostname($this->_cPtr,$newVal);
	}

	function get_ProxyMethod() {
		return CkFtp2_get_ProxyMethod($this->_cPtr);
	}

	function put_ProxyMethod($newVal) {
		CkFtp2_put_ProxyMethod($this->_cPtr,$newVal);
	}

	function get_ProxyPassword($str) {
		CkFtp2_get_ProxyPassword($this->_cPtr,$str);
	}

	function proxyPassword() {
		return CkFtp2_proxyPassword($this->_cPtr);
	}

	function put_ProxyPassword($newVal) {
		CkFtp2_put_ProxyPassword($this->_cPtr,$newVal);
	}

	function get_ProxyPort() {
		return CkFtp2_get_ProxyPort($this->_cPtr);
	}

	function put_ProxyPort($newVal) {
		CkFtp2_put_ProxyPort($this->_cPtr,$newVal);
	}

	function get_ProxyUsername($str) {
		CkFtp2_get_ProxyUsername($this->_cPtr,$str);
	}

	function proxyUsername() {
		return CkFtp2_proxyUsername($this->_cPtr);
	}

	function put_ProxyUsername($newVal) {
		CkFtp2_put_ProxyUsername($this->_cPtr,$newVal);
	}

	function get_ReadTimeout() {
		return CkFtp2_get_ReadTimeout($this->_cPtr);
	}

	function put_ReadTimeout($newVal) {
		CkFtp2_put_ReadTimeout($this->_cPtr,$newVal);
	}

	function get_RequireSslCertVerify() {
		return CkFtp2_get_RequireSslCertVerify($this->_cPtr);
	}

	function put_RequireSslCertVerify($newVal) {
		CkFtp2_put_RequireSslCertVerify($this->_cPtr,$newVal);
	}

	function get_RestartNext() {
		return CkFtp2_get_RestartNext($this->_cPtr);
	}

	function put_RestartNext($newVal) {
		CkFtp2_put_RestartNext($this->_cPtr,$newVal);
	}

	function get_SendBufferSize() {
		return CkFtp2_get_SendBufferSize($this->_cPtr);
	}

	function put_SendBufferSize($newVal) {
		CkFtp2_put_SendBufferSize($this->_cPtr,$newVal);
	}

	function get_SessionLog($str) {
		CkFtp2_get_SessionLog($this->_cPtr,$str);
	}

	function sessionLog() {
		return CkFtp2_sessionLog($this->_cPtr);
	}

	function get_SkipFinalReply() {
		return CkFtp2_get_SkipFinalReply($this->_cPtr);
	}

	function put_SkipFinalReply($newVal) {
		CkFtp2_put_SkipFinalReply($this->_cPtr,$newVal);
	}

	function get_SoRcvBuf() {
		return CkFtp2_get_SoRcvBuf($this->_cPtr);
	}

	function put_SoRcvBuf($newVal) {
		CkFtp2_put_SoRcvBuf($this->_cPtr,$newVal);
	}

	function get_SoSndBuf() {
		return CkFtp2_get_SoSndBuf($this->_cPtr);
	}

	function put_SoSndBuf($newVal) {
		CkFtp2_put_SoSndBuf($this->_cPtr,$newVal);
	}

	function get_SocksHostname($str) {
		CkFtp2_get_SocksHostname($this->_cPtr,$str);
	}

	function socksHostname() {
		return CkFtp2_socksHostname($this->_cPtr);
	}

	function put_SocksHostname($newVal) {
		CkFtp2_put_SocksHostname($this->_cPtr,$newVal);
	}

	function get_SocksPassword($str) {
		CkFtp2_get_SocksPassword($this->_cPtr,$str);
	}

	function socksPassword() {
		return CkFtp2_socksPassword($this->_cPtr);
	}

	function put_SocksPassword($newVal) {
		CkFtp2_put_SocksPassword($this->_cPtr,$newVal);
	}

	function get_SocksPort() {
		return CkFtp2_get_SocksPort($this->_cPtr);
	}

	function put_SocksPort($newVal) {
		CkFtp2_put_SocksPort($this->_cPtr,$newVal);
	}

	function get_SocksUsername($str) {
		CkFtp2_get_SocksUsername($this->_cPtr,$str);
	}

	function socksUsername() {
		return CkFtp2_socksUsername($this->_cPtr);
	}

	function put_SocksUsername($newVal) {
		CkFtp2_put_SocksUsername($this->_cPtr,$newVal);
	}

	function get_SocksVersion() {
		return CkFtp2_get_SocksVersion($this->_cPtr);
	}

	function put_SocksVersion($newVal) {
		CkFtp2_put_SocksVersion($this->_cPtr,$newVal);
	}

	function get_Ssl() {
		return CkFtp2_get_Ssl($this->_cPtr);
	}

	function put_Ssl($newVal) {
		CkFtp2_put_Ssl($this->_cPtr,$newVal);
	}

	function get_SslAllowedCiphers($str) {
		CkFtp2_get_SslAllowedCiphers($this->_cPtr,$str);
	}

	function sslAllowedCiphers() {
		return CkFtp2_sslAllowedCiphers($this->_cPtr);
	}

	function put_SslAllowedCiphers($newVal) {
		CkFtp2_put_SslAllowedCiphers($this->_cPtr,$newVal);
	}

	function get_SslProtocol($str) {
		CkFtp2_get_SslProtocol($this->_cPtr,$str);
	}

	function sslProtocol() {
		return CkFtp2_sslProtocol($this->_cPtr);
	}

	function put_SslProtocol($newVal) {
		CkFtp2_put_SslProtocol($this->_cPtr,$newVal);
	}

	function get_SslServerCertVerified() {
		return CkFtp2_get_SslServerCertVerified($this->_cPtr);
	}

	function get_SyncMustMatch($str) {
		CkFtp2_get_SyncMustMatch($this->_cPtr,$str);
	}

	function syncMustMatch() {
		return CkFtp2_syncMustMatch($this->_cPtr);
	}

	function put_SyncMustMatch($newVal) {
		CkFtp2_put_SyncMustMatch($this->_cPtr,$newVal);
	}

	function get_SyncMustNotMatch($str) {
		CkFtp2_get_SyncMustNotMatch($this->_cPtr,$str);
	}

	function syncMustNotMatch() {
		return CkFtp2_syncMustNotMatch($this->_cPtr);
	}

	function put_SyncMustNotMatch($newVal) {
		CkFtp2_put_SyncMustNotMatch($this->_cPtr,$newVal);
	}

	function get_SyncPreview($str) {
		CkFtp2_get_SyncPreview($this->_cPtr,$str);
	}

	function syncPreview() {
		return CkFtp2_syncPreview($this->_cPtr);
	}

	function get_SyncedFiles($str) {
		CkFtp2_get_SyncedFiles($this->_cPtr,$str);
	}

	function syncedFiles() {
		return CkFtp2_syncedFiles($this->_cPtr);
	}

	function put_SyncedFiles($newVal) {
		CkFtp2_put_SyncedFiles($this->_cPtr,$newVal);
	}

	function get_TlsCipherSuite($str) {
		CkFtp2_get_TlsCipherSuite($this->_cPtr,$str);
	}

	function tlsCipherSuite() {
		return CkFtp2_tlsCipherSuite($this->_cPtr);
	}

	function get_TlsPinSet($str) {
		CkFtp2_get_TlsPinSet($this->_cPtr,$str);
	}

	function tlsPinSet() {
		return CkFtp2_tlsPinSet($this->_cPtr);
	}

	function put_TlsPinSet($newVal) {
		CkFtp2_put_TlsPinSet($this->_cPtr,$newVal);
	}

	function get_TlsVersion($str) {
		CkFtp2_get_TlsVersion($this->_cPtr,$str);
	}

	function tlsVersion() {
		return CkFtp2_tlsVersion($this->_cPtr);
	}

	function get_UploadTransferRate() {
		return CkFtp2_get_UploadTransferRate($this->_cPtr);
	}

	function get_UseEpsv() {
		return CkFtp2_get_UseEpsv($this->_cPtr);
	}

	function put_UseEpsv($newVal) {
		CkFtp2_put_UseEpsv($this->_cPtr,$newVal);
	}

	function get_Username($str) {
		CkFtp2_get_Username($this->_cPtr,$str);
	}

	function username() {
		return CkFtp2_username($this->_cPtr);
	}

	function put_Username($newVal) {
		CkFtp2_put_Username($this->_cPtr,$newVal);
	}

	function AppendFile($localFilename,$remoteFilename) {
		return CkFtp2_AppendFile($this->_cPtr,$localFilename,$remoteFilename);
	}

	function AppendFileAsync($localFilename,$remoteFilename) {
		$r=CkFtp2_AppendFileAsync($this->_cPtr,$localFilename,$remoteFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AppendFileFromBinaryData($remoteFilename,$content) {
		return CkFtp2_AppendFileFromBinaryData($this->_cPtr,$remoteFilename,$content);
	}

	function AppendFileFromBinaryDataAsync($remoteFilename,$content) {
		$r=CkFtp2_AppendFileFromBinaryDataAsync($this->_cPtr,$remoteFilename,$content);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AppendFileFromTextData($remoteFilename,$textData,$charset) {
		return CkFtp2_AppendFileFromTextData($this->_cPtr,$remoteFilename,$textData,$charset);
	}

	function AppendFileFromTextDataAsync($remoteFilename,$textData,$charset) {
		$r=CkFtp2_AppendFileFromTextDataAsync($this->_cPtr,$remoteFilename,$textData,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AsyncAbort() {
		CkFtp2_AsyncAbort($this->_cPtr);
	}

	function AsyncAppendFileStart($localFilename,$remoteFilename) {
		return CkFtp2_AsyncAppendFileStart($this->_cPtr,$localFilename,$remoteFilename);
	}

	function AsyncGetFileStart($remoteFilename,$localFilename) {
		return CkFtp2_AsyncGetFileStart($this->_cPtr,$remoteFilename,$localFilename);
	}

	function AsyncPutFileStart($localFilename,$remoteFilename) {
		return CkFtp2_AsyncPutFileStart($this->_cPtr,$localFilename,$remoteFilename);
	}

	function ChangeRemoteDir($relativeDirPath) {
		return CkFtp2_ChangeRemoteDir($this->_cPtr,$relativeDirPath);
	}

	function ChangeRemoteDirAsync($relativeDirPath) {
		$r=CkFtp2_ChangeRemoteDirAsync($this->_cPtr,$relativeDirPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CheckConnection() {
		return CkFtp2_CheckConnection($this->_cPtr);
	}

	function CheckConnectionAsync() {
		$r=CkFtp2_CheckConnectionAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ClearControlChannel() {
		return CkFtp2_ClearControlChannel($this->_cPtr);
	}

	function ClearControlChannelAsync() {
		$r=CkFtp2_ClearControlChannelAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ClearDirCache() {
		CkFtp2_ClearDirCache($this->_cPtr);
	}

	function ClearSessionLog() {
		CkFtp2_ClearSessionLog($this->_cPtr);
	}

	function Connect() {
		return CkFtp2_Connect($this->_cPtr);
	}

	function ConnectAsync() {
		$r=CkFtp2_ConnectAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ConnectOnly() {
		return CkFtp2_ConnectOnly($this->_cPtr);
	}

	function ConnectOnlyAsync() {
		$r=CkFtp2_ConnectOnlyAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ConvertToTls() {
		return CkFtp2_ConvertToTls($this->_cPtr);
	}

	function ConvertToTlsAsync() {
		$r=CkFtp2_ConvertToTlsAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function createPlan($localDir) {
		return CkFtp2_createPlan($this->_cPtr,$localDir);
	}

	function CreatePlanAsync($localDir) {
		$r=CkFtp2_CreatePlanAsync($this->_cPtr,$localDir);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CreateRemoteDir($dir) {
		return CkFtp2_CreateRemoteDir($this->_cPtr,$dir);
	}

	function CreateRemoteDirAsync($dir) {
		$r=CkFtp2_CreateRemoteDirAsync($this->_cPtr,$dir);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DeleteMatching($remotePattern) {
		return CkFtp2_DeleteMatching($this->_cPtr,$remotePattern);
	}

	function DeleteMatchingAsync($remotePattern) {
		$r=CkFtp2_DeleteMatchingAsync($this->_cPtr,$remotePattern);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DeleteRemoteFile($filename) {
		return CkFtp2_DeleteRemoteFile($this->_cPtr,$filename);
	}

	function DeleteRemoteFileAsync($filename) {
		$r=CkFtp2_DeleteRemoteFileAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DeleteTree() {
		return CkFtp2_DeleteTree($this->_cPtr);
	}

	function DeleteTreeAsync() {
		$r=CkFtp2_DeleteTreeAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DetermineProxyMethod() {
		return CkFtp2_DetermineProxyMethod($this->_cPtr);
	}

	function DetermineProxyMethodAsync() {
		$r=CkFtp2_DetermineProxyMethodAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function determineSettings() {
		return CkFtp2_determineSettings($this->_cPtr);
	}

	function DetermineSettingsAsync() {
		$r=CkFtp2_DetermineSettingsAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function dirTreeXml() {
		return CkFtp2_dirTreeXml($this->_cPtr);
	}

	function DirTreeXmlAsync() {
		$r=CkFtp2_DirTreeXmlAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Disconnect() {
		return CkFtp2_Disconnect($this->_cPtr);
	}

	function DisconnectAsync() {
		$r=CkFtp2_DisconnectAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DownloadTree($localRoot) {
		return CkFtp2_DownloadTree($this->_cPtr,$localRoot);
	}

	function DownloadTreeAsync($localRoot) {
		$r=CkFtp2_DownloadTreeAsync($this->_cPtr,$localRoot);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function feat() {
		return CkFtp2_feat($this->_cPtr);
	}

	function FeatAsync() {
		$r=CkFtp2_FeatAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetCreateDt($index) {
		$r=CkFtp2_GetCreateDt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetCreateDtAsync($index) {
		$r=CkFtp2_GetCreateDtAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetCreateDtByName($filename) {
		$r=CkFtp2_GetCreateDtByName($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetCreateDtByNameAsync($filename) {
		$r=CkFtp2_GetCreateDtByNameAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetCreateTime($index,$outSysTime) {
		return CkFtp2_GetCreateTime($this->_cPtr,$index,$outSysTime);
	}

	function GetCreateTimeByName($filename,$outSysTime) {
		return CkFtp2_GetCreateTimeByName($this->_cPtr,$filename,$outSysTime);
	}

	function getCreateTimeByNameStr($filename) {
		return CkFtp2_getCreateTimeByNameStr($this->_cPtr,$filename);
	}

	function createTimeByNameStr($filename) {
		return CkFtp2_createTimeByNameStr($this->_cPtr,$filename);
	}

	function GetCreateTimeByNameStrAsync($filename) {
		$r=CkFtp2_GetCreateTimeByNameStrAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getCreateTimeStr($index) {
		return CkFtp2_getCreateTimeStr($this->_cPtr,$index);
	}

	function createTimeStr($index) {
		return CkFtp2_createTimeStr($this->_cPtr,$index);
	}

	function GetCreateTimeStrAsync($index) {
		$r=CkFtp2_GetCreateTimeStrAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getCurrentRemoteDir() {
		return CkFtp2_getCurrentRemoteDir($this->_cPtr);
	}

	function currentRemoteDir() {
		return CkFtp2_currentRemoteDir($this->_cPtr);
	}

	function GetCurrentRemoteDirAsync() {
		$r=CkFtp2_GetCurrentRemoteDirAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetDirCount() {
		return CkFtp2_GetDirCount($this->_cPtr);
	}

	function GetDirCountAsync() {
		$r=CkFtp2_GetDirCountAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetFile($remoteFilename,$localFilename) {
		return CkFtp2_GetFile($this->_cPtr,$remoteFilename,$localFilename);
	}

	function GetFileAsync($remoteFilename,$localFilename) {
		$r=CkFtp2_GetFileAsync($this->_cPtr,$remoteFilename,$localFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getFilename($index) {
		return CkFtp2_getFilename($this->_cPtr,$index);
	}

	function filename($index) {
		return CkFtp2_filename($this->_cPtr,$index);
	}

	function GetFilenameAsync($index) {
		$r=CkFtp2_GetFilenameAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getGroup($index) {
		return CkFtp2_getGroup($this->_cPtr,$index);
	}

	function group($index) {
		return CkFtp2_group($this->_cPtr,$index);
	}

	function GetGroupAsync($index) {
		$r=CkFtp2_GetGroupAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetIsDirectory($index) {
		return CkFtp2_GetIsDirectory($this->_cPtr,$index);
	}

	function GetIsDirectoryAsync($index) {
		$r=CkFtp2_GetIsDirectoryAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetIsSymbolicLink($index) {
		return CkFtp2_GetIsSymbolicLink($this->_cPtr,$index);
	}

	function GetIsSymbolicLinkAsync($index) {
		$r=CkFtp2_GetIsSymbolicLinkAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetLastAccessDt($index) {
		$r=CkFtp2_GetLastAccessDt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetLastAccessDtAsync($index) {
		$r=CkFtp2_GetLastAccessDtAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetLastAccessDtByName($filename) {
		$r=CkFtp2_GetLastAccessDtByName($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetLastAccessDtByNameAsync($filename) {
		$r=CkFtp2_GetLastAccessDtByNameAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetLastAccessTime($index,$outSysTime) {
		return CkFtp2_GetLastAccessTime($this->_cPtr,$index,$outSysTime);
	}

	function GetLastAccessTimeByName($filename,$outSysTime) {
		return CkFtp2_GetLastAccessTimeByName($this->_cPtr,$filename,$outSysTime);
	}

	function getLastAccessTimeByNameStr($filename) {
		return CkFtp2_getLastAccessTimeByNameStr($this->_cPtr,$filename);
	}

	function lastAccessTimeByNameStr($filename) {
		return CkFtp2_lastAccessTimeByNameStr($this->_cPtr,$filename);
	}

	function GetLastAccessTimeByNameStrAsync($filename) {
		$r=CkFtp2_GetLastAccessTimeByNameStrAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getLastAccessTimeStr($index) {
		return CkFtp2_getLastAccessTimeStr($this->_cPtr,$index);
	}

	function lastAccessTimeStr($index) {
		return CkFtp2_lastAccessTimeStr($this->_cPtr,$index);
	}

	function GetLastAccessTimeStrAsync($index) {
		$r=CkFtp2_GetLastAccessTimeStrAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetLastModDt($index) {
		$r=CkFtp2_GetLastModDt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetLastModDtAsync($index) {
		$r=CkFtp2_GetLastModDtAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetLastModDtByName($filename) {
		$r=CkFtp2_GetLastModDtByName($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetLastModDtByNameAsync($filename) {
		$r=CkFtp2_GetLastModDtByNameAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetLastModifiedTime($index,$outSysTime) {
		return CkFtp2_GetLastModifiedTime($this->_cPtr,$index,$outSysTime);
	}

	function GetLastModifiedTimeByName($filename,$outSysTime) {
		return CkFtp2_GetLastModifiedTimeByName($this->_cPtr,$filename,$outSysTime);
	}

	function getLastModifiedTimeByNameStr($filename) {
		return CkFtp2_getLastModifiedTimeByNameStr($this->_cPtr,$filename);
	}

	function lastModifiedTimeByNameStr($filename) {
		return CkFtp2_lastModifiedTimeByNameStr($this->_cPtr,$filename);
	}

	function GetLastModifiedTimeByNameStrAsync($filename) {
		$r=CkFtp2_GetLastModifiedTimeByNameStrAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getLastModifiedTimeStr($index) {
		return CkFtp2_getLastModifiedTimeStr($this->_cPtr,$index);
	}

	function lastModifiedTimeStr($index) {
		return CkFtp2_lastModifiedTimeStr($this->_cPtr,$index);
	}

	function GetLastModifiedTimeStrAsync($index) {
		$r=CkFtp2_GetLastModifiedTimeStrAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getOwner($index) {
		return CkFtp2_getOwner($this->_cPtr,$index);
	}

	function owner($index) {
		return CkFtp2_owner($this->_cPtr,$index);
	}

	function GetOwnerAsync($index) {
		$r=CkFtp2_GetOwnerAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getPermType($index) {
		return CkFtp2_getPermType($this->_cPtr,$index);
	}

	function permType($index) {
		return CkFtp2_permType($this->_cPtr,$index);
	}

	function GetPermTypeAsync($index) {
		$r=CkFtp2_GetPermTypeAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getPermissions($index) {
		return CkFtp2_getPermissions($this->_cPtr,$index);
	}

	function permissions($index) {
		return CkFtp2_permissions($this->_cPtr,$index);
	}

	function GetPermissionsAsync($index) {
		$r=CkFtp2_GetPermissionsAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetRemoteFileBinaryData($remoteFilename,$outData) {
		return CkFtp2_GetRemoteFileBinaryData($this->_cPtr,$remoteFilename,$outData);
	}

	function GetRemoteFileBinaryDataAsync($remoteFilename) {
		$r=CkFtp2_GetRemoteFileBinaryDataAsync($this->_cPtr,$remoteFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getRemoteFileTextC($remoteFilename,$charset) {
		return CkFtp2_getRemoteFileTextC($this->_cPtr,$remoteFilename,$charset);
	}

	function remoteFileTextC($remoteFilename,$charset) {
		return CkFtp2_remoteFileTextC($this->_cPtr,$remoteFilename,$charset);
	}

	function GetRemoteFileTextCAsync($remoteFilename,$charset) {
		$r=CkFtp2_GetRemoteFileTextCAsync($this->_cPtr,$remoteFilename,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getRemoteFileTextData($remoteFilename) {
		return CkFtp2_getRemoteFileTextData($this->_cPtr,$remoteFilename);
	}

	function remoteFileTextData($remoteFilename) {
		return CkFtp2_remoteFileTextData($this->_cPtr,$remoteFilename);
	}

	function GetRemoteFileTextDataAsync($remoteFilename) {
		$r=CkFtp2_GetRemoteFileTextDataAsync($this->_cPtr,$remoteFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetSize($index) {
		return CkFtp2_GetSize($this->_cPtr,$index);
	}

	function GetSizeAsync($index) {
		$r=CkFtp2_GetSizeAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetSize64($index) {
		return CkFtp2_GetSize64($this->_cPtr,$index);
	}

	function GetSizeByName($filename) {
		return CkFtp2_GetSizeByName($this->_cPtr,$filename);
	}

	function GetSizeByNameAsync($filename) {
		$r=CkFtp2_GetSizeByNameAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetSizeByName64($filename) {
		return CkFtp2_GetSizeByName64($this->_cPtr,$filename);
	}

	function getSizeStr($index) {
		return CkFtp2_getSizeStr($this->_cPtr,$index);
	}

	function sizeStr($index) {
		return CkFtp2_sizeStr($this->_cPtr,$index);
	}

	function GetSizeStrAsync($index) {
		$r=CkFtp2_GetSizeStrAsync($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getSizeStrByName($filename) {
		return CkFtp2_getSizeStrByName($this->_cPtr,$filename);
	}

	function sizeStrByName($filename) {
		return CkFtp2_sizeStrByName($this->_cPtr,$filename);
	}

	function GetSizeStrByNameAsync($filename) {
		$r=CkFtp2_GetSizeStrByNameAsync($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetSslServerCert() {
		$r=CkFtp2_GetSslServerCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function getTextDirListing($pattern) {
		return CkFtp2_getTextDirListing($this->_cPtr,$pattern);
	}

	function textDirListing($pattern) {
		return CkFtp2_textDirListing($this->_cPtr,$pattern);
	}

	function GetTextDirListingAsync($pattern) {
		$r=CkFtp2_GetTextDirListingAsync($this->_cPtr,$pattern);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getXmlDirListing($pattern) {
		return CkFtp2_getXmlDirListing($this->_cPtr,$pattern);
	}

	function xmlDirListing($pattern) {
		return CkFtp2_xmlDirListing($this->_cPtr,$pattern);
	}

	function GetXmlDirListingAsync($pattern) {
		$r=CkFtp2_GetXmlDirListingAsync($this->_cPtr,$pattern);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function IsUnlocked() {
		return CkFtp2_IsUnlocked($this->_cPtr);
	}

	function LargeFileUpload($localPath,$remotePath,$chunkSize) {
		return CkFtp2_LargeFileUpload($this->_cPtr,$localPath,$remotePath,$chunkSize);
	}

	function LargeFileUploadAsync($localPath,$remotePath,$chunkSize) {
		$r=CkFtp2_LargeFileUploadAsync($this->_cPtr,$localPath,$remotePath,$chunkSize);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function LoginAfterConnectOnly() {
		return CkFtp2_LoginAfterConnectOnly($this->_cPtr);
	}

	function LoginAfterConnectOnlyAsync() {
		$r=CkFtp2_LoginAfterConnectOnlyAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function MGetFiles($remotePattern,$localDir) {
		return CkFtp2_MGetFiles($this->_cPtr,$remotePattern,$localDir);
	}

	function MGetFilesAsync($remotePattern,$localDir) {
		$r=CkFtp2_MGetFilesAsync($this->_cPtr,$remotePattern,$localDir);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function MPutFiles($pattern) {
		return CkFtp2_MPutFiles($this->_cPtr,$pattern);
	}

	function MPutFilesAsync($pattern) {
		$r=CkFtp2_MPutFilesAsync($this->_cPtr,$pattern);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function nlstXml($pattern) {
		return CkFtp2_nlstXml($this->_cPtr,$pattern);
	}

	function NlstXmlAsync($pattern) {
		$r=CkFtp2_NlstXmlAsync($this->_cPtr,$pattern);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Noop() {
		return CkFtp2_Noop($this->_cPtr);
	}

	function NoopAsync() {
		$r=CkFtp2_NoopAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function PutFile($localFilename,$remoteFilename) {
		return CkFtp2_PutFile($this->_cPtr,$localFilename,$remoteFilename);
	}

	function PutFileAsync($localFilename,$remoteFilename) {
		$r=CkFtp2_PutFileAsync($this->_cPtr,$localFilename,$remoteFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function PutFileFromBinaryData($remoteFilename,$content) {
		return CkFtp2_PutFileFromBinaryData($this->_cPtr,$remoteFilename,$content);
	}

	function PutFileFromBinaryDataAsync($remoteFilename,$content) {
		$r=CkFtp2_PutFileFromBinaryDataAsync($this->_cPtr,$remoteFilename,$content);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function PutFileFromTextData($remoteFilename,$textData,$charset) {
		return CkFtp2_PutFileFromTextData($this->_cPtr,$remoteFilename,$textData,$charset);
	}

	function PutFileFromTextDataAsync($remoteFilename,$textData,$charset) {
		$r=CkFtp2_PutFileFromTextDataAsync($this->_cPtr,$remoteFilename,$textData,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function PutPlan($plan,$alreadyDoneFilename) {
		return CkFtp2_PutPlan($this->_cPtr,$plan,$alreadyDoneFilename);
	}

	function PutPlanAsync($plan,$alreadyDoneFilename) {
		$r=CkFtp2_PutPlanAsync($this->_cPtr,$plan,$alreadyDoneFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function PutTree($localDir) {
		return CkFtp2_PutTree($this->_cPtr,$localDir);
	}

	function PutTreeAsync($localDir) {
		$r=CkFtp2_PutTreeAsync($this->_cPtr,$localDir);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Quote($cmd) {
		return CkFtp2_Quote($this->_cPtr,$cmd);
	}

	function QuoteAsync($cmd) {
		$r=CkFtp2_QuoteAsync($this->_cPtr,$cmd);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RemoveRemoteDir($dir) {
		return CkFtp2_RemoveRemoteDir($this->_cPtr,$dir);
	}

	function RemoveRemoteDirAsync($dir) {
		$r=CkFtp2_RemoveRemoteDirAsync($this->_cPtr,$dir);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RenameRemoteFile($existingFilename,$newFilename) {
		return CkFtp2_RenameRemoteFile($this->_cPtr,$existingFilename,$newFilename);
	}

	function RenameRemoteFileAsync($existingFilename,$newFilename) {
		$r=CkFtp2_RenameRemoteFileAsync($this->_cPtr,$existingFilename,$newFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function sendCommand($cmd) {
		return CkFtp2_sendCommand($this->_cPtr,$cmd);
	}

	function SendCommandAsync($cmd) {
		$r=CkFtp2_SendCommandAsync($this->_cPtr,$cmd);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetModeZ() {
		return CkFtp2_SetModeZ($this->_cPtr);
	}

	function SetModeZAsync() {
		$r=CkFtp2_SetModeZAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetOldestDate($oldestDateTime) {
		CkFtp2_SetOldestDate($this->_cPtr,$oldestDateTime);
	}

	function SetOldestDateStr($oldestDateTimeStr) {
		CkFtp2_SetOldestDateStr($this->_cPtr,$oldestDateTimeStr);
	}

	function SetOption($option) {
		return CkFtp2_SetOption($this->_cPtr,$option);
	}

	function SetRemoteFileDateTime($dt,$remoteFilename) {
		return CkFtp2_SetRemoteFileDateTime($this->_cPtr,$dt,$remoteFilename);
	}

	function SetRemoteFileDateTimeStr($dateTimeStr,$remoteFilename) {
		return CkFtp2_SetRemoteFileDateTimeStr($this->_cPtr,$dateTimeStr,$remoteFilename);
	}

	function SetRemoteFileDateTimeStrAsync($dateTimeStr,$remoteFilename) {
		$r=CkFtp2_SetRemoteFileDateTimeStrAsync($this->_cPtr,$dateTimeStr,$remoteFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetRemoteFileDt($dt,$remoteFilename) {
		return CkFtp2_SetRemoteFileDt($this->_cPtr,$dt,$remoteFilename);
	}

	function SetRemoteFileDtAsync($dt,$remoteFilename) {
		$r=CkFtp2_SetRemoteFileDtAsync($this->_cPtr,$dt,$remoteFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetSslCertRequirement($name,$value) {
		CkFtp2_SetSslCertRequirement($this->_cPtr,$name,$value);
	}

	function SetSslClientCert($cert) {
		return CkFtp2_SetSslClientCert($this->_cPtr,$cert);
	}

	function SetSslClientCertPem($pemDataOrFilename,$pemPassword) {
		return CkFtp2_SetSslClientCertPem($this->_cPtr,$pemDataOrFilename,$pemPassword);
	}

	function SetSslClientCertPfx($pfxFilename,$pfxPassword) {
		return CkFtp2_SetSslClientCertPfx($this->_cPtr,$pfxFilename,$pfxPassword);
	}

	function SetTypeAscii() {
		return CkFtp2_SetTypeAscii($this->_cPtr);
	}

	function SetTypeAsciiAsync() {
		$r=CkFtp2_SetTypeAsciiAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetTypeBinary() {
		return CkFtp2_SetTypeBinary($this->_cPtr);
	}

	function SetTypeBinaryAsync() {
		$r=CkFtp2_SetTypeBinaryAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Site($siteCommand) {
		return CkFtp2_Site($this->_cPtr,$siteCommand);
	}

	function SiteAsync($siteCommand) {
		$r=CkFtp2_SiteAsync($this->_cPtr,$siteCommand);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SleepMs($millisec) {
		CkFtp2_SleepMs($this->_cPtr,$millisec);
	}

	function ck_stat() {
		return CkFtp2_ck_stat($this->_cPtr);
	}

	function StatAsync() {
		$r=CkFtp2_StatAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SyncDeleteRemote($localRoot) {
		return CkFtp2_SyncDeleteRemote($this->_cPtr,$localRoot);
	}

	function SyncDeleteRemoteAsync($localRoot) {
		$r=CkFtp2_SyncDeleteRemoteAsync($this->_cPtr,$localRoot);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SyncLocalDir($localRoot,$mode) {
		return CkFtp2_SyncLocalDir($this->_cPtr,$localRoot,$mode);
	}

	function SyncLocalDirAsync($localRoot,$mode) {
		$r=CkFtp2_SyncLocalDirAsync($this->_cPtr,$localRoot,$mode);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SyncLocalTree($localRoot,$mode) {
		return CkFtp2_SyncLocalTree($this->_cPtr,$localRoot,$mode);
	}

	function SyncLocalTreeAsync($localRoot,$mode) {
		$r=CkFtp2_SyncLocalTreeAsync($this->_cPtr,$localRoot,$mode);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SyncRemoteTree($localRoot,$mode) {
		return CkFtp2_SyncRemoteTree($this->_cPtr,$localRoot,$mode);
	}

	function SyncRemoteTreeAsync($localRoot,$mode) {
		$r=CkFtp2_SyncRemoteTreeAsync($this->_cPtr,$localRoot,$mode);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SyncRemoteTree2($localRoot,$mode,$bDescend,$bPreviewOnly) {
		return CkFtp2_SyncRemoteTree2($this->_cPtr,$localRoot,$mode,$bDescend,$bPreviewOnly);
	}

	function SyncRemoteTree2Async($localRoot,$mode,$bDescend,$bPreviewOnly) {
		$r=CkFtp2_SyncRemoteTree2Async($this->_cPtr,$localRoot,$mode,$bDescend,$bPreviewOnly);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function syst() {
		return CkFtp2_syst($this->_cPtr);
	}

	function SystAsync() {
		$r=CkFtp2_SystAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnlockComponent($unlockCode) {
		return CkFtp2_UnlockComponent($this->_cPtr,$unlockCode);
	}
}


?>