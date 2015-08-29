<?php
class PagesController extends Controller {

	function view($name){
		$this->vars['phrase'] = 'Bienvenue sur la page '.$name;
		$this->render('index');

	}

}
?>