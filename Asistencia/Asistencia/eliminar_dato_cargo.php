<?php

include ("conectar.php");

$id=$_REQUEST['id'];


$query="DELETE   from cargo   where  idcargo='$id' ";
$resultado= $conexion->query($query);

if($resultado){


	//header("");


header("location: listado_cargo.php");

echo "<script> alert('Asido Eliminado los Datos');</script>";

	}

	else {


		echo " inserccion no exitosa";

}


?>



