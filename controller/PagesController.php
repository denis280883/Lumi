<?php
class PagesController extends Controller {

	function view($name){
		$this->set(array(
			'phrase' => 'Salut',
			'nom'	 => 'Machin'));
		$this->render('index');

	}

}
?>