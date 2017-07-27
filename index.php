<?php 
	require './admin/config.php';
	require './functions.php';

	$conection = conection($bd_config);
	if (!$conection) {
		header('Location: error.php');
	}

	$posts = getPosts($blog_config['post_for_page'], $conection);

	if (!$posts) {
		header('Location: error.php');
	}

	require './views/posts.view.php';


 ?>