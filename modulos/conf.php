<?php
	if (!isset($_GET['ruta']))
	{
		include ("paginas/principal.php");
	}
	else
	{
		include("paginas/".$_GET['ruta'].".php");
	}
?>