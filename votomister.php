<?php 
session_start();
$id=$_SESSION['id'];
$cod=$_SESSION['codigo_sica'];

include('conexion.php');
if (!$conexion) {
    die("La conexión fallo: " . mysqli_connect_error());
} else {
        if (empty($_POST["radio"])) {
            header('Location: votacionmister.php?error=<script>alert("¡No has seleccionado una candidata!");</script>');
        }else {
    $idmister = $_POST['radio'];
    $sql = mysqli_query($conexion,"SELECT * FROM votos WHERE fk_alumno = '$id'");
    $r = mysqli_num_rows($sql);
    if ($r > 0) {
        
        
       
        $sql = "UPDATE votos SET mister=$idmister, estado_mister=1";
        if (mysqli_query($conexion, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
        
    } else {
        
        $sql = "INSERT INTO votos (fk_alumno, mister, estado_mister) VALUES ($id, $idmister, 1)";

    if (mysqli_query($conexion, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
    }
    

}

        
    }?>
