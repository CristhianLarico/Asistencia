<?php

include ("conectar.php");




$combo=$_POST['combo'];

$id=$_POST['id'];


$codigo=$_POST['codigo'];




$aula=$_POST['aula'];
$asistencia=$_POST['asistencia'];

$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];




$query="INSERT INTO inasistencias(id_motivo,id_curso,id_alumno,aula,descripcion,asistencia,fecha)VALUES('$combo','$id','$codigo','$aula','$descripcion','$asistencia','$fecha')";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
echo "<script> alert('Asido Guardado los Datos');</script>";
//echo "insertado exitosa";
header("location: listado_asistencia_presente.php");

	}

	else {


	header("location: listado_asistencia_presente.php");


}

?>