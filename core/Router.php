<?php
class Router{

	/**
	*  Could to Parse an url
	* @param $url Url to parse
	* @return array contains params
	**/
	static function parse($url,$request){
		$usr = trim($url, '/');
		$params = explode('/',$url);
		$request->controller = $params[1];
		$request->action = isset($params[2]) ? $params[2] : 'index';
		$request->params = array_slice($params,3);
		return true;
	}
}
?>