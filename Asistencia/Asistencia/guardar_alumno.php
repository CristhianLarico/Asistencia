<?php

include ("conectar.php");




$nombres=$_POST['nombres'];
$dni=$_POST['dni'];

$combo=$_POST['combo'];

$combo2=$_POST['combo2'];

$aula=$_POST['aula'];
$turno=$_POST['turno'];
$fecha=$_POST['fecha'];




$query="INSERT INTO alumno(nombres,dni,id_nivel,id_inicio,aula,turno,fecha)VALUES('$nombres','$dni','$combo','$combo2','$aula','$turno','$fecha')";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
echo "<script> alert('Asido Guardado los Datos');</script>";
//echo "insertado exitosa";
header("location: listado_alumno.php");

	}

	else {


	header("location: listado_alumno.php");


}

?>