<!DOCTYPE>
<html>
<head>
<title>Tutorial</title>
</head>
<body>
   <?php
   		$server = "localhost";
   		$usuario ="root";
   		$contraseña="";
   		$bd="baseDatos";

   			$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
   			or die("Error en la conexion");

   		$clave =$_POST['txtClave'];
   		$nombre=$_POST['txtNombre'];
   		$sexo=$_POST['cmbSexo'];

   		$insertar = "INSERT into hola values('$clave','$nombre','$sexo')";

   		$resultado = mysqli_query($conexion,$insertar)
   			or die("Error al insertar los registros");

   			mysqli_close($conexion);
   			echo "Datos insertados correctamente";

   		?>

</body>
</html>
