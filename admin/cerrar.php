<?php 

	session_start();
	session_destroy();
	$_SESSION = array();

	require 'config.php';

	header('Location: '.RUTA);
	die();

 ?>