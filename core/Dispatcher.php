<?php
class Dispatcher{

	var $request;

	function __construct(){
		$this->request = new Request();
		Router::parse($this->request->url,$this->request);
		$controller = $this->loadController();
		if(!in_array($this->request->action, get_class_methods($controller))){
			$this->error('Le controller '.$this->request->controller.' n\'a pas de méthode '.$this->request->action);
		}

		call_user_func_array(array($controller,$this->request->action), $this->request->params);
		$controller->render($this->request->action);
 	}

 	function error($message){
		$controller = new Controller($this->request);
		$controller->e404($message);
	}

 	function loadController(){
 		$name = ucfirst($this->request->controller).'Controller';
 		$file = ROOT.DS.'controller'.DS.$name.'.php';
 		require $file; 
 		return new $name($this->request);
 	}
}
?>