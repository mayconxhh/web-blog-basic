<?php 
	require './admin/config.php';
	require './functions.php';

	$conection = conection($bd_config);
	if (!$conection) {
		header('Location: error.php');
	}

	$posts = getPosts($blog_config['post_for_page'], $conection);

	if (!posts) {
		header('Location: error.php');
	}

	require './views/header.view.php';
	require './views/banner.view.php';

	require './views/posts.view.php';
	
	require './views/pagination.view.php';
	// require './views/form.view.php';
	require './views/footer.view.php';


 ?>