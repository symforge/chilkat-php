<?php
class CkAsn {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkAsn') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkAsn();
	}

	function get_Utf8() {
		return CkAsn_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkAsn_put_Utf8($this->_cPtr,$b);
	}

	function get_LastErrorHtml($str) {
		CkAsn_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkAsn_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkAsn_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkAsn_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkAsn_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkAsn_lastErrorXml($this->_cPtr);
	}

	function get_Version($str) {
		CkAsn_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkAsn_version($this->_cPtr);
	}

	function get_DebugLogFilePath($str) {
		CkAsn_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkAsn_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkAsn_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkAsn_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkAsn_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_LastMethodSuccess() {
		return CkAsn_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkAsn_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function SaveLastError($path) {
		return CkAsn_SaveLastError($this->_cPtr,$path);
	}

	function get_BoolValue() {
		return CkAsn_get_BoolValue($this->_cPtr);
	}

	function put_BoolValue($newVal) {
		CkAsn_put_BoolValue($this->_cPtr,$newVal);
	}

	function get_Constructed() {
		return CkAsn_get_Constructed($this->_cPtr);
	}

	function get_ContentStr($str) {
		CkAsn_get_ContentStr($this->_cPtr,$str);
	}

	function contentStr() {
		return CkAsn_contentStr($this->_cPtr);
	}

	function put_ContentStr($newVal) {
		CkAsn_put_ContentStr($this->_cPtr,$newVal);
	}

	function get_IntValue() {
		return CkAsn_get_IntValue($this->_cPtr);
	}

	function put_IntValue($newVal) {
		CkAsn_put_IntValue($this->_cPtr,$newVal);
	}

	function get_NumSubItems() {
		return CkAsn_get_NumSubItems($this->_cPtr);
	}

	function get_Tag($str) {
		CkAsn_get_Tag($this->_cPtr,$str);
	}

	function tag() {
		return CkAsn_tag($this->_cPtr);
	}

	function get_TagValue() {
		return CkAsn_get_TagValue($this->_cPtr);
	}

	function AppendBigInt($encodedBytes,$encoding) {
		return CkAsn_AppendBigInt($this->_cPtr,$encodedBytes,$encoding);
	}

	function AppendBits($encodedBytes,$encoding) {
		return CkAsn_AppendBits($this->_cPtr,$encodedBytes,$encoding);
	}

	function AppendBool($value) {
		return CkAsn_AppendBool($this->_cPtr,$value);
	}

	function AppendContextConstructed($tag) {
		return CkAsn_AppendContextConstructed($this->_cPtr,$tag);
	}

	function AppendContextPrimitive($tag,$encodedBytes,$encoding) {
		return CkAsn_AppendContextPrimitive($this->_cPtr,$tag,$encodedBytes,$encoding);
	}

	function AppendInt($value) {
		return CkAsn_AppendInt($this->_cPtr,$value);
	}

	function AppendNull() {
		return CkAsn_AppendNull($this->_cPtr);
	}

	function AppendOctets($encodedBytes,$encoding) {
		return CkAsn_AppendOctets($this->_cPtr,$encodedBytes,$encoding);
	}

	function AppendOid($oid) {
		return CkAsn_AppendOid($this->_cPtr,$oid);
	}

	function AppendSequence() {
		return CkAsn_AppendSequence($this->_cPtr);
	}

	function AppendSequence2() {
		return CkAsn_AppendSequence2($this->_cPtr);
	}

	function AppendSequenceR() {
		$r=CkAsn_AppendSequenceR($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkAsn($r);
		}
		return $r;
	}

	function AppendSet() {
		return CkAsn_AppendSet($this->_cPtr);
	}

	function AppendSet2() {
		return CkAsn_AppendSet2($this->_cPtr);
	}

	function AppendSetR() {
		$r=CkAsn_AppendSetR($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkAsn($r);
		}
		return $r;
	}

	function AppendString($strType,$value) {
		return CkAsn_AppendString($this->_cPtr,$strType,$value);
	}

	function AppendTime($timeFormat,$dateTimeStr) {
		return CkAsn_AppendTime($this->_cPtr,$timeFormat,$dateTimeStr);
	}

	function asnToXml() {
		return CkAsn_asnToXml($this->_cPtr);
	}

	function DeleteSubItem($index) {
		return CkAsn_DeleteSubItem($this->_cPtr,$index);
	}

	function GetBinaryDer($outBytes) {
		return CkAsn_GetBinaryDer($this->_cPtr,$outBytes);
	}

	function getEncodedContent($encoding) {
		return CkAsn_getEncodedContent($this->_cPtr,$encoding);
	}

	function encodedContent($encoding) {
		return CkAsn_encodedContent($this->_cPtr,$encoding);
	}

	function getEncodedDer($encoding) {
		return CkAsn_getEncodedDer($this->_cPtr,$encoding);
	}

	function encodedDer($encoding) {
		return CkAsn_encodedDer($this->_cPtr,$encoding);
	}

	function GetLastSubItem() {
		$r=CkAsn_GetLastSubItem($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkAsn($r);
		}
		return $r;
	}

	function GetSubItem($index) {
		$r=CkAsn_GetSubItem($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkAsn($r);
		}
		return $r;
	}

	function LoadAsnXml($xmlStr) {
		return CkAsn_LoadAsnXml($this->_cPtr,$xmlStr);
	}

	function LoadBinary($derBytes) {
		return CkAsn_LoadBinary($this->_cPtr,$derBytes);
	}

	function LoadBinaryFile($path) {
		return CkAsn_LoadBinaryFile($this->_cPtr,$path);
	}

	function LoadEncoded($asnContent,$encoding) {
		return CkAsn_LoadEncoded($this->_cPtr,$asnContent,$encoding);
	}

	function SetEncodedContent($encodedBytes,$encoding) {
		return CkAsn_SetEncodedContent($this->_cPtr,$encodedBytes,$encoding);
	}

	function WriteBinaryDer($path) {
		return CkAsn_WriteBinaryDer($this->_cPtr,$path);
	}
}


?>