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
    <link rel="stylesheet" href="stylesmister2.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
</head>

<body>
    <div class="main-container">


        <h2>¡Vota por tu candidato Favorito para Mister Preu!</h2>
        <div class="radio-buttons">
            <form action="">
                <label class="custom-radio">
                    <input type="radio" name="radio" checked value="1" />
                    <span class="radio-btn martin">
                        <i class="las la-check"></i>
                        <img src="Candidatos/MartínSanchez.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-biking"></i> -->

                            <h3>Martín Antonio Sanches Thomae</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="2" />
                    <span class="radio-btn Lizardo">
                        <!-- #region --><i class="las la-check"></i>
                        <img src="Candidatos/LizardoCacao.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-futbol"></i> -->
                            <h3>Lizardo Andrés Cacao Winter</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="3" />
                    <span class="radio-btn German"><i class="las la-check"></i>
                        <img src="Candidatos/GermanContreras.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-table-tennis"></i> -->
                            <h3>Germán Enrique Contreras Ruiz</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="4" />
                    <span class="radio-btn Smailyn"><i class="las la-check"></i>
                        <img src="Candidatos/SmailynIzaguirre.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-ellipsis-h"></i> -->
                            <h3>Hector Smailyn Izaguirre Alvarado</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="5" />
                    <span class="radio-btn Jan"><i class="las la-check"></i>
                        <img src="Candidatos/JanVielman.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-ellipsis-h"></i> -->
                            <h3>Jan Alessandro Vielman López</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="6" />
                    <span class="radio-btn Henrry"><i class="las la-check"></i>
                        <img src="Candidatos/HenrryAlvarado.jpeg " alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-ellipsis-h"></i> -->
                            <h3>Henrry Alexander Alvarado Tzi</h3>
                        </div>
                    </span>
                </label>
                <div class="wrap">
                    <button class="button">¡Enviar Voto!</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>

<?php }else{
    header('location: index.php');
} ?>

