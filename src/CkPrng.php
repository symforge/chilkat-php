<?php
class CkPrng {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkPrng') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkPrng();
	}

	function get_Utf8() {
		return CkPrng_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkPrng_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkPrng_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkPrng_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkPrng_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkPrng_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkPrng_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkPrng_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkPrng_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkPrng_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkPrng_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkPrng_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkPrng_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_PrngName($str) {
		CkPrng_get_PrngName($this->_cPtr,$str);
	}

	function prngName() {
		return CkPrng_prngName($this->_cPtr);
	}

	function put_PrngName($newVal) {
		CkPrng_put_PrngName($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkPrng_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkPrng_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkPrng_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkPrng_version($this->_cPtr);
	}

	function AddEntropy($entropy,$encoding) {
		return CkPrng_AddEntropy($this->_cPtr,$entropy,$encoding);
	}

	function AddEntropyBytes($entropy) {
		return CkPrng_AddEntropyBytes($this->_cPtr,$entropy);
	}

	function exportEntropy() {
		return CkPrng_exportEntropy($this->_cPtr);
	}

	function firebasePushId() {
		return CkPrng_firebasePushId($this->_cPtr);
	}

	function genRandom($numBytes,$encoding) {
		return CkPrng_genRandom($this->_cPtr,$numBytes,$encoding);
	}

	function GenRandomBd($numBytes,$bd) {
		return CkPrng_GenRandomBd($this->_cPtr,$numBytes,$bd);
	}

	function GenRandomBytes($numBytes,$outBytes) {
		return CkPrng_GenRandomBytes($this->_cPtr,$numBytes,$outBytes);
	}

	function getEntropy($numBytes,$encoding) {
		return CkPrng_getEntropy($this->_cPtr,$numBytes,$encoding);
	}

	function entropy($numBytes,$encoding) {
		return CkPrng_entropy($this->_cPtr,$numBytes,$encoding);
	}

	function GetEntropyBytes($numBytes,$outBytes) {
		return CkPrng_GetEntropyBytes($this->_cPtr,$numBytes,$outBytes);
	}

	function ImportEntropy($entropy) {
		return CkPrng_ImportEntropy($this->_cPtr,$entropy);
	}

	function RandomInt($low,$high) {
		return CkPrng_RandomInt($this->_cPtr,$low,$high);
	}

	function randomPassword($length,$mustIncludeDigit,$upperAndLowercase,$mustHaveOneOf,$excludeChars) {
		return CkPrng_randomPassword($this->_cPtr,$length,$mustIncludeDigit,$upperAndLowercase,$mustHaveOneOf,$excludeChars);
	}

	function randomString($length,$bDigits,$bLower,$bUpper) {
		return CkPrng_randomString($this->_cPtr,$length,$bDigits,$bLower,$bUpper);
	}

	function SaveLastError($path) {
		return CkPrng_SaveLastError($this->_cPtr,$path);
	}
}


?>