
<?php

	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=archivo.xls");
	header("Pragma: no-cache");
	header("Expires: 0");

?>



<h4 align="center"><B><H2> Listado de Usuarios</H2></B> </h4>

 <table width="80%" border="1" align="Center">

                <tr bgcolor="#5970B2"  aling="center" class="encabezadoTabla">

           <td width="7%" bgcolor="#CCCC00"><b>N</b></td>         
   <td width="25%" bgcolor="#CCCC00"> <b>Usuario</b></td>

  <td width="25%" bgcolor="#CCCC00"><b>Password</b></td>

   <td width="25%" bgcolor="#CCCC00"><b>Cargo</b></td> 

  

                   

<?php



include ("conectar.php");





$query="SELECT  usuarios.id,usuarios.usuario,usuarios.password,cargo.nombres
FROM            usuarios INNER JOIN
                         
                         cargo ON usuarios.idcargo= cargo.idcargo";



$resultado=$conexion->query($query);





while($row=$resultado->fetch_assoc()){



  ?>




<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['usuario'];?></td>
<td><?php echo $row['password'];?></td>

<td><?php echo $row['nombres']; ?></td>
 



</tr>

<?php

}

?>

              </table>