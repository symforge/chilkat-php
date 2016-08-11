<?php
class CkCreateCS {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkCreateCS') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkCreateCS();
	}

	function lastErrorText() {
		return CkCreateCS_lastErrorText($this->_cPtr);
	}

	function lastErrorXml() {
		return CkCreateCS_lastErrorXml($this->_cPtr);
	}

	function lastErrorHtml() {
		return CkCreateCS_lastErrorHtml($this->_cPtr);
	}

	function get_Utf8() {
		return CkCreateCS_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkCreateCS_put_Utf8($this->_cPtr,$b);
	}

	function get_ReadOnly() {
		return CkCreateCS_get_ReadOnly($this->_cPtr);
	}

	function put_ReadOnly($newVal) {
		CkCreateCS_put_ReadOnly($this->_cPtr,$newVal);
	}

	function get_Version($version) {
		CkCreateCS_get_Version($this->_cPtr,$version);
	}

	function CreateRegistryStore($regRoot,$regPath) {
		$r=CkCreateCS_CreateRegistryStore($this->_cPtr,$regRoot,$regPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function OpenRegistryStore($regRoot,$regPath) {
		$r=CkCreateCS_OpenRegistryStore($this->_cPtr,$regRoot,$regPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function CreateFileStore($filename) {
		$r=CkCreateCS_CreateFileStore($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function OpenFileStore($filename) {
		$r=CkCreateCS_OpenFileStore($this->_cPtr,$filename);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function CreateMemoryStore() {
		$r=CkCreateCS_CreateMemoryStore($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function OpenChilkatStore() {
		$r=CkCreateCS_OpenChilkatStore($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function OpenOutlookStore() {
		$r=CkCreateCS_OpenOutlookStore($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function OpenLocalSystemStore() {
		$r=CkCreateCS_OpenLocalSystemStore($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function OpenCurrentUserStore() {
		$r=CkCreateCS_OpenCurrentUserStore($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkCertStore($r);
		}
		return $r;
	}

	function SaveLastError($filename) {
		return CkCreateCS_SaveLastError($this->_cPtr,$filename);
	}
}


?>