<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>
<?php
		$server = "localhost";
   		$usuario ="root";
   		$contraseña="";
   		$bd="baseandroid";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
   			or die("Error en la conexion");

   		$clave =$_POST['txtClave'];
   		$nombre=$_POST['txtNombre'];

   		mysqli_query($conexion, "UPDATE hola set Nombre='$nombre' where Clave='$clave'")
   		or die("Error al actualizar");

   		mysqli_close($conexion);
   			echo "Datos insertados correctamente";




  ?>
</body>
</html>