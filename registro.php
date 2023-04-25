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
</nav	
</head>
<body>
	<!---CONEXION A BASE DE DATOS Y SERVIDOR-->
<?php
$conexion = mysqli_connect('localhost','root','','veterinriafeliz') or die(misql_error($mysqli));

	contacto($conexion);

	function contacto($conexion){
	$Nombre=$_POST['nom'];
	$Correo=$_POST['correo'];
	$Telefono=$_POST['tel'];
	$Mensaje=$_POST['mensaje'];

	mysqli_query($conexion, "INSERT INTO contacto(Nombre, Correo, Telefono, Mensaje) 
	VALUES('$Nombre','$Correo','$Telefono','$Mensaje')");
	
	}

?>
<div class="opinion">
<br>
		<p>Gracias por apoyarnos en nuestra comunidad, nosotros te contactamos!!</p>
<br>

		<img src="imagenes/grax.png" alt=""width="300" height="250">
		<br>
		<br>

	<a href="index.html">
		<button type="button">Regresar</button>
	</a>
	
	
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
