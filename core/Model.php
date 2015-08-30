<?php
class Model{
	
	public $db= 'default';

	public function __construct(){
		print_r(Conf::$databases[$this->db]);
	}

	public function find(){
		
	}
	
}