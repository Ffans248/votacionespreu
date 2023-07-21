<?php 
    session_start();
    if(isset($_SESSION['id'])){
        header('location: categoria.php');
    } else {
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="CodeHim">
  <title> Ingresar </title>
  <!-- Style CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Demo CSS (No need to include it into your project) -->
  <link rel="stylesheet" href="./css/demo.css">
</head>

<body>

  <!--$%adsense%$-->
  <main class="cd__main">
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="main">
      <div class="container a-container" id="a-container">
        <form class="form" method="POST" action="login.php">
          <h2 class="form_title title">Acceder a las Votaciones</h2>
          <input class="form__input" name="codigo_sica" type="text" placeholder="Codigo SICA">
          <input class="form__input" name="fechaNac" type="date" placeholder="Fecha de Nacimiento">
          <?php if(isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']?></p>
                    <?php } ?>
                    <br>
                    <?php if(isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']?></p>
                    <?php } ?>
                    
          <button class="form__button button submit">Ingresar</button>
        </form>
      </div> 
    </div>   
    <!-- END EDMO HTML (Happy Coding!)-->
    
  </main>

  

  <footer class="cd__credit">6to Computación - Preuniveristario del Norte</footer>  
</body>

</html>
<?php }?>