<?php
class CkZipCrc {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkZipCrc') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkZipCrc();
	}

	function get_Utf8() {
		return CkZipCrc_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkZipCrc_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkZipCrc_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function BeginStream() {
		CkZipCrc_BeginStream($this->_cPtr);
	}

	function CalculateCrc($data) {
		return CkZipCrc_CalculateCrc($this->_cPtr,$data);
	}

	function EndStream() {
		return CkZipCrc_EndStream($this->_cPtr);
	}

	function FileCrc($path) {
		return CkZipCrc_FileCrc($this->_cPtr,$path);
	}

	function FileCrcAsync($path) {
		$r=CkZipCrc_FileCrcAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function MoreData($data) {
		CkZipCrc_MoreData($this->_cPtr,$data);
	}

	function toHex($crc) {
		return CkZipCrc_toHex($this->_cPtr,$crc);
	}
}


?>