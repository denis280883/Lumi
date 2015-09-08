<?php
class Request{

	public $url;	// URL call by user
	public $page = 1;

	function __construct(){
		$this->url = $_SERVER['PATH_INFO'];//isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';
		$this->page = 1;
		if(isset($_GET['page'])){
			if(is_numeric($_GET['page'])){
				$this->page = round($_GET['page']);
			}
		}
 	}
}