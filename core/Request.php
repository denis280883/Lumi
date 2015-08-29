<?php
class Request{

	public $url;	// URL call by user

	function __construct(){
		$this->url = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';
 	}
}