<?php

include ("conectar.php");

$descripcion=$_POST['descripcion'];






$query="INSERT INTO  nivel(nombres)VALUES('$descripcion')";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
echo "<script> alert('Asido Guardado los Datos');</script>";
//echo "insertado exitosa";
header("location: listado_nivel.php");

	}

	else {


	header("location: listado_nivel.php");


}

?>