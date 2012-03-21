<?php include('bootstrap.php'); ?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Innova Sport</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<div id="header">
		<div id="desktopmenu" class="wrapper1280 show-on-desktops">
			<a href="#"><span id="logo"></span></a>
			<div id="menu">
				<div id="marcas" class="absolute">
					<ul>
						<li><a href="#"><img src="<?php echo _ROOT_ ?>images/header/marca_1.png"></a></li>
						<li><a href="#"><img src="<?php echo _ROOT_ ?>images/header/marca_2.png"></a></li>
						<li><a href="#"><img src="<?php echo _ROOT_ ?>images/header/marca_3.png"></a></li>
						<li><a href="#"><img src="<?php echo _ROOT_ ?>images/header/marca_4.png"></a></li>
						<li><a href="#"><img src="<?php echo _ROOT_ ?>images/header/marca_5.png"></a></li>
					</ul>
				</div>
				<div id="buscar" class="absolute">
					<input type="text" name="buscar" value="" id="buscar_input">
					<a href="#" class="absolute fright icon_buscar"></a>
				</div>
				<div class="pointer btn" id="entrar"></div>
				<div class="pointer btn" id="registrarse"></div>
				<div id="miscompras" class=" absolute center bold">
					<span class="noarticulos font20">0</span> artículos
				</div>
				<div id="misdeseos" class="absolute center bold font20">
					25
				</div>
				<div id="submenu">
					<ul class="menuhor absolute uppercase">
						<li><a href="#">Ropa</a></li>
						<li><a href="#">Calzado</a></li>
						<li><a href="#">Accesorios</a></li>
						<li><a href="#">Futbol</a></li>
						<li><a href="#">Basquetbol</a></li>
						<li><a href="#">Beisbol</a></li>
						<li><a href="#">Tenis</a></li>
						<li><a href="#">Entrenamiento</a></li>
						<li><a href="#">Casual</a></li>
						<li><a href="#">Más</a></li>
					</ul>
				</div>
			</div>
			<!-- #menu -->
		</div>
		<!-- #desktopmenu -->
	</div>