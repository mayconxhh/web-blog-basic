<?php 
	
	session_start();

	require './admin/config.php';
	require './functions.php';

	if (isset($_SESSION['admin'])) {
		header('Location: '.RUTA.'/admin');
	}

	$errores = '';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = clear_data($_POST['username']);
		$password = clear_data($_POST['password']);
		$password = hash('sha512', $password);

		$conection = conection($bd_config);

		$statement = $conection -> prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$statement -> execute(array(
			':username' => $usuario,
			':password' => $password
		));

		$resultado = $statement->fetch();

		if ($resultado !== false) {
			$_SESSION['admin'] = $resultado['username'];
			header('Location: '. RUTA . '/admin');
		} else {
			$errores .= '<li style="color: #25383B;">El nombre de usuario o contraseña son erróneos</li>';
		}
	}

	require './views/login.view.php';


 ?>