<?php
class CkZipProgress {

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
		if (is_resource($res) && get_resource_type($res) === '_p_CkZipProgress') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkZipProgress();
	}

	function DirToBeAdded($filePath) {
		return CkZipProgress_DirToBeAdded($this->_cPtr,$filePath);
	}

	function ToBeAdded($filePath,$fileSize) {
		return CkZipProgress_ToBeAdded($this->_cPtr,$filePath,$fileSize);
	}

	function FileAdded($filePath,$fileSize) {
		return CkZipProgress_FileAdded($this->_cPtr,$filePath,$fileSize);
	}

	function ToBeZipped($filePath,$fileSize) {
		return CkZipProgress_ToBeZipped($this->_cPtr,$filePath,$fileSize);
	}

	function FileZipped($filePath,$fileSize,$compressedSize) {
		return CkZipProgress_FileZipped($this->_cPtr,$filePath,$fileSize,$compressedSize);
	}

	function ToBeUnzipped($filePath,$compressedSize,$fileSize,$isDirectory) {
		return CkZipProgress_ToBeUnzipped($this->_cPtr,$filePath,$compressedSize,$fileSize,$isDirectory);
	}

	function FileUnzipped($filePath,$compressedSize,$fileSize,$isDirectory) {
		return CkZipProgress_FileUnzipped($this->_cPtr,$filePath,$compressedSize,$fileSize,$isDirectory);
	}

	function SkippedForUnzip($filePath,$compressedSize,$fileSize,$isDirectory) {
		CkZipProgress_SkippedForUnzip($this->_cPtr,$filePath,$compressedSize,$fileSize,$isDirectory);
	}

	function AddFilesBegin() {
		CkZipProgress_AddFilesBegin($this->_cPtr);
	}

	function AddFilesEnd() {
		CkZipProgress_AddFilesEnd($this->_cPtr);
	}

	function WriteZipBegin() {
		CkZipProgress_WriteZipBegin($this->_cPtr);
	}

	function WriteZipEnd() {
		CkZipProgress_WriteZipEnd($this->_cPtr);
	}

	function UnzipBegin() {
		CkZipProgress_UnzipBegin($this->_cPtr);
	}

	function UnzipEnd() {
		CkZipProgress_UnzipEnd($this->_cPtr);
	}
}


?>