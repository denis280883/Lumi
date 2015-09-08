<?php
class Conf{

		static $debug = 1;

		static $databases=array(

		'default' => array(
		'host'		=>'localhost',
		'database' 	=>'lumitel',
		'login'		=>'root',
		'password'	=> ''
		)
	);

}




Router:connect('post/:slug-:id', 'posts/view/id:5/slug:mon-slug')
