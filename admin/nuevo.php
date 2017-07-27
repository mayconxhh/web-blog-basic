<?php 

	session_start();

	require './config.php';
	require '../functions.php';

	checkSession();

	$conection = conection($bd_config);

	if (!$conection) {
		header('Location: '.RUTA.'/error.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$title = clear_data($_POST['title']);
		$extract = clear_data($_POST['extract']);
		$text = $_POST['text'];
		$image_post = $_FILES['image_post']['tmp_name'];

		$image_uploaded = '../'.$blog_config['folder_images'].$_FILES['image_post']['name'];

		move_uploaded_file($image_post, $image_uploaded);

		$statement = $conection->prepare("INSERT INTO posts (id, title, extract, text, thumb) VALUES (DEFAULT, :title, :extract, :text, :thumb)");

		$statement->execute(array(
			':title'	=>$title,
			':extract'	=>$extract,
			':text'		=>$text,
			':thumb'	=>$_FILES['image_post']['name']
		));

		header('Location: '.RUTA.'/admin');

	}

	require '../views/nuevo.view.php';

 ?>