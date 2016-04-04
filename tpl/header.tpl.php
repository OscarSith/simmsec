<?php
session_start();
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
	<meta name="description" content="Somos una empresa metalmecánica con 19 años en el mercado al servicio del sector industrial, dedicada a suministrar, fabricar piezas, repuestos y accesorios metalmecánicos de óptima calidad y precisión para la Industria en general.">
	<meta name="keywords" content="Metalmecánica, Servicio Mecanizado, Repuesto Ascensores, Proyectos metalmecánicos, torno, fresadora, Engranajez, Generador,  Metal mecánicas peru, metal metálica.">
	<title>Simmec <?php echo $path ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="bartop">
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
								<li <?php echo $path == 'productos.php' ? 'class="active"' : ''?>><a href="productos.php">PRODUCTOS</a></li>
								<li <?php echo $path == 'contacto.php' ? 'class="active"' : ''?>><a href="contacto.php">CONTACTO</a></li>
							</ul>
						</nav>
						</div>
					<div class="clearfix"></div>
				</header>
				<div class="row" style="position: relative;">
					<div class="home-slider">
						<div><img src="img/banner-web1.jpg" alt="" class="img-responsive"></div>
						<div><img src="img/banner-web2.jpg" alt="" class="img-responsive"></div>
					</div>
					<a href="empresa.php" class="show-more"></a>
				</div>