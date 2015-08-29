<?php
class Dispatcher{

	var $request;

	function __construct(){
		$this->request = new Request();
		Router::parse($this->request->url,$this->request);
		print_r($this->request);
 	}

}