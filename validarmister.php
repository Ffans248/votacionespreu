<?php
session_start();
include_once('conexion.php');

if (isset($_SESSION['id']) && isset($_SESSION['codigo_sica'])) {


} else {
    header('location: index.php');
    exit();
}
?>