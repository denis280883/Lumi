<?php
class Dispatcher{

	var $request;

	function __construct(){
		$this->request = new Request();
		Router::parse($this->request->url,$this->request);
		$controller = $this->loadController();
		$controller->view();

 	}

 	function loadController(){
 		$name = ucfirst($this->request->controller).'PagesController';
 		$file = ROOT.DS.'controller'.DS.$name.'.php';
 		require $file; 
 		return new $name($this->request);
 	}
}
?>