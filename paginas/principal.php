<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Café de olla</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<<<<<<< HEAD:index.html
<!-- AQUI INICIA EL JumboTron -->
	<section class="jumbotron">
		<div class="container">
			<h1 class="titulo-blog">Pagina de prueba</h1>
			<p>Primer pagina de prueba</p>
		</div>
	</section>
<!-- AQUI TERMINA EL JUMBOTRON -->

<!-- AQUI INICIA LA BARRA DE NAVEGACION SUPERIOR -->
	<header>
<<<<<<< HEAD
	<img src="imagenes/logo.png" alt="Ratio" width="150" height="150">
	<h3></h3>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
=======
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation" id="menu-fixed">
>>>>>>> pruebas
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion_j">
						<span class="sr-only">Desplegar / Ocultar menú</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Pagina de prueba</a>
				</div>
				<!-- INICIA MENU -->
				<div class="collapse navbar-collapse" id="navegacion_j">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Servicios<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Servicio #1</a></li>
								<li class="divider"></li>
								<li><a href="#">Servicio #2</a></li>
								<li><a href="#">Servicio #3</a></li>
								<li><a href="#">Servicio #4</a></li>
							</ul>
						</li>
						<li><a href="#">Conocenos</a></li>
						<li><a href="#">Contacto</a></li>
					</ul>

					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="buscar">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>			
				</div>
			</div>
		</nav>
	</header>
<<<<<<< HEAD
	<!-- JumboTron -->
<!-- <section class="jumbotron">
	<div class="container">
		<h1 class="titulo-blog">Pagina de prueba</h1>
		<p>Primer pagina de prueba</p>
	</div>
</section> -->

<!-- Carrusel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagenes/1.jpg" alt="game">
    </div>

    <div class="item">
      <img src="imagenes/2.jpg" alt="Bandera">
    </div>

	<div class="item">
      <img src="imagenes/3.jpg" alt="canicas">
    </div>

    <div class="item">
      <img src="imagenes/4.jpg" alt="soldado">
    </div>

    <div class="item">
      <img src="imagenes/5.jpg" alt="canicas">
    </div>    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Carrusel -->
=======
<!-- AQUI TERMINA LA BARRA DE NAVEGACION SUPERIOR -->
=======
>>>>>>> pruebas:paginas/principal.php

<!-- AQUI INICIA EL CARRUSEL -->
<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
  <!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="1"></li>
    	<li data-target="#myCarousel" data-slide-to="2"></li>
  	</ol>

  <!-- Wrapper for slides -->
<div class="carousel-inner" align="center">
	<div class="item active">
    	<img src="img/slider1.jpg" alt="Ciencia" width="1600" height="530">
	</div>
>>>>>>> pruebas

    <div class="item">
    	<img src="img/slider2.jpg" alt="Auto honda" width="1600" height="530">
    </div>

    <div class="item">
    	<img src="img/slider3.jpg" alt="Comedor" width="1600" height="530">
    </div>
</div>

  <!-- Left and right controls -->
  <a class="left carousel-control container-fluid" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- AQUI TERMINA EL CARRUSEL -->

<!-- AQUI EMPIEZAN LOS ARCICULOS -->
	<article class="post clearfix container">
		<a href="#" class="thumb pull-left">
			<img src="img/ensalada.jpg" class="img-thumbnail" alt="imagen1">
		</a>
		<h2 class="post-title">
			<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
		</h2>
			<p><span class="post-fecha">26/01/2015</span> por <span class="post-autor"><a href="#">Jose Alfredo</a></span></p>
			<p class="post-contenido text-justify"	>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
		<div class="contenedor-botones">
			<a href="#" class="btn btn-primary">Leer mas...</a>
		</div>
	</article>


	<article class="post clearfix container">
		<a href="#" class="thumb pull-left">
			<img src="img/costillas.jpg" class="img-thumbnail" alt="imagen2">
		</a>
		<h2 class="post-title">
			<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
		</h2>
			<p><span class="post-fecha">26/01/2015</span> por <span class="post-autor"><a href="#">Jose Alfredo</a></span></p>
			<p class="post-contenido text-justify"	>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
			<div class="contenedor-botones">
				<a href="#" class="btn btn-primary">Leer mas...</a>
			</div>
	</article>

	<article class="post clearfix container">
		<a href="#" class="thumb pull-left">
			<img src="img/postre.jpg" class="img-thumbnail" alt="imagen3">
		</a>
		<h2 class="post-title">
			<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
		</h2>
			<p><span class="post-fecha">26/01/2015</span> por <span class="post-autor"><a href="#">Jose Alfredo</a>
			</span></p>
			<p class="post-contenido text-justify"	>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>

			<div class="contenedor-botones">
				<a href="#" class="btn btn-primary">Leer mas...</a>
			</div>
	</article>

<!-- AQUI TERMINAN LOS ARCICULOS -->				



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>