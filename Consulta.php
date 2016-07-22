<?php

function connectDB(){
	$server = "localhost";
   		$usuario ="u837399480_aptur";
   		$contraseña="aptsql20";
   		$bd="u837399480_basea";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
   			or die("Error en la conexion");
		return $conexion;
	}
	
	function disconnectDB($conexion){
	$close= mysqli_close($conexion);
			return $close;
	}

function getArraySQL($sql){
	$conexion=connectDB();
	mysqli_set_charset($conexion,"utf8");
$result = mysqli_query($conexion,"SELECT *FROM DondeComer") or die(mysql_error());

$rawdata=array();
$i=0;
while($row =mysqli_fetch_array($result)){
	$rawdata[$i]=$row;
	$i++;
}
 disconnectDB($conexion);

 return $rawdata;

}

//$myArray=getArraySQL($sql);
//foreach($myArray as &$valor){
//echo json_encode($valor);
//}
$myArray=getArraySQL($sql);
echo json_encode($myArray);
echo("\n");
$base= json_encode($myArray);
echo json_encode($base);
?>