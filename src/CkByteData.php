<?php
class CkByteData {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkByteData') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkByteData();
	}

	function get_Utf8() {
		return CkByteData_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkByteData_put_Utf8($this->_cPtr,$b);
	}

	function getRange($index,$numBytes) {
		return CkByteData_getRange($this->_cPtr,$index,$numBytes);
	}

	function getRangeStr($index,$numAnsiChars) {
		return CkByteData_getRangeStr($this->_cPtr,$index,$numAnsiChars);
	}

	function to_s() {
		return CkByteData_to_s($this->_cPtr);
	}

	function appendRandom($numBytes) {
		CkByteData_appendRandom($this->_cPtr,$numBytes);
	}

	function appendInt($v,$littleEndian) {
		CkByteData_appendInt($this->_cPtr,$v,$littleEndian);
	}

	function appendShort($v,$littleEndian) {
		CkByteData_appendShort($this->_cPtr,$v,$littleEndian);
	}

	function getEncodedRange($encoding,$index,$numBytes) {
		return CkByteData_getEncodedRange($this->_cPtr,$encoding,$index,$numBytes);
	}

	function appendRange($byteData,$index,$numBytes) {
		CkByteData_appendRange($this->_cPtr,$byteData,$index,$numBytes);
	}

	function ensureBuffer($numBytes) {
		CkByteData_ensureBuffer($this->_cPtr,$numBytes);
	}

	function findBytes2($byteData,$byteDataLen) {
		return CkByteData_findBytes2($this->_cPtr,$byteData,$byteDataLen);
	}

	function findBytes($byteData) {
		return CkByteData_findBytes($this->_cPtr,$byteData);
	}

	function beginsWith2($byteData,$byteDataLen) {
		return CkByteData_beginsWith2($this->_cPtr,$byteData,$byteDataLen);
	}

	function beginsWith($byteData) {
		return CkByteData_beginsWith($this->_cPtr,$byteData);
	}

	function removeChunk($index,$numBytes) {
		CkByteData_removeChunk($this->_cPtr,$index,$numBytes);
	}

	function byteSwap4321() {
		CkByteData_byteSwap4321($this->_cPtr);
	}

	function pad($blockSize,$paddingScheme) {
		CkByteData_pad($this->_cPtr,$blockSize,$paddingScheme);
	}

	function unpad($blockSize,$paddingScheme) {
		CkByteData_unpad($this->_cPtr,$blockSize,$paddingScheme);
	}

	function is7bit() {
		return CkByteData_is7bit($this->_cPtr);
	}

	function clear() {
		CkByteData_clear($this->_cPtr);
	}

	function getSize() {
		return CkByteData_getSize($this->_cPtr);
	}

	function appendEncoded($str,$encoding) {
		CkByteData_appendEncoded($this->_cPtr,$str,$encoding);
	}

	function encode($encoding,$str) {
		CkByteData_encode($this->_cPtr,$encoding,$str);
	}

	function getData() {
		return CkByteData_getData($this->_cPtr);
	}

	function getBytes() {
		return CkByteData_getBytes($this->_cPtr);
	}

	function getEncoded($encoding) {
		return CkByteData_getEncoded($this->_cPtr,$encoding);
	}

	function append2($data,$numBytes) {
		CkByteData_append2($this->_cPtr,$data,$numBytes);
	}

	function equals2($data,$numBytes) {
		return CkByteData_equals2($this->_cPtr,$data,$numBytes);
	}

	function equals($db) {
		return CkByteData_equals($this->_cPtr,$db);
	}

	function appendStr($str) {
		CkByteData_appendStr($this->_cPtr,$str);
	}

	function appendChar($ch) {
		CkByteData_appendChar($this->_cPtr,$ch);
	}

	function getByte($byteIndex) {
		return CkByteData_getByte($this->_cPtr,$byteIndex);
	}

	function getChar($byteIndex) {
		return CkByteData_getChar($this->_cPtr,$byteIndex);
	}

	function getUInt($byteIndex) {
		return CkByteData_getUInt($this->_cPtr,$byteIndex);
	}

	function getInt($byteIndex) {
		return CkByteData_getInt($this->_cPtr,$byteIndex);
	}

	function getUShort($byteIndex) {
		return CkByteData_getUShort($this->_cPtr,$byteIndex);
	}

	function getShort($byteIndex) {
		return CkByteData_getShort($this->_cPtr,$byteIndex);
	}

	function loadFile($filename) {
		return CkByteData_loadFile($this->_cPtr,$filename);
	}

	function saveFile($filename) {
		return CkByteData_saveFile($this->_cPtr,$filename);
	}

	function appendFile($filename) {
		return CkByteData_appendFile($this->_cPtr,$filename);
	}

	function shorten($numBytes) {
		CkByteData_shorten($this->_cPtr,$numBytes);
	}
}


?>