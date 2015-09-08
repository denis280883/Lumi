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




Router::connect('post/:slug-:id','posts/view/id:(?P<id>[0-9]+)/slug:(?P<slug>[a-z0-9\-]+)');