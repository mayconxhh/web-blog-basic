<?php 

	session_start();

	require './config.php';
	require '../functions.php';

	checkSession();

	$conection = conection($bd_config);

	if (!$conection) {
		header('Location: '.RUTA.'/error.php');
	}

	$id_article = clear_data($_GET['id']);

	if (!$id_article) {
		header('Location: '.RUTA.'/admin');
	}

	$statement = $conection->prepare("DELETE FROM posts WHERE id= :id");
	$statement->execute(array(':id'=>$id_article));

	header('Location: '.RUTA.'/admin');

 ?>