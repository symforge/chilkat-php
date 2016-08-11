<?php
class CkRest {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkRest') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkRest();
	}

	function get_Utf8() {
		return CkRest_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkRest_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkRest_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_LastErrorHtml($str) {
		CkRest_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkRest_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkRest_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkRest_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkRest_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkRest_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkRest_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkRest_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkRest_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkRest_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkRest_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkRest_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkRest_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkRest_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkRest_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkRest_SaveLastError($this->_cPtr,$path);
	}

	function get_Authorization($str) {
		CkRest_get_Authorization($this->_cPtr,$str);
	}

	function authorization() {
		return CkRest_authorization($this->_cPtr);
	}

	function put_Authorization($newVal) {
		CkRest_put_Authorization($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkRest_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkRest_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_Host($str) {
		CkRest_get_Host($this->_cPtr,$str);
	}

	function host() {
		return CkRest_host($this->_cPtr);
	}

	function put_Host($newVal) {
		CkRest_put_Host($this->_cPtr,$newVal);
	}

	function get_IdleTimeoutMs() {
		return CkRest_get_IdleTimeoutMs($this->_cPtr);
	}

	function put_IdleTimeoutMs($newVal) {
		CkRest_put_IdleTimeoutMs($this->_cPtr,$newVal);
	}

	function get_LastRequestHeader($str) {
		CkRest_get_LastRequestHeader($this->_cPtr,$str);
	}

	function lastRequestHeader() {
		return CkRest_lastRequestHeader($this->_cPtr);
	}

	function get_LastRequestStartLine($str) {
		CkRest_get_LastRequestStartLine($this->_cPtr,$str);
	}

	function lastRequestStartLine() {
		return CkRest_lastRequestStartLine($this->_cPtr);
	}

	function get_NumResponseHeaders() {
		return CkRest_get_NumResponseHeaders($this->_cPtr);
	}

	function get_PartSelector($str) {
		CkRest_get_PartSelector($this->_cPtr,$str);
	}

	function partSelector() {
		return CkRest_partSelector($this->_cPtr);
	}

	function put_PartSelector($newVal) {
		CkRest_put_PartSelector($this->_cPtr,$newVal);
	}

	function get_ResponseHeader($str) {
		CkRest_get_ResponseHeader($this->_cPtr,$str);
	}

	function responseHeader() {
		return CkRest_responseHeader($this->_cPtr);
	}

	function get_ResponseStatusCode() {
		return CkRest_get_ResponseStatusCode($this->_cPtr);
	}

	function get_ResponseStatusText($str) {
		CkRest_get_ResponseStatusText($this->_cPtr,$str);
	}

	function responseStatusText() {
		return CkRest_responseStatusText($this->_cPtr);
	}

	function get_StreamNonChunked() {
		return CkRest_get_StreamNonChunked($this->_cPtr);
	}

	function put_StreamNonChunked($newVal) {
		CkRest_put_StreamNonChunked($this->_cPtr,$newVal);
	}

	function get_ConnectFailReason() {
		return CkRest_get_ConnectFailReason($this->_cPtr);
	}

	function get_PercentDoneOnSend() {
		return CkRest_get_PercentDoneOnSend($this->_cPtr);
	}

	function put_PercentDoneOnSend($newVal) {
		CkRest_put_PercentDoneOnSend($this->_cPtr,$newVal);
	}

	function AddHeader($name,$value) {
		return CkRest_AddHeader($this->_cPtr,$name,$value);
	}

	function AddQueryParam($name,$value) {
		return CkRest_AddQueryParam($this->_cPtr,$name,$value);
	}

	function AddQueryParams($queryString) {
		return CkRest_AddQueryParams($this->_cPtr,$queryString);
	}

	function ClearAllHeaders() {
		return CkRest_ClearAllHeaders($this->_cPtr);
	}

	function ClearAllQueryParams() {
		return CkRest_ClearAllQueryParams($this->_cPtr);
	}

	function ClearResponseBodyStream() {
		CkRest_ClearResponseBodyStream($this->_cPtr);
	}

	function Connect($hostname,$port,$tls,$autoReconnect) {
		return CkRest_Connect($this->_cPtr,$hostname,$port,$tls,$autoReconnect);
	}

	function ConnectAsync($hostname,$port,$tls,$autoReconnect) {
		$r=CkRest_ConnectAsync($this->_cPtr,$hostname,$port,$tls,$autoReconnect);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function Disconnect($maxWaitMs) {
		return CkRest_Disconnect($this->_cPtr,$maxWaitMs);
	}

	function DisconnectAsync($maxWaitMs) {
		$r=CkRest_DisconnectAsync($this->_cPtr,$maxWaitMs);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function fullRequestBinary($httpVerb,$uriPath,$bodyBytes) {
		return CkRest_fullRequestBinary($this->_cPtr,$httpVerb,$uriPath,$bodyBytes);
	}

	function FullRequestBinaryAsync($httpVerb,$uriPath,$bodyBytes) {
		$r=CkRest_FullRequestBinaryAsync($this->_cPtr,$httpVerb,$uriPath,$bodyBytes);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function fullRequestFormUrlEncoded($httpVerb,$uriPath) {
		return CkRest_fullRequestFormUrlEncoded($this->_cPtr,$httpVerb,$uriPath);
	}

	function FullRequestFormUrlEncodedAsync($httpVerb,$uriPath) {
		$r=CkRest_FullRequestFormUrlEncodedAsync($this->_cPtr,$httpVerb,$uriPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function fullRequestMultipart($httpVerb,$uriPath) {
		return CkRest_fullRequestMultipart($this->_cPtr,$httpVerb,$uriPath);
	}

	function FullRequestMultipartAsync($httpVerb,$uriPath) {
		$r=CkRest_FullRequestMultipartAsync($this->_cPtr,$httpVerb,$uriPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function fullRequestNoBody($httpVerb,$uriPath) {
		return CkRest_fullRequestNoBody($this->_cPtr,$httpVerb,$uriPath);
	}

	function FullRequestNoBodyAsync($httpVerb,$uriPath) {
		$r=CkRest_FullRequestNoBodyAsync($this->_cPtr,$httpVerb,$uriPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function fullRequestStream($httpVerb,$uriPath,$stream) {
		return CkRest_fullRequestStream($this->_cPtr,$httpVerb,$uriPath,$stream);
	}

	function FullRequestStreamAsync($httpVerb,$uriPath,$stream) {
		$r=CkRest_FullRequestStreamAsync($this->_cPtr,$httpVerb,$uriPath,$stream);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function fullRequestString($httpVerb,$uriPath,$bodyText) {
		return CkRest_fullRequestString($this->_cPtr,$httpVerb,$uriPath,$bodyText);
	}

	function FullRequestStringAsync($httpVerb,$uriPath,$bodyText) {
		$r=CkRest_FullRequestStringAsync($this->_cPtr,$httpVerb,$uriPath,$bodyText);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ReadRespBodyBinary($outBytes) {
		return CkRest_ReadRespBodyBinary($this->_cPtr,$outBytes);
	}

	function ReadRespBodyBinaryAsync() {
		$r=CkRest_ReadRespBodyBinaryAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ReadRespBodyStream($stream,$autoSetStreamCharset) {
		return CkRest_ReadRespBodyStream($this->_cPtr,$stream,$autoSetStreamCharset);
	}

	function ReadRespBodyStreamAsync($stream,$autoSetStreamCharset) {
		$r=CkRest_ReadRespBodyStreamAsync($this->_cPtr,$stream,$autoSetStreamCharset);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function readRespBodyString() {
		return CkRest_readRespBodyString($this->_cPtr);
	}

	function ReadRespBodyStringAsync() {
		$r=CkRest_ReadRespBodyStringAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ReadResponseHeader() {
		return CkRest_ReadResponseHeader($this->_cPtr);
	}

	function ReadResponseHeaderAsync() {
		$r=CkRest_ReadResponseHeaderAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RedirectUrl() {
		$r=CkRest_RedirectUrl($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkUrl($r);
		}
		return $r;
	}

	function RemoveHeader($name) {
		return CkRest_RemoveHeader($this->_cPtr,$name);
	}

	function RemoveQueryParam($name) {
		return CkRest_RemoveQueryParam($this->_cPtr,$name);
	}

	function responseHdrByName($name) {
		return CkRest_responseHdrByName($this->_cPtr,$name);
	}

	function responseHdrName($index) {
		return CkRest_responseHdrName($this->_cPtr,$index);
	}

	function responseHdrValue($index) {
		return CkRest_responseHdrValue($this->_cPtr,$index);
	}

	function SendReqBinaryBody($httpVerb,$uriPath,$body) {
		return CkRest_SendReqBinaryBody($this->_cPtr,$httpVerb,$uriPath,$body);
	}

	function SendReqBinaryBodyAsync($httpVerb,$uriPath,$body) {
		$r=CkRest_SendReqBinaryBodyAsync($this->_cPtr,$httpVerb,$uriPath,$body);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqFormUrlEncoded($httpVerb,$uriPath) {
		return CkRest_SendReqFormUrlEncoded($this->_cPtr,$httpVerb,$uriPath);
	}

	function SendReqFormUrlEncodedAsync($httpVerb,$uriPath) {
		$r=CkRest_SendReqFormUrlEncodedAsync($this->_cPtr,$httpVerb,$uriPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqMultipart($httpVerb,$uriPath) {
		return CkRest_SendReqMultipart($this->_cPtr,$httpVerb,$uriPath);
	}

	function SendReqMultipartAsync($httpVerb,$uriPath) {
		$r=CkRest_SendReqMultipartAsync($this->_cPtr,$httpVerb,$uriPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqNoBody($httpVerb,$uriPath) {
		return CkRest_SendReqNoBody($this->_cPtr,$httpVerb,$uriPath);
	}

	function SendReqNoBodyAsync($httpVerb,$uriPath) {
		$r=CkRest_SendReqNoBodyAsync($this->_cPtr,$httpVerb,$uriPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqStreamBody($httpVerb,$uriPath,$stream) {
		return CkRest_SendReqStreamBody($this->_cPtr,$httpVerb,$uriPath,$stream);
	}

	function SendReqStreamBodyAsync($httpVerb,$uriPath,$stream) {
		$r=CkRest_SendReqStreamBodyAsync($this->_cPtr,$httpVerb,$uriPath,$stream);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SendReqStringBody($httpVerb,$uriPath,$bodyText) {
		return CkRest_SendReqStringBody($this->_cPtr,$httpVerb,$uriPath,$bodyText);
	}

	function SendReqStringBodyAsync($httpVerb,$uriPath,$bodyText) {
		$r=CkRest_SendReqStringBodyAsync($this->_cPtr,$httpVerb,$uriPath,$bodyText);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SetAuthAws($authProvider) {
		return CkRest_SetAuthAws($this->_cPtr,$authProvider);
	}

	function SetAuthAzureAD($authProvider) {
		return CkRest_SetAuthAzureAD($this->_cPtr,$authProvider);
	}

	function SetAuthAzureStorage($authProvider) {
		return CkRest_SetAuthAzureStorage($this->_cPtr,$authProvider);
	}

	function SetAuthBasic($username,$password) {
		return CkRest_SetAuthBasic($this->_cPtr,$username,$password);
	}

	function SetAuthGoogle($authProvider) {
		return CkRest_SetAuthGoogle($this->_cPtr,$authProvider);
	}

	function SetAuthOAuth1($authProvider,$useQueryParams) {
		return CkRest_SetAuthOAuth1($this->_cPtr,$authProvider,$useQueryParams);
	}

	function SetMultipartBodyBinary($bodyData) {
		return CkRest_SetMultipartBodyBinary($this->_cPtr,$bodyData);
	}

	function SetMultipartBodyStream($stream) {
		return CkRest_SetMultipartBodyStream($this->_cPtr,$stream);
	}

	function SetMultipartBodyString($bodyText) {
		return CkRest_SetMultipartBodyString($this->_cPtr,$bodyText);
	}

	function SetResponseBodyStream($expectedStatus,$autoSetStreamCharset,$responseStream) {
		return CkRest_SetResponseBodyStream($this->_cPtr,$expectedStatus,$autoSetStreamCharset,$responseStream);
	}

	function UseConnection($connection,$autoReconnect) {
		return CkRest_UseConnection($this->_cPtr,$connection,$autoReconnect);
	}
}


?>