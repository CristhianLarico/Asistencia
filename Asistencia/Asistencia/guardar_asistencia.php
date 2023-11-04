<?php

include ("conectar.php");



$combo=$_POST['combo'];

$codigo=$_POST['codigo'];





$aula=$_POST['aula'];
$asistencia=$_POST['asistencia'];
$fecha=$_POST['fecha'];




$query="INSERT INTO asistencias(id_curso,id_alumno,aula,asistencia,fecha)VALUES('$combo','$codigo','$aula','$asistencia','$fecha')";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
echo "<script> alert('Asido Guardado los Datos');</script>";
//echo "insertado exitosa";
header("location: listado_asistencias.php");

	}

	else {


	header("location: listado_asistencias.php");


}

?>