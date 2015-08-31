<?php
class PagesController extends Controller {

	function view($id){
		$this->loadModel('Post');
		$post = $this->Post->findFirst(array(
			'conditions' => 'id='.$id
		));
		$this->set('post',$post);
	}


}
?>