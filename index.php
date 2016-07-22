<!DOCTYPE>
<html>
<head>
<title>Tutorial</title>
</head>
<body>
	<p>INSERTAR</p>
	<form action="Registro.php" method="POST">

		Clave: <input type="text" name="txtClave"><br/>
		Nombre: <input type="text" name="txtNombre"><br/>
		Sexo:<select name="cmbSexo">
			<option value="Masculino">Masculino</option>
			<option value="Femenino"> Femenino</option>
			</select><br/>
		</select>
		<input type="submit" value="Registrar" name="btnRegistrar">
	</form>

	<p>------------------------------------------</p>
	<p>ELIMINAR</p>

	<form action="Eliminar.php" method="POST">
		Clave: <input type="text" name="txtClave"><br/>
		<input type="submit" value="Eliminar Registro" name="btnEliminar">

	</form>

<p>------------------------------------------</p>
	<p>ACTUALIZAR</p>

<form action="Actualizar.php" method="POST">
	Clave: <input type="text" name="txtClave"><br/>
	Nombre: <input type="text" name="txtNombre"><br/>
	<input type="submit" value="Actualizar Registro" name="btnActualizar">
</form>

<p>------------------------------------------</p>
	<p>VER REGISTROS</p>
	<form action="Registros.php">
		<input type="submit" value="Ver Registros" name="btnRegistros">

	</form>

</body>
</html>