<?php

include ("conectar.php");

$id=$_REQUEST['id'];


$query="DELETE   from  usuarios  where  id='$id' ";
$resultado= $conexion->query($query);

if($resultado){


	//header("");


header("location: listado_usuario.php");

echo "<script> alert('Asido Eliminado los Datos');</script>";

	}

	else {


		echo " inserccion no exitosa";

}


?>



