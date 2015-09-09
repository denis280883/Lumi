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


//Router::connect('blog/:action','posts/:action');
Router::connect('post/:slug-:id','posts/view/id:([0-9]+)/slug:([a-z0-9\-]+)');