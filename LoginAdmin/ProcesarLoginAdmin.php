<!--Conexión a la Base de Datos -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $UsuarioAdmin= $_POST['usuario'];
    $PassAdmin= $_POST['pass'];

    if(empty($UsuarioAdmin) || empty($PassAdmin)){
        echo "Completa los campos que se solicitan";
        header('Location: LoginAdmin/index.html');
        exit();
    }

    $SERVER="localhost";
    $USER="";
    $PASS="";
    $DB="votaciones";

    $conn = mysqli_connect($SERVER, $USER,$PASS, $DB);

    if (!$conn) {
        die("La conexión falló: " . mysqli_connect_error());
    }

    $UsuarioAdmin = $conn->real_escape_string($UsuarioAdmin);
    $PassAdmin = $conn->real_escape_string($PassAdmin);

    $sql="SELECT * FROM administrador WHERE usuario= '". $UsuarioAdmin . "'AND pass='" . $PassAdmin . "' ";
    $result= mysqli_query($conn, $sql);

    if ($result->num_rows === 1) {
        $_SESSION['usuario'] = $UsuarioAdmin;
        $_SESSION['logged_in'] = true;

        header('Location: resultados.php')
        exit();
    }  else {
        header('Location: LoginAdmin/index.php')
    }
}
?>