<?php
class PagesController extends Controller {

	function view($name){
		$this->set(array(
			'phrase' => 'Salut',
			'nom'	 => 'Magin'));
		$this->render('index');

	}

}
?>