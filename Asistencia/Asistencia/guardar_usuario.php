<?php

include ("conectar.php");

$usuario=$_POST['nombres'];
$password=$_POST['descripcion'];
$cargo=$_POST['combo2'];









$query="INSERT INTO  usuarios(usuario,password,idcargo)VALUES('$usuario','$password','$cargo' )";
$resultado= $conexion->query($query);

if($resultado){


	//header("");
echo "<script> alert('Asido Guardado los Datos');</script>";
//echo "insertado exitosa";
header("location: listado_usuario.php");

	}

	else {


	header("location: listado_usuario.php");


}

?>