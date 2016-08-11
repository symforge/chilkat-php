<?php
class CkHttpProgress {

	public $_cPtr=null;

	function __set($var,$value) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr,$value);
		CkBaseProgress::__set($var,$value);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
		return CkBaseProgress::__get($var);
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return CkBaseProgress::__isset($var);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_CkHttpProgress') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkHttpProgress();
	}

	function HttpRedirect($originalUrl,$redirectUrl) {
		return CkHttpProgress_HttpRedirect($this->_cPtr,$originalUrl,$redirectUrl);
	}

	function HttpChunked() {
		CkHttpProgress_HttpChunked($this->_cPtr);
	}

	function HttpBeginReceive() {
		CkHttpProgress_HttpBeginReceive($this->_cPtr);
	}

	function HttpEndReceive($success) {
		CkHttpProgress_HttpEndReceive($this->_cPtr,$success);
	}

	function HttpBeginSend() {
		CkHttpProgress_HttpBeginSend($this->_cPtr);
	}

	function HttpEndSend($success) {
		CkHttpProgress_HttpEndSend($this->_cPtr,$success);
	}

	function ReceiveRate($byteCount,$bytesPerSec) {
		CkHttpProgress_ReceiveRate($this->_cPtr,$byteCount,$bytesPerSec);
	}

	function SendRate($byteCount,$bytesPerSec) {
		CkHttpProgress_SendRate($this->_cPtr,$byteCount,$bytesPerSec);
	}
}


?>