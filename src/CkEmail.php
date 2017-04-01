<?php
class CkEmail {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkEmail') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkEmail();
	}

	function get_Utf8() {
		return CkEmail_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkEmail_put_Utf8($this->_cPtr,$b);
	}

	function get_Body($str) {
		CkEmail_get_Body($this->_cPtr,$str);
	}

	function body() {
		return CkEmail_body($this->_cPtr);
	}

	function put_Body($newVal) {
		CkEmail_put_Body($this->_cPtr,$newVal);
	}

	function get_BounceAddress($str) {
		CkEmail_get_BounceAddress($this->_cPtr,$str);
	}

	function bounceAddress() {
		return CkEmail_bounceAddress($this->_cPtr);
	}

	function put_BounceAddress($newVal) {
		CkEmail_put_BounceAddress($this->_cPtr,$newVal);
	}

	function get_Charset($str) {
		CkEmail_get_Charset($this->_cPtr,$str);
	}

	function charset() {
		return CkEmail_charset($this->_cPtr);
	}

	function put_Charset($newVal) {
		CkEmail_put_Charset($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkEmail_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkEmail_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkEmail_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_Decrypted() {
		return CkEmail_get_Decrypted($this->_cPtr);
	}

	function get_EmailDate($outSysTime) {
		CkEmail_get_EmailDate($this->_cPtr,$outSysTime);
	}

	function put_EmailDate($sysTime) {
		CkEmail_put_EmailDate($this->_cPtr,$sysTime);
	}

	function get_EmailDateStr($str) {
		CkEmail_get_EmailDateStr($this->_cPtr,$str);
	}

	function emailDateStr() {
		return CkEmail_emailDateStr($this->_cPtr);
	}

	function put_EmailDateStr($newVal) {
		CkEmail_put_EmailDateStr($this->_cPtr,$newVal);
	}

	function get_EncryptedBy($str) {
		CkEmail_get_EncryptedBy($this->_cPtr,$str);
	}

	function encryptedBy() {
		return CkEmail_encryptedBy($this->_cPtr);
	}

	function get_FileDistList($str) {
		CkEmail_get_FileDistList($this->_cPtr,$str);
	}

	function fileDistList() {
		return CkEmail_fileDistList($this->_cPtr);
	}

	function put_FileDistList($newVal) {
		CkEmail_put_FileDistList($this->_cPtr,$newVal);
	}

	function get_From($str) {
		CkEmail_get_From($this->_cPtr,$str);
	}

	function ck_from() {
		return CkEmail_ck_from($this->_cPtr);
	}

	function put_From($newVal) {
		CkEmail_put_From($this->_cPtr,$newVal);
	}

	function get_FromAddress($str) {
		CkEmail_get_FromAddress($this->_cPtr,$str);
	}

	function fromAddress() {
		return CkEmail_fromAddress($this->_cPtr);
	}

	function put_FromAddress($newVal) {
		CkEmail_put_FromAddress($this->_cPtr,$newVal);
	}

	function get_FromName($str) {
		CkEmail_get_FromName($this->_cPtr,$str);
	}

	function fromName() {
		return CkEmail_fromName($this->_cPtr);
	}

	function put_FromName($newVal) {
		CkEmail_put_FromName($this->_cPtr,$newVal);
	}

	function get_Header($str) {
		CkEmail_get_Header($this->_cPtr,$str);
	}

	function header() {
		return CkEmail_header($this->_cPtr);
	}

	function get_Language($str) {
		CkEmail_get_Language($this->_cPtr,$str);
	}

	function language() {
		return CkEmail_language($this->_cPtr);
	}

	function get_LastErrorHtml($str) {
		CkEmail_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkEmail_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkEmail_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkEmail_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkEmail_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkEmail_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkEmail_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkEmail_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_LocalDate($outSysTime) {
		CkEmail_get_LocalDate($this->_cPtr,$outSysTime);
	}

	function put_LocalDate($sysTime) {
		CkEmail_put_LocalDate($this->_cPtr,$sysTime);
	}

	function get_LocalDateStr($str) {
		CkEmail_get_LocalDateStr($this->_cPtr,$str);
	}

	function localDateStr() {
		return CkEmail_localDateStr($this->_cPtr);
	}

	function put_LocalDateStr($newVal) {
		CkEmail_put_LocalDateStr($this->_cPtr,$newVal);
	}

	function get_Mailer($str) {
		CkEmail_get_Mailer($this->_cPtr,$str);
	}

	function mailer() {
		return CkEmail_mailer($this->_cPtr);
	}

	function put_Mailer($newVal) {
		CkEmail_put_Mailer($this->_cPtr,$newVal);
	}

	function get_NumAlternatives() {
		return CkEmail_get_NumAlternatives($this->_cPtr);
	}

	function get_NumAttachedMessages() {
		return CkEmail_get_NumAttachedMessages($this->_cPtr);
	}

	function get_NumAttachments() {
		return CkEmail_get_NumAttachments($this->_cPtr);
	}

	function get_NumBcc() {
		return CkEmail_get_NumBcc($this->_cPtr);
	}

	function get_NumCC() {
		return CkEmail_get_NumCC($this->_cPtr);
	}

	function get_NumDaysOld() {
		return CkEmail_get_NumDaysOld($this->_cPtr);
	}

	function get_NumDigests() {
		return CkEmail_get_NumDigests($this->_cPtr);
	}

	function get_NumHeaderFields() {
		return CkEmail_get_NumHeaderFields($this->_cPtr);
	}

	function get_NumRelatedItems() {
		return CkEmail_get_NumRelatedItems($this->_cPtr);
	}

	function get_NumReplacePatterns() {
		return CkEmail_get_NumReplacePatterns($this->_cPtr);
	}

	function get_NumReports() {
		return CkEmail_get_NumReports($this->_cPtr);
	}

	function get_NumTo() {
		return CkEmail_get_NumTo($this->_cPtr);
	}

	function get_OverwriteExisting() {
		return CkEmail_get_OverwriteExisting($this->_cPtr);
	}

	function put_OverwriteExisting($newVal) {
		CkEmail_put_OverwriteExisting($this->_cPtr,$newVal);
	}

	function get_Pkcs7CryptAlg($str) {
		CkEmail_get_Pkcs7CryptAlg($this->_cPtr,$str);
	}

	function pkcs7CryptAlg() {
		return CkEmail_pkcs7CryptAlg($this->_cPtr);
	}

	function put_Pkcs7CryptAlg($newVal) {
		CkEmail_put_Pkcs7CryptAlg($this->_cPtr,$newVal);
	}

	function get_Pkcs7KeyLength() {
		return CkEmail_get_Pkcs7KeyLength($this->_cPtr);
	}

	function put_Pkcs7KeyLength($newVal) {
		CkEmail_put_Pkcs7KeyLength($this->_cPtr,$newVal);
	}

	function get_PreferredCharset($str) {
		CkEmail_get_PreferredCharset($this->_cPtr,$str);
	}

	function preferredCharset() {
		return CkEmail_preferredCharset($this->_cPtr);
	}

	function put_PreferredCharset($newVal) {
		CkEmail_put_PreferredCharset($this->_cPtr,$newVal);
	}

	function get_PrependHeaders() {
		return CkEmail_get_PrependHeaders($this->_cPtr);
	}

	function put_PrependHeaders($newVal) {
		CkEmail_put_PrependHeaders($this->_cPtr,$newVal);
	}

	function get_ReceivedEncrypted() {
		return CkEmail_get_ReceivedEncrypted($this->_cPtr);
	}

	function get_ReceivedSigned() {
		return CkEmail_get_ReceivedSigned($this->_cPtr);
	}

	function get_ReplyTo($str) {
		CkEmail_get_ReplyTo($this->_cPtr,$str);
	}

	function replyTo() {
		return CkEmail_replyTo($this->_cPtr);
	}

	function put_ReplyTo($newVal) {
		CkEmail_put_ReplyTo($this->_cPtr,$newVal);
	}

	function get_ReturnReceipt() {
		return CkEmail_get_ReturnReceipt($this->_cPtr);
	}

	function put_ReturnReceipt($newVal) {
		CkEmail_put_ReturnReceipt($this->_cPtr,$newVal);
	}

	function get_SendEncrypted() {
		return CkEmail_get_SendEncrypted($this->_cPtr);
	}

	function put_SendEncrypted($newVal) {
		CkEmail_put_SendEncrypted($this->_cPtr,$newVal);
	}

	function get_Sender($str) {
		CkEmail_get_Sender($this->_cPtr,$str);
	}

	function sender() {
		return CkEmail_sender($this->_cPtr);
	}

	function put_Sender($newVal) {
		CkEmail_put_Sender($this->_cPtr,$newVal);
	}

	function get_SendSigned() {
		return CkEmail_get_SendSigned($this->_cPtr);
	}

	function put_SendSigned($newVal) {
		CkEmail_put_SendSigned($this->_cPtr,$newVal);
	}

	function get_SignaturesValid() {
		return CkEmail_get_SignaturesValid($this->_cPtr);
	}

	function get_SignedBy($str) {
		CkEmail_get_SignedBy($this->_cPtr,$str);
	}

	function signedBy() {
		return CkEmail_signedBy($this->_cPtr);
	}

	function get_SigningHashAlg($str) {
		CkEmail_get_SigningHashAlg($this->_cPtr,$str);
	}

	function signingHashAlg() {
		return CkEmail_signingHashAlg($this->_cPtr);
	}

	function put_SigningHashAlg($newVal) {
		CkEmail_put_SigningHashAlg($this->_cPtr,$newVal);
	}

	function get_Size() {
		return CkEmail_get_Size($this->_cPtr);
	}

	function get_Subject($str) {
		CkEmail_get_Subject($this->_cPtr,$str);
	}

	function subject() {
		return CkEmail_subject($this->_cPtr);
	}

	function put_Subject($newVal) {
		CkEmail_put_Subject($this->_cPtr,$newVal);
	}

	function get_Uidl($str) {
		CkEmail_get_Uidl($this->_cPtr,$str);
	}

	function uidl() {
		return CkEmail_uidl($this->_cPtr);
	}

	function get_UnpackUseRelPaths() {
		return CkEmail_get_UnpackUseRelPaths($this->_cPtr);
	}

	function put_UnpackUseRelPaths($newVal) {
		CkEmail_put_UnpackUseRelPaths($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkEmail_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkEmail_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkEmail_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkEmail_version($this->_cPtr);
	}

	function AddAttachmentBd($filename,$binData,$contentType) {
		return CkEmail_AddAttachmentBd($this->_cPtr,$filename,$binData,$contentType);
	}

	function AddAttachmentHeader($index,$fieldName,$fieldValue) {
		CkEmail_AddAttachmentHeader($this->_cPtr,$index,$fieldName,$fieldValue);
	}

	function AddBcc($friendlyName,$emailAddress) {
		return CkEmail_AddBcc($this->_cPtr,$friendlyName,$emailAddress);
	}

	function AddCC($friendlyName,$emailAddress) {
		return CkEmail_AddCC($this->_cPtr,$friendlyName,$emailAddress);
	}

	function AddDataAttachment($fileName,$content) {
		return CkEmail_AddDataAttachment($this->_cPtr,$fileName,$content);
	}

	function AddDataAttachment2($fileName,$content,$contentType) {
		return CkEmail_AddDataAttachment2($this->_cPtr,$fileName,$content,$contentType);
	}

	function AddEncryptCert($cert) {
		return CkEmail_AddEncryptCert($this->_cPtr,$cert);
	}

	function addFileAttachment($path) {
		return CkEmail_addFileAttachment($this->_cPtr,$path);
	}

	function AddFileAttachment2($path,$contentType) {
		return CkEmail_AddFileAttachment2($this->_cPtr,$path,$contentType);
	}

	function AddHeaderField($fieldName,$fieldValue) {
		CkEmail_AddHeaderField($this->_cPtr,$fieldName,$fieldValue);
	}

	function AddHeaderField2($fieldName,$fieldValue) {
		CkEmail_AddHeaderField2($this->_cPtr,$fieldName,$fieldValue);
	}

	function AddHtmlAlternativeBody($body) {
		return CkEmail_AddHtmlAlternativeBody($this->_cPtr,$body);
	}

	function AddiCalendarAlternativeBody($icalContent,$methodName) {
		return CkEmail_AddiCalendarAlternativeBody($this->_cPtr,$icalContent,$methodName);
	}

	function AddMultipleBcc($commaSeparatedAddresses) {
		return CkEmail_AddMultipleBcc($this->_cPtr,$commaSeparatedAddresses);
	}

	function AddMultipleCC($commaSeparatedAddresses) {
		return CkEmail_AddMultipleCC($this->_cPtr,$commaSeparatedAddresses);
	}

	function AddMultipleTo($commaSeparatedAddresses) {
		return CkEmail_AddMultipleTo($this->_cPtr,$commaSeparatedAddresses);
	}

	function AddPfxSourceData($pfxBytes,$pfxPassword) {
		return CkEmail_AddPfxSourceData($this->_cPtr,$pfxBytes,$pfxPassword);
	}

	function AddPfxSourceFile($pfxFilePath,$pfxPassword) {
		return CkEmail_AddPfxSourceFile($this->_cPtr,$pfxFilePath,$pfxPassword);
	}

	function AddPlainTextAlternativeBody($body) {
		return CkEmail_AddPlainTextAlternativeBody($this->_cPtr,$body);
	}

	function addRelatedBd($filename,$binData) {
		return CkEmail_addRelatedBd($this->_cPtr,$filename,$binData);
	}

	function AddRelatedBd2($binData,$fileNameInHtml) {
		return CkEmail_AddRelatedBd2($this->_cPtr,$binData,$fileNameInHtml);
	}

	function addRelatedData($fileName,$inData) {
		return CkEmail_addRelatedData($this->_cPtr,$fileName,$inData);
	}

	function AddRelatedData2($inData,$fileNameInHtml) {
		CkEmail_AddRelatedData2($this->_cPtr,$inData,$fileNameInHtml);
	}

	function addRelatedFile($path) {
		return CkEmail_addRelatedFile($this->_cPtr,$path);
	}

	function AddRelatedFile2($filenameOnDisk,$filenameInHtml) {
		return CkEmail_AddRelatedFile2($this->_cPtr,$filenameOnDisk,$filenameInHtml);
	}

	function AddRelatedHeader($index,$fieldName,$fieldValue) {
		CkEmail_AddRelatedHeader($this->_cPtr,$index,$fieldName,$fieldValue);
	}

	function addRelatedString($nameInHtml,$str,$charset) {
		return CkEmail_addRelatedString($this->_cPtr,$nameInHtml,$str,$charset);
	}

	function AddRelatedString2($fileNameInHtml,$content,$charset) {
		CkEmail_AddRelatedString2($this->_cPtr,$fileNameInHtml,$content,$charset);
	}

	function AddStringAttachment($path,$content) {
		return CkEmail_AddStringAttachment($this->_cPtr,$path,$content);
	}

	function AddStringAttachment2($path,$content,$charset) {
		return CkEmail_AddStringAttachment2($this->_cPtr,$path,$content,$charset);
	}

	function AddTo($friendlyName,$emailAddress) {
		return CkEmail_AddTo($this->_cPtr,$friendlyName,$emailAddress);
	}

	function AesDecrypt($password) {
		return CkEmail_AesDecrypt($this->_cPtr,$password);
	}

	function AesEncrypt($password) {
		return CkEmail_AesEncrypt($this->_cPtr,$password);
	}

	function AppendToBody($str) {
		CkEmail_AppendToBody($this->_cPtr,$str);
	}

	function AspUnpack($prefix,$saveDir,$urlPath,$cleanFiles) {
		return CkEmail_AspUnpack($this->_cPtr,$prefix,$saveDir,$urlPath,$cleanFiles);
	}

	function AspUnpack2($prefix,$saveDir,$urlPath,$cleanFiles,$outHtml) {
		return CkEmail_AspUnpack2($this->_cPtr,$prefix,$saveDir,$urlPath,$cleanFiles,$outHtml);
	}

	function AttachMessage($mimeBytes) {
		return CkEmail_AttachMessage($this->_cPtr,$mimeBytes);
	}

	function bEncodeBytes($inData,$charset) {
		return CkEmail_bEncodeBytes($this->_cPtr,$inData,$charset);
	}

	function bEncodeString($str,$charset) {
		return CkEmail_bEncodeString($this->_cPtr,$str,$charset);
	}

	function ClearBcc() {
		CkEmail_ClearBcc($this->_cPtr);
	}

	function ClearCC() {
		CkEmail_ClearCC($this->_cPtr);
	}

	function ClearEncryptCerts() {
		CkEmail_ClearEncryptCerts($this->_cPtr);
	}

	function ClearTo() {
		CkEmail_ClearTo($this->_cPtr);
	}

	function c_Clone() {
		$r=CkEmail_c_Clone($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function computeGlobalKey($encoding,$bFold) {
		return CkEmail_computeGlobalKey($this->_cPtr,$encoding,$bFold);
	}

	function computeGlobalKey2($encoding,$bFold) {
		return CkEmail_computeGlobalKey2($this->_cPtr,$encoding,$bFold);
	}

	function CreateDsn($humanReadableMessage,$xmlStatusFields,$bHeaderOnly) {
		$r=CkEmail_CreateDsn($this->_cPtr,$humanReadableMessage,$xmlStatusFields,$bHeaderOnly);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function CreateForward() {
		$r=CkEmail_CreateForward($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function CreateMdn($humanReadableMessage,$xmlStatusFields,$bHeaderOnly) {
		$r=CkEmail_CreateMdn($this->_cPtr,$humanReadableMessage,$xmlStatusFields,$bHeaderOnly);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function CreateReply() {
		$r=CkEmail_CreateReply($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function createTempMht($inFilename) {
		return CkEmail_createTempMht($this->_cPtr,$inFilename);
	}

	function DropAttachments() {
		CkEmail_DropAttachments($this->_cPtr);
	}

	function DropRelatedItem($index) {
		CkEmail_DropRelatedItem($this->_cPtr,$index);
	}

	function DropRelatedItems() {
		CkEmail_DropRelatedItems($this->_cPtr);
	}

	function DropSingleAttachment($index) {
		return CkEmail_DropSingleAttachment($this->_cPtr,$index);
	}

	function FindIssuer($cert) {
		$r=CkEmail_FindIssuer($this->_cPtr,$cert);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function generateFilename() {
		return CkEmail_generateFilename($this->_cPtr);
	}

	function getAlternativeBody($index) {
		return CkEmail_getAlternativeBody($this->_cPtr,$index);
	}

	function alternativeBody($index) {
		return CkEmail_alternativeBody($this->_cPtr,$index);
	}

	function getAlternativeBodyByContentType($contentType) {
		return CkEmail_getAlternativeBodyByContentType($this->_cPtr,$contentType);
	}

	function alternativeBodyByContentType($contentType) {
		return CkEmail_alternativeBodyByContentType($this->_cPtr,$contentType);
	}

	function getAlternativeContentType($index) {
		return CkEmail_getAlternativeContentType($this->_cPtr,$index);
	}

	function alternativeContentType($index) {
		return CkEmail_alternativeContentType($this->_cPtr,$index);
	}

	function getAltHeaderField($index,$fieldName) {
		return CkEmail_getAltHeaderField($this->_cPtr,$index,$fieldName);
	}

	function altHeaderField($index,$fieldName) {
		return CkEmail_altHeaderField($this->_cPtr,$index,$fieldName);
	}

	function GetAttachedMessage($index) {
		$r=CkEmail_GetAttachedMessage($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function getAttachedMessageAttr($index,$fieldName,$attrName) {
		return CkEmail_getAttachedMessageAttr($this->_cPtr,$index,$fieldName,$attrName);
	}

	function attachedMessageAttr($index,$fieldName,$attrName) {
		return CkEmail_attachedMessageAttr($this->_cPtr,$index,$fieldName,$attrName);
	}

	function getAttachedMessageFilename($index) {
		return CkEmail_getAttachedMessageFilename($this->_cPtr,$index);
	}

	function attachedMessageFilename($index) {
		return CkEmail_attachedMessageFilename($this->_cPtr,$index);
	}

	function getAttachmentAttr($index,$fieldName,$attrName) {
		return CkEmail_getAttachmentAttr($this->_cPtr,$index,$fieldName,$attrName);
	}

	function attachmentAttr($index,$fieldName,$attrName) {
		return CkEmail_attachmentAttr($this->_cPtr,$index,$fieldName,$attrName);
	}

	function getAttachmentContentID($index) {
		return CkEmail_getAttachmentContentID($this->_cPtr,$index);
	}

	function attachmentContentID($index) {
		return CkEmail_attachmentContentID($this->_cPtr,$index);
	}

	function getAttachmentContentType($index) {
		return CkEmail_getAttachmentContentType($this->_cPtr,$index);
	}

	function attachmentContentType($index) {
		return CkEmail_attachmentContentType($this->_cPtr,$index);
	}

	function GetAttachmentData($index,$outData) {
		return CkEmail_GetAttachmentData($this->_cPtr,$index,$outData);
	}

	function getAttachmentFilename($index) {
		return CkEmail_getAttachmentFilename($this->_cPtr,$index);
	}

	function attachmentFilename($index) {
		return CkEmail_attachmentFilename($this->_cPtr,$index);
	}

	function getAttachmentHeader($attachIndex,$fieldName) {
		return CkEmail_getAttachmentHeader($this->_cPtr,$attachIndex,$fieldName);
	}

	function attachmentHeader($attachIndex,$fieldName) {
		return CkEmail_attachmentHeader($this->_cPtr,$attachIndex,$fieldName);
	}

	function GetAttachmentSize($index) {
		return CkEmail_GetAttachmentSize($this->_cPtr,$index);
	}

	function getAttachmentString($index,$charset) {
		return CkEmail_getAttachmentString($this->_cPtr,$index,$charset);
	}

	function attachmentString($index,$charset) {
		return CkEmail_attachmentString($this->_cPtr,$index,$charset);
	}

	function getAttachmentStringCrLf($index,$charset) {
		return CkEmail_getAttachmentStringCrLf($this->_cPtr,$index,$charset);
	}

	function attachmentStringCrLf($index,$charset) {
		return CkEmail_attachmentStringCrLf($this->_cPtr,$index,$charset);
	}

	function getBcc($index) {
		return CkEmail_getBcc($this->_cPtr,$index);
	}

	function bcc($index) {
		return CkEmail_bcc($this->_cPtr,$index);
	}

	function getBccAddr($index) {
		return CkEmail_getBccAddr($this->_cPtr,$index);
	}

	function bccAddr($index) {
		return CkEmail_bccAddr($this->_cPtr,$index);
	}

	function getBccName($index) {
		return CkEmail_getBccName($this->_cPtr,$index);
	}

	function bccName($index) {
		return CkEmail_bccName($this->_cPtr,$index);
	}

	function getCC($index) {
		return CkEmail_getCC($this->_cPtr,$index);
	}

	function cC($index) {
		return CkEmail_cC($this->_cPtr,$index);
	}

	function getCcAddr($index) {
		return CkEmail_getCcAddr($this->_cPtr,$index);
	}

	function ccAddr($index) {
		return CkEmail_ccAddr($this->_cPtr,$index);
	}

	function getCcName($index) {
		return CkEmail_getCcName($this->_cPtr,$index);
	}

	function ccName($index) {
		return CkEmail_ccName($this->_cPtr,$index);
	}

	function getDeliveryStatusInfo($fieldName) {
		return CkEmail_getDeliveryStatusInfo($this->_cPtr,$fieldName);
	}

	function deliveryStatusInfo($fieldName) {
		return CkEmail_deliveryStatusInfo($this->_cPtr,$fieldName);
	}

	function GetDigest($index) {
		$r=CkEmail_GetDigest($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkEmail($r);
		}
		return $r;
	}

	function GetDsnFinalRecipients() {
		$r=CkEmail_GetDsnFinalRecipients($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function GetDt() {
		$r=CkEmail_GetDt($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetEncryptCert() {
		$r=CkEmail_GetEncryptCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetEncryptedByCert() {
		$r=CkEmail_GetEncryptedByCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetFileContent($path,$outData) {
		return CkEmail_GetFileContent($this->_cPtr,$path,$outData);
	}

	function getHeaderField($fieldName) {
		return CkEmail_getHeaderField($this->_cPtr,$fieldName);
	}

	function headerField($fieldName) {
		return CkEmail_headerField($this->_cPtr,$fieldName);
	}

	function getHeaderFieldName($index) {
		return CkEmail_getHeaderFieldName($this->_cPtr,$index);
	}

	function headerFieldName($index) {
		return CkEmail_headerFieldName($this->_cPtr,$index);
	}

	function getHeaderFieldValue($index) {
		return CkEmail_getHeaderFieldValue($this->_cPtr,$index);
	}

	function headerFieldValue($index) {
		return CkEmail_headerFieldValue($this->_cPtr,$index);
	}

	function getHtmlBody() {
		return CkEmail_getHtmlBody($this->_cPtr);
	}

	function htmlBody() {
		return CkEmail_htmlBody($this->_cPtr);
	}

	function GetImapUid() {
		return CkEmail_GetImapUid($this->_cPtr);
	}

	function GetLinkedDomains() {
		$r=CkEmail_GetLinkedDomains($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function GetMbHeaderField($fieldName,$charset,$outBytes) {
		return CkEmail_GetMbHeaderField($this->_cPtr,$fieldName,$charset,$outBytes);
	}

	function GetMbHtmlBody($charset,$outData) {
		return CkEmail_GetMbHtmlBody($this->_cPtr,$charset,$outData);
	}

	function GetMbPlainTextBody($charset,$outData) {
		return CkEmail_GetMbPlainTextBody($this->_cPtr,$charset,$outData);
	}

	function getMime() {
		return CkEmail_getMime($this->_cPtr);
	}

	function mime() {
		return CkEmail_mime($this->_cPtr);
	}

	function GetMimeBd($bindat) {
		return CkEmail_GetMimeBd($this->_cPtr,$bindat);
	}

	function GetMimeBinary($outBytes) {
		return CkEmail_GetMimeBinary($this->_cPtr,$outBytes);
	}

	function GetMimeSb($sb) {
		return CkEmail_GetMimeSb($this->_cPtr,$sb);
	}

	function GetNthBinaryPartOfType($index,$contentType,$inlineOnly,$excludeAttachments,$outBytes) {
		return CkEmail_GetNthBinaryPartOfType($this->_cPtr,$index,$contentType,$inlineOnly,$excludeAttachments,$outBytes);
	}

	function getNthTextPartOfType($index,$contentType,$inlineOnly,$excludeAttachments) {
		return CkEmail_getNthTextPartOfType($this->_cPtr,$index,$contentType,$inlineOnly,$excludeAttachments);
	}

	function nthTextPartOfType($index,$contentType,$inlineOnly,$excludeAttachments) {
		return CkEmail_nthTextPartOfType($this->_cPtr,$index,$contentType,$inlineOnly,$excludeAttachments);
	}

	function GetNumPartsOfType($contentType,$inlineOnly,$excludeAttachments) {
		return CkEmail_GetNumPartsOfType($this->_cPtr,$contentType,$inlineOnly,$excludeAttachments);
	}

	function getPlainTextBody() {
		return CkEmail_getPlainTextBody($this->_cPtr);
	}

	function plainTextBody() {
		return CkEmail_plainTextBody($this->_cPtr);
	}

	function getRelatedAttr($index,$fieldName,$attrName) {
		return CkEmail_getRelatedAttr($this->_cPtr,$index,$fieldName,$attrName);
	}

	function relatedAttr($index,$fieldName,$attrName) {
		return CkEmail_relatedAttr($this->_cPtr,$index,$fieldName,$attrName);
	}

	function getRelatedContentID($index) {
		return CkEmail_getRelatedContentID($this->_cPtr,$index);
	}

	function relatedContentID($index) {
		return CkEmail_relatedContentID($this->_cPtr,$index);
	}

	function getRelatedContentLocation($index) {
		return CkEmail_getRelatedContentLocation($this->_cPtr,$index);
	}

	function relatedContentLocation($index) {
		return CkEmail_relatedContentLocation($this->_cPtr,$index);
	}

	function getRelatedContentType($index) {
		return CkEmail_getRelatedContentType($this->_cPtr,$index);
	}

	function relatedContentType($index) {
		return CkEmail_relatedContentType($this->_cPtr,$index);
	}

	function GetRelatedData($index,$outBuffer) {
		return CkEmail_GetRelatedData($this->_cPtr,$index,$outBuffer);
	}

	function getRelatedFilename($index) {
		return CkEmail_getRelatedFilename($this->_cPtr,$index);
	}

	function relatedFilename($index) {
		return CkEmail_relatedFilename($this->_cPtr,$index);
	}

	function getRelatedString($index,$charset) {
		return CkEmail_getRelatedString($this->_cPtr,$index,$charset);
	}

	function relatedString($index,$charset) {
		return CkEmail_relatedString($this->_cPtr,$index,$charset);
	}

	function getRelatedStringCrLf($index,$charset) {
		return CkEmail_getRelatedStringCrLf($this->_cPtr,$index,$charset);
	}

	function relatedStringCrLf($index,$charset) {
		return CkEmail_relatedStringCrLf($this->_cPtr,$index,$charset);
	}

	function getReplacePattern($index) {
		return CkEmail_getReplacePattern($this->_cPtr,$index);
	}

	function replacePattern($index) {
		return CkEmail_replacePattern($this->_cPtr,$index);
	}

	function getReplaceString($index) {
		return CkEmail_getReplaceString($this->_cPtr,$index);
	}

	function replaceString($index) {
		return CkEmail_replaceString($this->_cPtr,$index);
	}

	function getReplaceString2($pattern) {
		return CkEmail_getReplaceString2($this->_cPtr,$pattern);
	}

	function replaceString2($pattern) {
		return CkEmail_replaceString2($this->_cPtr,$pattern);
	}

	function getReport($index) {
		return CkEmail_getReport($this->_cPtr,$index);
	}

	function report($index) {
		return CkEmail_report($this->_cPtr,$index);
	}

	function GetSignedByCert() {
		$r=CkEmail_GetSignedByCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetSignedByCertChain() {
		$r=CkEmail_GetSignedByCertChain($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertChain($r);
		}
		return $r;
	}

	function GetSigningCert() {
		$r=CkEmail_GetSigningCert($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function getTo($index) {
		return CkEmail_getTo($this->_cPtr,$index);
	}

	function to($index) {
		return CkEmail_to($this->_cPtr,$index);
	}

	function getToAddr($index) {
		return CkEmail_getToAddr($this->_cPtr,$index);
	}

	function toAddr($index) {
		return CkEmail_toAddr($this->_cPtr,$index);
	}

	function getToName($index) {
		return CkEmail_getToName($this->_cPtr,$index);
	}

	function toName($index) {
		return CkEmail_toName($this->_cPtr,$index);
	}

	function getXml() {
		return CkEmail_getXml($this->_cPtr);
	}

	function xml() {
		return CkEmail_xml($this->_cPtr);
	}

	function HasHeaderMatching($fieldName,$valuePattern,$caseSensitive) {
		return CkEmail_HasHeaderMatching($this->_cPtr,$fieldName,$valuePattern,$caseSensitive);
	}

	function HasHtmlBody() {
		return CkEmail_HasHtmlBody($this->_cPtr);
	}

	function HasPlainTextBody() {
		return CkEmail_HasPlainTextBody($this->_cPtr);
	}

	function IsMultipartReport() {
		return CkEmail_IsMultipartReport($this->_cPtr);
	}

	function LoadEml($mimePath) {
		return CkEmail_LoadEml($this->_cPtr,$mimePath);
	}

	function LoadTaskResult($task) {
		return CkEmail_LoadTaskResult($this->_cPtr,$task);
	}

	function LoadXml($xmlPath) {
		return CkEmail_LoadXml($this->_cPtr,$xmlPath);
	}

	function LoadXmlString($xmlStr) {
		return CkEmail_LoadXmlString($this->_cPtr,$xmlStr);
	}

	function qEncodeBytes($inData,$charset) {
		return CkEmail_qEncodeBytes($this->_cPtr,$inData,$charset);
	}

	function qEncodeString($str,$charset) {
		return CkEmail_qEncodeString($this->_cPtr,$str,$charset);
	}

	function RemoveAttachedMessage($idx) {
		CkEmail_RemoveAttachedMessage($this->_cPtr,$idx);
	}

	function RemoveAttachedMessages() {
		CkEmail_RemoveAttachedMessages($this->_cPtr);
	}

	function RemoveAttachmentPaths() {
		CkEmail_RemoveAttachmentPaths($this->_cPtr);
	}

	function RemoveHeaderField($fieldName) {
		CkEmail_RemoveHeaderField($this->_cPtr,$fieldName);
	}

	function RemoveHtmlAlternative() {
		CkEmail_RemoveHtmlAlternative($this->_cPtr);
	}

	function RemovePlainTextAlternative() {
		CkEmail_RemovePlainTextAlternative($this->_cPtr);
	}

	function SaveAllAttachments($dirPath) {
		return CkEmail_SaveAllAttachments($this->_cPtr,$dirPath);
	}

	function SaveAttachedFile($index,$dirPath) {
		return CkEmail_SaveAttachedFile($this->_cPtr,$index,$dirPath);
	}

	function SaveEml($emlFilePath) {
		return CkEmail_SaveEml($this->_cPtr,$emlFilePath);
	}

	function SaveLastError($path) {
		return CkEmail_SaveLastError($this->_cPtr,$path);
	}

	function SaveRelatedItem($index,$dirPath) {
		return CkEmail_SaveRelatedItem($this->_cPtr,$index,$dirPath);
	}

	function SaveXml($path) {
		return CkEmail_SaveXml($this->_cPtr,$path);
	}

	function SetAttachmentCharset($index,$charset) {
		return CkEmail_SetAttachmentCharset($this->_cPtr,$index,$charset);
	}

	function SetAttachmentDisposition($index,$disposition) {
		return CkEmail_SetAttachmentDisposition($this->_cPtr,$index,$disposition);
	}

	function SetAttachmentFilename($index,$filename) {
		return CkEmail_SetAttachmentFilename($this->_cPtr,$index,$filename);
	}

	function SetBinaryBody($byteData,$contentType,$disposition,$filename) {
		return CkEmail_SetBinaryBody($this->_cPtr,$byteData,$contentType,$disposition,$filename);
	}

	function SetDecryptCert($cert) {
		return CkEmail_SetDecryptCert($this->_cPtr,$cert);
	}

	function SetDecryptCert2($cert,$key) {
		return CkEmail_SetDecryptCert2($this->_cPtr,$cert,$key);
	}

	function SetDt($dt) {
		return CkEmail_SetDt($this->_cPtr,$dt);
	}

	function SetEdifactBody($message,$name,$filename,$charset) {
		CkEmail_SetEdifactBody($this->_cPtr,$message,$name,$filename,$charset);
	}

	function SetEncryptCert($cert) {
		return CkEmail_SetEncryptCert($this->_cPtr,$cert);
	}

	function SetFromMimeBd($bindat) {
		return CkEmail_SetFromMimeBd($this->_cPtr,$bindat);
	}

	function SetFromMimeBytes($mimeBytes) {
		return CkEmail_SetFromMimeBytes($this->_cPtr,$mimeBytes);
	}

	function SetFromMimeBytes2($mimeBytes,$charset) {
		return CkEmail_SetFromMimeBytes2($this->_cPtr,$mimeBytes,$charset);
	}

	function SetFromMimeSb($sb) {
		return CkEmail_SetFromMimeSb($this->_cPtr,$sb);
	}

	function SetFromMimeText($mimeText) {
		return CkEmail_SetFromMimeText($this->_cPtr,$mimeText);
	}

	function SetFromXmlText($xmlStr) {
		return CkEmail_SetFromXmlText($this->_cPtr,$xmlStr);
	}

	function SetHtmlBody($html) {
		CkEmail_SetHtmlBody($this->_cPtr,$html);
	}

	function SetMbHtmlBody($charset,$inData) {
		return CkEmail_SetMbHtmlBody($this->_cPtr,$charset,$inData);
	}

	function SetMbPlainTextBody($charset,$inData) {
		return CkEmail_SetMbPlainTextBody($this->_cPtr,$charset,$inData);
	}

	function SetRelatedFilename($index,$path) {
		return CkEmail_SetRelatedFilename($this->_cPtr,$index,$path);
	}

	function SetReplacePattern($pattern,$replaceString) {
		return CkEmail_SetReplacePattern($this->_cPtr,$pattern,$replaceString);
	}

	function SetSigningCert($cert) {
		return CkEmail_SetSigningCert($this->_cPtr,$cert);
	}

	function SetSigningCert2($cert,$key) {
		return CkEmail_SetSigningCert2($this->_cPtr,$cert,$key);
	}

	function SetTextBody($bodyText,$contentType) {
		CkEmail_SetTextBody($this->_cPtr,$bodyText,$contentType);
	}

	function UidlEquals($e) {
		return CkEmail_UidlEquals($this->_cPtr,$e);
	}

	function UnpackHtml($unpackDir,$htmlFilename,$partsSubdir) {
		return CkEmail_UnpackHtml($this->_cPtr,$unpackDir,$htmlFilename,$partsSubdir);
	}

	function UnSpamify() {
		CkEmail_UnSpamify($this->_cPtr);
	}

	function UnzipAttachments() {
		return CkEmail_UnzipAttachments($this->_cPtr);
	}

	function UseCertVault($vault) {
		return CkEmail_UseCertVault($this->_cPtr,$vault);
	}

	function ZipAttachments($zipFilename) {
		return CkEmail_ZipAttachments($this->_cPtr,$zipFilename);
	}
}


?>