<?php 
	
	// CONETION WITH DATABSE
	function conection($bd_config) {
		try {
			$conection = new PDO('mysql:host=localhost;dbname='.$bd_config['database'], $bd_config['user'], $bd_config['password']);
			return $conection;
		} catch (PDOException $e) {
			return false;
		}		
	}

	// Inspecting data text
	function clear_data($datos) {
		$datos = trim($datos);
		$datos = stripslashes($datos);
		$datos = htmlspecialchars($datos);

		return $datos;
	}

	// Get current page
	function current_page(){
		if (isset($_GET['p'])) {
			if ((int)$_GET['p'] !== 0) {
				return (int)$_GET['p'];
			} else {
				return false;
			}
		} else {
			return 1;
		}
	}

	// Get posts of the database
	function getPosts($post_for_page, $conection){
		if (current_page() === false) {
			return false;
		} else {
			$start = (current_page() > 1) ? current_page() * $post_for_page - $post_for_page : 0;
			$sentence = $conection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM posts LIMIT $start, $post_for_page");
			$sentence->execute();
			return $sentence->fetchAll();
		}
	}

	function number_pages($post_for_page, $conection){
		$all_post = $conection->prepare('SELECT FOUND_ROWS() as total');
		$all_post -> execute();
		$all_post = $all_post->fetch()['total'];

		$number_pages = ceil($all_post / $post_for_page);
		return $number_pages;
	}

	// Get id post
	function id_article($id){
		return (int)clear_data($id);
	}

	// Get post
	function getPost_for_id($conection, $id){
		$resultado = $conection -> query("SELECT * FROM posts WHERE id=$id LIMIT 1");
		$resultado = $resultado->fetchAll();
		return ($resultado) ? $resultado : false;
	}

	// date
	function datePost($datePost){
		date_default_timezone_set('America/Lima');
		$timestamp = strtotime($datePost);
		$months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
		$day = date('d', $timestamp);
		$month = date('m', $timestamp)-1;
		$year = date('Y', $timestamp);

		$date = "$day de ".$months[$month]." del $year";
		return $date;
	}

	// Check session
	function checkSession(){
		if (!isset($_SESSION['admin'])) {
			header('Location: '.RUTA);
		}
	}

 ?>