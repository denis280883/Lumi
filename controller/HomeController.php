<?php
class HomeController extends Controller {

	function index(){
		$this->loadModel('Post');
	}

	function view($id,$slug){
		$this->loadModel('Post');

	}

	/**
	* ADMIN
	**/
	function admin_index(){
		$this->loadModel('Post');

	}

	/**
	* edit post
	**/
	function admin_edit($id = null){
		$this->loadModel('Post');
	}
}