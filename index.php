<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<style type="text/css">
		#fixed {
			top: 0px;
			left: 0px;
		}
	</style>

	<script src="script/figuraSeleccion.js"></script>

</head>

<body>
	<div id="fixed">
		<div>
			<h2 style="text-align: center">
				DEPARTAMENTO DE CIENCIAS DE LA COMPUTACIÓN<br><br>
				INGENIERÍA EN TECNOLOGIAS DE LA INFORMACIÓN
			</h2>

			<h3 style="text-align: center">
				APLICACIONES DE TECNOLOGIAS WEB
			</h3>
		</div>

		<div style="padding-left:90px;">
			<h4>
				<p>Nombre: Armando Rafael Fonseca Zurita</p>
			</h4>

			<h4>
				<p>NRC: 8444</p>
			</h4>

			<h4>
				<p>Fecha: 16-02-2023</p>
			</h4>

			<h2>EJERCICIO AUTÓNOMO:</h2>
		</div>
	</div>

	<?php
	include("include/class.figura.php");
	include("include/Interface.formulas.php");
	include("figuras/class.cuadrado.php");
	include("figuras/class.rectangulo.php");
	include("figuras/class.triangulo.php");


	echo figura::get_form();

	// $objCuadrado = new cuadrado();
	// $objRectangulo = new rectangulo();
	// $objTriangulo = new triangulo();


	?>

</body>

</html>