<?php
//CONEXION
$host = "localhost";
$user = "root";
$pass = "";
$db = "votaciones";

$conexion = new mysqli($host, $user, $pass, $db);


if(!$conexion){

    die("La conexión fallo: " . mysqli_connect_error());
}

?>