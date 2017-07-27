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

		$id_article = clear_data($_POST['id_article']);
		$title = clear_data($_POST['title']);
		$extract = clear_data($_POST['extract']);
		$text = $_POST['text'];
		$image_post = $_FILES['image_post'];
		$image_saved = clear_data($_POST['image_saved']);

		if (empty($image_post['name'])) {

			$image_post = $image_saved;

		} else {

			$image_uploaded = '../'.$blog_config['folder_images'].$image_post['name'];
			move_uploaded_file($image_post['tmp_name'], $image_uploaded);
			$image_post = $image_post['name'];

		}

		$statement = $conection->prepare("UPDATE posts SET title= :title, extract= :extract, text= :text, thumb= :thumb WHERE id= :id");

		$statement->execute(array(
			':id'		=>$id_article,
			':title'	=>$title,
			':extract'	=>$extract,
			':text'		=>$text,
			':thumb'	=>$image_post
		));

		header('Location: '.RUTA.'/admin');

	} else {
		$id_article = id_article($_GET['id']);

		if (empty($id_article)) {
			header('Location: '.RUTA.'/admin');
		}

		$post = getPost_for_id($conection, $id_article);
		
		if (!$post) {
			header('Location: '.RUTA.'/admin');
		}

		$post = $post[0];
	}

	require '../views/editar.view.php';

 ?>