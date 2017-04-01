<?php
class CkCrypt2 {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCrypt2') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCrypt2();
	}

	function get_Utf8() {
		return CkCrypt2_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCrypt2_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkCrypt2_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AbortCurrent() {
		return CkCrypt2_get_AbortCurrent($this->_cPtr);
	}

	function put_AbortCurrent($newVal) {
		CkCrypt2_put_AbortCurrent($this->_cPtr,$newVal);
	}

	function get_BCryptWorkFactor() {
		return CkCrypt2_get_BCryptWorkFactor($this->_cPtr);
	}

	function put_BCryptWorkFactor($newVal) {
		CkCrypt2_put_BCryptWorkFactor($this->_cPtr,$newVal);
	}

	function get_BlockSize() {
		return CkCrypt2_get_BlockSize($this->_cPtr);
	}

	function get_CadesEnabled() {
		return CkCrypt2_get_CadesEnabled($this->_cPtr);
	}

	function put_CadesEnabled($newVal) {
		CkCrypt2_put_CadesEnabled($this->_cPtr,$newVal);
	}

	function get_CadesSigPolicyHash($str) {
		CkCrypt2_get_CadesSigPolicyHash($this->_cPtr,$str);
	}

	function cadesSigPolicyHash() {
		return CkCrypt2_cadesSigPolicyHash($this->_cPtr);
	}

	function put_CadesSigPolicyHash($newVal) {
		CkCrypt2_put_CadesSigPolicyHash($this->_cPtr,$newVal);
	}

	function get_CadesSigPolicyId($str) {
		CkCrypt2_get_CadesSigPolicyId($this->_cPtr,$str);
	}

	function cadesSigPolicyId() {
		return CkCrypt2_cadesSigPolicyId($this->_cPtr);
	}

	function put_CadesSigPolicyId($newVal) {
		CkCrypt2_put_CadesSigPolicyId($this->_cPtr,$newVal);
	}

	function get_CadesSigPolicyUri($str) {
		CkCrypt2_get_CadesSigPolicyUri($this->_cPtr,$str);
	}

	function cadesSigPolicyUri() {
		return CkCrypt2_cadesSigPolicyUri($this->_cPtr);
	}

	function put_CadesSigPolicyUri($newVal) {
		CkCrypt2_put_CadesSigPolicyUri($this->_cPtr,$newVal);
	}

	function get_Charset($str) {
		CkCrypt2_get_Charset($this->_cPtr,$str);
	}

	function charset() {
		return CkCrypt2_charset($this->_cPtr);
	}

	function put_Charset($newVal) {
		CkCrypt2_put_Charset($this->_cPtr,$newVal);
	}

	function get_CipherMode($str) {
		CkCrypt2_get_CipherMode($this->_cPtr,$str);
	}

	function cipherMode() {
		return CkCrypt2_cipherMode($this->_cPtr);
	}

	function put_CipherMode($newVal) {
		CkCrypt2_put_CipherMode($this->_cPtr,$newVal);
	}

	function get_CompressionAlgorithm($str) {
		CkCrypt2_get_CompressionAlgorithm($this->_cPtr,$str);
	}

	function compressionAlgorithm() {
		return CkCrypt2_compressionAlgorithm($this->_cPtr);
	}

	function put_CompressionAlgorithm($newVal) {
		CkCrypt2_put_CompressionAlgorithm($this->_cPtr,$newVal);
	}

	function get_CryptAlgorithm($str) {
		CkCrypt2_get_CryptAlgorithm($this->_cPtr,$str);
	}

	function cryptAlgorithm() {
		return CkCrypt2_cryptAlgorithm($this->_cPtr);
	}

	function put_CryptAlgorithm($newVal) {
		CkCrypt2_put_CryptAlgorithm($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkCrypt2_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkCrypt2_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkCrypt2_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_EncodingMode($str) {
		CkCrypt2_get_EncodingMode($this->_cPtr,$str);
	}

	function encodingMode() {
		return CkCrypt2_encodingMode($this->_cPtr);
	}

	function put_EncodingMode($newVal) {
		CkCrypt2_put_EncodingMode($this->_cPtr,$newVal);
	}

	function get_FirstChunk() {
		return CkCrypt2_get_FirstChunk($this->_cPtr);
	}

	function put_FirstChunk($newVal) {
		CkCrypt2_put_FirstChunk($this->_cPtr,$newVal);
	}

	function get_HashAlgorithm($str) {
		CkCrypt2_get_HashAlgorithm($this->_cPtr,$str);
	}

	function hashAlgorithm() {
		return CkCrypt2_hashAlgorithm($this->_cPtr);
	}

	function put_HashAlgorithm($newVal) {
		CkCrypt2_put_HashAlgorithm($this->_cPtr,$newVal);
	}

	function get_HavalRounds() {
		return CkCrypt2_get_HavalRounds($this->_cPtr);
	}

	function put_HavalRounds($newVal) {
		CkCrypt2_put_HavalRounds($this->_cPtr,$newVal);
	}

	function get_HeartbeatMs() {
		return CkCrypt2_get_HeartbeatMs($this->_cPtr);
	}

	function put_HeartbeatMs($newVal) {
		CkCrypt2_put_HeartbeatMs($this->_cPtr,$newVal);
	}

	function get_IncludeCertChain() {
		return CkCrypt2_get_IncludeCertChain($this->_cPtr);
	}

	function put_IncludeCertChain($newVal) {
		CkCrypt2_put_IncludeCertChain($this->_cPtr,$newVal);
	}

	function get_InitialCount() {
		return CkCrypt2_get_InitialCount($this->_cPtr);
	}

	function put_InitialCount($newVal) {
		CkCrypt2_put_InitialCount($this->_cPtr,$newVal);
	}

	function get_IterationCount() {
		return CkCrypt2_get_IterationCount($this->_cPtr);
	}

	function put_IterationCount($newVal) {
		CkCrypt2_put_IterationCount($this->_cPtr,$newVal);
	}

	function get_IV($outBytes) {
		CkCrypt2_get_IV($this->_cPtr,$outBytes);
	}

	function put_IV($inBytes) {
		CkCrypt2_put_IV($this->_cPtr,$inBytes);
	}

	function get_KeyLength() {
		return CkCrypt2_get_KeyLength($this->_cPtr);
	}

	function put_KeyLength($newVal) {
		CkCrypt2_put_KeyLength($this->_cPtr,$newVal);
	}

	function get_LastChunk() {
		return CkCrypt2_get_LastChunk($this->_cPtr);
	}

	function put_LastChunk($newVal) {
		CkCrypt2_put_LastChunk($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkCrypt2_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkCrypt2_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkCrypt2_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkCrypt2_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkCrypt2_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkCrypt2_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkCrypt2_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkCrypt2_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_MacAlgorithm($str) {
		CkCrypt2_get_MacAlgorithm($this->_cPtr,$str);
	}

	function macAlgorithm() {
		return CkCrypt2_macAlgorithm($this->_cPtr);
	}

	function put_MacAlgorithm($newVal) {
		CkCrypt2_put_MacAlgorithm($this->_cPtr,$newVal);
	}

	function get_NumSignerCerts() {
		return CkCrypt2_get_NumSignerCerts($this->_cPtr);
	}

	function get_PaddingScheme() {
		return CkCrypt2_get_PaddingScheme($this->_cPtr);
	}

	function put_PaddingScheme($newVal) {
		CkCrypt2_put_PaddingScheme($this->_cPtr,$newVal);
	}

	function get_PbesAlgorithm($str) {
		CkCrypt2_get_PbesAlgorithm($this->_cPtr,$str);
	}

	function pbesAlgorithm() {
		return CkCrypt2_pbesAlgorithm($this->_cPtr);
	}

	function put_PbesAlgorithm($newVal) {
		CkCrypt2_put_PbesAlgorithm($this->_cPtr,$newVal);
	}

	function get_PbesPassword($str) {
		CkCrypt2_get_PbesPassword($this->_cPtr,$str);
	}

	function pbesPassword() {
		return CkCrypt2_pbesPassword($this->_cPtr);
	}

	function put_PbesPassword($newVal) {
		CkCrypt2_put_PbesPassword($this->_cPtr,$newVal);
	}

	function get_Pkcs7CryptAlg($str) {
		CkCrypt2_get_Pkcs7CryptAlg($this->_cPtr,$str);
	}

	function pkcs7CryptAlg() {
		return CkCrypt2_pkcs7CryptAlg($this->_cPtr);
	}

	function put_Pkcs7CryptAlg($newVal) {
		CkCrypt2_put_Pkcs7CryptAlg($this->_cPtr,$newVal);
	}

	function get_Rc2EffectiveKeyLength() {
		return CkCrypt2_get_Rc2EffectiveKeyLength($this->_cPtr);
	}

	function put_Rc2EffectiveKeyLength($newVal) {
		CkCrypt2_put_Rc2EffectiveKeyLength($this->_cPtr,$newVal);
	}

	function get_Salt($outBytes) {
		CkCrypt2_get_Salt($this->_cPtr,$outBytes);
	}

	function put_Salt($inBytes) {
		CkCrypt2_put_Salt($this->_cPtr,$inBytes);
	}

	function get_SecretKey($outBytes) {
		CkCrypt2_get_SecretKey($this->_cPtr,$outBytes);
	}

	function put_SecretKey($inBytes) {
		CkCrypt2_put_SecretKey($this->_cPtr,$inBytes);
	}

	function get_UuFilename($str) {
		CkCrypt2_get_UuFilename($this->_cPtr,$str);
	}

	function uuFilename() {
		return CkCrypt2_uuFilename($this->_cPtr);
	}

	function put_UuFilename($newVal) {
		CkCrypt2_put_UuFilename($this->_cPtr,$newVal);
	}

	function get_UuMode($str) {
		CkCrypt2_get_UuMode($this->_cPtr,$str);
	}

	function uuMode() {
		return CkCrypt2_uuMode($this->_cPtr);
	}

	function put_UuMode($newVal) {
		CkCrypt2_put_UuMode($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkCrypt2_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkCrypt2_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkCrypt2_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkCrypt2_version($this->_cPtr);
	}

	function AddEncryptCert($cert) {
		CkCrypt2_AddEncryptCert($this->_cPtr,$cert);
	}

	function AddPfxSourceData($pfxBytes,$pfxPassword) {
		return CkCrypt2_AddPfxSourceData($this->_cPtr,$pfxBytes,$pfxPassword);
	}

	function AddPfxSourceFile($pfxFilePath,$pfxPassword) {
		return CkCrypt2_AddPfxSourceFile($this->_cPtr,$pfxFilePath,$pfxPassword);
	}

	function aesKeyUnwrap($kek,$wrappedKeyData,$encoding) {
		return CkCrypt2_aesKeyUnwrap($this->_cPtr,$kek,$wrappedKeyData,$encoding);
	}

	function aesKeyWrap($kek,$keyData,$encoding) {
		return CkCrypt2_aesKeyWrap($this->_cPtr,$kek,$keyData,$encoding);
	}

	function bCryptHash($password) {
		return CkCrypt2_bCryptHash($this->_cPtr,$password);
	}

	function BCryptVerify($password,$bcryptHash) {
		return CkCrypt2_BCryptVerify($this->_cPtr,$password,$bcryptHash);
	}

	function bytesToString($inData,$charset) {
		return CkCrypt2_bytesToString($this->_cPtr,$inData,$charset);
	}

	function ByteSwap4321($data,$outBytes) {
		return CkCrypt2_ByteSwap4321($this->_cPtr,$data,$outBytes);
	}

	function CkDecryptFile($srcFile,$destFile) {
		return CkCrypt2_CkDecryptFile($this->_cPtr,$srcFile,$destFile);
	}

	function CkDecryptFileAsync($srcFile,$destFile) {
		$r=CkCrypt2_CkDecryptFileAsync($this->_cPtr,$srcFile,$destFile);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CkEncryptFile($srcFile,$destFile) {
		return CkCrypt2_CkEncryptFile($this->_cPtr,$srcFile,$destFile);
	}

	function CkEncryptFileAsync($srcFile,$destFile) {
		$r=CkCrypt2_CkEncryptFileAsync($this->_cPtr,$srcFile,$destFile);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function ClearEncryptCerts() {
		CkCrypt2_ClearEncryptCerts($this->_cPtr);
	}

	function CompressBytes($data,$outData) {
		return CkCrypt2_CompressBytes($this->_cPtr,$data,$outData);
	}

	function compressBytesENC($data) {
		return CkCrypt2_compressBytesENC($this->_cPtr,$data);
	}

	function CompressString($str,$outData) {
		return CkCrypt2_CompressString($this->_cPtr,$str,$outData);
	}

	function compressStringENC($str) {
		return CkCrypt2_compressStringENC($this->_cPtr,$str);
	}

	function CrcBytes($crcAlg,$byteData) {
		return CkCrypt2_CrcBytes($this->_cPtr,$crcAlg,$byteData);
	}

	function CrcFile($crcAlg,$path) {
		return CkCrypt2_CrcFile($this->_cPtr,$crcAlg,$path);
	}

	function CrcFileAsync($crcAlg,$path) {
		$r=CkCrypt2_CrcFileAsync($this->_cPtr,$crcAlg,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function CreateDetachedSignature($inFilePath,$sigFilePath) {
		return CkCrypt2_CreateDetachedSignature($this->_cPtr,$inFilePath,$sigFilePath);
	}

	function CreateP7M($inFilename,$p7mPath) {
		return CkCrypt2_CreateP7M($this->_cPtr,$inFilename,$p7mPath);
	}

	function CreateP7S($inFilename,$p7sPath) {
		return CkCrypt2_CreateP7S($this->_cPtr,$inFilename,$p7sPath);
	}

	function Decode($str,$encoding,$outData) {
		return CkCrypt2_Decode($this->_cPtr,$str,$encoding,$outData);
	}

	function decodeString($inStr,$charset,$encoding) {
		return CkCrypt2_decodeString($this->_cPtr,$inStr,$charset,$encoding);
	}

	function DecryptBytes($data,$outData) {
		return CkCrypt2_DecryptBytes($this->_cPtr,$data,$outData);
	}

	function DecryptBytesENC($str,$outData) {
		return CkCrypt2_DecryptBytesENC($this->_cPtr,$str,$outData);
	}

	function decryptEncoded($encodedEncryptedData) {
		return CkCrypt2_decryptEncoded($this->_cPtr,$encodedEncryptedData);
	}

	function DecryptStream($strm) {
		return CkCrypt2_DecryptStream($this->_cPtr,$strm);
	}

	function DecryptStreamAsync($strm) {
		$r=CkCrypt2_DecryptStreamAsync($this->_cPtr,$strm);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function decryptString($data) {
		return CkCrypt2_decryptString($this->_cPtr,$data);
	}

	function decryptStringENC($str) {
		return CkCrypt2_decryptStringENC($this->_cPtr,$str);
	}

	function encode($byteData,$encoding) {
		return CkCrypt2_encode($this->_cPtr,$byteData,$encoding);
	}

	function encodeString($strToEncode,$charsetName,$toEncodingName) {
		return CkCrypt2_encodeString($this->_cPtr,$strToEncode,$charsetName,$toEncodingName);
	}

	function EncryptBytes($data,$outData) {
		return CkCrypt2_EncryptBytes($this->_cPtr,$data,$outData);
	}

	function encryptBytesENC($data) {
		return CkCrypt2_encryptBytesENC($this->_cPtr,$data);
	}

	function encryptEncoded($str) {
		return CkCrypt2_encryptEncoded($this->_cPtr,$str);
	}

	function EncryptStream($strm) {
		return CkCrypt2_EncryptStream($this->_cPtr,$strm);
	}

	function EncryptStreamAsync($strm) {
		$r=CkCrypt2_EncryptStreamAsync($this->_cPtr,$strm);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function EncryptString($str,$outData) {
		return CkCrypt2_EncryptString($this->_cPtr,$str,$outData);
	}

	function encryptStringENC($str) {
		return CkCrypt2_encryptStringENC($this->_cPtr,$str);
	}

	function genEncodedSecretKey($password,$encoding) {
		return CkCrypt2_genEncodedSecretKey($this->_cPtr,$password,$encoding);
	}

	function GenerateSecretKey($password,$outData) {
		return CkCrypt2_GenerateSecretKey($this->_cPtr,$password,$outData);
	}

	function generateUuid() {
		return CkCrypt2_generateUuid($this->_cPtr);
	}

	function genRandomBytesENC($numBytes) {
		return CkCrypt2_genRandomBytesENC($this->_cPtr,$numBytes);
	}

	function GetDecryptCert() {
		$r=CkCrypt2_GetDecryptCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function getEncodedAad($encoding) {
		return CkCrypt2_getEncodedAad($this->_cPtr,$encoding);
	}

	function encodedAad($encoding) {
		return CkCrypt2_encodedAad($this->_cPtr,$encoding);
	}

	function getEncodedAuthTag($encoding) {
		return CkCrypt2_getEncodedAuthTag($this->_cPtr,$encoding);
	}

	function encodedAuthTag($encoding) {
		return CkCrypt2_encodedAuthTag($this->_cPtr,$encoding);
	}

	function getEncodedIV($encoding) {
		return CkCrypt2_getEncodedIV($this->_cPtr,$encoding);
	}

	function encodedIV($encoding) {
		return CkCrypt2_encodedIV($this->_cPtr,$encoding);
	}

	function getEncodedKey($encoding) {
		return CkCrypt2_getEncodedKey($this->_cPtr,$encoding);
	}

	function encodedKey($encoding) {
		return CkCrypt2_encodedKey($this->_cPtr,$encoding);
	}

	function getEncodedSalt($encoding) {
		return CkCrypt2_getEncodedSalt($this->_cPtr,$encoding);
	}

	function encodedSalt($encoding) {
		return CkCrypt2_encodedSalt($this->_cPtr,$encoding);
	}

	function GetLastCert() {
		$r=CkCrypt2_GetLastCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetSignatureSigningTime($index,$outSysTime) {
		return CkCrypt2_GetSignatureSigningTime($this->_cPtr,$index,$outSysTime);
	}

	function getSignatureSigningTimeStr($index) {
		return CkCrypt2_getSignatureSigningTimeStr($this->_cPtr,$index);
	}

	function signatureSigningTimeStr($index) {
		return CkCrypt2_signatureSigningTimeStr($this->_cPtr,$index);
	}

	function GetSignerCert($index) {
		$r=CkCrypt2_GetSignerCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetSignerCertChain($index) {
		$r=CkCrypt2_GetSignerCertChain($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertChain($r);
		}
		return $r;
	}

	function hashBdENC($bd) {
		return CkCrypt2_hashBdENC($this->_cPtr,$bd);
	}

	function HashBeginBytes($data) {
		return CkCrypt2_HashBeginBytes($this->_cPtr,$data);
	}

	function HashBeginString($strData) {
		return CkCrypt2_HashBeginString($this->_cPtr,$strData);
	}

	function HashBytes($data,$outData) {
		return CkCrypt2_HashBytes($this->_cPtr,$data,$outData);
	}

	function hashBytesENC($data) {
		return CkCrypt2_hashBytesENC($this->_cPtr,$data);
	}

	function HashFile($path,$outBytes) {
		return CkCrypt2_HashFile($this->_cPtr,$path,$outBytes);
	}

	function HashFileAsync($path) {
		$r=CkCrypt2_HashFileAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function hashFileENC($path) {
		return CkCrypt2_hashFileENC($this->_cPtr,$path);
	}

	function HashFileENCAsync($path) {
		$r=CkCrypt2_HashFileENCAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function HashFinal($outBytes) {
		return CkCrypt2_HashFinal($this->_cPtr,$outBytes);
	}

	function hashFinalENC() {
		return CkCrypt2_hashFinalENC($this->_cPtr);
	}

	function HashMoreBytes($data) {
		return CkCrypt2_HashMoreBytes($this->_cPtr,$data);
	}

	function HashMoreString($strData) {
		return CkCrypt2_HashMoreString($this->_cPtr,$strData);
	}

	function HashString($str,$outData) {
		return CkCrypt2_HashString($this->_cPtr,$str,$outData);
	}

	function hashStringENC($str) {
		return CkCrypt2_hashStringENC($this->_cPtr,$str);
	}

	function HasSignatureSigningTime($index) {
		return CkCrypt2_HasSignatureSigningTime($this->_cPtr,$index);
	}

	function HmacBytes($inBytes,$outHmac) {
		return CkCrypt2_HmacBytes($this->_cPtr,$inBytes,$outHmac);
	}

	function hmacBytesENC($inBytes) {
		return CkCrypt2_hmacBytesENC($this->_cPtr,$inBytes);
	}

	function HmacString($inText,$outHmac) {
		return CkCrypt2_HmacString($this->_cPtr,$inText,$outHmac);
	}

	function hmacStringENC($inText) {
		return CkCrypt2_hmacStringENC($this->_cPtr,$inText);
	}

	function InflateBytes($data,$outData) {
		return CkCrypt2_InflateBytes($this->_cPtr,$data,$outData);
	}

	function InflateBytesENC($str,$outData) {
		return CkCrypt2_InflateBytesENC($this->_cPtr,$str,$outData);
	}

	function inflateString($data) {
		return CkCrypt2_inflateString($this->_cPtr,$data);
	}

	function inflateStringENC($str) {
		return CkCrypt2_inflateStringENC($this->_cPtr,$str);
	}

	function IsUnlocked() {
		return CkCrypt2_IsUnlocked($this->_cPtr);
	}

	function macBdENC($bd) {
		return CkCrypt2_macBdENC($this->_cPtr,$bd);
	}

	function MacBytes($inBytes,$outBytes) {
		return CkCrypt2_MacBytes($this->_cPtr,$inBytes,$outBytes);
	}

	function macBytesENC($inBytes) {
		return CkCrypt2_macBytesENC($this->_cPtr,$inBytes);
	}

	function MacString($inText,$outBytes) {
		return CkCrypt2_MacString($this->_cPtr,$inText,$outBytes);
	}

	function macStringENC($inText) {
		return CkCrypt2_macStringENC($this->_cPtr,$inText);
	}

	function mySqlAesDecrypt($strEncryptedHex,$strPassword) {
		return CkCrypt2_mySqlAesDecrypt($this->_cPtr,$strEncryptedHex,$strPassword);
	}

	function mySqlAesEncrypt($strData,$strPassword) {
		return CkCrypt2_mySqlAesEncrypt($this->_cPtr,$strData,$strPassword);
	}

	function OpaqueSignBytes($data,$outData) {
		return CkCrypt2_OpaqueSignBytes($this->_cPtr,$data,$outData);
	}

	function opaqueSignBytesENC($data) {
		return CkCrypt2_opaqueSignBytesENC($this->_cPtr,$data);
	}

	function OpaqueSignString($str,$outData) {
		return CkCrypt2_OpaqueSignString($this->_cPtr,$str,$outData);
	}

	function opaqueSignStringENC($str) {
		return CkCrypt2_opaqueSignStringENC($this->_cPtr,$str);
	}

	function OpaqueVerifyBytes($p7s,$outOriginal) {
		return CkCrypt2_OpaqueVerifyBytes($this->_cPtr,$p7s,$outOriginal);
	}

	function OpaqueVerifyBytesENC($p7s,$outOriginal) {
		return CkCrypt2_OpaqueVerifyBytesENC($this->_cPtr,$p7s,$outOriginal);
	}

	function opaqueVerifyString($p7s) {
		return CkCrypt2_opaqueVerifyString($this->_cPtr,$p7s);
	}

	function opaqueVerifyStringENC($p7s) {
		return CkCrypt2_opaqueVerifyStringENC($this->_cPtr,$p7s);
	}

	function pbkdf1($password,$charset,$hashAlg,$salt,$iterationCount,$outputKeyBitLen,$encoding) {
		return CkCrypt2_pbkdf1($this->_cPtr,$password,$charset,$hashAlg,$salt,$iterationCount,$outputKeyBitLen,$encoding);
	}

	function pbkdf2($password,$charset,$hashAlg,$salt,$iterationCount,$outputKeyBitLen,$encoding) {
		return CkCrypt2_pbkdf2($this->_cPtr,$password,$charset,$hashAlg,$salt,$iterationCount,$outputKeyBitLen,$encoding);
	}

	function pkcs7ExtractDigest($signerIndex,$pkcs7) {
		return CkCrypt2_pkcs7ExtractDigest($this->_cPtr,$signerIndex,$pkcs7);
	}

	function RandomizeIV() {
		CkCrypt2_RandomizeIV($this->_cPtr);
	}

	function RandomizeKey() {
		CkCrypt2_RandomizeKey($this->_cPtr);
	}

	function ReadFile($filename,$outBytes) {
		return CkCrypt2_ReadFile($this->_cPtr,$filename,$outBytes);
	}

	function reEncode($encodedData,$fromEncoding,$toEncoding) {
		return CkCrypt2_reEncode($this->_cPtr,$encodedData,$fromEncoding,$toEncoding);
	}

	function SaveLastError($path) {
		return CkCrypt2_SaveLastError($this->_cPtr,$path);
	}

	function SetDecryptCert($cert) {
		return CkCrypt2_SetDecryptCert($this->_cPtr,$cert);
	}

	function SetDecryptCert2($cert,$key) {
		return CkCrypt2_SetDecryptCert2($this->_cPtr,$cert,$key);
	}

	function SetEncodedAad($aadStr,$encoding) {
		return CkCrypt2_SetEncodedAad($this->_cPtr,$aadStr,$encoding);
	}

	function SetEncodedAuthTag($authTagStr,$encoding) {
		return CkCrypt2_SetEncodedAuthTag($this->_cPtr,$authTagStr,$encoding);
	}

	function SetEncodedIV($ivStr,$encoding) {
		CkCrypt2_SetEncodedIV($this->_cPtr,$ivStr,$encoding);
	}

	function SetEncodedKey($keyStr,$encoding) {
		CkCrypt2_SetEncodedKey($this->_cPtr,$keyStr,$encoding);
	}

	function SetEncodedSalt($saltStr,$encoding) {
		CkCrypt2_SetEncodedSalt($this->_cPtr,$saltStr,$encoding);
	}

	function SetEncryptCert($cert) {
		return CkCrypt2_SetEncryptCert($this->_cPtr,$cert);
	}

	function SetHmacKeyBytes($keyBytes) {
		CkCrypt2_SetHmacKeyBytes($this->_cPtr,$keyBytes);
	}

	function SetHmacKeyEncoded($key,$encoding) {
		CkCrypt2_SetHmacKeyEncoded($this->_cPtr,$key,$encoding);
	}

	function SetHmacKeyString($key) {
		CkCrypt2_SetHmacKeyString($this->_cPtr,$key);
	}

	function SetMacKeyBytes($keyBytes) {
		return CkCrypt2_SetMacKeyBytes($this->_cPtr,$keyBytes);
	}

	function SetMacKeyEncoded($key,$encoding) {
		return CkCrypt2_SetMacKeyEncoded($this->_cPtr,$key,$encoding);
	}

	function SetMacKeyString($key) {
		return CkCrypt2_SetMacKeyString($this->_cPtr,$key);
	}

	function SetSecretKeyViaPassword($password) {
		CkCrypt2_SetSecretKeyViaPassword($this->_cPtr,$password);
	}

	function SetSigningCert($cert) {
		return CkCrypt2_SetSigningCert($this->_cPtr,$cert);
	}

	function SetSigningCert2($cert,$privateKey) {
		return CkCrypt2_SetSigningCert2($this->_cPtr,$cert,$privateKey);
	}

	function SetVerifyCert($cert) {
		return CkCrypt2_SetVerifyCert($this->_cPtr,$cert);
	}

	function SignBytes($data,$outData) {
		return CkCrypt2_SignBytes($this->_cPtr,$data,$outData);
	}

	function signBytesENC($data) {
		return CkCrypt2_signBytesENC($this->_cPtr,$data);
	}

	function SignString($str,$outData) {
		return CkCrypt2_SignString($this->_cPtr,$str,$outData);
	}

	function signStringENC($str) {
		return CkCrypt2_signStringENC($this->_cPtr,$str);
	}

	function StringToBytes($inStr,$charset,$outBytes) {
		return CkCrypt2_StringToBytes($this->_cPtr,$inStr,$charset,$outBytes);
	}

	function trimEndingWith($inStr,$ending) {
		return CkCrypt2_trimEndingWith($this->_cPtr,$inStr,$ending);
	}

	function UnlockComponent($unlockCode) {
		return CkCrypt2_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function UseCertVault($vault) {
		return CkCrypt2_UseCertVault($this->_cPtr,$vault);
	}

	function VerifyBytes($data,$sig) {
		return CkCrypt2_VerifyBytes($this->_cPtr,$data,$sig);
	}

	function VerifyBytesENC($data,$encodedSig) {
		return CkCrypt2_VerifyBytesENC($this->_cPtr,$data,$encodedSig);
	}

	function VerifyDetachedSignature($inFilename,$p7sFilename) {
		return CkCrypt2_VerifyDetachedSignature($this->_cPtr,$inFilename,$p7sFilename);
	}

	function VerifyP7M($p7mPath,$destPath) {
		return CkCrypt2_VerifyP7M($this->_cPtr,$p7mPath,$destPath);
	}

	function VerifyP7S($inFilename,$p7sFilename) {
		return CkCrypt2_VerifyP7S($this->_cPtr,$inFilename,$p7sFilename);
	}

	function VerifyString($str,$sig) {
		return CkCrypt2_VerifyString($this->_cPtr,$str,$sig);
	}

	function VerifyStringENC($str,$encodedSig) {
		return CkCrypt2_VerifyStringENC($this->_cPtr,$str,$encodedSig);
	}

	function WriteFile($filename,$fileData) {
		return CkCrypt2_WriteFile($this->_cPtr,$filename,$fileData);
	}
}


?>