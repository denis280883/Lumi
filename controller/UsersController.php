<?php
class UsersController extends Controller{

	/**
	*
	**/
	function login(){
		if($this->request->data){
			$data=$this->request->data;
			debug($data);
		}
	}

	/**
	*
	**/
	function logout(){

	}
}