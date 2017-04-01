<?php
class CkDsa {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkDsa') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkDsa();
	}

	function get_Utf8() {
		return CkDsa_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkDsa_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkDsa_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkDsa_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkDsa_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_GroupSize() {
		return CkDsa_get_GroupSize($this->_cPtr);
	}

	function put_GroupSize($newVal) {
		CkDsa_put_GroupSize($this->_cPtr,$newVal);
	}

	function get_Hash($outBytes) {
		CkDsa_get_Hash($this->_cPtr,$outBytes);
	}

	function put_Hash($inBytes) {
		CkDsa_put_Hash($this->_cPtr,$inBytes);
	}

	function get_HexG($str) {
		CkDsa_get_HexG($this->_cPtr,$str);
	}

	function hexG() {
		return CkDsa_hexG($this->_cPtr);
	}

	function get_HexP($str) {
		CkDsa_get_HexP($this->_cPtr,$str);
	}

	function hexP() {
		return CkDsa_hexP($this->_cPtr);
	}

	function get_HexQ($str) {
		CkDsa_get_HexQ($this->_cPtr,$str);
	}

	function hexQ() {
		return CkDsa_hexQ($this->_cPtr);
	}

	function get_HexX($str) {
		CkDsa_get_HexX($this->_cPtr,$str);
	}

	function hexX() {
		return CkDsa_hexX($this->_cPtr);
	}

	function get_HexY($str) {
		CkDsa_get_HexY($this->_cPtr,$str);
	}

	function hexY() {
		return CkDsa_hexY($this->_cPtr);
	}

	function get_LastErrorHtml($str) {
		CkDsa_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkDsa_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkDsa_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkDsa_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkDsa_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkDsa_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkDsa_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkDsa_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Signature($outBytes) {
		CkDsa_get_Signature($this->_cPtr,$outBytes);
	}

	function put_Signature($inBytes) {
		CkDsa_put_Signature($this->_cPtr,$inBytes);
	}

	function get_VerboseLogging() {
		return CkDsa_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkDsa_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkDsa_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkDsa_version($this->_cPtr);
	}

	function FromDer($derData) {
		return CkDsa_FromDer($this->_cPtr,$derData);
	}

	function FromDerFile($path) {
		return CkDsa_FromDerFile($this->_cPtr,$path);
	}

	function FromEncryptedPem($password,$pemData) {
		return CkDsa_FromEncryptedPem($this->_cPtr,$password,$pemData);
	}

	function FromPem($pemData) {
		return CkDsa_FromPem($this->_cPtr,$pemData);
	}

	function FromPublicDer($derData) {
		return CkDsa_FromPublicDer($this->_cPtr,$derData);
	}

	function FromPublicDerFile($path) {
		return CkDsa_FromPublicDerFile($this->_cPtr,$path);
	}

	function FromPublicPem($pemData) {
		return CkDsa_FromPublicPem($this->_cPtr,$pemData);
	}

	function FromXml($xmlKey) {
		return CkDsa_FromXml($this->_cPtr,$xmlKey);
	}

	function GenKey($numBits) {
		return CkDsa_GenKey($this->_cPtr,$numBits);
	}

	function GenKeyFromParamsDer($derBytes) {
		return CkDsa_GenKeyFromParamsDer($this->_cPtr,$derBytes);
	}

	function GenKeyFromParamsDerFile($path) {
		return CkDsa_GenKeyFromParamsDerFile($this->_cPtr,$path);
	}

	function GenKeyFromParamsPem($pem) {
		return CkDsa_GenKeyFromParamsPem($this->_cPtr,$pem);
	}

	function GenKeyFromParamsPemFile($path) {
		return CkDsa_GenKeyFromParamsPemFile($this->_cPtr,$path);
	}

	function getEncodedHash($encoding) {
		return CkDsa_getEncodedHash($this->_cPtr,$encoding);
	}

	function encodedHash($encoding) {
		return CkDsa_encodedHash($this->_cPtr,$encoding);
	}

	function getEncodedSignature($encoding) {
		return CkDsa_getEncodedSignature($this->_cPtr,$encoding);
	}

	function encodedSignature($encoding) {
		return CkDsa_encodedSignature($this->_cPtr,$encoding);
	}

	function loadText($path) {
		return CkDsa_loadText($this->_cPtr,$path);
	}

	function SaveLastError($path) {
		return CkDsa_SaveLastError($this->_cPtr,$path);
	}

	function SaveText($strToSave,$path) {
		return CkDsa_SaveText($this->_cPtr,$strToSave,$path);
	}

	function SetEncodedHash($encoding,$encodedHash) {
		return CkDsa_SetEncodedHash($this->_cPtr,$encoding,$encodedHash);
	}

	function SetEncodedSignature($encoding,$encodedSig) {
		return CkDsa_SetEncodedSignature($this->_cPtr,$encoding,$encodedSig);
	}

	function SetEncodedSignatureRS($encoding,$encodedR,$encodedS) {
		return CkDsa_SetEncodedSignatureRS($this->_cPtr,$encoding,$encodedR,$encodedS);
	}

	function SetKeyExplicit($groupSizeInBytes,$pHex,$qHex,$gHex,$xHex) {
		return CkDsa_SetKeyExplicit($this->_cPtr,$groupSizeInBytes,$pHex,$qHex,$gHex,$xHex);
	}

	function SetPubKeyExplicit($groupSizeInBytes,$pHex,$qHex,$gHex,$yHex) {
		return CkDsa_SetPubKeyExplicit($this->_cPtr,$groupSizeInBytes,$pHex,$qHex,$gHex,$yHex);
	}

	function SignHash() {
		return CkDsa_SignHash($this->_cPtr);
	}

	function ToDer($outBytes) {
		return CkDsa_ToDer($this->_cPtr,$outBytes);
	}

	function ToDerFile($path) {
		return CkDsa_ToDerFile($this->_cPtr,$path);
	}

	function toEncryptedPem($password) {
		return CkDsa_toEncryptedPem($this->_cPtr,$password);
	}

	function toPem() {
		return CkDsa_toPem($this->_cPtr);
	}

	function ToPublicDer($outBytes) {
		return CkDsa_ToPublicDer($this->_cPtr,$outBytes);
	}

	function ToPublicDerFile($path) {
		return CkDsa_ToPublicDerFile($this->_cPtr,$path);
	}

	function toPublicPem() {
		return CkDsa_toPublicPem($this->_cPtr);
	}

	function toXml($bPublicOnly) {
		return CkDsa_toXml($this->_cPtr,$bPublicOnly);
	}

	function UnlockComponent($unlockCode) {
		return CkDsa_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function Verify() {
		return CkDsa_Verify($this->_cPtr);
	}

	function VerifyKey() {
		return CkDsa_VerifyKey($this->_cPtr);
	}
}


?>