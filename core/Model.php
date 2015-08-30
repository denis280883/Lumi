<?php
class Model{
	
	public $db= 'default';

	public function __construct(){
		$conf = Conf::$databases[$this->db];
		try {
			$db = new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';',$conf['login'],$conf['password']);
		}catch(PDOException $e){
			if (conf::$debug >= 1){
				die($e->getMessage());
			}else {
				die('Impossible de se connecter à la base de donnée');
			}
			
		}
	}

	public function find(){
		
	}
	
}