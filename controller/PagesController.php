<?php
class PagesController extends Controller {

	function view($name){
		echo 'Vous avez demandé la page: '.$name;
	}

}
?>