<?php 
	session_start();

	require './config.php';
	require '../functions.php';

	$conection = conection($bd_config);

	checkSession();

	if (!$conection) {
		header('Location: '.RUTA.'/error.php');
	}

	$posts = getPosts($blog_config['post_for_page'], $conection);

	if (!$posts) {
		header('Location: '.RUTA.'/admin');
	}
	
	require '../views/admin_index.view.php';

 ?>