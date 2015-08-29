<?php
class Dispatcher{

	var $request;

	function __construct(){
		$this->request = new Request();
		Router::parse($this->request->url,$this->request);
		$controller = $this->loadController();
		print_r($this->request->action);
		call_user_func_array(array($controller,$this->request->action), $this->request->params);

 	}

 	function loadController(){
 		$name = ucfirst($this->request->controller).'Controller';
 		$file = ROOT.DS.'controller'.DS.$name.'.php';
 		require $file; 
 		return new $name($this->request);
 	}
}
?>