<?php
class CkRsa {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkRsa') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkRsa();
	}

	function get_Utf8() {
		return CkRsa_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkRsa_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkRsa_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkRsa_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkRsa_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkRsa_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkRsa_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkRsa_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkRsa_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkRsa_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkRsa_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkRsa_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkRsa_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkRsa_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkRsa_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkRsa_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkRsa_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkRsa_SaveLastError($this->_cPtr,$path);
	}

	function get_Charset($str) {
		CkRsa_get_Charset($this->_cPtr,$str);
	}

	function charset() {
		return CkRsa_charset($this->_cPtr);
	}

	function put_Charset($newVal) {
		CkRsa_put_Charset($this->_cPtr,$newVal);
	}

	function get_EncodingMode($str) {
		CkRsa_get_EncodingMode($this->_cPtr,$str);
	}

	function encodingMode() {
		return CkRsa_encodingMode($this->_cPtr);
	}

	function put_EncodingMode($newVal) {
		CkRsa_put_EncodingMode($this->_cPtr,$newVal);
	}

	function get_LittleEndian() {
		return CkRsa_get_LittleEndian($this->_cPtr);
	}

	function put_LittleEndian($newVal) {
		CkRsa_put_LittleEndian($this->_cPtr,$newVal);
	}

	function get_NoUnpad() {
		return CkRsa_get_NoUnpad($this->_cPtr);
	}

	function put_NoUnpad($newVal) {
		CkRsa_put_NoUnpad($this->_cPtr,$newVal);
	}

	function get_NumBits() {
		return CkRsa_get_NumBits($this->_cPtr);
	}

	function get_OaepHash($str) {
		CkRsa_get_OaepHash($this->_cPtr,$str);
	}

	function oaepHash() {
		return CkRsa_oaepHash($this->_cPtr);
	}

	function put_OaepHash($newVal) {
		CkRsa_put_OaepHash($this->_cPtr,$newVal);
	}

	function get_OaepPadding() {
		return CkRsa_get_OaepPadding($this->_cPtr);
	}

	function put_OaepPadding($newVal) {
		CkRsa_put_OaepPadding($this->_cPtr,$newVal);
	}

	function DecryptBytes($data,$bUsePrivateKey,$outData) {
		return CkRsa_DecryptBytes($this->_cPtr,$data,$bUsePrivateKey,$outData);
	}

	function DecryptBytesENC($str,$bUsePrivateKey,$outData) {
		return CkRsa_DecryptBytesENC($this->_cPtr,$str,$bUsePrivateKey,$outData);
	}

	function decryptString($data,$bUsePrivateKey) {
		return CkRsa_decryptString($this->_cPtr,$data,$bUsePrivateKey);
	}

	function decryptStringENC($str,$bUsePrivateKey) {
		return CkRsa_decryptStringENC($this->_cPtr,$str,$bUsePrivateKey);
	}

	function EncryptBytes($data,$bUsePrivateKey,$outData) {
		return CkRsa_EncryptBytes($this->_cPtr,$data,$bUsePrivateKey,$outData);
	}

	function encryptBytesENC($data,$bUsePrivateKey) {
		return CkRsa_encryptBytesENC($this->_cPtr,$data,$bUsePrivateKey);
	}

	function EncryptString($str,$bUsePrivateKey,$outData) {
		return CkRsa_EncryptString($this->_cPtr,$str,$bUsePrivateKey,$outData);
	}

	function encryptStringENC($str,$bUsePrivateKey) {
		return CkRsa_encryptStringENC($this->_cPtr,$str,$bUsePrivateKey);
	}

	function exportPrivateKey() {
		return CkRsa_exportPrivateKey($this->_cPtr);
	}

	function ExportPrivateKeyObj() {
		$r=CkRsa_ExportPrivateKeyObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPrivateKey($r);
		}
		return $r;
	}

	function exportPublicKey() {
		return CkRsa_exportPublicKey($this->_cPtr);
	}

	function ExportPublicKeyObj() {
		$r=CkRsa_ExportPublicKeyObj($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPublicKey($r);
		}
		return $r;
	}

	function GenerateKey($numBits) {
		return CkRsa_GenerateKey($this->_cPtr,$numBits);
	}

	function ImportPrivateKey($xml) {
		return CkRsa_ImportPrivateKey($this->_cPtr,$xml);
	}

	function ImportPrivateKeyObj($key) {
		return CkRsa_ImportPrivateKeyObj($this->_cPtr,$key);
	}

	function ImportPublicKey($xml) {
		return CkRsa_ImportPublicKey($this->_cPtr,$xml);
	}

	function ImportPublicKeyObj($key) {
		return CkRsa_ImportPublicKeyObj($this->_cPtr,$key);
	}

	function OpenSslSignBytes($data,$outBytes) {
		return CkRsa_OpenSslSignBytes($this->_cPtr,$data,$outBytes);
	}

	function openSslSignBytesENC($data) {
		return CkRsa_openSslSignBytesENC($this->_cPtr,$data);
	}

	function OpenSslSignString($str,$outBytes) {
		return CkRsa_OpenSslSignString($this->_cPtr,$str,$outBytes);
	}

	function openSslSignStringENC($str) {
		return CkRsa_openSslSignStringENC($this->_cPtr,$str);
	}

	function OpenSslVerifyBytes($signature,$outBytes) {
		return CkRsa_OpenSslVerifyBytes($this->_cPtr,$signature,$outBytes);
	}

	function OpenSslVerifyBytesENC($str,$outBytes) {
		return CkRsa_OpenSslVerifyBytesENC($this->_cPtr,$str,$outBytes);
	}

	function openSslVerifyString($data) {
		return CkRsa_openSslVerifyString($this->_cPtr,$data);
	}

	function openSslVerifyStringENC($str) {
		return CkRsa_openSslVerifyStringENC($this->_cPtr,$str);
	}

	function SignBytes($data,$hashAlg,$outData) {
		return CkRsa_SignBytes($this->_cPtr,$data,$hashAlg,$outData);
	}

	function signBytesENC($data,$hashAlg) {
		return CkRsa_signBytesENC($this->_cPtr,$data,$hashAlg);
	}

	function SignHash($hashBytes,$hashAlg,$outBytes) {
		return CkRsa_SignHash($this->_cPtr,$hashBytes,$hashAlg,$outBytes);
	}

	function signHashENC($encodedHash,$hashAlg) {
		return CkRsa_signHashENC($this->_cPtr,$encodedHash,$hashAlg);
	}

	function SignString($str,$hashAlg,$outData) {
		return CkRsa_SignString($this->_cPtr,$str,$hashAlg,$outData);
	}

	function signStringENC($str,$hashAlg) {
		return CkRsa_signStringENC($this->_cPtr,$str,$hashAlg);
	}

	function snkToXml($filename) {
		return CkRsa_snkToXml($this->_cPtr,$filename);
	}

	function UnlockComponent($unlockCode) {
		return CkRsa_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function VerifyBytes($data,$hashAlg,$sig) {
		return CkRsa_VerifyBytes($this->_cPtr,$data,$hashAlg,$sig);
	}

	function VerifyBytesENC($data,$hashAlg,$encodedSig) {
		return CkRsa_VerifyBytesENC($this->_cPtr,$data,$hashAlg,$encodedSig);
	}

	function VerifyHash($hashBytes,$hashAlg,$sigBytes) {
		return CkRsa_VerifyHash($this->_cPtr,$hashBytes,$hashAlg,$sigBytes);
	}

	function VerifyHashENC($encodedHash,$hashAlg,$encodedSig) {
		return CkRsa_VerifyHashENC($this->_cPtr,$encodedHash,$hashAlg,$encodedSig);
	}

	function VerifyPrivateKey($xml) {
		return CkRsa_VerifyPrivateKey($this->_cPtr,$xml);
	}

	function VerifyString($str,$hashAlg,$sig) {
		return CkRsa_VerifyString($this->_cPtr,$str,$hashAlg,$sig);
	}

	function VerifyStringENC($str,$hashAlg,$sig) {
		return CkRsa_VerifyStringENC($this->_cPtr,$str,$hashAlg,$sig);
	}
}


?>