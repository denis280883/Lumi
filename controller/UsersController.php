<?php
class UsersController extends Controller{

	/**
	*
	**/
	function login(){
		if($this->request->data){
			$data=$this->request->data;
			$data->password = sha1($data->password);
			debug($data);
		}
	}

	/**
	*
	**/
	function logout(){

	}
}