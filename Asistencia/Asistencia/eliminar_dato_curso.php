<?php

include ("conectar.php");

$codigo=$_REQUEST['codigo'];


$query="DELETE   from  curso where  id_curso='$codigo' ";
$resultado= $conexion->query($query);

if($resultado){


	//header("");


header("location: listado_curso.php");

echo "<script> alert('Asido Eliminado los Datos');</script>";

	}

	else {


		echo " inserccion no exitosa";

}


?>



