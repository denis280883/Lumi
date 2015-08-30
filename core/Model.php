<?php
class Model{
	
	static $connections = array();

	public $db= 'default';
	public $table = false;

	public function __construct(){
		// connecte base
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
		// Initialize variabls
		if($this->table == false){
			$this->table = strtolower(get_class($this)).'s';
		}
	}

	public function find($req){


		die($this->table);
	}
	
}