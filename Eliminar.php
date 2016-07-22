<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php
		$server = "localhost";
   		$usuario ="root";
   		$contraseña="";
   		$bd="baseandroid";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
   			or die("Error en la conexion");

   		$clave= $_POST['txtClave'];

   		mysqli_query($conexion,"DELETE from hola where clave='$clave'")
   		or die("Error al eliminar los datos");

   		mysqli_close($conexion);
   		echo "Datos eliminados correctamente";

	?>
</body>
</html>