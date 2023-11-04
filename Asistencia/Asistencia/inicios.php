<style>
*{
margin: 0;
padding: 0;
font-family: sans-serif;
box-sizing: border-box;


}

body{

background: #DEDEDE;
display: flex;
min-height: 100vh;


}

form {

	margin: auto;
	width: 50%;
	max-width: 400px;
  background: #85C1E9;
  padding: 30px;
  border: 1px solid rgba(0,0,0,0.2)


}

h3 {

	text-align: center;
	margin-bottom: 10px;
	color: rgba(0,0,0,0.5);

}

input {


	display: block;
	padding: 70px;
	width: 100%;
	margin: 90px 0;
	font-size: 20px;
}






</style>



<!DOCTYPE html>


<html>

<head>


<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>

	<body>



<?php

include_once 'entrar_inicio.php';

session_start();

if(isset($_GET['cerrar_sesion'])) {

session_unset();
session_destroy();

}

if(isset($_SESSION['nombres'])) {

	switch($_SESSION['nombres']) {


		case 1:

 header('location: Menu_principal.php');

		break;



		case 2:

  header('location: Menu_Supervisor.php');

		break;


	case 3:

  header('location: Menu_Supervisor.php');

		break;
   default:
	
}

}

if(isset($_POST['usuario']) && isset ($_POST['password'])) {

	$usuario=$_POST['usuario'];

	$password=$_POST['password'];

 $db = new Database();

 $query= $db->connect()->prepare('SELECT  * FROM usuarios

  where usuario=:usuario  AND password = :password');

 $query->execute(['usuario' =>$usuario,'password' => $password]);


$row=$query->fetch(PDO::FETCH_NUM);

if($row ==true){

$rol=$row[3];

$_SESSION['nombres'] = $rol;


switch($rol){

		case 1:

		header('location: Menu_principal.php');

		break;

		case 2:


		header('location: Menu_Supervisor.php');

		break;
case 3:


		header('location: Menu_Supervisor.php');

		break;


		default;
	

	
}

}else{

	

echo "<script> alert('El Usuario o Contraseña son Incorrectos');</script>";

}


}


?>







		<form action="#" method="POST">


<h3> Accede a tu cuenta &#128272 </h3>

			<input type="text" placeholder="&#128272; Usuario"   class="form-control" name="usuario">
			<br>
			<input type="password" placeholder="&#128272;  Contraseña" class="form-control"   name="password">

			<br>

			<input type="Submit" class="btn btn-danger" value="Ingresar">
			
			</form>
		</body>
		</html>
			


