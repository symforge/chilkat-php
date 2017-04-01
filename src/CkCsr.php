<?php
class CkCsr {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCsr') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCsr();
	}

	function get_Utf8() {
		return CkCsr_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCsr_put_Utf8($this->_cPtr,$b);
	}

	function get_CommonName($str) {
		CkCsr_get_CommonName($this->_cPtr,$str);
	}

	function commonName() {
		return CkCsr_commonName($this->_cPtr);
	}

	function put_CommonName($newVal) {
		CkCsr_put_CommonName($this->_cPtr,$newVal);
	}

	function get_Company($str) {
		CkCsr_get_Company($this->_cPtr,$str);
	}

	function company() {
		return CkCsr_company($this->_cPtr);
	}

	function put_Company($newVal) {
		CkCsr_put_Company($this->_cPtr,$newVal);
	}

	function get_CompanyDivision($str) {
		CkCsr_get_CompanyDivision($this->_cPtr,$str);
	}

	function companyDivision() {
		return CkCsr_companyDivision($this->_cPtr);
	}

	function put_CompanyDivision($newVal) {
		CkCsr_put_CompanyDivision($this->_cPtr,$newVal);
	}

	function get_Country($str) {
		CkCsr_get_Country($this->_cPtr,$str);
	}

	function country() {
		return CkCsr_country($this->_cPtr);
	}

	function put_Country($newVal) {
		CkCsr_put_Country($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkCsr_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkCsr_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkCsr_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_EmailAddress($str) {
		CkCsr_get_EmailAddress($this->_cPtr,$str);
	}

	function emailAddress() {
		return CkCsr_emailAddress($this->_cPtr);
	}

	function put_EmailAddress($newVal) {
		CkCsr_put_EmailAddress($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkCsr_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkCsr_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkCsr_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkCsr_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkCsr_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkCsr_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkCsr_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkCsr_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Locality($str) {
		CkCsr_get_Locality($this->_cPtr,$str);
	}

	function locality() {
		return CkCsr_locality($this->_cPtr);
	}

	function put_Locality($newVal) {
		CkCsr_put_Locality($this->_cPtr,$newVal);
	}

	function get_State($str) {
		CkCsr_get_State($this->_cPtr,$str);
	}

	function state() {
		return CkCsr_state($this->_cPtr);
	}

	function put_State($newVal) {
		CkCsr_put_State($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkCsr_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkCsr_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkCsr_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkCsr_version($this->_cPtr);
	}

	function GenCsrBd($privKey,$csrData) {
		return CkCsr_GenCsrBd($this->_cPtr,$privKey,$csrData);
	}

	function genCsrPem($privKey) {
		return CkCsr_genCsrPem($this->_cPtr,$privKey);
	}

	function getSubjectField($oid) {
		return CkCsr_getSubjectField($this->_cPtr,$oid);
	}

	function subjectField($oid) {
		return CkCsr_subjectField($this->_cPtr,$oid);
	}

	function LoadCsrPem($csrPemStr) {
		return CkCsr_LoadCsrPem($this->_cPtr,$csrPemStr);
	}

	function SaveLastError($path) {
		return CkCsr_SaveLastError($this->_cPtr,$path);
	}

	function SetSubjectField($oid,$value,$asnType) {
		return CkCsr_SetSubjectField($this->_cPtr,$oid,$value,$asnType);
	}
}


?>