<?php
class CkXmp {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkXmp') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkXmp();
	}

	function get_Utf8() {
		return CkXmp_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkXmp_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkXmp_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkXmp_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkXmp_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkXmp_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkXmp_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkXmp_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkXmp_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkXmp_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkXmp_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkXmp_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkXmp_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_NumEmbedded() {
		return CkXmp_get_NumEmbedded($this->_cPtr);
	}

	function get_StructInnerDescrip() {
		return CkXmp_get_StructInnerDescrip($this->_cPtr);
	}

	function put_StructInnerDescrip($newVal) {
		CkXmp_put_StructInnerDescrip($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkXmp_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkXmp_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkXmp_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkXmp_version($this->_cPtr);
	}

	function AddArray($xml,$arrType,$propName,$values) {
		return CkXmp_AddArray($this->_cPtr,$xml,$arrType,$propName,$values);
	}

	function AddNsMapping($ns,$uri) {
		CkXmp_AddNsMapping($this->_cPtr,$ns,$uri);
	}

	function AddSimpleDate($iXml,$propName,$propVal) {
		return CkXmp_AddSimpleDate($this->_cPtr,$iXml,$propName,$propVal);
	}

	function AddSimpleInt($iXml,$propName,$propVal) {
		return CkXmp_AddSimpleInt($this->_cPtr,$iXml,$propName,$propVal);
	}

	function AddSimpleStr($iXml,$propName,$propVal) {
		return CkXmp_AddSimpleStr($this->_cPtr,$iXml,$propName,$propVal);
	}

	function AddStructProp($iChilkatXml,$structName,$propName,$propValue) {
		return CkXmp_AddStructProp($this->_cPtr,$iChilkatXml,$structName,$propName,$propValue);
	}

	function Append($iXml) {
		return CkXmp_Append($this->_cPtr,$iXml);
	}

	function dateToString($d) {
		return CkXmp_dateToString($this->_cPtr,$d);
	}

	function GetArray($iXml,$propName) {
		$r=CkXmp_GetArray($this->_cPtr,$iXml,$propName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function GetEmbedded($index) {
		$r=CkXmp_GetEmbedded($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkXml($r);
		}
		return $r;
	}

	function GetProperty($iXml,$propName) {
		$r=CkXmp_GetProperty($this->_cPtr,$iXml,$propName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkXml($r);
		}
		return $r;
	}

	function GetSimpleDate($iXml,$propName,$outSysTime) {
		return CkXmp_GetSimpleDate($this->_cPtr,$iXml,$propName,$outSysTime);
	}

	function GetSimpleInt($iXml,$propName) {
		return CkXmp_GetSimpleInt($this->_cPtr,$iXml,$propName);
	}

	function getSimpleStr($iXml,$propName) {
		return CkXmp_getSimpleStr($this->_cPtr,$iXml,$propName);
	}

	function simpleStr($iXml,$propName) {
		return CkXmp_simpleStr($this->_cPtr,$iXml,$propName);
	}

	function GetStructPropNames($iXml,$structName) {
		$r=CkXmp_GetStructPropNames($this->_cPtr,$iXml,$structName);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkStringArray($r);
		}
		return $r;
	}

	function getStructValue($iXml,$structName,$propName) {
		return CkXmp_getStructValue($this->_cPtr,$iXml,$structName,$propName);
	}

	function structValue($iXml,$structName,$propName) {
		return CkXmp_structValue($this->_cPtr,$iXml,$structName,$propName);
	}

	function LoadAppFile($filename) {
		return CkXmp_LoadAppFile($this->_cPtr,$filename);
	}

	function LoadFromBuffer($fileData,$ext) {
		return CkXmp_LoadFromBuffer($this->_cPtr,$fileData,$ext);
	}

	function NewXmp() {
		$r=CkXmp_NewXmp($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkXml($r);
		}
		return $r;
	}

	function RemoveAllEmbedded() {
		return CkXmp_RemoveAllEmbedded($this->_cPtr);
	}

	function RemoveArray($iXml,$propName) {
		return CkXmp_RemoveArray($this->_cPtr,$iXml,$propName);
	}

	function RemoveEmbedded($index) {
		return CkXmp_RemoveEmbedded($this->_cPtr,$index);
	}

	function RemoveNsMapping($ns) {
		CkXmp_RemoveNsMapping($this->_cPtr,$ns);
	}

	function RemoveSimple($iXml,$propName) {
		return CkXmp_RemoveSimple($this->_cPtr,$iXml,$propName);
	}

	function RemoveStruct($iXml,$structName) {
		return CkXmp_RemoveStruct($this->_cPtr,$iXml,$structName);
	}

	function RemoveStructProp($iXml,$structName,$propName) {
		return CkXmp_RemoveStructProp($this->_cPtr,$iXml,$structName,$propName);
	}

	function SaveAppFile($filename) {
		return CkXmp_SaveAppFile($this->_cPtr,$filename);
	}

	function SaveLastError($path) {
		return CkXmp_SaveLastError($this->_cPtr,$path);
	}

	function SaveToBuffer($outBytes) {
		return CkXmp_SaveToBuffer($this->_cPtr,$outBytes);
	}

	function StringToDate($str,$outSysTime) {
		return CkXmp_StringToDate($this->_cPtr,$str,$outSysTime);
	}

	function UnlockComponent($unlockCode) {
		return CkXmp_UnlockComponent($this->_cPtr,$unlockCode);
	}
}


?>