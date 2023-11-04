<?php



$server     = 'localhost'; //servidor
$username   = 'root'; //usuario de la base de datos
$password   = ''; //password del usuario de la base de datos
$database   ='Asistencia_Alumnos'; //nombre de la base de datos

$conexion = new mysqli();

$conexion->connect($server, $username, $password, $database);

?>