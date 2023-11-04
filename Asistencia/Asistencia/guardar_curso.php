<?php

include ("conectar.php");




$nombres=$_POST['nombres'];

$combo=$_POST['combo'];


$query="INSERT INTO curso(nombres,id_docente)VALUES('$nombres','$combo')";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
echo "<script> alert('Asido Guardado los Datos');</script>";
//echo "insertado exitosa";
header("location: listado_curso.php");

	}

	else {


	header("location: listado_curso.php");


}

?>