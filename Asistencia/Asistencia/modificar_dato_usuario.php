<?php

include ("conectar.php");

$id=$_REQUEST['id'];
$usuario=$_POST['nombres'];
$password=$_POST['descripcion'];
$cargo=$_POST['combo2'];



$query="UPDATE  usuarios  SET usuario='$usuario' , password='$password', idcargo='$cargo'  where  id='$id' ";

$resultado= $conexion->query($query);

if($resultado){


	//header("");
//echo "<script> alert('Asido Guardado los Datos');</script>";
header("location: listado_usuario.php");



	}

	else {


		echo " inserccion no exitosa";

}


?>



