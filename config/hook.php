<?php 
if($this->request->prefix == 'admin'){
	$this->layout='admin';
	if(!$this->Session->isLogged()){
		$this->redirect('users/login');
	}
}