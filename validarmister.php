<?php
session_start();
include_once('conexion.php');

if (isset($_SESSION['id']) && isset($_SESSION['codigo_sica'])) {
    $ID = $_SESSION['id'];

    $sql = "SELECT * from votos where fk_alumno = '$ID'";
            $query = mysqli_query($conexion, $sql);
            
            if($query->num_rows==0){
                $usuarioQ = $query->fetch_assoc();
                
                $id = $usuarioQ['fk_alumno'];
                $estadoMister = $usuarioQ['estado_mister'];

                if ($estadoMister == true) {
                    
                    header('Location: categoria.php?error=Ya votaste a algún candidato para MISTER');
                } else {
                    
                    header('Location: votacionmister.php');
                }
            }else{
                header('Location: categoria.php?error=Ya votaste a algún candidato para MISTER'); 
            }
} else {
    header('location: index.php');
    exit();
}
?>