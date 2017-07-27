<?php 
	require './admin/config.php';
	require './functions.php';

	$conection = conection($bd_config);
	$id_article = id_article($_GET['id']);

	if (!$conection) {
		header('Location: error.php');
	}

	if (empty($id_article)) {
		header('Location: index.php');
	}

	$post = getPost_for_id($conection, $id_article);
	
	if (!$post) {
		header('Location: index.php');
	}

	$post = $post[0];

	require './views/single.view.php';

 ?>