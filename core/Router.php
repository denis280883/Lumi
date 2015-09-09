<?php
class Router{

	static $routes = array();


	/**
	*  Could to Parse an url
	* @param $url Url to parse
	* @return array contains params
	**/
	static function parse($url,$request){
		$usr = trim($url, '/');

		foreach (Router::$routes as $v) {
			if(preg_match($v['catcher'], $url,$match)){
				$request->controller = $v['controller'];
				$request->action = $v['action'];
				foreach ($v['params'] as $k=>$v) {
					$request->params[$k]=$match[$k];
				}
				return $request;
			}
		}
		$params = explode('/',$url);
		$request->controller = $params[1];
		$request->action = isset($params[2]) ? $params[2] : 'index';
		$request->params = array_slice($params,3);
		return true;
	}




	/**
	* Connect
	**/
	static function connect($redir,$url){
		$r = array();
		$r['params'] = array();
		
		$r['redir'] = $redir;
		$r['origin'] = preg_replace('/([a-z0-9]+):([^\/]+)/','${1}:(?P<${1}>${2})',$url);
		$r['origin'] = '/'.str_replace('/', '\/', $r['origin']).'/';

		$params = explode('/',$url);
		foreach ($params as $k=>$v) {
			if(strpos($v, ':')){
				$p = explode(':', $v);
				$r['params'][$p[0]] = $p[1];
			}else{
				if($k==0){
					$r['controller'] = $v;
				}elseif($k==1){
					$r['action'] = $v;
				}
			}
		}

		$r['catcher'] = $redir;
		//$r['catcher'] = str_replace(':action','(?P<action>([a-z0-9\-]+))', $r['catcher']);
		foreach ($r['params'] as $k=>$v) {
			$r['catcher'] = str_replace(":$k", "(?P<$k>$v)", $r['catcher']);
		}
		$r['catcher'] = '/'.str_replace('/', '\/', $r['catcher']).'/';

		self::$routes[] = $r;
	}

	/**
	* 
	**/
	static function url($url){
		foreach (self::$routes as $v) {
			if(preg_match($v['origin'],$url,$match)){
				foreach ($match as $k=>$w) {
					if (!is_numeric($k)){
						$v['redir'] = str_replace(":$k", $w, $v['redir']);
					}
				}
				echo($v['redir']);
				return $v['redir'];//BASE_URL.'/'.$v['redir'];
			}
		}
		return $url;//BASE_URL.'/'.$url;
	}
}
?>