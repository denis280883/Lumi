<?php
class UsersController extends Controller{

	/**
	*
	**/
	function login(){
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
		if($this->Session->isLogged()){
			$this->redirect('cockpit');
		}
	}

	/**
	*
	**/
	function logout(){

	}
}