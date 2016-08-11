<?php
class CkMailMan {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkMailMan') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkMailMan();
	}

	function get_Utf8() {
		return CkMailMan_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkMailMan_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkMailMan_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkMailMan_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkMailMan_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkMailMan_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkMailMan_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkMailMan_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkMailMan_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkMailMan_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkMailMan_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkMailMan_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkMailMan_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkMailMan_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkMailMan_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkMailMan_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkMailMan_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkMailMan_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkMailMan_SaveLastError($this->_cPtr,$path);
	}

	function get_AbortCurrent() {
		return CkMailMan_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkMailMan_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_AllOrNone() {
		return CkMailMan_get_AllOrNone($this->_cPtr);
	}

	function put_AllOrNone($newVal) {
		CkMailMan_put_AllOrNone($this->_cPtr,$newVal);
	}

	function get_AutoFix() {
		return CkMailMan_get_AutoFix($this->_cPtr);
	}

	function put_AutoFix($newVal) {
		CkMailMan_put_AutoFix($this->_cPtr,$newVal);
	}

	function get_AutoGenMessageId() {
		return CkMailMan_get_AutoGenMessageId($this->_cPtr);
	}

	function put_AutoGenMessageId($newVal) {
		CkMailMan_put_AutoGenMessageId($this->_cPtr,$newVal);
	}

	function get_AutoSmtpRset() {
		return CkMailMan_get_AutoSmtpRset($this->_cPtr);
	}

	function put_AutoSmtpRset($newVal) {
		CkMailMan_put_AutoSmtpRset($this->_cPtr,$newVal);
	}

	function get_AutoUnwrapSecurity() {
		return CkMailMan_get_AutoUnwrapSecurity($this->_cPtr);
	}

	function put_AutoUnwrapSecurity($newVal) {
		CkMailMan_put_AutoUnwrapSecurity($this->_cPtr,$newVal);
	}

	function get_ClientIpAddress($str) {
		CkMailMan_get_ClientIpAddress($this->_cPtr,$str);
	}

	function clientIpAddress() {
		return CkMailMan_clientIpAddress($this->_cPtr);
	}

	function put_ClientIpAddress($newVal) {
		CkMailMan_put_ClientIpAddress($this->_cPtr,$newVal);
	}

	function get_ConnectFailReason() {
		return CkMailMan_get_ConnectFailReason($this->_cPtr);
	}

	function get_ConnectTimeout() {
		return CkMailMan_get_ConnectTimeout($this->_cPtr);
	}

	function put_ConnectTimeout($newVal) {
		CkMailMan_put_ConnectTimeout($this->_cPtr,$newVal);
	}

	function get_DsnEnvid($str) {
		CkMailMan_get_DsnEnvid($this->_cPtr,$str);
	}

	function dsnEnvid() {
		return CkMailMan_dsnEnvid($this->_cPtr);
	}

	function put_DsnEnvid($newVal) {
		CkMailMan_put_DsnEnvid($this->_cPtr,$newVal);
	}

	function get_DsnNotify($str) {
		CkMailMan_get_DsnNotify($this->_cPtr,$str);
	}

	function dsnNotify() {
		return CkMailMan_dsnNotify($this->_cPtr);
	}

	function put_DsnNotify($newVal) {
		CkMailMan_put_DsnNotify($this->_cPtr,$newVal);
	}

	function get_DsnRet($str) {
		CkMailMan_get_DsnRet($this->_cPtr,$str);
	}

	function dsnRet() {
		return CkMailMan_dsnRet($this->_cPtr);
	}

	function put_DsnRet($newVal) {
		CkMailMan_put_DsnRet($this->_cPtr,$newVal);
	}

	function get_EmbedCertChain() {
		return CkMailMan_get_EmbedCertChain($this->_cPtr);
	}

	function put_EmbedCertChain($newVal) {
		CkMailMan_put_EmbedCertChain($this->_cPtr,$newVal);
	}

	function get_Filter($str) {
		CkMailMan_get_Filter($this->_cPtr,$str);
	}

	function filter() {
		return CkMailMan_filter($this->_cPtr);
	}

	function put_Filter($newVal) {
		CkMailMan_put_Filter($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkMailMan_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkMailMan_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_HeloHostname($str) {
		CkMailMan_get_HeloHostname($this->_cPtr,$str);
	}

	function heloHostname() {
		return CkMailMan_heloHostname($this->_cPtr);
	}

	function put_HeloHostname($newVal) {
		CkMailMan_put_HeloHostname($this->_cPtr,$newVal);
	}

	function get_HttpProxyAuthMethod($str) {
		CkMailMan_get_HttpProxyAuthMethod($this->_cPtr,$str);
	}

	function httpProxyAuthMethod() {
		return CkMailMan_httpProxyAuthMethod($this->_cPtr);
	}

	function put_HttpProxyAuthMethod($newVal) {
		CkMailMan_put_HttpProxyAuthMethod($this->_cPtr,$newVal);
	}

	function get_HttpProxyDomain($str) {
		CkMailMan_get_HttpProxyDomain($this->_cPtr,$str);
	}

	function httpProxyDomain() {
		return CkMailMan_httpProxyDomain($this->_cPtr);
	}

	function put_HttpProxyDomain($newVal) {
		CkMailMan_put_HttpProxyDomain($this->_cPtr,$newVal);
	}

	function get_HttpProxyHostname($str) {
		CkMailMan_get_HttpProxyHostname($this->_cPtr,$str);
	}

	function httpProxyHostname() {
		return CkMailMan_httpProxyHostname($this->_cPtr);
	}

	function put_HttpProxyHostname($newVal) {
		CkMailMan_put_HttpProxyHostname($this->_cPtr,$newVal);
	}

	function get_HttpProxyPassword($str) {
		CkMailMan_get_HttpProxyPassword($this->_cPtr,$str);
	}

	function httpProxyPassword() {
		return CkMailMan_httpProxyPassword($this->_cPtr);
	}

	function put_HttpProxyPassword($newVal) {
		CkMailMan_put_HttpProxyPassword($this->_cPtr,$newVal);
	}

	function get_HttpProxyPort() {
		return CkMailMan_get_HttpProxyPort($this->_cPtr);
	}

	function put_HttpProxyPort($newVal) {
		CkMailMan_put_HttpProxyPort($this->_cPtr,$newVal);
	}

	function get_HttpProxyUsername($str) {
		CkMailMan_get_HttpProxyUsername($this->_cPtr,$str);
	}

	function httpProxyUsername() {
		return CkMailMan_httpProxyUsername($this->_cPtr);
	}

	function put_HttpProxyUsername($newVal) {
		CkMailMan_put_HttpProxyUsername($this->_cPtr,$newVal);
	}

	function get_ImmediateDelete() {
		return CkMailMan_get_ImmediateDelete($this->_cPtr);
	}

	function put_ImmediateDelete($newVal) {
		CkMailMan_put_ImmediateDelete($this->_cPtr,$newVal);
	}

	function get_IncludeRootCert() {
		return CkMailMan_get_IncludeRootCert($this->_cPtr);
	}

	function put_IncludeRootCert($newVal) {
		CkMailMan_put_IncludeRootCert($this->_cPtr,$newVal);
	}

	function get_IsPop3Connected() {
		return CkMailMan_get_IsPop3Connected($this->_cPtr);
	}

	function get_IsSmtpConnected() {
		return CkMailMan_get_IsSmtpConnected($this->_cPtr);
	}

	function get_LastSendQFilename($str) {
		CkMailMan_get_LastSendQFilename($this->_cPtr,$str);
	}

	function lastSendQFilename() {
		return CkMailMan_lastSendQFilename($this->_cPtr);
	}

	function get_LastSmtpStatus() {
		return CkMailMan_get_LastSmtpStatus($this->_cPtr);
	}

	function get_LogMailReceivedFilename($str) {
		CkMailMan_get_LogMailReceivedFilename($this->_cPtr,$str);
	}

	function logMailReceivedFilename() {
		return CkMailMan_logMailReceivedFilename($this->_cPtr);
	}

	function put_LogMailReceivedFilename($newVal) {
		CkMailMan_put_LogMailReceivedFilename($this->_cPtr,$newVal);
	}

	function get_LogMailSentFilename($str) {
		CkMailMan_get_LogMailSentFilename($this->_cPtr,$str);
	}

	function logMailSentFilename() {
		return CkMailMan_logMailSentFilename($this->_cPtr);
	}

	function put_LogMailSentFilename($newVal) {
		CkMailMan_put_LogMailSentFilename($this->_cPtr,$newVal);
	}

	function get_MailHost($str) {
		CkMailMan_get_MailHost($this->_cPtr,$str);
	}

	function mailHost() {
		return CkMailMan_mailHost($this->_cPtr);
	}

	function put_MailHost($newVal) {
		CkMailMan_put_MailHost($this->_cPtr,$newVal);
	}

	function get_MailPort() {
		return CkMailMan_get_MailPort($this->_cPtr);
	}

	function put_MailPort($newVal) {
		CkMailMan_put_MailPort($this->_cPtr,$newVal);
	}

	function get_MaxCount() {
		return CkMailMan_get_MaxCount($this->_cPtr);
	}

	function put_MaxCount($newVal) {
		CkMailMan_put_MaxCount($this->_cPtr,$newVal);
	}

	function get_OAuth2AccessToken($str) {
		CkMailMan_get_OAuth2AccessToken($this->_cPtr,$str);
	}

	function oAuth2AccessToken() {
		return CkMailMan_oAuth2AccessToken($this->_cPtr);
	}

	function put_OAuth2AccessToken($newVal) {
		CkMailMan_put_OAuth2AccessToken($this->_cPtr,$newVal);
	}

	function get_OpaqueSigning() {
		return CkMailMan_get_OpaqueSigning($this->_cPtr);
	}

	function put_OpaqueSigning($newVal) {
		CkMailMan_put_OpaqueSigning($this->_cPtr,$newVal);
	}

	function get_P7mEncryptAttachFilename($str) {
		CkMailMan_get_P7mEncryptAttachFilename($this->_cPtr,$str);
	}

	function p7mEncryptAttachFilename() {
		return CkMailMan_p7mEncryptAttachFilename($this->_cPtr);
	}

	function put_P7mEncryptAttachFilename($newVal) {
		CkMailMan_put_P7mEncryptAttachFilename($this->_cPtr,$newVal);
	}

	function get_P7mSigAttachFilename($str) {
		CkMailMan_get_P7mSigAttachFilename($this->_cPtr,$str);
	}

	function p7mSigAttachFilename() {
		return CkMailMan_p7mSigAttachFilename($this->_cPtr);
	}

	function put_P7mSigAttachFilename($newVal) {
		CkMailMan_put_P7mSigAttachFilename($this->_cPtr,$newVal);
	}

	function get_P7sSigAttachFilename($str) {
		CkMailMan_get_P7sSigAttachFilename($this->_cPtr,$str);
	}

	function p7sSigAttachFilename() {
		return CkMailMan_p7sSigAttachFilename($this->_cPtr);
	}

	function put_P7sSigAttachFilename($newVal) {
		CkMailMan_put_P7sSigAttachFilename($this->_cPtr,$newVal);
	}

	function get_PercentDoneScale() {
		return CkMailMan_get_PercentDoneScale($this->_cPtr);
	}

	function put_PercentDoneScale($newVal) {
		CkMailMan_put_PercentDoneScale($this->_cPtr,$newVal);
	}

	function get_Pop3SPA() {
		return CkMailMan_get_Pop3SPA($this->_cPtr);
	}

	function put_Pop3SPA($newVal) {
		CkMailMan_put_Pop3SPA($this->_cPtr,$newVal);
	}

	function get_Pop3SessionId() {
		return CkMailMan_get_Pop3SessionId($this->_cPtr);
	}

	function get_Pop3SessionLog($str) {
		CkMailMan_get_Pop3SessionLog($this->_cPtr,$str);
	}

	function pop3SessionLog() {
		return CkMailMan_pop3SessionLog($this->_cPtr);
	}

	function get_Pop3SslServerCertVerified() {
		return CkMailMan_get_Pop3SslServerCertVerified($this->_cPtr);
	}

	function get_Pop3Stls() {
		return CkMailMan_get_Pop3Stls($this->_cPtr);
	}

	function put_Pop3Stls($newVal) {
		CkMailMan_put_Pop3Stls($this->_cPtr,$newVal);
	}

	function get_PopPassword($str) {
		CkMailMan_get_PopPassword($this->_cPtr,$str);
	}

	function popPassword() {
		return CkMailMan_popPassword($this->_cPtr);
	}

	function put_PopPassword($newVal) {
		CkMailMan_put_PopPassword($this->_cPtr,$newVal);
	}

	function get_PopPasswordBase64($str) {
		CkMailMan_get_PopPasswordBase64($this->_cPtr,$str);
	}

	function popPasswordBase64() {
		return CkMailMan_popPasswordBase64($this->_cPtr);
	}

	function put_PopPasswordBase64($newVal) {
		CkMailMan_put_PopPasswordBase64($this->_cPtr,$newVal);
	}

	function get_PopSsl() {
		return CkMailMan_get_PopSsl($this->_cPtr);
	}

	function put_PopSsl($newVal) {
		CkMailMan_put_PopSsl($this->_cPtr,$newVal);
	}

	function get_PopUsername($str) {
		CkMailMan_get_PopUsername($this->_cPtr,$str);
	}

	function popUsername() {
		return CkMailMan_popUsername($this->_cPtr);
	}

	function put_PopUsername($newVal) {
		CkMailMan_put_PopUsername($this->_cPtr,$newVal);
	}

	function get_PreferIpv6() {
		return CkMailMan_get_PreferIpv6($this->_cPtr);
	}

	function put_PreferIpv6($newVal) {
		CkMailMan_put_PreferIpv6($this->_cPtr,$newVal);
	}

	function get_ReadTimeout() {
		return CkMailMan_get_ReadTimeout($this->_cPtr);
	}

	function put_ReadTimeout($newVal) {
		CkMailMan_put_ReadTimeout($this->_cPtr,$newVal);
	}

	function get_RequireSslCertVerify() {
		return CkMailMan_get_RequireSslCertVerify($this->_cPtr);
	}

	function put_RequireSslCertVerify($newVal) {
		CkMailMan_put_RequireSslCertVerify($this->_cPtr,$newVal);
	}

	function get_ResetDateOnLoad() {
		return CkMailMan_get_ResetDateOnLoad($this->_cPtr);
	}

	function put_ResetDateOnLoad($newVal) {
		CkMailMan_put_ResetDateOnLoad($this->_cPtr,$newVal);
	}

	function get_SendBufferSize() {
		return CkMailMan_get_SendBufferSize($this->_cPtr);
	}

	function put_SendBufferSize($newVal) {
		CkMailMan_put_SendBufferSize($this->_cPtr,$newVal);
	}

	function get_SendIndividual() {
		return CkMailMan_get_SendIndividual($this->_cPtr);
	}

	function put_SendIndividual($newVal) {
		CkMailMan_put_SendIndividual($this->_cPtr,$newVal);
	}

	function get_SizeLimit() {
		return CkMailMan_get_SizeLimit($this->_cPtr);
	}

	function put_SizeLimit($newVal) {
		CkMailMan_put_SizeLimit($this->_cPtr,$newVal);
	}

	function get_SmtpAuthMethod($str) {
		CkMailMan_get_SmtpAuthMethod($this->_cPtr,$str);
	}

	function smtpAuthMethod() {
		return CkMailMan_smtpAuthMethod($this->_cPtr);
	}

	function put_SmtpAuthMethod($newVal) {
		CkMailMan_put_SmtpAuthMethod($this->_cPtr,$newVal);
	}

	function get_SmtpFailReason($str) {
		CkMailMan_get_SmtpFailReason($this->_cPtr,$str);
	}

	function smtpFailReason() {
		return CkMailMan_smtpFailReason($this->_cPtr);
	}

	function get_SmtpHost($str) {
		CkMailMan_get_SmtpHost($this->_cPtr,$str);
	}

	function smtpHost() {
		return CkMailMan_smtpHost($this->_cPtr);
	}

	function put_SmtpHost($newVal) {
		CkMailMan_put_SmtpHost($this->_cPtr,$newVal);
	}

	function get_SmtpLoginDomain($str) {
		CkMailMan_get_SmtpLoginDomain($this->_cPtr,$str);
	}

	function smtpLoginDomain() {
		return CkMailMan_smtpLoginDomain($this->_cPtr);
	}

	function put_SmtpLoginDomain($newVal) {
		CkMailMan_put_SmtpLoginDomain($this->_cPtr,$newVal);
	}

	function get_SmtpPassword($str) {
		CkMailMan_get_SmtpPassword($this->_cPtr,$str);
	}

	function smtpPassword() {
		return CkMailMan_smtpPassword($this->_cPtr);
	}

	function put_SmtpPassword($newVal) {
		CkMailMan_put_SmtpPassword($this->_cPtr,$newVal);
	}

	function get_SmtpPipelining() {
		return CkMailMan_get_SmtpPipelining($this->_cPtr);
	}

	function put_SmtpPipelining($newVal) {
		CkMailMan_put_SmtpPipelining($this->_cPtr,$newVal);
	}

	function get_SmtpPort() {
		return CkMailMan_get_SmtpPort($this->_cPtr);
	}

	function put_SmtpPort($newVal) {
		CkMailMan_put_SmtpPort($this->_cPtr,$newVal);
	}

	function get_SmtpSessionLog($str) {
		CkMailMan_get_SmtpSessionLog($this->_cPtr,$str);
	}

	function smtpSessionLog() {
		return CkMailMan_smtpSessionLog($this->_cPtr);
	}

	function get_SmtpSsl() {
		return CkMailMan_get_SmtpSsl($this->_cPtr);
	}

	function put_SmtpSsl($newVal) {
		CkMailMan_put_SmtpSsl($this->_cPtr,$newVal);
	}

	function get_SmtpSslServerCertVerified() {
		return CkMailMan_get_SmtpSslServerCertVerified($this->_cPtr);
	}

	function get_SmtpUsername($str) {
		CkMailMan_get_SmtpUsername($this->_cPtr,$str);
	}

	function smtpUsername() {
		return CkMailMan_smtpUsername($this->_cPtr);
	}

	function put_SmtpUsername($newVal) {
		CkMailMan_put_SmtpUsername($this->_cPtr,$newVal);
	}

	function get_SoRcvBuf() {
		return CkMailMan_get_SoRcvBuf($this->_cPtr);
	}

	function put_SoRcvBuf($newVal) {
		CkMailMan_put_SoRcvBuf($this->_cPtr,$newVal);
	}

	function get_SoSndBuf() {
		return CkMailMan_get_SoSndBuf($this->_cPtr);
	}

	function put_SoSndBuf($newVal) {
		CkMailMan_put_SoSndBuf($this->_cPtr,$newVal);
	}

	function get_SocksHostname($str) {
		CkMailMan_get_SocksHostname($this->_cPtr,$str);
	}

	function socksHostname() {
		return CkMailMan_socksHostname($this->_cPtr);
	}

	function put_SocksHostname($newVal) {
		CkMailMan_put_SocksHostname($this->_cPtr,$newVal);
	}

	function get_SocksPassword($str) {
		CkMailMan_get_SocksPassword($this->_cPtr,$str);
	}

	function socksPassword() {
		return CkMailMan_socksPassword($this->_cPtr);
	}

	function put_SocksPassword($newVal) {
		CkMailMan_put_SocksPassword($this->_cPtr,$newVal);
	}

	function get_SocksPort() {
		return CkMailMan_get_SocksPort($this->_cPtr);
	}

	function put_SocksPort($newVal) {
		CkMailMan_put_SocksPort($this->_cPtr,$newVal);
	}

	function get_SocksUsername($str) {
		CkMailMan_get_SocksUsername($this->_cPtr,$str);
	}

	function socksUsername() {
		return CkMailMan_socksUsername($this->_cPtr);
	}

	function put_SocksUsername($newVal) {
		CkMailMan_put_SocksUsername($this->_cPtr,$newVal);
	}

	function get_SocksVersion() {
		return CkMailMan_get_SocksVersion($this->_cPtr);
	}

	function put_SocksVersion($newVal) {
		CkMailMan_put_SocksVersion($this->_cPtr,$newVal);
	}

	function get_SslAllowedCiphers($str) {
		CkMailMan_get_SslAllowedCiphers($this->_cPtr,$str);
	}

	function sslAllowedCiphers() {
		return CkMailMan_sslAllowedCiphers($this->_cPtr);
	}

	function put_SslAllowedCiphers($newVal) {
		CkMailMan_put_SslAllowedCiphers($this->_cPtr,$newVal);
	}

	function get_SslProtocol($str) {
		CkMailMan_get_SslProtocol($this->_cPtr,$str);
	}

	function sslProtocol() {
		return CkMailMan_sslProtocol($this->_cPtr);
	}

	function put_SslProtocol($newVal) {
		CkMailMan_put_SslProtocol($this->_cPtr,$newVal);
	}

	function get_StartTLS() {
		return CkMailMan_get_StartTLS($this->_cPtr);
	}

	function put_StartTLS($newVal) {
		CkMailMan_put_StartTLS($this->_cPtr,$newVal);
	}

	function get_TlsCipherSuite($str) {
		CkMailMan_get_TlsCipherSuite($this->_cPtr,$str);
	}

	function tlsCipherSuite() {
		return CkMailMan_tlsCipherSuite($this->_cPtr);
	}

	function get_TlsPinSet($str) {
		CkMailMan_get_TlsPinSet($this->_cPtr,$str);
	}

	function tlsPinSet() {
		return CkMailMan_tlsPinSet($this->_cPtr);
	}

	function put_TlsPinSet($newVal) {
		CkMailMan_put_TlsPinSet($this->_cPtr,$newVal);
	}

	function get_TlsVersion($str) {
		CkMailMan_get_TlsVersion($this->_cPtr,$str);
	}

	function tlsVersion() {
		return CkMailMan_tlsVersion($this->_cPtr);
	}

	function get_UseApop() {
		return CkMailMan_get_UseApop($this->_cPtr);
	}

	function put_UseApop($newVal) {
		CkMailMan_put_UseApop($this->_cPtr,$newVal);
	}

	function AddPfxSourceData($pfxData,$password) {
		return CkMailMan_AddPfxSourceData($this->_cPtr,$pfxData,$password);
	}

	function AddPfxSourceFile($pfxFilePath,$password) {
		return CkMailMan_AddPfxSourceFile($this->_cPtr,$pfxFilePath,$password);
	}

	function CheckMail() {
		return CkMailMan_CheckMail($this->_cPtr);
	}

	function CheckMailAsync() {
		$r=CkMailMan_CheckMailAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ClearBadEmailAddresses() {
		CkMailMan_ClearBadEmailAddresses($this->_cPtr);
	}

	function ClearPop3SessionLog() {
		CkMailMan_ClearPop3SessionLog($this->_cPtr);
	}

	function ClearSmtpSessionLog() {
		CkMailMan_ClearSmtpSessionLog($this->_cPtr);
	}

	function CloseSmtpConnection() {
		return CkMailMan_CloseSmtpConnection($this->_cPtr);
	}

	function CloseSmtpConnectionAsync() {
		$r=CkMailMan_CloseSmtpConnectionAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CopyMail() {
		$r=CkMailMan_CopyMail($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function CopyMailAsync() {
		$r=CkMailMan_CopyMailAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DeleteBundle($bundle) {
		return CkMailMan_DeleteBundle($this->_cPtr,$bundle);
	}

	function DeleteBundleAsync($bundle) {
		$r=CkMailMan_DeleteBundleAsync($this->_cPtr,$bundle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DeleteByMsgnum($msgnum) {
		return CkMailMan_DeleteByMsgnum($this->_cPtr,$msgnum);
	}

	function DeleteByMsgnumAsync($msgnum) {
		$r=CkMailMan_DeleteByMsgnumAsync($this->_cPtr,$msgnum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DeleteByUidl($uidl) {
		return CkMailMan_DeleteByUidl($this->_cPtr,$uidl);
	}

	function DeleteByUidlAsync($uidl) {
		$r=CkMailMan_DeleteByUidlAsync($this->_cPtr,$uidl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DeleteEmail($email) {
		return CkMailMan_DeleteEmail($this->_cPtr,$email);
	}

	function DeleteEmailAsync($email) {
		$r=CkMailMan_DeleteEmailAsync($this->_cPtr,$email);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function DeleteMultiple($uidlArray) {
		return CkMailMan_DeleteMultiple($this->_cPtr,$uidlArray);
	}

	function DeleteMultipleAsync($uidlArray) {
		$r=CkMailMan_DeleteMultipleAsync($this->_cPtr,$uidlArray);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchByMsgnum($msgnum) {
		$r=CkMailMan_FetchByMsgnum($this->_cPtr,$msgnum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function FetchByMsgnumAsync($msgnum) {
		$r=CkMailMan_FetchByMsgnumAsync($this->_cPtr,$msgnum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchEmail($uidl) {
		$r=CkMailMan_FetchEmail($this->_cPtr,$uidl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function FetchEmailAsync($uidl) {
		$r=CkMailMan_FetchEmailAsync($this->_cPtr,$uidl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchMime($uidl,$outData) {
		return CkMailMan_FetchMime($this->_cPtr,$uidl,$outData);
	}

	function FetchMimeAsync($uidl) {
		$r=CkMailMan_FetchMimeAsync($this->_cPtr,$uidl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchMimeByMsgnum($msgnum,$outBytes) {
		return CkMailMan_FetchMimeByMsgnum($this->_cPtr,$msgnum,$outBytes);
	}

	function FetchMimeByMsgnumAsync($msgnum) {
		$r=CkMailMan_FetchMimeByMsgnumAsync($this->_cPtr,$msgnum);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchMultiple($uidlArray) {
		$r=CkMailMan_FetchMultiple($this->_cPtr,$uidlArray);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function FetchMultipleAsync($uidlArray) {
		$r=CkMailMan_FetchMultipleAsync($this->_cPtr,$uidlArray);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchMultipleHeaders($uidlArray,$numBodyLines) {
		$r=CkMailMan_FetchMultipleHeaders($this->_cPtr,$uidlArray,$numBodyLines);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function FetchMultipleHeadersAsync($uidlArray,$numBodyLines) {
		$r=CkMailMan_FetchMultipleHeadersAsync($this->_cPtr,$uidlArray,$numBodyLines);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchMultipleMime($uidlArray) {
		$r=CkMailMan_FetchMultipleMime($this->_cPtr,$uidlArray);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function FetchMultipleMimeAsync($uidlArray) {
		$r=CkMailMan_FetchMultipleMimeAsync($this->_cPtr,$uidlArray);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchSingleHeader($numBodyLines,$index) {
		$r=CkMailMan_FetchSingleHeader($this->_cPtr,$numBodyLines,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function FetchSingleHeaderAsync($numBodyLines,$index) {
		$r=CkMailMan_FetchSingleHeaderAsync($this->_cPtr,$numBodyLines,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function FetchSingleHeaderByUidl($numBodyLines,$uidl) {
		$r=CkMailMan_FetchSingleHeaderByUidl($this->_cPtr,$numBodyLines,$uidl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function FetchSingleHeaderByUidlAsync($numBodyLines,$uidl) {
		$r=CkMailMan_FetchSingleHeaderByUidlAsync($this->_cPtr,$numBodyLines,$uidl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetAllHeaders($numBodyLines) {
		$r=CkMailMan_GetAllHeaders($this->_cPtr,$numBodyLines);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function GetAllHeadersAsync($numBodyLines) {
		$r=CkMailMan_GetAllHeadersAsync($this->_cPtr,$numBodyLines);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetBadEmailAddrs() {
		$r=CkMailMan_GetBadEmailAddrs($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function GetFullEmail($email) {
		$r=CkMailMan_GetFullEmail($this->_cPtr,$email);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function GetFullEmailAsync($email) {
		$r=CkMailMan_GetFullEmailAsync($this->_cPtr,$email);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetHeaders($numBodyLines,$fromIndex,$toIndex) {
		$r=CkMailMan_GetHeaders($this->_cPtr,$numBodyLines,$fromIndex,$toIndex);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function GetHeadersAsync($numBodyLines,$fromIndex,$toIndex) {
		$r=CkMailMan_GetHeadersAsync($this->_cPtr,$numBodyLines,$fromIndex,$toIndex);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetMailboxCount() {
		return CkMailMan_GetMailboxCount($this->_cPtr);
	}

	function GetMailboxCountAsync() {
		$r=CkMailMan_GetMailboxCountAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getMailboxInfoXml() {
		return CkMailMan_getMailboxInfoXml($this->_cPtr);
	}

	function mailboxInfoXml() {
		return CkMailMan_mailboxInfoXml($this->_cPtr);
	}

	function GetMailboxInfoXmlAsync() {
		$r=CkMailMan_GetMailboxInfoXmlAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetMailboxSize() {
		return CkMailMan_GetMailboxSize($this->_cPtr);
	}

	function GetMailboxSizeAsync() {
		$r=CkMailMan_GetMailboxSizeAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetPop3SslServerCert() {
		$r=CkMailMan_GetPop3SslServerCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetSentToEmailAddrs() {
		$r=CkMailMan_GetSentToEmailAddrs($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function GetSizeByUidl($uidl) {
		return CkMailMan_GetSizeByUidl($this->_cPtr,$uidl);
	}

	function GetSizeByUidlAsync($uidl) {
		$r=CkMailMan_GetSizeByUidlAsync($this->_cPtr,$uidl);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function GetSmtpSslServerCert() {
		$r=CkMailMan_GetSmtpSslServerCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetUidls() {
		$r=CkMailMan_GetUidls($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function GetUidlsAsync() {
		$r=CkMailMan_GetUidlsAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function IsSmtpDsnCapable() {
		return CkMailMan_IsSmtpDsnCapable($this->_cPtr);
	}

	function IsSmtpDsnCapableAsync() {
		$r=CkMailMan_IsSmtpDsnCapableAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function IsUnlocked() {
		return CkMailMan_IsUnlocked($this->_cPtr);
	}

	function LoadEml($emlFilename) {
		$r=CkMailMan_LoadEml($this->_cPtr,$emlFilename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function LoadMbx($mbxFileName) {
		$r=CkMailMan_LoadMbx($this->_cPtr,$mbxFileName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function LoadMime($mimeText) {
		$r=CkMailMan_LoadMime($this->_cPtr,$mimeText);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function LoadXmlEmail($filename) {
		$r=CkMailMan_LoadXmlEmail($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function LoadXmlEmailString($xmlString) {
		$r=CkMailMan_LoadXmlEmailString($this->_cPtr,$xmlString);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function LoadXmlFile($filename) {
		$r=CkMailMan_LoadXmlFile($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function LoadXmlString($xmlString) {
		$r=CkMailMan_LoadXmlString($this->_cPtr,$xmlString);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function mxLookup($emailAddress) {
		return CkMailMan_mxLookup($this->_cPtr,$emailAddress);
	}

	function MxLookupAll($emailAddress) {
		$r=CkMailMan_MxLookupAll($this->_cPtr,$emailAddress);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function OpenSmtpConnection() {
		return CkMailMan_OpenSmtpConnection($this->_cPtr);
	}

	function OpenSmtpConnectionAsync() {
		$r=CkMailMan_OpenSmtpConnectionAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Pop3Authenticate() {
		return CkMailMan_Pop3Authenticate($this->_cPtr);
	}

	function Pop3AuthenticateAsync() {
		$r=CkMailMan_Pop3AuthenticateAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Pop3BeginSession() {
		return CkMailMan_Pop3BeginSession($this->_cPtr);
	}

	function Pop3BeginSessionAsync() {
		$r=CkMailMan_Pop3BeginSessionAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Pop3Connect() {
		return CkMailMan_Pop3Connect($this->_cPtr);
	}

	function Pop3ConnectAsync() {
		$r=CkMailMan_Pop3ConnectAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Pop3EndSession() {
		return CkMailMan_Pop3EndSession($this->_cPtr);
	}

	function Pop3EndSessionAsync() {
		$r=CkMailMan_Pop3EndSessionAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Pop3EndSessionNoQuit() {
		return CkMailMan_Pop3EndSessionNoQuit($this->_cPtr);
	}

	function Pop3EndSessionNoQuitAsync() {
		$r=CkMailMan_Pop3EndSessionNoQuitAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Pop3Noop() {
		return CkMailMan_Pop3Noop($this->_cPtr);
	}

	function Pop3NoopAsync() {
		$r=CkMailMan_Pop3NoopAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Pop3Reset() {
		return CkMailMan_Pop3Reset($this->_cPtr);
	}

	function Pop3ResetAsync() {
		$r=CkMailMan_Pop3ResetAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function pop3SendRawCommand($command,$charset) {
		return CkMailMan_pop3SendRawCommand($this->_cPtr,$command,$charset);
	}

	function Pop3SendRawCommandAsync($command,$charset) {
		$r=CkMailMan_Pop3SendRawCommandAsync($this->_cPtr,$command,$charset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function QuickSend($fromAddr,$toAddr,$subject,$body,$smtpServer) {
		return CkMailMan_QuickSend($this->_cPtr,$fromAddr,$toAddr,$subject,$body,$smtpServer);
	}

	function QuickSendAsync($fromAddr,$toAddr,$subject,$body,$smtpServer) {
		$r=CkMailMan_QuickSendAsync($this->_cPtr,$fromAddr,$toAddr,$subject,$body,$smtpServer);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function renderToMime($email) {
		return CkMailMan_renderToMime($this->_cPtr,$email);
	}

	function RenderToMimeBytes($email,$outBytes) {
		return CkMailMan_RenderToMimeBytes($this->_cPtr,$email,$outBytes);
	}

	function SendBundle($bundle) {
		return CkMailMan_SendBundle($this->_cPtr,$bundle);
	}

	function SendBundleAsync($bundle) {
		$r=CkMailMan_SendBundleAsync($this->_cPtr,$bundle);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendEmail($email) {
		return CkMailMan_SendEmail($this->_cPtr,$email);
	}

	function SendEmailAsync($email) {
		$r=CkMailMan_SendEmailAsync($this->_cPtr,$email);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendMime($from,$recipients,$mimeText) {
		return CkMailMan_SendMime($this->_cPtr,$from,$recipients,$mimeText);
	}

	function SendMimeAsync($from,$recipients,$mimeText) {
		$r=CkMailMan_SendMimeAsync($this->_cPtr,$from,$recipients,$mimeText);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendMimeBytes($from,$recipients,$mimeData) {
		return CkMailMan_SendMimeBytes($this->_cPtr,$from,$recipients,$mimeData);
	}

	function SendMimeBytesAsync($from,$recipients,$mimeData) {
		$r=CkMailMan_SendMimeBytesAsync($this->_cPtr,$from,$recipients,$mimeData);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendMimeToList($from,$distListFile,$mimeText) {
		return CkMailMan_SendMimeToList($this->_cPtr,$from,$distListFile,$mimeText);
	}

	function SendMimeToListAsync($from,$distListFile,$mimeText) {
		$r=CkMailMan_SendMimeToListAsync($this->_cPtr,$from,$distListFile,$mimeText);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendToDistributionList($email,$sa) {
		return CkMailMan_SendToDistributionList($this->_cPtr,$email,$sa);
	}

	function SendToDistributionListAsync($email,$sa) {
		$r=CkMailMan_SendToDistributionListAsync($this->_cPtr,$email,$sa);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetDecryptCert($cert) {
		return CkMailMan_SetDecryptCert($this->_cPtr,$cert);
	}

	function SetDecryptCert2($cert,$key) {
		return CkMailMan_SetDecryptCert2($this->_cPtr,$cert,$key);
	}

	function SetSslClientCert($cert) {
		return CkMailMan_SetSslClientCert($this->_cPtr,$cert);
	}

	function SetSslClientCertPem($pemDataOrFilename,$pemPassword) {
		return CkMailMan_SetSslClientCertPem($this->_cPtr,$pemDataOrFilename,$pemPassword);
	}

	function SetSslClientCertPfx($pfxFilename,$pfxPassword) {
		return CkMailMan_SetSslClientCertPfx($this->_cPtr,$pfxFilename,$pfxPassword);
	}

	function SmtpAuthenticate() {
		return CkMailMan_SmtpAuthenticate($this->_cPtr);
	}

	function SmtpAuthenticateAsync() {
		$r=CkMailMan_SmtpAuthenticateAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SmtpConnect() {
		return CkMailMan_SmtpConnect($this->_cPtr);
	}

	function SmtpConnectAsync() {
		$r=CkMailMan_SmtpConnectAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SmtpNoop() {
		return CkMailMan_SmtpNoop($this->_cPtr);
	}

	function SmtpNoopAsync() {
		$r=CkMailMan_SmtpNoopAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SmtpReset() {
		return CkMailMan_SmtpReset($this->_cPtr);
	}

	function SmtpResetAsync() {
		$r=CkMailMan_SmtpResetAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function smtpSendRawCommand($command,$charset,$bEncodeBase64) {
		return CkMailMan_smtpSendRawCommand($this->_cPtr,$command,$charset,$bEncodeBase64);
	}

	function SmtpSendRawCommandAsync($command,$charset,$bEncodeBase64) {
		$r=CkMailMan_SmtpSendRawCommandAsync($this->_cPtr,$command,$charset,$bEncodeBase64);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SshAuthenticatePk($sshLogin,$privateKey) {
		return CkMailMan_SshAuthenticatePk($this->_cPtr,$sshLogin,$privateKey);
	}

	function SshAuthenticatePkAsync($sshLogin,$privateKey) {
		$r=CkMailMan_SshAuthenticatePkAsync($this->_cPtr,$sshLogin,$privateKey);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SshAuthenticatePw($sshLogin,$sshPassword) {
		return CkMailMan_SshAuthenticatePw($this->_cPtr,$sshLogin,$sshPassword);
	}

	function SshAuthenticatePwAsync($sshLogin,$sshPassword) {
		$r=CkMailMan_SshAuthenticatePwAsync($this->_cPtr,$sshLogin,$sshPassword);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SshCloseTunnel() {
		return CkMailMan_SshCloseTunnel($this->_cPtr);
	}

	function SshCloseTunnelAsync() {
		$r=CkMailMan_SshCloseTunnelAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SshOpenTunnel($sshHostname,$sshPort) {
		return CkMailMan_SshOpenTunnel($this->_cPtr,$sshHostname,$sshPort);
	}

	function SshOpenTunnelAsync($sshHostname,$sshPort) {
		$r=CkMailMan_SshOpenTunnelAsync($this->_cPtr,$sshHostname,$sshPort);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function TransferMail() {
		$r=CkMailMan_TransferMail($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmailBundle($r);
		}
		return $r;
	}

	function TransferMailAsync() {
		$r=CkMailMan_TransferMailAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function TransferMultipleMime($uidlArray) {
		$r=CkMailMan_TransferMultipleMime($this->_cPtr,$uidlArray);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function TransferMultipleMimeAsync($uidlArray) {
		$r=CkMailMan_TransferMultipleMimeAsync($this->_cPtr,$uidlArray);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function UnlockComponent($code) {
		return CkMailMan_UnlockComponent($this->_cPtr,$code);
	}

	function UseCertVault($vault) {
		return CkMailMan_UseCertVault($this->_cPtr,$vault);
	}

	function UseSsh($ssh) {
		return CkMailMan_UseSsh($this->_cPtr,$ssh);
	}

	function UseSshTunnel($tunnel) {
		return CkMailMan_UseSshTunnel($this->_cPtr,$tunnel);
	}

	function VerifyPopConnection() {
		return CkMailMan_VerifyPopConnection($this->_cPtr);
	}

	function VerifyPopConnectionAsync() {
		$r=CkMailMan_VerifyPopConnectionAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function VerifyPopLogin() {
		return CkMailMan_VerifyPopLogin($this->_cPtr);
	}

	function VerifyPopLoginAsync() {
		$r=CkMailMan_VerifyPopLoginAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function VerifyRecips($email,$badAddrs) {
		return CkMailMan_VerifyRecips($this->_cPtr,$email,$badAddrs);
	}

	function VerifyRecipsAsync($email,$badAddrs) {
		$r=CkMailMan_VerifyRecipsAsync($this->_cPtr,$email,$badAddrs);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function VerifySmtpConnection() {
		return CkMailMan_VerifySmtpConnection($this->_cPtr);
	}

	function VerifySmtpConnectionAsync() {
		$r=CkMailMan_VerifySmtpConnectionAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function VerifySmtpLogin() {
		return CkMailMan_VerifySmtpLogin($this->_cPtr);
	}

	function VerifySmtpLoginAsync() {
		$r=CkMailMan_VerifySmtpLoginAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}
}


?>