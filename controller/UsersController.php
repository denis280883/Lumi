<?php
class UsersController extends Controller{

	/**
	*
	**/
	function login(){
		debug($this->Session->read('chien'));
		if($this->request->data){
			$data=$this->request->data;
			$data->password = sha1($data->password);
			$this->loadModel('User');
			$user = $this->User->findFirst(array('conditions' => array('login'=>$data->login, 'password' => $data->password
				)));
			if(!empty($user)){
				$this->Session->write('User',$user);
			}
			$this->request->data->password = '';
		}
	}

	/**
	*
	**/
	function logout(){

	}
}