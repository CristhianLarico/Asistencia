<?php

include ("conectar.php");

$descripcion=$_POST['descripcion'];






$query="INSERT INTO  Inicio(nombres)VALUES('$descripcion')";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
echo "<script> alert('Asido Guardado los Datos');</script>";
//echo "insertado exitosa";
header("location: listado_Inicio.php");

	}

	else {


	header("location: listado_Inicio.php");


}

?>