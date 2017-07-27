<?php 
	
	require './admin/config.php';
	require './functions.php';

	$conection = conection($bd_config);
	if (!$conection) {
		header('Location: error.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search']) ) {
		$search = clear_data($_GET['search']);

		$stament = $conection -> prepare('SELECT * FROM posts WHERE title LIKE :search or text LIKE :search');
		$stament->execute(array(':search' => "%$search%"));
		$results = $stament->fetchAll();

		if (empty($results)) {
			$title = 'No se encontraron posts con el resultado: ' .$search;
		} else {
			$title = 'Resultados de la busqueda: ' .$search;
		}
	} else {
		header('Location: '. RUTA .' index.php');
	}

	require './views/header.view.php';

	require './views/search.view.php';
	
	require './views/pagination.view.php';
	// require './views/form.view.php';
	require './views/footer.view.php';


 ?>