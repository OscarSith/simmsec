<?php
$url = $_SERVER['PHP_SELF'];
$url = explode('/', $url);
$path = array_pop($url);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simmec <?php echo $path ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<header>
				<a href="index.php" id="logo"><img src="img/logo.png" class="img-responsive pull-left"></a>
				<nav class="pull-right navbar-default">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-collapse collapse" id="bs-navbar">
						<ul class="list-unstyled nav">
							<li <?php echo $path == 'index.php' || $path == '' ? 'class="active"' : ''?>><a href="index.php">HOME</a></li>
							<li <?php echo $path == 'empresa.php' ? 'class="active"' : ''?>><a href="empresa.php">LA EMPRESA</a></li>
							<li <?php echo $path == 'productos.php' ? 'class="active"' : ''?>><a href="#">PRODUCTOS</a></li>
							<li <?php echo $path == 'contacto.php' ? 'class="active"' : ''?>><a href="contacto.php">CONTACTO</a></li>
						</ul>
					</nav>
					</div>
				<div class="clearfix"></div>
			</header>
			<div class="home-slider row">
				<h2>
					<p>SERVICIO DE CALIDAD<br>Y EXPERIENCIA</p>
					<a href="#">VER MAS</a>
				</h2>
			</div>