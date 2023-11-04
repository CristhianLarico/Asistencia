<?php

include ("conectar.php");

$codigo=$_REQUEST['codigo'];
$combo=$_POST['combo'];
$nombres=$_POST['nombres'];



$query="UPDATE curso SET  nombres='$nombres', id_docente='$combo'  where  id_curso='$codigo' ";

$resultado= $conexion->query($query);



if($resultado){


	//header("");
//echo "<script> alert('Asido Guardado los Datos');</script>";
header("location: listado_curso.php");



	}

	else {


		echo " inserccion no exitosa";

}


?>



