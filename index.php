<?php
	if(file_exists('config.php')){ require_once('config.php'); }
	else if(file_exists('config_local.php')){ require_once('config_local.php'); }

	require_once(LIB_PATH . 'devtools.php');
	require_once(LIB_PATH . 'autoload.php');

	$router = new core\engine\Router;
	$router->run();