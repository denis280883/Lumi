<?php
class Dispatcher{

	var $request;

	function __construct(){
		$this->request = new Request();
		Router::parse($this->request->url);
 	}

}