<?php

include ("conectar.php");

$codigo=$_REQUEST['codigo'];


$query="DELETE   from  docente where  id_docente='$codigo' ";
$resultado= $conexion->query($query);

if($resultado){


	//header("");


header("location: listado_docente.php");

echo "<script> alert('Asido Eliminado los Datos');</script>";

	}

	else {


		echo " inserccion no exitosa";

}


?>



