<?php
class CkSsh {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkSsh') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkSsh();
	}

	function get_Utf8() {
		return CkSsh_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkSsh_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkSsh_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AbortCurrent() {
		return CkSsh_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkSsh_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_AuthFailReason() {
		return CkSsh_get_AuthFailReason($this->_cPtr);
	}

	function get_CaretControl() {
		return CkSsh_get_CaretControl($this->_cPtr);
	}

	function put_CaretControl($newVal) {
		CkSsh_put_CaretControl($this->_cPtr,$newVal);
	}

	function get_ChannelOpenFailCode() {
		return CkSsh_get_ChannelOpenFailCode($this->_cPtr);
	}

	function get_ChannelOpenFailReason($str) {
		CkSsh_get_ChannelOpenFailReason($this->_cPtr,$str);
	}

	function channelOpenFailReason() {
		return CkSsh_channelOpenFailReason($this->_cPtr);
	}

	function get_ClientIdentifier($str) {
		CkSsh_get_ClientIdentifier($this->_cPtr,$str);
	}

	function clientIdentifier() {
		return CkSsh_clientIdentifier($this->_cPtr);
	}

	function put_ClientIdentifier($newVal) {
		CkSsh_put_ClientIdentifier($this->_cPtr,$newVal);
	}

	function get_ClientIpAddress($str) {
		CkSsh_get_ClientIpAddress($this->_cPtr,$str);
	}

	function clientIpAddress() {
		return CkSsh_clientIpAddress($this->_cPtr);
	}

	function put_ClientIpAddress($newVal) {
		CkSsh_put_ClientIpAddress($this->_cPtr,$newVal);
	}

	function get_ConnectTimeoutMs() {
		return CkSsh_get_ConnectTimeoutMs($this->_cPtr);
	}

	function put_ConnectTimeoutMs($newVal) {
		CkSsh_put_ConnectTimeoutMs($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkSsh_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkSsh_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkSsh_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_DisconnectCode() {
		return CkSsh_get_DisconnectCode($this->_cPtr);
	}

	function get_DisconnectReason($str) {
		CkSsh_get_DisconnectReason($this->_cPtr,$str);
	}

	function disconnectReason() {
		return CkSsh_disconnectReason($this->_cPtr);
	}

	function get_EnableCompression() {
		return CkSsh_get_EnableCompression($this->_cPtr);
	}

	function put_EnableCompression($newVal) {
		CkSsh_put_EnableCompression($this->_cPtr,$newVal);
	}

	function get_ForceCipher($str) {
		CkSsh_get_ForceCipher($this->_cPtr,$str);
	}

	function forceCipher() {
		return CkSsh_forceCipher($this->_cPtr);
	}

	function put_ForceCipher($newVal) {
		CkSsh_put_ForceCipher($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkSsh_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkSsh_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_HostKeyAlg($str) {
		CkSsh_get_HostKeyAlg($this->_cPtr,$str);
	}

	function hostKeyAlg() {
		return CkSsh_hostKeyAlg($this->_cPtr);
	}

	function put_HostKeyAlg($newVal) {
		CkSsh_put_HostKeyAlg($this->_cPtr,$newVal);
	}

	function get_HostKeyFingerprint($str) {
		CkSsh_get_HostKeyFingerprint($this->_cPtr,$str);
	}

	function hostKeyFingerprint() {
		return CkSsh_hostKeyFingerprint($this->_cPtr);
	}

	function get_HttpProxyAuthMethod($str) {
		CkSsh_get_HttpProxyAuthMethod($this->_cPtr,$str);
	}

	function httpProxyAuthMethod() {
		return CkSsh_httpProxyAuthMethod($this->_cPtr);
	}

	function put_HttpProxyAuthMethod($newVal) {
		CkSsh_put_HttpProxyAuthMethod($this->_cPtr,$newVal);
	}

	function get_HttpProxyDomain($str) {
		CkSsh_get_HttpProxyDomain($this->_cPtr,$str);
	}

	function httpProxyDomain() {
		return CkSsh_httpProxyDomain($this->_cPtr);
	}

	function put_HttpProxyDomain($newVal) {
		CkSsh_put_HttpProxyDomain($this->_cPtr,$newVal);
	}

	function get_HttpProxyHostname($str) {
		CkSsh_get_HttpProxyHostname($this->_cPtr,$str);
	}

	function httpProxyHostname() {
		return CkSsh_httpProxyHostname($this->_cPtr);
	}

	function put_HttpProxyHostname($newVal) {
		CkSsh_put_HttpProxyHostname($this->_cPtr,$newVal);
	}

	function get_HttpProxyPassword($str) {
		CkSsh_get_HttpProxyPassword($this->_cPtr,$str);
	}

	function httpProxyPassword() {
		return CkSsh_httpProxyPassword($this->_cPtr);
	}

	function put_HttpProxyPassword($newVal) {
		CkSsh_put_HttpProxyPassword($this->_cPtr,$newVal);
	}

	function get_HttpProxyPort() {
		return CkSsh_get_HttpProxyPort($this->_cPtr);
	}

	function put_HttpProxyPort($newVal) {
		CkSsh_put_HttpProxyPort($this->_cPtr,$newVal);
	}

	function get_HttpProxyUsername($str) {
		CkSsh_get_HttpProxyUsername($this->_cPtr,$str);
	}

	function httpProxyUsername() {
		return CkSsh_httpProxyUsername($this->_cPtr);
	}

	function put_HttpProxyUsername($newVal) {
		CkSsh_put_HttpProxyUsername($this->_cPtr,$newVal);
	}

	function get_IdleTimeoutMs() {
		return CkSsh_get_IdleTimeoutMs($this->_cPtr);
	}

	function put_IdleTimeoutMs($newVal) {
		CkSsh_put_IdleTimeoutMs($this->_cPtr,$newVal);
	}

	function get_IsConnected() {
		return CkSsh_get_IsConnected($this->_cPtr);
	}

	function get_KeepSessionLog() {
		return CkSsh_get_KeepSessionLog($this->_cPtr);
	}

	function put_KeepSessionLog($newVal) {
		CkSsh_put_KeepSessionLog($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkSsh_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkSsh_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkSsh_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkSsh_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkSsh_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkSsh_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkSsh_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkSsh_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_MaxPacketSize() {
		return CkSsh_get_MaxPacketSize($this->_cPtr);
	}

	function put_MaxPacketSize($newVal) {
		CkSsh_put_MaxPacketSize($this->_cPtr,$newVal);
	}

	function get_NumOpenChannels() {
		return CkSsh_get_NumOpenChannels($this->_cPtr);
	}

	function get_PasswordChangeRequested() {
		return CkSsh_get_PasswordChangeRequested($this->_cPtr);
	}

	function get_PreferIpv6() {
		return CkSsh_get_PreferIpv6($this->_cPtr);
	}

	function put_PreferIpv6($newVal) {
		CkSsh_put_PreferIpv6($this->_cPtr,$newVal);
	}

	function get_ReadTimeoutMs() {
		return CkSsh_get_ReadTimeoutMs($this->_cPtr);
	}

	function put_ReadTimeoutMs($newVal) {
		CkSsh_put_ReadTimeoutMs($this->_cPtr,$newVal);
	}

	function get_ReqExecCharset($str) {
		CkSsh_get_ReqExecCharset($this->_cPtr,$str);
	}

	function reqExecCharset() {
		return CkSsh_reqExecCharset($this->_cPtr);
	}

	function put_ReqExecCharset($newVal) {
		CkSsh_put_ReqExecCharset($this->_cPtr,$newVal);
	}

	function get_SessionLog($str) {
		CkSsh_get_SessionLog($this->_cPtr,$str);
	}

	function sessionLog() {
		return CkSsh_sessionLog($this->_cPtr);
	}

	function get_SocksHostname($str) {
		CkSsh_get_SocksHostname($this->_cPtr,$str);
	}

	function socksHostname() {
		return CkSsh_socksHostname($this->_cPtr);
	}

	function put_SocksHostname($newVal) {
		CkSsh_put_SocksHostname($this->_cPtr,$newVal);
	}

	function get_SocksPassword($str) {
		CkSsh_get_SocksPassword($this->_cPtr,$str);
	}

	function socksPassword() {
		return CkSsh_socksPassword($this->_cPtr);
	}

	function put_SocksPassword($newVal) {
		CkSsh_put_SocksPassword($this->_cPtr,$newVal);
	}

	function get_SocksPort() {
		return CkSsh_get_SocksPort($this->_cPtr);
	}

	function put_SocksPort($newVal) {
		CkSsh_put_SocksPort($this->_cPtr,$newVal);
	}

	function get_SocksUsername($str) {
		CkSsh_get_SocksUsername($this->_cPtr,$str);
	}

	function socksUsername() {
		return CkSsh_socksUsername($this->_cPtr);
	}

	function put_SocksUsername($newVal) {
		CkSsh_put_SocksUsername($this->_cPtr,$newVal);
	}

	function get_SocksVersion() {
		return CkSsh_get_SocksVersion($this->_cPtr);
	}

	function put_SocksVersion($newVal) {
		CkSsh_put_SocksVersion($this->_cPtr,$newVal);
	}

	function get_SoRcvBuf() {
		return CkSsh_get_SoRcvBuf($this->_cPtr);
	}

	function put_SoRcvBuf($newVal) {
		CkSsh_put_SoRcvBuf($this->_cPtr,$newVal);
	}

	function get_SoSndBuf() {
		return CkSsh_get_SoSndBuf($this->_cPtr);
	}

	function put_SoSndBuf($newVal) {
		CkSsh_put_SoSndBuf($this->_cPtr,$newVal);
	}

	function get_StderrToStdout() {
		return CkSsh_get_StderrToStdout($this->_cPtr);
	}

	function put_StderrToStdout($newVal) {
		CkSsh_put_StderrToStdout($this->_cPtr,$newVal);
	}

	function get_TcpNoDelay() {
		return CkSsh_get_TcpNoDelay($this->_cPtr);
	}

	function put_TcpNoDelay($newVal) {
		CkSsh_put_TcpNoDelay($this->_cPtr,$newVal);
	}

	function get_UserAuthBanner($str) {
		CkSsh_get_UserAuthBanner($this->_cPtr,$str);
	}

	function userAuthBanner() {
		return CkSsh_userAuthBanner($this->_cPtr);
	}

	function put_UserAuthBanner($newVal) {
		CkSsh_put_UserAuthBanner($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkSsh_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkSsh_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkSsh_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkSsh_version($this->_cPtr);
	}

	function AuthenticatePk($username,$privateKey) {
		return CkSsh_AuthenticatePk($this->_cPtr,$username,$privateKey);
	}

	function AuthenticatePkAsync($username,$privateKey) {
		$r=CkSsh_AuthenticatePkAsync($this->_cPtr,$username,$privateKey);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AuthenticatePw($login,$password) {
		return CkSsh_AuthenticatePw($this->_cPtr,$login,$password);
	}

	function AuthenticatePwAsync($login,$password) {
		$r=CkSsh_AuthenticatePwAsync($this->_cPtr,$login,$password);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function AuthenticatePwPk($username,$password,$privateKey) {
		return CkSsh_AuthenticatePwPk($this->_cPtr,$username,$password,$privateKey);
	}

	function AuthenticatePwPkAsync($username,$password,$privateKey) {
		$r=CkSsh_AuthenticatePwPkAsync($this->_cPtr,$username,$password,$privateKey);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelIsOpen($channelNum) {
		return CkSsh_ChannelIsOpen($this->_cPtr,$channelNum);
	}

	function ChannelPoll($channelNum,$pollTimeoutMs) {
		return CkSsh_ChannelPoll($this->_cPtr,$channelNum,$pollTimeoutMs);
	}

	function ChannelPollAsync($channelNum,$pollTimeoutMs) {
		$r=CkSsh_ChannelPollAsync($this->_cPtr,$channelNum,$pollTimeoutMs);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelRead($channelNum) {
		return CkSsh_ChannelRead($this->_cPtr,$channelNum);
	}

	function ChannelReadAsync($channelNum) {
		$r=CkSsh_ChannelReadAsync($this->_cPtr,$channelNum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelReadAndPoll($channelNum,$pollTimeoutMs) {
		return CkSsh_ChannelReadAndPoll($this->_cPtr,$channelNum,$pollTimeoutMs);
	}

	function ChannelReadAndPollAsync($channelNum,$pollTimeoutMs) {
		$r=CkSsh_ChannelReadAndPollAsync($this->_cPtr,$channelNum,$pollTimeoutMs);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelReadAndPoll2($channelNum,$pollTimeoutMs,$maxNumBytes) {
		return CkSsh_ChannelReadAndPoll2($this->_cPtr,$channelNum,$pollTimeoutMs,$maxNumBytes);
	}

	function ChannelReadAndPoll2Async($channelNum,$pollTimeoutMs,$maxNumBytes) {
		$r=CkSsh_ChannelReadAndPoll2Async($this->_cPtr,$channelNum,$pollTimeoutMs,$maxNumBytes);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelReceivedClose($channelNum) {
		return CkSsh_ChannelReceivedClose($this->_cPtr,$channelNum);
	}

	function ChannelReceivedEof($channelNum) {
		return CkSsh_ChannelReceivedEof($this->_cPtr,$channelNum);
	}

	function ChannelReceivedExitStatus($channelNum) {
		return CkSsh_ChannelReceivedExitStatus($this->_cPtr,$channelNum);
	}

	function ChannelReceiveToClose($channelNum) {
		return CkSsh_ChannelReceiveToClose($this->_cPtr,$channelNum);
	}

	function ChannelReceiveToCloseAsync($channelNum) {
		$r=CkSsh_ChannelReceiveToCloseAsync($this->_cPtr,$channelNum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelReceiveUntilMatch($channelNum,$matchPattern,$charset,$caseSensitive) {
		return CkSsh_ChannelReceiveUntilMatch($this->_cPtr,$channelNum,$matchPattern,$charset,$caseSensitive);
	}

	function ChannelReceiveUntilMatchAsync($channelNum,$matchPattern,$charset,$caseSensitive) {
		$r=CkSsh_ChannelReceiveUntilMatchAsync($this->_cPtr,$channelNum,$matchPattern,$charset,$caseSensitive);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelReceiveUntilMatchN($channelNum,$matchPatterns,$charset,$caseSensitive) {
		return CkSsh_ChannelReceiveUntilMatchN($this->_cPtr,$channelNum,$matchPatterns,$charset,$caseSensitive);
	}

	function ChannelReceiveUntilMatchNAsync($channelNum,$matchPatterns,$charset,$caseSensitive) {
		$r=CkSsh_ChannelReceiveUntilMatchNAsync($this->_cPtr,$channelNum,$matchPatterns,$charset,$caseSensitive);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelRelease($channelNum) {
		CkSsh_ChannelRelease($this->_cPtr,$channelNum);
	}

	function ChannelSendClose($channelNum) {
		return CkSsh_ChannelSendClose($this->_cPtr,$channelNum);
	}

	function ChannelSendCloseAsync($channelNum) {
		$r=CkSsh_ChannelSendCloseAsync($this->_cPtr,$channelNum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelSendData($channelNum,$byteData) {
		return CkSsh_ChannelSendData($this->_cPtr,$channelNum,$byteData);
	}

	function ChannelSendDataAsync($channelNum,$byteData) {
		$r=CkSsh_ChannelSendDataAsync($this->_cPtr,$channelNum,$byteData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelSendEof($channelNum) {
		return CkSsh_ChannelSendEof($this->_cPtr,$channelNum);
	}

	function ChannelSendEofAsync($channelNum) {
		$r=CkSsh_ChannelSendEofAsync($this->_cPtr,$channelNum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ChannelSendString($channelNum,$textData,$charset) {
		return CkSsh_ChannelSendString($this->_cPtr,$channelNum,$textData,$charset);
	}

	function ChannelSendStringAsync($channelNum,$textData,$charset) {
		$r=CkSsh_ChannelSendStringAsync($this->_cPtr,$channelNum,$textData,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CheckConnection() {
		return CkSsh_CheckConnection($this->_cPtr);
	}

	function ClearTtyModes() {
		CkSsh_ClearTtyModes($this->_cPtr);
	}

	function Connect($domainName,$port) {
		return CkSsh_Connect($this->_cPtr,$domainName,$port);
	}

	function ConnectAsync($domainName,$port) {
		$r=CkSsh_ConnectAsync($this->_cPtr,$domainName,$port);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ConnectThroughSsh($ssh,$hostname,$port) {
		return CkSsh_ConnectThroughSsh($this->_cPtr,$ssh,$hostname,$port);
	}

	function ConnectThroughSshAsync($ssh,$hostname,$port) {
		$r=CkSsh_ConnectThroughSshAsync($this->_cPtr,$ssh,$hostname,$port);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function continueKeyboardAuth($response) {
		return CkSsh_continueKeyboardAuth($this->_cPtr,$response);
	}

	function ContinueKeyboardAuthAsync($response) {
		$r=CkSsh_ContinueKeyboardAuthAsync($this->_cPtr,$response);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Disconnect() {
		CkSsh_Disconnect($this->_cPtr);
	}

	function GetChannelExitStatus($channelNum) {
		return CkSsh_GetChannelExitStatus($this->_cPtr,$channelNum);
	}

	function GetChannelNumber($index) {
		return CkSsh_GetChannelNumber($this->_cPtr,$index);
	}

	function getChannelType($index) {
		return CkSsh_getChannelType($this->_cPtr,$index);
	}

	function channelType($index) {
		return CkSsh_channelType($this->_cPtr,$index);
	}

	function GetReceivedData($channelNum,$outBytes) {
		return CkSsh_GetReceivedData($this->_cPtr,$channelNum,$outBytes);
	}

	function GetReceivedDataN($channelNum,$maxNumBytes,$outBytes) {
		return CkSsh_GetReceivedDataN($this->_cPtr,$channelNum,$maxNumBytes,$outBytes);
	}

	function GetReceivedNumBytes($channelNum) {
		return CkSsh_GetReceivedNumBytes($this->_cPtr,$channelNum);
	}

	function GetReceivedStderr($channelNum,$outBytes) {
		return CkSsh_GetReceivedStderr($this->_cPtr,$channelNum,$outBytes);
	}

	function getReceivedStderrText($channelNum,$charset) {
		return CkSsh_getReceivedStderrText($this->_cPtr,$channelNum,$charset);
	}

	function receivedStderrText($channelNum,$charset) {
		return CkSsh_receivedStderrText($this->_cPtr,$channelNum,$charset);
	}

	function getReceivedText($channelNum,$charset) {
		return CkSsh_getReceivedText($this->_cPtr,$channelNum,$charset);
	}

	function receivedText($channelNum,$charset) {
		return CkSsh_receivedText($this->_cPtr,$channelNum,$charset);
	}

	function getReceivedTextS($channelNum,$substr,$charset) {
		return CkSsh_getReceivedTextS($this->_cPtr,$channelNum,$substr,$charset);
	}

	function receivedTextS($channelNum,$substr,$charset) {
		return CkSsh_receivedTextS($this->_cPtr,$channelNum,$substr,$charset);
	}

	function OpenCustomChannel($channelType) {
		return CkSsh_OpenCustomChannel($this->_cPtr,$channelType);
	}

	function OpenCustomChannelAsync($channelType) {
		$r=CkSsh_OpenCustomChannelAsync($this->_cPtr,$channelType);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function OpenDirectTcpIpChannel($targetHostname,$targetPort) {
		return CkSsh_OpenDirectTcpIpChannel($this->_cPtr,$targetHostname,$targetPort);
	}

	function OpenDirectTcpIpChannelAsync($targetHostname,$targetPort) {
		$r=CkSsh_OpenDirectTcpIpChannelAsync($this->_cPtr,$targetHostname,$targetPort);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function OpenSessionChannel() {
		return CkSsh_OpenSessionChannel($this->_cPtr);
	}

	function OpenSessionChannelAsync() {
		$r=CkSsh_OpenSessionChannelAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function peekReceivedText($channelNum,$charset) {
		return CkSsh_peekReceivedText($this->_cPtr,$channelNum,$charset);
	}

	function QuickCmdCheck($pollTimeoutMs) {
		return CkSsh_QuickCmdCheck($this->_cPtr,$pollTimeoutMs);
	}

	function QuickCmdCheckAsync($pollTimeoutMs) {
		$r=CkSsh_QuickCmdCheckAsync($this->_cPtr,$pollTimeoutMs);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function QuickCmdSend($command) {
		return CkSsh_QuickCmdSend($this->_cPtr,$command);
	}

	function QuickCmdSendAsync($command) {
		$r=CkSsh_QuickCmdSendAsync($this->_cPtr,$command);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function quickCommand($command,$charset) {
		return CkSsh_quickCommand($this->_cPtr,$command,$charset);
	}

	function QuickCommandAsync($command,$charset) {
		$r=CkSsh_QuickCommandAsync($this->_cPtr,$command,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function QuickShell() {
		return CkSsh_QuickShell($this->_cPtr);
	}

	function QuickShellAsync() {
		$r=CkSsh_QuickShellAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ReKey() {
		return CkSsh_ReKey($this->_cPtr);
	}

	function ReKeyAsync() {
		$r=CkSsh_ReKeyAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SaveLastError($path) {
		return CkSsh_SaveLastError($this->_cPtr,$path);
	}

	function SendIgnore() {
		return CkSsh_SendIgnore($this->_cPtr);
	}

	function SendIgnoreAsync() {
		$r=CkSsh_SendIgnoreAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqExec($channelNum,$commandLine) {
		return CkSsh_SendReqExec($this->_cPtr,$channelNum,$commandLine);
	}

	function SendReqExecAsync($channelNum,$commandLine) {
		$r=CkSsh_SendReqExecAsync($this->_cPtr,$channelNum,$commandLine);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqPty($channelNum,$termType,$widthInChars,$heightInChars,$widthInPixels,$heightInPixels) {
		return CkSsh_SendReqPty($this->_cPtr,$channelNum,$termType,$widthInChars,$heightInChars,$widthInPixels,$heightInPixels);
	}

	function SendReqPtyAsync($channelNum,$termType,$widthInChars,$heightInChars,$widthInPixels,$heightInPixels) {
		$r=CkSsh_SendReqPtyAsync($this->_cPtr,$channelNum,$termType,$widthInChars,$heightInChars,$widthInPixels,$heightInPixels);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqSetEnv($channelNum,$name,$value) {
		return CkSsh_SendReqSetEnv($this->_cPtr,$channelNum,$name,$value);
	}

	function SendReqSetEnvAsync($channelNum,$name,$value) {
		$r=CkSsh_SendReqSetEnvAsync($this->_cPtr,$channelNum,$name,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqShell($channelNum) {
		return CkSsh_SendReqShell($this->_cPtr,$channelNum);
	}

	function SendReqShellAsync($channelNum) {
		$r=CkSsh_SendReqShellAsync($this->_cPtr,$channelNum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqSignal($channelNum,$signalName) {
		return CkSsh_SendReqSignal($this->_cPtr,$channelNum,$signalName);
	}

	function SendReqSignalAsync($channelNum,$signalName) {
		$r=CkSsh_SendReqSignalAsync($this->_cPtr,$channelNum,$signalName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqSubsystem($channelNum,$subsystemName) {
		return CkSsh_SendReqSubsystem($this->_cPtr,$channelNum,$subsystemName);
	}

	function SendReqSubsystemAsync($channelNum,$subsystemName) {
		$r=CkSsh_SendReqSubsystemAsync($this->_cPtr,$channelNum,$subsystemName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqWindowChange($channelNum,$widthInChars,$heightInRows,$pixWidth,$pixHeight) {
		return CkSsh_SendReqWindowChange($this->_cPtr,$channelNum,$widthInChars,$heightInRows,$pixWidth,$pixHeight);
	}

	function SendReqWindowChangeAsync($channelNum,$widthInChars,$heightInRows,$pixWidth,$pixHeight) {
		$r=CkSsh_SendReqWindowChangeAsync($this->_cPtr,$channelNum,$widthInChars,$heightInRows,$pixWidth,$pixHeight);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqX11Forwarding($channelNum,$singleConnection,$authProt,$authCookie,$screenNum) {
		return CkSsh_SendReqX11Forwarding($this->_cPtr,$channelNum,$singleConnection,$authProt,$authCookie,$screenNum);
	}

	function SendReqX11ForwardingAsync($channelNum,$singleConnection,$authProt,$authCookie,$screenNum) {
		$r=CkSsh_SendReqX11ForwardingAsync($this->_cPtr,$channelNum,$singleConnection,$authProt,$authCookie,$screenNum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqXonXoff($channelNum,$clientCanDo) {
		return CkSsh_SendReqXonXoff($this->_cPtr,$channelNum,$clientCanDo);
	}

	function SendReqXonXoffAsync($channelNum,$clientCanDo) {
		$r=CkSsh_SendReqXonXoffAsync($this->_cPtr,$channelNum,$clientCanDo);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetTtyMode($ttyName,$ttyValue) {
		return CkSsh_SetTtyMode($this->_cPtr,$ttyName,$ttyValue);
	}

	function startKeyboardAuth($login) {
		return CkSsh_startKeyboardAuth($this->_cPtr,$login);
	}

	function StartKeyboardAuthAsync($login) {
		$r=CkSsh_StartKeyboardAuthAsync($this->_cPtr,$login);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnlockComponent($unlockCode) {
		return CkSsh_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function WaitForChannelMessage($pollTimeoutMs) {
		return CkSsh_WaitForChannelMessage($this->_cPtr,$pollTimeoutMs);
	}

	function WaitForChannelMessageAsync($pollTimeoutMs) {
		$r=CkSsh_WaitForChannelMessageAsync($this->_cPtr,$pollTimeoutMs);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}
}


?>