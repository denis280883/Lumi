<?php
class PagesController extends Controller {

	function view($id){
		$this->loadModel('Post');
		$post = $this->Post->findFirst(array(
			'conditions' => 'id=1'
		));
		$this->set('post',$post);
	}


}
?>