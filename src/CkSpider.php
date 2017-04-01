<?php
class CkSpider {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkSpider') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkSpider();
	}

	function get_Utf8() {
		return CkSpider_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkSpider_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkSpider_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AbortCurrent() {
		return CkSpider_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkSpider_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_AvoidHttps() {
		return CkSpider_get_AvoidHttps($this->_cPtr);
	}

	function put_AvoidHttps($newVal) {
		CkSpider_put_AvoidHttps($this->_cPtr,$newVal);
	}

	function get_CacheDir($str) {
		CkSpider_get_CacheDir($this->_cPtr,$str);
	}

	function cacheDir() {
		return CkSpider_cacheDir($this->_cPtr);
	}

	function put_CacheDir($newVal) {
		CkSpider_put_CacheDir($this->_cPtr,$newVal);
	}

	function get_ChopAtQuery() {
		return CkSpider_get_ChopAtQuery($this->_cPtr);
	}

	function put_ChopAtQuery($newVal) {
		CkSpider_put_ChopAtQuery($this->_cPtr,$newVal);
	}

	function get_ConnectTimeout() {
		return CkSpider_get_ConnectTimeout($this->_cPtr);
	}

	function put_ConnectTimeout($newVal) {
		CkSpider_put_ConnectTimeout($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkSpider_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkSpider_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkSpider_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_Domain($str) {
		CkSpider_get_Domain($this->_cPtr,$str);
	}

	function domain() {
		return CkSpider_domain($this->_cPtr);
	}

	function get_FetchFromCache() {
		return CkSpider_get_FetchFromCache($this->_cPtr);
	}

	function put_FetchFromCache($newVal) {
		CkSpider_put_FetchFromCache($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkSpider_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkSpider_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkSpider_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkSpider_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkSpider_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkSpider_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkSpider_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkSpider_lastErrorXml($this->_cPtr);
	}

	function get_LastFromCache() {
		return CkSpider_get_LastFromCache($this->_cPtr);
	}

	function get_LastHtml($str) {
		CkSpider_get_LastHtml($this->_cPtr,$str);
	}

	function lastHtml() {
		return CkSpider_lastHtml($this->_cPtr);
	}

	function get_LastHtmlDescription($str) {
		CkSpider_get_LastHtmlDescription($this->_cPtr,$str);
	}

	function lastHtmlDescription() {
		return CkSpider_lastHtmlDescription($this->_cPtr);
	}

	function get_LastHtmlKeywords($str) {
		CkSpider_get_LastHtmlKeywords($this->_cPtr,$str);
	}

	function lastHtmlKeywords() {
		return CkSpider_lastHtmlKeywords($this->_cPtr);
	}

	function get_LastHtmlTitle($str) {
		CkSpider_get_LastHtmlTitle($this->_cPtr,$str);
	}

	function lastHtmlTitle() {
		return CkSpider_lastHtmlTitle($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkSpider_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkSpider_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_LastModDate($outSysTime) {
		CkSpider_get_LastModDate($this->_cPtr,$outSysTime);
	}

	function get_LastModDateStr($str) {
		CkSpider_get_LastModDateStr($this->_cPtr,$str);
	}

	function lastModDateStr() {
		return CkSpider_lastModDateStr($this->_cPtr);
	}

	function get_LastUrl($str) {
		CkSpider_get_LastUrl($this->_cPtr,$str);
	}

	function lastUrl() {
		return CkSpider_lastUrl($this->_cPtr);
	}

	function get_MaxResponseSize() {
		return CkSpider_get_MaxResponseSize($this->_cPtr);
	}

	function put_MaxResponseSize($newVal) {
		CkSpider_put_MaxResponseSize($this->_cPtr,$newVal);
	}

	function get_MaxUrlLen() {
		return CkSpider_get_MaxUrlLen($this->_cPtr);
	}

	function put_MaxUrlLen($newVal) {
		CkSpider_put_MaxUrlLen($this->_cPtr,$newVal);
	}

	function get_NumAvoidPatterns() {
		return CkSpider_get_NumAvoidPatterns($this->_cPtr);
	}

	function get_NumFailed() {
		return CkSpider_get_NumFailed($this->_cPtr);
	}

	function get_NumOutboundLinks() {
		return CkSpider_get_NumOutboundLinks($this->_cPtr);
	}

	function get_NumSpidered() {
		return CkSpider_get_NumSpidered($this->_cPtr);
	}

	function get_NumUnspidered() {
		return CkSpider_get_NumUnspidered($this->_cPtr);
	}

	function get_PreferIpv6() {
		return CkSpider_get_PreferIpv6($this->_cPtr);
	}

	function put_PreferIpv6($newVal) {
		CkSpider_put_PreferIpv6($this->_cPtr,$newVal);
	}

	function get_ProxyDomain($str) {
		CkSpider_get_ProxyDomain($this->_cPtr,$str);
	}

	function proxyDomain() {
		return CkSpider_proxyDomain($this->_cPtr);
	}

	function put_ProxyDomain($newVal) {
		CkSpider_put_ProxyDomain($this->_cPtr,$newVal);
	}

	function get_ProxyLogin($str) {
		CkSpider_get_ProxyLogin($this->_cPtr,$str);
	}

	function proxyLogin() {
		return CkSpider_proxyLogin($this->_cPtr);
	}

	function put_ProxyLogin($newVal) {
		CkSpider_put_ProxyLogin($this->_cPtr,$newVal);
	}

	function get_ProxyPassword($str) {
		CkSpider_get_ProxyPassword($this->_cPtr,$str);
	}

	function proxyPassword() {
		return CkSpider_proxyPassword($this->_cPtr);
	}

	function put_ProxyPassword($newVal) {
		CkSpider_put_ProxyPassword($this->_cPtr,$newVal);
	}

	function get_ProxyPort() {
		return CkSpider_get_ProxyPort($this->_cPtr);
	}

	function put_ProxyPort($newVal) {
		CkSpider_put_ProxyPort($this->_cPtr,$newVal);
	}

	function get_ReadTimeout() {
		return CkSpider_get_ReadTimeout($this->_cPtr);
	}

	function put_ReadTimeout($newVal) {
		CkSpider_put_ReadTimeout($this->_cPtr,$newVal);
	}

	function get_UpdateCache() {
		return CkSpider_get_UpdateCache($this->_cPtr);
	}

	function put_UpdateCache($newVal) {
		CkSpider_put_UpdateCache($this->_cPtr,$newVal);
	}

	function get_UserAgent($str) {
		CkSpider_get_UserAgent($this->_cPtr,$str);
	}

	function userAgent() {
		return CkSpider_userAgent($this->_cPtr);
	}

	function put_UserAgent($newVal) {
		CkSpider_put_UserAgent($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkSpider_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkSpider_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkSpider_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkSpider_version($this->_cPtr);
	}

	function get_WindDownCount() {
		return CkSpider_get_WindDownCount($this->_cPtr);
	}

	function put_WindDownCount($newVal) {
		CkSpider_put_WindDownCount($this->_cPtr,$newVal);
	}

	function AddAvoidOutboundLinkPattern($pattern) {
		CkSpider_AddAvoidOutboundLinkPattern($this->_cPtr,$pattern);
	}

	function AddAvoidPattern($pattern) {
		CkSpider_AddAvoidPattern($this->_cPtr,$pattern);
	}

	function AddMustMatchPattern($pattern) {
		CkSpider_AddMustMatchPattern($this->_cPtr,$pattern);
	}

	function AddUnspidered($url) {
		CkSpider_AddUnspidered($this->_cPtr,$url);
	}

	function canonicalizeUrl($url) {
		return CkSpider_canonicalizeUrl($this->_cPtr,$url);
	}

	function ClearFailedUrls() {
		CkSpider_ClearFailedUrls($this->_cPtr);
	}

	function ClearOutboundLinks() {
		CkSpider_ClearOutboundLinks($this->_cPtr);
	}

	function ClearSpideredUrls() {
		CkSpider_ClearSpideredUrls($this->_cPtr);
	}

	function CrawlNext() {
		return CkSpider_CrawlNext($this->_cPtr);
	}

	function CrawlNextAsync() {
		$r=CkSpider_CrawlNextAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function fetchRobotsText() {
		return CkSpider_fetchRobotsText($this->_cPtr);
	}

	function FetchRobotsTextAsync() {
		$r=CkSpider_FetchRobotsTextAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function getAvoidPattern($index) {
		return CkSpider_getAvoidPattern($this->_cPtr,$index);
	}

	function avoidPattern($index) {
		return CkSpider_avoidPattern($this->_cPtr,$index);
	}

	function getBaseDomain($domain) {
		return CkSpider_getBaseDomain($this->_cPtr,$domain);
	}

	function baseDomain($domain) {
		return CkSpider_baseDomain($this->_cPtr,$domain);
	}

	function getFailedUrl($index) {
		return CkSpider_getFailedUrl($this->_cPtr,$index);
	}

	function failedUrl($index) {
		return CkSpider_failedUrl($this->_cPtr,$index);
	}

	function getOutboundLink($index) {
		return CkSpider_getOutboundLink($this->_cPtr,$index);
	}

	function outboundLink($index) {
		return CkSpider_outboundLink($this->_cPtr,$index);
	}

	function getSpideredUrl($index) {
		return CkSpider_getSpideredUrl($this->_cPtr,$index);
	}

	function spideredUrl($index) {
		return CkSpider_spideredUrl($this->_cPtr,$index);
	}

	function getUnspideredUrl($index) {
		return CkSpider_getUnspideredUrl($this->_cPtr,$index);
	}

	function unspideredUrl($index) {
		return CkSpider_unspideredUrl($this->_cPtr,$index);
	}

	function getUrlDomain($url) {
		return CkSpider_getUrlDomain($this->_cPtr,$url);
	}

	function urlDomain($url) {
		return CkSpider_urlDomain($this->_cPtr,$url);
	}

	function Initialize($domain) {
		CkSpider_Initialize($this->_cPtr,$domain);
	}

	function RecrawlLast() {
		return CkSpider_RecrawlLast($this->_cPtr);
	}

	function RecrawlLastAsync() {
		$r=CkSpider_RecrawlLastAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SaveLastError($path) {
		return CkSpider_SaveLastError($this->_cPtr,$path);
	}

	function SkipUnspidered($index) {
		CkSpider_SkipUnspidered($this->_cPtr,$index);
	}

	function SleepMs($numMilliseconds) {
		CkSpider_SleepMs($this->_cPtr,$numMilliseconds);
	}
}


?>