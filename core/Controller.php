<?php
/**
* Controller
**/
class Controller{

	public $request;
	private $vars     = array();
	public $layout 	  = 'default';
	private $rendered = false;

	/**
	* Constructeur
	* @param $request Objet request de notre application
	**/
	function __construct($request = null){
 		$this->Session = new Session();
 		$this->Form = new Form($this);

		if($request){
			$this->request = $request;	
			require ROOT.DS.'config'.DS.'hook.php';
		}
		
	}


   /**
	* Could to have a view
	* @param $view File (path since view or name's view)
    **/

	public function render($view){
		if($this->rendered){ return false; }
		extract($this->vars);
		if(strpos($view,'/')===0){
			$view = ROOT.DS.'view'.$view.'.php';
		}else{
			$view = ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
		}
		ob_start();
		require($view);
		$content_for_layout = ob_get_clean();
		require ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php';
		$this->rendered = true;
	}


	/**
	* Permet de passer une ou plusieurs variable à la vue
	* @param $key nom de la variable OU tableau de variables
	* @param $value Valeur de la variable
	**/
	public function set($key,$value=null){
		if(is_array($key)){
			$this->vars += $key;
		}else{
			$this->vars[$key] = $value;
		}
	}

	/**
	*Could to load model
	*/
	function loadModel($name){
		$file = ROOT.DS.'model'.DS.$name.'.php';
		require_once($file);
		if(!isset($this->$name)){
			$this->$name = new $name();
			if(isset($this->Form)){
				$this->$name->Form = $this->Form;
			}
		} else{
			echo 'pas chargé';
		}
	}

	/**
	*Could manage error 404
	*/
	function e404($message){
		header("HTTP/1.0 404 Not Found");
		$this->set('message',$message);
		$this->render('/errors/404');
		die();
	}

	/**
	*Could call controller since a view
	**/
	function request($controller,$action){
		$controller .= 'Controller';
		require_once ROOT.DS.'controller'.DS.$controller.'.php';
		$c = new $controller();
		return $c->$action();

	}

	/**
	* Redirect
	**/
	function redirect($url,$code = null ){
		if($code == 301){
			header("HTTP/1.1 301 Moved Permanently");
		}
		header("Location: ".Router::url($url));
	}
}
?>