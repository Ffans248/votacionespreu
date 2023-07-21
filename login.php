<?php
    session_start();
    include_once('conexion.php');
    if(!isset($_POST['id']) && !isset($_POST['codig_sica'])){

        $codigo_sica = $_POST['codigo_sica'];
        $fechaNac = $_POST['fechaNac'];

        if(empty($codigo_sica)){
            header("location: index.php?error=El codigo SICA es requerido");
            exit();
        }elseif(empty($fechaNac)){
            header("location: index.php?error=La fecha de nacimiento es requerida");
            exit();
        }else{
            $sql = "SELECT * FROM alumnos WHERE codigo_sica = '$codigo_sica'";
            $query = mysqli_query($conexion, $sql);
            
            if($query->num_rows==1){
                $usuarioQ = $query->fetch_assoc();
                
                $id = $usuarioQ['id'];
                $usuario1 = $usuarioQ['codigo_sica'];
                $date1 = $usuarioQ['fechaNac'];

                if($usuario1 === $codigo_sica){
                    if($fechaNac === $date1){
                        $_SESSION['id'] = $id;
                        $_SESSION['codigo_sica'] = $usuario1;
    
                        header('Location: categoria.php');
                    }else{
                        header('Location: index.php?error=Codigo SICA o fecha de nacimiento incorrecta ');
                    }
                }else{
                    header('Location: index.php?error=Codigo SICA o fecha de nacimiento incorrecta ');
                }
            }else{
                header('Location: index.php?error=Codigo SICA o fecha de nacimiento incorrecta'); 
            }
        }
    }
?>
