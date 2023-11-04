<?php

include ("conectar.php");

$id=$_REQUEST['id'];
$descripcion=$_POST['descripcion'];



$query="UPDATE cargo  SET nombres='$descripcion'   where  idcargo='$id' ";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
//echo "<script> alert('Asido Guardado los Datos');</script>";
header("location: listado_cargo.php");



	}

	else {


		echo " inserccion no exitosa";

}


?>



