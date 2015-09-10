<?php 
class Session{

	public function __construct(){
		session_start();
	}

	public function setFlash($message,$type){
		$_SESSION['flash'] = array(
			'message' => $message,
			'type'	  => $type
			);
	}

	public function flash(){
		if(isset($_SESSION['flash'])){
			return $_SESSION['flash']['message'];
		}
	}

}

 ?>