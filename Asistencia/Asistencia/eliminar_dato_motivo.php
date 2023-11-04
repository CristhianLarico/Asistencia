

    <!-- CONEXION -->

<?php

include ("conectar.php");

$id=$_REQUEST['id'];

//  ELIMINAR REGISTRO  POR LA CONDICION WHERE     POR EL ID


$query="DELETE   from motivo  where  id_motivo='$id' ";
$resultado= $conexion->query($query);

if($resultado){


	// REEVIA A LISTADO DE REGISTRO


header("location: listado_motivo.php");

echo "<script> alert('Asido Eliminado los Datos');</script>";

	}

	else {


		echo " inserccion no exitosa";

}


?>



