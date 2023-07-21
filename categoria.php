<?php 
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['codigo_sica'])){
    
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap"
        rel="stylesheet" />
    <!-- Line Awesome CDN Link -->
    <link rel="stylesheet" href="categoria.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="main-container">
        <h2>Elige Categoría</h2>
        <div class="radio-buttons">
            <a href="validarmister.php"><label class="custom-radio">
                    <input type="submit" name="radio" checked />
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon">
                            <i class="bi bi-gender-male"></i><br><br>
                            <h3>Masculino</h3>
                        </div>
                    </span>
                </label>
            </a>
            <a href="validarmiss.php"><label class="custom-radio">
                    <input type="submit" name="radio" />
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon">
                            <i class="bi bi-gender-female"></i><br><br>
                            <h3>Femenino</h3>
                        </div>
                    </span>
                </label>
            </a>
            <a href="cerrarSesion.php"><label class="custom-radio">
                    <input type="submit" name="radio" />
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon">
                            <i class="bi bi-door-open"></i><br><br>
                            <h3>Cerrar Sesión</h3>
                        </div>
                    </span>
                </label>
            </a>
            <?php if (isset($_GET['error'])) { ?>
              <p class="error">
                <?php echo $_GET['error'] ?>
              </p>
            <?php } ?>
            <br>
            <?php if (isset($_GET['success'])) { ?>
              <p class="success">
                <?php echo $_GET['success'] ?>
              </p>
            <?php } ?>
        </div>
    </div>
</body>

</html>

<?php }else{
    header('location: index.php');
} ?>