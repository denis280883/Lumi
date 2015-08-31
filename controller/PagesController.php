<?php
class PagesController extends Controller {

	function view($id){
		$this->loadModel('Post');
		$post = $this->Post->findFirst(array(
			'conditions' => 'id='.$id
		));
		if(empty($post)){
			$this->e404('Page introuvable');
		}
		$this->set('post',$post);
	}


}
?>