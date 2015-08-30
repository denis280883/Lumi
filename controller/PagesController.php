<?php
class PagesController extends Controller {

	function view($id){
		$this->loadModel('Post');
		$posts = $this->Post->find(array(
			'conditions' => 'id=1'

		));
		print_r($posts);
	}


}
?>