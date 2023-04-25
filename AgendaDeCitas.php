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
	<title></title>
</head>
<body>
<div class="consultas">
	<center>
<?php
	$conexion = mysqli_connect('localhost','root','','veterinriafeliz') or die(misql_error($mysqli));


	//CONSULTA
	$resultado = $conexion -> query("SELECT * FROM registro");

	//RESULTADOS
	echo "<table>";
	echo "<tr><th> Numero de consulta_| </th><th> Nombre_| </th><th>Nombre de mascota_| </th><th>Sexo de mascota | </th><th>Motivo de consulta_| </th><th>Fecha de cita_| </th><th>Hora de cita </tr>";
	while ($fila = $resultado -> fetch_assoc()) {
		echo "<tr>";
		echo "<td style= 'padding-right: 15px'>" . $fila["NumConsulta"] . "</td>";
		echo "<td style= 'padding-right: 15px'>" . $fila["Nombre"] . "</td>";
		echo "<td style= 'padding-right: 15px'>" . $fila["NomMascota"] . "</td>";
		echo "<td style= 'padding-right: 15px'>" . $fila["SxMascota"] . "</td>";
		echo "<td style= 'padding-right: 15px'>" . $fila["MotConsulta"] . "</td>";
		echo "<td style= 'padding-right: 15px'>" . $fila["Fecha"] . "</td>";
		echo "<td style= 'padding-right: 15px'>" . $fila["Hora"] . "</td>" ;
		echo "</tr>";
		
	}
	echo "</table>";
?>
<a href="index.html"><input type="submit" value="INICIO" name="op"></a>
<a href="citas.html"><input type="submit" value="HACER CITA" name="op"></a>
</center>
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

</div>
</body>
</html>