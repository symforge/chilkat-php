<?php
class CkCert {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCert') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCert();
	}

	function get_Utf8() {
		return CkCert_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCert_put_Utf8($this->_cPtr,$b);
	}

	function get_AuthorityKeyId($str) {
		CkCert_get_AuthorityKeyId($this->_cPtr,$str);
	}

	function authorityKeyId() {
		return CkCert_authorityKeyId($this->_cPtr);
	}

	function get_AvoidWindowsPkAccess() {
		return CkCert_get_AvoidWindowsPkAccess($this->_cPtr);
	}

	function put_AvoidWindowsPkAccess($newVal) {
		CkCert_put_AvoidWindowsPkAccess($this->_cPtr,$newVal);
	}

	function get_CertVersion() {
		return CkCert_get_CertVersion($this->_cPtr);
	}

	function get_CspName($str) {
		CkCert_get_CspName($this->_cPtr,$str);
	}

	function cspName() {
		return CkCert_cspName($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkCert_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkCert_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkCert_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_Expired() {
		return CkCert_get_Expired($this->_cPtr);
	}

	function get_ForClientAuthentication() {
		return CkCert_get_ForClientAuthentication($this->_cPtr);
	}

	function get_ForCodeSigning() {
		return CkCert_get_ForCodeSigning($this->_cPtr);
	}

	function get_ForSecureEmail() {
		return CkCert_get_ForSecureEmail($this->_cPtr);
	}

	function get_ForServerAuthentication() {
		return CkCert_get_ForServerAuthentication($this->_cPtr);
	}

	function get_ForTimeStamping() {
		return CkCert_get_ForTimeStamping($this->_cPtr);
	}

	function get_HasKeyContainer() {
		return CkCert_get_HasKeyContainer($this->_cPtr);
	}

	function get_IntendedKeyUsage() {
		return CkCert_get_IntendedKeyUsage($this->_cPtr);
	}

	function get_IsRoot() {
		return CkCert_get_IsRoot($this->_cPtr);
	}

	function get_IssuerC($str) {
		CkCert_get_IssuerC($this->_cPtr,$str);
	}

	function issuerC() {
		return CkCert_issuerC($this->_cPtr);
	}

	function get_IssuerCN($str) {
		CkCert_get_IssuerCN($this->_cPtr,$str);
	}

	function issuerCN() {
		return CkCert_issuerCN($this->_cPtr);
	}

	function get_IssuerDN($str) {
		CkCert_get_IssuerDN($this->_cPtr,$str);
	}

	function issuerDN() {
		return CkCert_issuerDN($this->_cPtr);
	}

	function get_IssuerE($str) {
		CkCert_get_IssuerE($this->_cPtr,$str);
	}

	function issuerE() {
		return CkCert_issuerE($this->_cPtr);
	}

	function get_IssuerL($str) {
		CkCert_get_IssuerL($this->_cPtr,$str);
	}

	function issuerL() {
		return CkCert_issuerL($this->_cPtr);
	}

	function get_IssuerO($str) {
		CkCert_get_IssuerO($this->_cPtr,$str);
	}

	function issuerO() {
		return CkCert_issuerO($this->_cPtr);
	}

	function get_IssuerOU($str) {
		CkCert_get_IssuerOU($this->_cPtr,$str);
	}

	function issuerOU() {
		return CkCert_issuerOU($this->_cPtr);
	}

	function get_IssuerS($str) {
		CkCert_get_IssuerS($this->_cPtr,$str);
	}

	function issuerS() {
		return CkCert_issuerS($this->_cPtr);
	}

	function get_KeyContainerName($str) {
		CkCert_get_KeyContainerName($this->_cPtr,$str);
	}

	function keyContainerName() {
		return CkCert_keyContainerName($this->_cPtr);
	}

	function get_LastErrorHtml($str) {
		CkCert_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkCert_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkCert_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkCert_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkCert_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkCert_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkCert_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkCert_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_MachineKeyset() {
		return CkCert_get_MachineKeyset($this->_cPtr);
	}

	function get_OcspUrl($str) {
		CkCert_get_OcspUrl($this->_cPtr,$str);
	}

	function ocspUrl() {
		return CkCert_ocspUrl($this->_cPtr);
	}

	function get_PrivateKeyExportable() {
		return CkCert_get_PrivateKeyExportable($this->_cPtr);
	}

	function get_Revoked() {
		return CkCert_get_Revoked($this->_cPtr);
	}

	function get_Rfc822Name($str) {
		CkCert_get_Rfc822Name($this->_cPtr,$str);
	}

	function rfc822Name() {
		return CkCert_rfc822Name($this->_cPtr);
	}

	function get_SelfSigned() {
		return CkCert_get_SelfSigned($this->_cPtr);
	}

	function get_SerialNumber($str) {
		CkCert_get_SerialNumber($this->_cPtr,$str);
	}

	function serialNumber() {
		return CkCert_serialNumber($this->_cPtr);
	}

	function get_Sha1Thumbprint($str) {
		CkCert_get_Sha1Thumbprint($this->_cPtr,$str);
	}

	function sha1Thumbprint() {
		return CkCert_sha1Thumbprint($this->_cPtr);
	}

	function get_SignatureVerified() {
		return CkCert_get_SignatureVerified($this->_cPtr);
	}

	function get_Silent() {
		return CkCert_get_Silent($this->_cPtr);
	}

	function get_SubjectC($str) {
		CkCert_get_SubjectC($this->_cPtr,$str);
	}

	function subjectC() {
		return CkCert_subjectC($this->_cPtr);
	}

	function get_SubjectCN($str) {
		CkCert_get_SubjectCN($this->_cPtr,$str);
	}

	function subjectCN() {
		return CkCert_subjectCN($this->_cPtr);
	}

	function get_SubjectDN($str) {
		CkCert_get_SubjectDN($this->_cPtr,$str);
	}

	function subjectDN() {
		return CkCert_subjectDN($this->_cPtr);
	}

	function get_SubjectE($str) {
		CkCert_get_SubjectE($this->_cPtr,$str);
	}

	function subjectE() {
		return CkCert_subjectE($this->_cPtr);
	}

	function get_SubjectKeyId($str) {
		CkCert_get_SubjectKeyId($this->_cPtr,$str);
	}

	function subjectKeyId() {
		return CkCert_subjectKeyId($this->_cPtr);
	}

	function get_SubjectL($str) {
		CkCert_get_SubjectL($this->_cPtr,$str);
	}

	function subjectL() {
		return CkCert_subjectL($this->_cPtr);
	}

	function get_SubjectO($str) {
		CkCert_get_SubjectO($this->_cPtr,$str);
	}

	function subjectO() {
		return CkCert_subjectO($this->_cPtr);
	}

	function get_SubjectOU($str) {
		CkCert_get_SubjectOU($this->_cPtr,$str);
	}

	function subjectOU() {
		return CkCert_subjectOU($this->_cPtr);
	}

	function get_SubjectS($str) {
		CkCert_get_SubjectS($this->_cPtr,$str);
	}

	function subjectS() {
		return CkCert_subjectS($this->_cPtr);
	}

	function get_TrustedRoot() {
		return CkCert_get_TrustedRoot($this->_cPtr);
	}

	function get_ValidFrom($outSysTime) {
		CkCert_get_ValidFrom($this->_cPtr,$outSysTime);
	}

	function get_ValidFromStr($str) {
		CkCert_get_ValidFromStr($this->_cPtr,$str);
	}

	function validFromStr() {
		return CkCert_validFromStr($this->_cPtr);
	}

	function get_ValidTo($outSysTime) {
		CkCert_get_ValidTo($this->_cPtr,$outSysTime);
	}

	function get_ValidToStr($str) {
		CkCert_get_ValidToStr($this->_cPtr,$str);
	}

	function validToStr() {
		return CkCert_validToStr($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkCert_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkCert_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkCert_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkCert_version($this->_cPtr);
	}

	function CheckRevoked() {
		return CkCert_CheckRevoked($this->_cPtr);
	}

	function ExportCertDer($outData) {
		return CkCert_ExportCertDer($this->_cPtr,$outData);
	}

	function ExportCertDerFile($path) {
		return CkCert_ExportCertDerFile($this->_cPtr,$path);
	}

	function exportCertPem() {
		return CkCert_exportCertPem($this->_cPtr);
	}

	function ExportCertPemFile($path) {
		return CkCert_ExportCertPemFile($this->_cPtr,$path);
	}

	function exportCertXml() {
		return CkCert_exportCertXml($this->_cPtr);
	}

	function ExportPrivateKey() {
		$r=CkCert_ExportPrivateKey($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPrivateKey($r);
		}
		return $r;
	}

	function ExportPublicKey() {
		$r=CkCert_ExportPublicKey($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkPublicKey($r);
		}
		return $r;
	}

	function ExportToPfxData($password,$includeCertChain,$outBytes) {
		return CkCert_ExportToPfxData($this->_cPtr,$password,$includeCertChain,$outBytes);
	}

	function ExportToPfxFile($pfxFilename,$pfxPassword,$bIncludeCertChain) {
		return CkCert_ExportToPfxFile($this->_cPtr,$pfxFilename,$pfxPassword,$bIncludeCertChain);
	}

	function FindIssuer() {
		$r=CkCert_FindIssuer($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCert($r);
		}
		return $r;
	}

	function GetCertChain() {
		$r=CkCert_GetCertChain($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertChain($r);
		}
		return $r;
	}

	function getEncoded() {
		return CkCert_getEncoded($this->_cPtr);
	}

	function encoded() {
		return CkCert_encoded($this->_cPtr);
	}

	function getExtensionAsXml($oid) {
		return CkCert_getExtensionAsXml($this->_cPtr,$oid);
	}

	function extensionAsXml($oid) {
		return CkCert_extensionAsXml($this->_cPtr,$oid);
	}

	function getPrivateKeyPem() {
		return CkCert_getPrivateKeyPem($this->_cPtr);
	}

	function privateKeyPem() {
		return CkCert_privateKeyPem($this->_cPtr);
	}

	function getSpkiFingerprint($hashAlg,$encoding) {
		return CkCert_getSpkiFingerprint($this->_cPtr,$hashAlg,$encoding);
	}

	function spkiFingerprint($hashAlg,$encoding) {
		return CkCert_spkiFingerprint($this->_cPtr,$hashAlg,$encoding);
	}

	function GetValidFromDt() {
		$r=CkCert_GetValidFromDt($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function GetValidToDt() {
		$r=CkCert_GetValidToDt($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDateTime($r);
		}
		return $r;
	}

	function HasPrivateKey() {
		return CkCert_HasPrivateKey($this->_cPtr);
	}

	function LoadByCommonName($cn) {
		return CkCert_LoadByCommonName($this->_cPtr,$cn);
	}

	function LoadByEmailAddress($emailAddress) {
		return CkCert_LoadByEmailAddress($this->_cPtr,$emailAddress);
	}

	function LoadByIssuerAndSerialNumber($issuerCN,$serialNumber) {
		return CkCert_LoadByIssuerAndSerialNumber($this->_cPtr,$issuerCN,$serialNumber);
	}

	function LoadFromBase64($encodedCert) {
		return CkCert_LoadFromBase64($this->_cPtr,$encodedCert);
	}

	function LoadFromBinary($data) {
		return CkCert_LoadFromBinary($this->_cPtr,$data);
	}

	function LoadFromFile($path) {
		return CkCert_LoadFromFile($this->_cPtr,$path);
	}

	function LoadPem($strPem) {
		return CkCert_LoadPem($this->_cPtr,$strPem);
	}

	function LoadPfxData($pfxData,$password) {
		return CkCert_LoadPfxData($this->_cPtr,$pfxData,$password);
	}

	function LoadPfxFile($pfxPath,$password) {
		return CkCert_LoadPfxFile($this->_cPtr,$pfxPath,$password);
	}

	function LoadTaskResult($task) {
		return CkCert_LoadTaskResult($this->_cPtr,$task);
	}

	function PemFileToDerFile($fromPath,$toPath) {
		return CkCert_PemFileToDerFile($this->_cPtr,$fromPath,$toPath);
	}

	function SaveLastError($path) {
		return CkCert_SaveLastError($this->_cPtr,$path);
	}

	function SaveToFile($path) {
		return CkCert_SaveToFile($this->_cPtr,$path);
	}

	function SetFromEncoded($encodedCert) {
		return CkCert_SetFromEncoded($this->_cPtr,$encodedCert);
	}

	function SetPrivateKey($privKey) {
		return CkCert_SetPrivateKey($this->_cPtr,$privKey);
	}

	function SetPrivateKeyPem($privKeyPem) {
		return CkCert_SetPrivateKeyPem($this->_cPtr,$privKeyPem);
	}

	function UseCertVault($vault) {
		return CkCert_UseCertVault($this->_cPtr,$vault);
	}

	function VerifySignature() {
		return CkCert_VerifySignature($this->_cPtr);
	}
}


?>