<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="./js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="./css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="./css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="./css/ie9.css" /><![endif]-->
	</head>
	<!-- <body> -->
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Retrospect</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><form style="width: 100%; display: flex; justify-content: space-between;" action="<?php echo RUTA; ?>/buscar.php" method="get" name="searcher">
						<div style="width: 100%">
							<input type="text" name="search" placeholder="Buscar...">
						</div>
						<div>
							<button style="line-height: 56px;height: auto;min-width: 0;font-size: 19px;padding: 3px 0;margin-left: -27px;background: none; outline:0;" type="submit" class="icon fa-search"></button>
						</div>
					</form></li>
				</ul>
			</nav>