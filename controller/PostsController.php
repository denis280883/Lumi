<?php
class PostsController extends Controller {

	function index(){
		$this->loadModel('Post');

		$d['posts'] = $this->Post->find(array(
			'conditions' => array('online' => 1,
				   'type'   =>'post')
			));

		$this->set($d);
	}

	function view($id){
		$this->loadModel('Post');
		$d['post'] = $this->Post->findFirst(array(
			'conditions' => array('online' => 1, 'id'=>$id, 'type'=>'post')
		));
		if(empty($d['post'])){
			$this->e404('Page introuvable!!!');
		}
		$this->set($d);
	}
}