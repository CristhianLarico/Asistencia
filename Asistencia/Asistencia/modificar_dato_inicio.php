<?php

// CONECTAR A MYSQL

include ("conectar.php");

// LOS VALORES DE LA CAJA DE TEXTO 

$id=$_REQUEST['id'];
$descripcion=$_POST['descripcion'];


// ACTUALIZAR LOS REGISTRO DE LA TABLA   POR  LA CONDICION   WHERE    ID 

$query="UPDATE Inicio SET nombres='$descripcion'   where  id_Inicio='$id' ";
$resultado= $conexion->query($query);

if($resultado){

//   REENVIA A LISTADO DE  TABLA

	//header("");
//echo "<script> alert('Asido Guardado los Datos');</script>";
header("location: listado_Inicio.php");



	}

	else {


		echo " inserccion no exitosa";

}


?>



