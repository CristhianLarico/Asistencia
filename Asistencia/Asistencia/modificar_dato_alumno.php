<?php

include ("conectar.php");

$codigo=$_REQUEST['codigo'];

$nombres=$_POST['nombres'];
$dni=$_POST['dni'];

$combo=$_POST['combo'];

$combo2=$_POST['combo2'];

$aula=$_POST['aula'];
$turno=$_POST['turno'];
$fecha=$_POST['fecha'];




$query="UPDATE alumno SET nombres='$nombres',dni='$dni' , id_nivel='$combo' ,id_inicio='$combo2',aula='$aula',turno='$turno',fecha='$fecha'     where  id_alumno='$codigo' ";
$resultado= $conexion->query($query);



if($resultado){


	//header("");
//echo "<script> alert('Asido Guardado los Datos');</script>";
header("location: listado_alumno.php");



	}

	else {


		echo " inserccion no exitosa";

}


?>



