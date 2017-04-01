<?php
class CkUrl {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkUrl') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkUrl();
	}

	function get_Utf8() {
		return CkUrl_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkUrl_put_Utf8($this->_cPtr,$b);
	}

	function get_Frag($str) {
		CkUrl_get_Frag($this->_cPtr,$str);
	}

	function frag() {
		return CkUrl_frag($this->_cPtr);
	}

	function get_Host($str) {
		CkUrl_get_Host($this->_cPtr,$str);
	}

	function host() {
		return CkUrl_host($this->_cPtr);
	}

	function get_HostType($str) {
		CkUrl_get_HostType($this->_cPtr,$str);
	}

	function hostType() {
		return CkUrl_hostType($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkUrl_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkUrl_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_Login($str) {
		CkUrl_get_Login($this->_cPtr,$str);
	}

	function login() {
		return CkUrl_login($this->_cPtr);
	}

	function get_Password($str) {
		CkUrl_get_Password($this->_cPtr,$str);
	}

	function password() {
		return CkUrl_password($this->_cPtr);
	}

	function get_Path($str) {
		CkUrl_get_Path($this->_cPtr,$str);
	}

	function path() {
		return CkUrl_path($this->_cPtr);
	}

	function get_PathWithQueryParams($str) {
		CkUrl_get_PathWithQueryParams($this->_cPtr,$str);
	}

	function pathWithQueryParams() {
		return CkUrl_pathWithQueryParams($this->_cPtr);
	}

	function get_Port() {
		return CkUrl_get_Port($this->_cPtr);
	}

	function get_Query($str) {
		CkUrl_get_Query($this->_cPtr,$str);
	}

	function query() {
		return CkUrl_query($this->_cPtr);
	}

	function get_Ssl() {
		return CkUrl_get_Ssl($this->_cPtr);
	}

	function ParseUrl($url) {
		return CkUrl_ParseUrl($this->_cPtr,$url);
	}
}


?>