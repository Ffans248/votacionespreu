<?php
session_start();
include_once('conexion.php');

if (isset($_SESSION['id']) && isset($_SESSION['codigo_sica'])) {
    $id = $_SESSION['id'];
    $cod = $_SESSION['codigo_sica'];

    include('conexion.php');
    if (!$conexion) {
        die("La conexión fallo: " . mysqli_connect_error());
    } else {
        if (empty($_POST["radio"])) {
            header('Location: votacionmiss.php?error=<script>alert("¡No has seleccionado una candidata!");</script>');
        } else {
            $idmiss = $_POST['radio'];
            $sql = mysqli_query($conexion, "SELECT * FROM votos WHERE fk_alumno = '$id'");
            $r = mysqli_num_rows($sql);
            if ($r > 0) {



                $sql = "UPDATE votos SET miss=$idmiss, estado_miss=1";

            } else {

                $sql = "INSERT INTO votos (fk_alumno, miss, estado_miss) VALUES ($id, $idmiss, 1)";

                if (mysqli_query($conexion, $sql)) {
                    header("Location: index.php");
                } else {
                    echo "Error: " . mysqli_error($conexion);
                }
            }


        }


    }
} else {
    header('location: index.php');
    exit();
}
?>