<?php

include ("conectar.php");

$codigo=$_REQUEST['codigo'];


$docente=$_POST['docente'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$especialidad=$_POST['especialidad'];




$query="UPDATE docente SET  nombres='$docente' ,dni='$dni',direccion='$direccion',telefono='$telefono',especialidad='$especialidad'     where  id_docente='$codigo' ";
$resultado= $conexion->query($query);


if($resultado){


	//header("");
//echo "<script> alert('Asido Guardado los Datos');</script>";
header("location: listado_docente.php");



	}

	else {


		echo " inserccion no exitosa";

}


?>



