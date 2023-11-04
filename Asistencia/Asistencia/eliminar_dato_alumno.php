<?php

include ("conectar.php");

$codigo=$_REQUEST['codigo'];


$query="DELETE   from Alumno where  id_Alumno='$codigo' ";
$resultado= $conexion->query($query);

if($resultado){


	//header("");


header("location: listado_Alumno.php");

echo "<script> alert('Asido Eliminado los Datos');</script>";

	}

	else {


		echo " inserccion no exitosa";

}


?>



