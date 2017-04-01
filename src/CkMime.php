<?php
class CkMime {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkMime') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkMime();
	}

	function get_Utf8() {
		return CkMime_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkMime_put_Utf8($this->_cPtr,$b);
	}

	function get_Boundary($str) {
		CkMime_get_Boundary($this->_cPtr,$str);
	}

	function boundary() {
		return CkMime_boundary($this->_cPtr);
	}

	function put_Boundary($newVal) {
		CkMime_put_Boundary($this->_cPtr,$newVal);
	}

	function get_Charset($str) {
		CkMime_get_Charset($this->_cPtr,$str);
	}

	function charset() {
		return CkMime_charset($this->_cPtr);
	}

	function put_Charset($newVal) {
		CkMime_put_Charset($this->_cPtr,$newVal);
	}

	function get_ContentType($str) {
		CkMime_get_ContentType($this->_cPtr,$str);
	}

	function contentType() {
		return CkMime_contentType($this->_cPtr);
	}

	function put_ContentType($newVal) {
		CkMime_put_ContentType($this->_cPtr,$newVal);
	}

	function get_CurrentDateTime($str) {
		CkMime_get_CurrentDateTime($this->_cPtr,$str);
	}

	function currentDateTime() {
		return CkMime_currentDateTime($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkMime_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkMime_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkMime_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_Disposition($str) {
		CkMime_get_Disposition($this->_cPtr,$str);
	}

	function disposition() {
		return CkMime_disposition($this->_cPtr);
	}

	function put_Disposition($newVal) {
		CkMime_put_Disposition($this->_cPtr,$newVal);
	}

	function get_Encoding($str) {
		CkMime_get_Encoding($this->_cPtr,$str);
	}

	function encoding() {
		return CkMime_encoding($this->_cPtr);
	}

	function put_Encoding($newVal) {
		CkMime_put_Encoding($this->_cPtr,$newVal);
	}

	function get_Filename($str) {
		CkMime_get_Filename($this->_cPtr,$str);
	}

	function filename() {
		return CkMime_filename($this->_cPtr);
	}

	function put_Filename($newVal) {
		CkMime_put_Filename($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkMime_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkMime_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkMime_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkMime_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkMime_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkMime_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkMime_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkMime_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Micalg($str) {
		CkMime_get_Micalg($this->_cPtr,$str);
	}

	function micalg() {
		return CkMime_micalg($this->_cPtr);
	}

	function put_Micalg($newVal) {
		CkMime_put_Micalg($this->_cPtr,$newVal);
	}

	function get_Name($str) {
		CkMime_get_Name($this->_cPtr,$str);
	}

	function name() {
		return CkMime_name($this->_cPtr);
	}

	function put_Name($newVal) {
		CkMime_put_Name($this->_cPtr,$newVal);
	}

	function get_NumEncryptCerts() {
		return CkMime_get_NumEncryptCerts($this->_cPtr);
	}

	function get_NumHeaderFields() {
		return CkMime_get_NumHeaderFields($this->_cPtr);
	}

	function get_NumParts() {
		return CkMime_get_NumParts($this->_cPtr);
	}

	function get_NumSignerCerts() {
		return CkMime_get_NumSignerCerts($this->_cPtr);
	}

	function get_Pkcs7CryptAlg($str) {
		CkMime_get_Pkcs7CryptAlg($this->_cPtr,$str);
	}

	function pkcs7CryptAlg() {
		return CkMime_pkcs7CryptAlg($this->_cPtr);
	}

	function put_Pkcs7CryptAlg($newVal) {
		CkMime_put_Pkcs7CryptAlg($this->_cPtr,$newVal);
	}

	function get_Pkcs7KeyLength() {
		return CkMime_get_Pkcs7KeyLength($this->_cPtr);
	}

	function put_Pkcs7KeyLength($newVal) {
		CkMime_put_Pkcs7KeyLength($this->_cPtr,$newVal);
	}

	function get_Protocol($str) {
		CkMime_get_Protocol($this->_cPtr,$str);
	}

	function protocol() {
		return CkMime_protocol($this->_cPtr);
	}

	function put_Protocol($newVal) {
		CkMime_put_Protocol($this->_cPtr,$newVal);
	}

	function get_SigningHashAlg($str) {
		CkMime_get_SigningHashAlg($this->_cPtr,$str);
	}

	function signingHashAlg() {
		return CkMime_signingHashAlg($this->_cPtr);
	}

	function put_SigningHashAlg($newVal) {
		CkMime_put_SigningHashAlg($this->_cPtr,$newVal);
	}

	function get_UnwrapExtras() {
		return CkMime_get_UnwrapExtras($this->_cPtr);
	}

	function put_UnwrapExtras($newVal) {
		CkMime_put_UnwrapExtras($this->_cPtr,$newVal);
	}

	function get_UseMmDescription() {
		return CkMime_get_UseMmDescription($this->_cPtr);
	}

	function put_UseMmDescription($newVal) {
		CkMime_put_UseMmDescription($this->_cPtr,$newVal);
	}

	function get_UseXPkcs7() {
		return CkMime_get_UseXPkcs7($this->_cPtr);
	}

	function put_UseXPkcs7($newVal) {
		CkMime_put_UseXPkcs7($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkMime_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkMime_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkMime_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkMime_version($this->_cPtr);
	}

	function AddContentLength() {
		CkMime_AddContentLength($this->_cPtr);
	}

	function AddDecryptCert($cert) {
		return CkMime_AddDecryptCert($this->_cPtr,$cert);
	}

	function AddDetachedSignature($cert) {
		return CkMime_AddDetachedSignature($this->_cPtr,$cert);
	}

	function AddDetachedSignature2($cert,$transferHeaderFields) {
		return CkMime_AddDetachedSignature2($this->_cPtr,$cert,$transferHeaderFields);
	}

	function AddDetachedSignaturePk($cert,$privateKey) {
		return CkMime_AddDetachedSignaturePk($this->_cPtr,$cert,$privateKey);
	}

	function AddDetachedSignaturePk2($cert,$privateKey,$transferHeaderFields) {
		return CkMime_AddDetachedSignaturePk2($this->_cPtr,$cert,$privateKey,$transferHeaderFields);
	}

	function AddEncryptCert($cert) {
		return CkMime_AddEncryptCert($this->_cPtr,$cert);
	}

	function AddHeaderField($name,$value) {
		return CkMime_AddHeaderField($this->_cPtr,$name,$value);
	}

	function AddPfxSourceData($pfxFileData,$pfxPassword) {
		return CkMime_AddPfxSourceData($this->_cPtr,$pfxFileData,$pfxPassword);
	}

	function AddPfxSourceFile($pfxFilePath,$password) {
		return CkMime_AddPfxSourceFile($this->_cPtr,$pfxFilePath,$password);
	}

	function AppendPart($mime) {
		return CkMime_AppendPart($this->_cPtr,$mime);
	}

	function AppendPartFromFile($filename) {
		return CkMime_AppendPartFromFile($this->_cPtr,$filename);
	}

	function asnBodyToXml() {
		return CkMime_asnBodyToXml($this->_cPtr);
	}

	function ClearEncryptCerts() {
		CkMime_ClearEncryptCerts($this->_cPtr);
	}

	function ContainsEncryptedParts() {
		return CkMime_ContainsEncryptedParts($this->_cPtr);
	}

	function ContainsSignedParts() {
		return CkMime_ContainsSignedParts($this->_cPtr);
	}

	function Convert8Bit() {
		CkMime_Convert8Bit($this->_cPtr);
	}

	function ConvertToMultipartAlt() {
		return CkMime_ConvertToMultipartAlt($this->_cPtr);
	}

	function ConvertToMultipartMixed() {
		return CkMime_ConvertToMultipartMixed($this->_cPtr);
	}

	function ConvertToSigned($cert) {
		return CkMime_ConvertToSigned($this->_cPtr,$cert);
	}

	function ConvertToSignedPk($cert,$privateKey) {
		return CkMime_ConvertToSignedPk($this->_cPtr,$cert,$privateKey);
	}

	function Decrypt() {
		return CkMime_Decrypt($this->_cPtr);
	}

	function Decrypt2($cert,$privateKey) {
		return CkMime_Decrypt2($this->_cPtr,$cert,$privateKey);
	}

	function DecryptUsingCert($cert) {
		return CkMime_DecryptUsingCert($this->_cPtr,$cert);
	}

	function DecryptUsingPfxData($pfxData,$password) {
		return CkMime_DecryptUsingPfxData($this->_cPtr,$pfxData,$password);
	}

	function DecryptUsingPfxFile($pfxFilePath,$pfxPassword) {
		return CkMime_DecryptUsingPfxFile($this->_cPtr,$pfxFilePath,$pfxPassword);
	}

	function Encrypt($cert) {
		return CkMime_Encrypt($this->_cPtr,$cert);
	}

	function EncryptN() {
		return CkMime_EncryptN($this->_cPtr);
	}

	function ExtractPartsToFiles($dirPath) {
		$r=CkMime_ExtractPartsToFiles($this->_cPtr,$dirPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function FindIssuer($cert) {
		$r=CkMime_FindIssuer($this->_cPtr,$cert);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetBodyBinary($outData) {
		return CkMime_GetBodyBinary($this->_cPtr,$outData);
	}

	function getBodyDecoded() {
		return CkMime_getBodyDecoded($this->_cPtr);
	}

	function bodyDecoded() {
		return CkMime_bodyDecoded($this->_cPtr);
	}

	function getBodyEncoded() {
		return CkMime_getBodyEncoded($this->_cPtr);
	}

	function bodyEncoded() {
		return CkMime_bodyEncoded($this->_cPtr);
	}

	function GetEncryptCert($index) {
		$r=CkMime_GetEncryptCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function getEntireBody() {
		return CkMime_getEntireBody($this->_cPtr);
	}

	function entireBody() {
		return CkMime_entireBody($this->_cPtr);
	}

	function getEntireHead() {
		return CkMime_getEntireHead($this->_cPtr);
	}

	function entireHead() {
		return CkMime_entireHead($this->_cPtr);
	}

	function getHeaderField($fieldName) {
		return CkMime_getHeaderField($this->_cPtr,$fieldName);
	}

	function headerField($fieldName) {
		return CkMime_headerField($this->_cPtr,$fieldName);
	}

	function getHeaderFieldAttribute($name,$attrName) {
		return CkMime_getHeaderFieldAttribute($this->_cPtr,$name,$attrName);
	}

	function headerFieldAttribute($name,$attrName) {
		return CkMime_headerFieldAttribute($this->_cPtr,$name,$attrName);
	}

	function getHeaderFieldName($index) {
		return CkMime_getHeaderFieldName($this->_cPtr,$index);
	}

	function headerFieldName($index) {
		return CkMime_headerFieldName($this->_cPtr,$index);
	}

	function getHeaderFieldValue($index) {
		return CkMime_getHeaderFieldValue($this->_cPtr,$index);
	}

	function headerFieldValue($index) {
		return CkMime_headerFieldValue($this->_cPtr,$index);
	}

	function getMime() {
		return CkMime_getMime($this->_cPtr);
	}

	function mime() {
		return CkMime_mime($this->_cPtr);
	}

	function GetMimeBd($bindat) {
		return CkMime_GetMimeBd($this->_cPtr,$bindat);
	}

	function GetMimeBytes($outBytes) {
		return CkMime_GetMimeBytes($this->_cPtr,$outBytes);
	}

	function GetMimeSb($sb) {
		return CkMime_GetMimeSb($this->_cPtr,$sb);
	}

	function GetPart($index) {
		$r=CkMime_GetPart($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkMime($r);
		}
		return $r;
	}

	function GetSignatureSigningTime($index,$outSysTime) {
		return CkMime_GetSignatureSigningTime($this->_cPtr,$index,$outSysTime);
	}

	function getSignatureSigningTimeStr($index) {
		return CkMime_getSignatureSigningTimeStr($this->_cPtr,$index);
	}

	function signatureSigningTimeStr($index) {
		return CkMime_signatureSigningTimeStr($this->_cPtr,$index);
	}

	function GetSignerCert($index) {
		$r=CkMime_GetSignerCert($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetSignerCertChain($index) {
		$r=CkMime_GetSignerCertChain($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertChain($r);
		}
		return $r;
	}

	function getStructure($fmt) {
		return CkMime_getStructure($this->_cPtr,$fmt);
	}

	function structure($fmt) {
		return CkMime_structure($this->_cPtr,$fmt);
	}

	function getXml() {
		return CkMime_getXml($this->_cPtr);
	}

	function xml() {
		return CkMime_xml($this->_cPtr);
	}

	function HasSignatureSigningTime($index) {
		return CkMime_HasSignatureSigningTime($this->_cPtr,$index);
	}

	function IsApplicationData() {
		return CkMime_IsApplicationData($this->_cPtr);
	}

	function IsAttachment() {
		return CkMime_IsAttachment($this->_cPtr);
	}

	function IsAudio() {
		return CkMime_IsAudio($this->_cPtr);
	}

	function IsEncrypted() {
		return CkMime_IsEncrypted($this->_cPtr);
	}

	function IsHtml() {
		return CkMime_IsHtml($this->_cPtr);
	}

	function IsImage() {
		return CkMime_IsImage($this->_cPtr);
	}

	function IsMultipart() {
		return CkMime_IsMultipart($this->_cPtr);
	}

	function IsMultipartAlternative() {
		return CkMime_IsMultipartAlternative($this->_cPtr);
	}

	function IsMultipartMixed() {
		return CkMime_IsMultipartMixed($this->_cPtr);
	}

	function IsMultipartRelated() {
		return CkMime_IsMultipartRelated($this->_cPtr);
	}

	function IsPlainText() {
		return CkMime_IsPlainText($this->_cPtr);
	}

	function IsSigned() {
		return CkMime_IsSigned($this->_cPtr);
	}

	function IsText() {
		return CkMime_IsText($this->_cPtr);
	}

	function IsUnlocked() {
		return CkMime_IsUnlocked($this->_cPtr);
	}

	function IsVideo() {
		return CkMime_IsVideo($this->_cPtr);
	}

	function IsXml() {
		return CkMime_IsXml($this->_cPtr);
	}

	function LoadMime($mimeMsg) {
		return CkMime_LoadMime($this->_cPtr,$mimeMsg);
	}

	function LoadMimeBd($bindat) {
		return CkMime_LoadMimeBd($this->_cPtr,$bindat);
	}

	function LoadMimeBytes($binData) {
		return CkMime_LoadMimeBytes($this->_cPtr,$binData);
	}

	function LoadMimeFile($fileName) {
		return CkMime_LoadMimeFile($this->_cPtr,$fileName);
	}

	function LoadMimeSb($sb) {
		return CkMime_LoadMimeSb($this->_cPtr,$sb);
	}

	function LoadXml($xml) {
		return CkMime_LoadXml($this->_cPtr,$xml);
	}

	function LoadXmlFile($fileName) {
		return CkMime_LoadXmlFile($this->_cPtr,$fileName);
	}

	function NewMessageRfc822($mimeObject) {
		return CkMime_NewMessageRfc822($this->_cPtr,$mimeObject);
	}

	function NewMultipartAlternative() {
		return CkMime_NewMultipartAlternative($this->_cPtr);
	}

	function NewMultipartMixed() {
		return CkMime_NewMultipartMixed($this->_cPtr);
	}

	function NewMultipartRelated() {
		return CkMime_NewMultipartRelated($this->_cPtr);
	}

	function RemoveHeaderField($fieldName,$bAllOccurrences) {
		CkMime_RemoveHeaderField($this->_cPtr,$fieldName,$bAllOccurrences);
	}

	function RemovePart($index) {
		return CkMime_RemovePart($this->_cPtr,$index);
	}

	function SaveBody($filename) {
		return CkMime_SaveBody($this->_cPtr,$filename);
	}

	function SaveLastError($path) {
		return CkMime_SaveLastError($this->_cPtr,$path);
	}

	function SaveMime($filename) {
		return CkMime_SaveMime($this->_cPtr,$filename);
	}

	function SaveXml($filename) {
		return CkMime_SaveXml($this->_cPtr,$filename);
	}

	function SetBody($str) {
		CkMime_SetBody($this->_cPtr,$str);
	}

	function SetBodyFromBinary($binData) {
		return CkMime_SetBodyFromBinary($this->_cPtr,$binData);
	}

	function SetBodyFromEncoded($encoding,$str) {
		return CkMime_SetBodyFromEncoded($this->_cPtr,$encoding,$str);
	}

	function SetBodyFromFile($fileName) {
		return CkMime_SetBodyFromFile($this->_cPtr,$fileName);
	}

	function SetBodyFromHtml($str) {
		return CkMime_SetBodyFromHtml($this->_cPtr,$str);
	}

	function SetBodyFromPlainText($str) {
		return CkMime_SetBodyFromPlainText($this->_cPtr,$str);
	}

	function SetBodyFromXml($str) {
		return CkMime_SetBodyFromXml($this->_cPtr,$str);
	}

	function SetHeaderField($name,$value) {
		return CkMime_SetHeaderField($this->_cPtr,$name,$value);
	}

	function SetVerifyCert($cert) {
		return CkMime_SetVerifyCert($this->_cPtr,$cert);
	}

	function UnlockComponent($unlockCode) {
		return CkMime_UnlockComponent($this->_cPtr,$unlockCode);
	}

	function UnwrapSecurity() {
		return CkMime_UnwrapSecurity($this->_cPtr);
	}

	function UrlEncodeBody($charset) {
		CkMime_UrlEncodeBody($this->_cPtr,$charset);
	}

	function UseCertVault($vault) {
		return CkMime_UseCertVault($this->_cPtr,$vault);
	}

	function Verify() {
		return CkMime_Verify($this->_cPtr);
	}
}


?>