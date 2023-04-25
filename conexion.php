<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VETERINARIA FELIZ</title>
</head>
<body>
<nav>
	<ul>
		<li><a href="index.html"> INICIO </a></li>
			<li><a href="mascotas.html"> MASCOTAS </a></li>
			<li><a href="citas.html"> CITAS </a></li>
			<li><a href="contacto.html"> CONTACTO </a></li>
	</ul>
</nav>
</head>
<?php
$conexion = mysqli_connect('localhost','root','','veterinriafeliz') or die(misql_error($mysqli));

	insertar($conexion);

	function insertar($conexion){
	$Nombre=$_POST['NOMBRE'];
	$NomMascota=$_POST['MASCOTA'];
	$SxMascota=$_POST['SEXO'];
	$MotConsulta=$_POST['CONSULTA'];
	$Fecha=$_POST['fecha'];
	$Hora=$_POST['HORA'];

	mysqli_query($conexion, "INSERT INTO registro(Nombre, NomMascota, SxMascota, MotConsulta, Fecha,Hora) 
	VALUES('$Nombre','$NomMascota','$SxMascota','$MotConsulta','$Fecha','$Hora')");


	}

?>


	<div class="cita">
<br>
		<p>SU CITA SE A REGISTRADO CON EXITO</p>
<br>

		<img src="imagenes/cita.png" alt=""width="300" height="250">
		<br>
		<br>

	<a href="index.html"><button type="button">Regresar</button></a>
	<a href="citas.html"><button type="button">Hacer citas</a>
	
	
	</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<footer>
		<div class="copy">
			<p>TODOS LOS DERECHOS RESERVADOS</p>
			<p>&copy;VETERINARIA FELIZ</p>
		</div>
		<div class="redes">
			<a href="http://www.facebook.com" target="blank">facebook</a>
			<a href="http://www.twitter.com" target="blank">twitter</a>
			<a href="http://www.instagram.com" target="blank">instagram</a>
		</div>
	</footer>


</body>
</html>