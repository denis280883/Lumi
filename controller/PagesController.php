<?php
class PagesController extends Controller {


	function view($id){
		$this->loadModel('Post');
		$d['page'] = $this->Post->findFirst(array(
			'conditions' => array('id'=>$id)
		));
		if(empty($d['page'])){
			$this->e404('Page introuvable!!!');
		}
		$this->set($d);
	}

	/**
	* Could get pages menu
	**/
	function getMenu(){
		$this->loadModel('Post');
		$this->Post->Find(array(
			'conditions' => array('online' => 1, 'type'=>'page')
			));
	}


}
?>