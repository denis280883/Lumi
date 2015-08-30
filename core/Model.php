<?php
class Model{
	
	static $connections = array();

	public $db= 'default';

	public function __construct(){
		$conf = Conf::$databases[$this->db];
		if(isset(Model::$connections[$this->db])){
			return true;
		}
		try {
			$pdo = new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';',$conf['login'],$conf['password']);
			Model::$connections[$this->db] = $pdo;
		}catch(PDOException $e){
			if (conf::$debug >= 1){
				die($e->getMessage());
			}else {
				die('Impossible de se connecter à la base de donnée');
			}
			
		}
		echo "J'ai chargé la base et je m'y suis connecté";
	}

	public function find(){
		
	}
	
}