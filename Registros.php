<!DOCTYPE html>
<html>
<head>
	<title>Consultar</title>
</head>
<body>
<?php
	$server = "localhost";
   		$usuario ="root";
   		$contraseña="";
   		$bd="baseandroid";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
   			or die("Error en la conexion");

   		$consulta= mysqli_query($conexion,"SELECT * from hola")	
   		or die("Error al traer los datos");

   		echo '<table border="1">';
   		echo '<tr>';
   		echo '<th id="clave">Clave</th>';
   		echo '<th id="nombre">Nombre</th>';
   		echo '<th id="clave">Sexo</th>';
   		echo '</tr>';

   		while ($extraido = mysqli_fetch_array($consulta))
   		{
   			echo '<tr>';
   			echo '<td>'.$extraido['Clave'].'</td>';
   			echo '<td>'.$extraido['Nombre'].'</td>';
   			echo '<td>'.$extraido['Sexo'].'</td>';
   			echo '</tr>';
   		}

   		mysqli_close($conexion);
   		echo '</table>';
?>
</body>
</html>