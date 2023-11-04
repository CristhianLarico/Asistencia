<?php

include ("conectar.php");




$docente=$_POST['docente'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$especialidad=$_POST['especialidad'];



$query="INSERT INTO docente(nombres,dni,direccion,telefono,especialidad)VALUES('$docente','$dni','$direccion','$telefono','$especialidad')";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
echo "<script> alert('Asido Guardado los Datos');</script>";
//echo "insertado exitosa";
header("location: listado_docente.php");

	}

	else {


	header("location: listado_docente.php");


}

?>