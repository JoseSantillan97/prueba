<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Plantillas</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


<!-- AQUI INICIA EL CARRUSEL -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="1"></li>
    	<li data-target="#myCarousel" data-slide-to="2"></li>
  	</ol>

  <!-- Wrapper for slides -->
<div class="carousel-inner" align="center">
	<div class="item active">
    	<img src="img/slide1.jpg" alt="Ciencia" width="1600" height="530">
	</div>

    <div class="item">
    	<img src="img/slide2.jpg" alt="Auto honda" width="1600" height="530">
    </div>

    <div class="item">
    	<img src="img/slide3.jpg" alt="Comedor" width="1600" height="530">
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
<!-- AQUI TERMINA EL CARRUSEL -->

<!-- AQUI EMPIEZAN LOS ARCICULOS -->
	<article class="post clearfix">
		<a href="#" class="thumb pull-left">
			<img src="img/1.jpg" class="img-thumbnail" alt="imagen1">
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
			<a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
		</div>
	</article>


	<article class="post clearfix">
		<a href="#" class="thumb pull-left">
			<img src="img/2.jpg" class="img-thumbnail" alt="imagen2">
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
			<a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
		</div>
	</article>

	<article class="post clearfix">
		<a href="#" class="thumb pull-left">
			<img src="img/3.png" class="img-thumbnail" alt="imagen3">
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
	</article>

<!-- AQUI TERMINAN LOS ARCICULOS -->				



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>