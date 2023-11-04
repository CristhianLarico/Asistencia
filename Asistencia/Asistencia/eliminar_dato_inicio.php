

    <!-- CONEXION -->

<?php

include ("conectar.php");

$id=$_REQUEST['id'];

//  ELIMINAR REGISTRO  POR LA CONDICION WHERE     POR EL ID


$query="DELETE   from Inicio  where  id_Inicio='$id' ";
$resultado= $conexion->query($query);

if($resultado){


	// REEVIA A LISTADO DE REGISTRO


header("location: listado_Inicio.php");

echo "<script> alert('Asido Eliminado los Datos');</script>";

	}

	else {


		echo " inserccion no exitosa";

}


?>



