<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Votación de miss</title>
    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap"
        rel="stylesheet" />
    <!-- Line Awesome CDN Link -->
    <link rel="stylesheet" href="stylesmiss.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
</head>

<body>
    <div class="main-container">
        <h2>¡Vota por tu candidata Favorita para Miss Preu!</h2>
        <div class="radio-buttons">
            <form action="votomiss.php" method="POST">
                <label class="custom-radio">
                    <input type="radio" name="radio" checked value="1"/>
                    <span class="radio-btn martin">
                        <i class="las la-check"></i>
                        <img src="Candidatos/SuceilyCaal.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-biking"></i> -->

                            <h3>Suceily Minely Caal Prado</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="2" />
                    <span class="radio-btn Lizardo">
                        <!-- #region --><i class="las la-check"></i>
                        <img src="Candidatos/MeredithGonzales.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-futbol"></i> -->
                            <h3>Meredith Dayanara Gonzáles Mendoza</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="3" />
                    <span class="radio-btn German"><i class="las la-check"></i>
                        <img src="Candidatos/SteffaniaHercules.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-table-tennis"></i> -->
                            <h3>Mayri Estefanía López Hércules</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="4" />
                    <span class="radio-btn Smailyn"><i class="las la-check"></i>
                        <img src="Candidatos/AndreaOrrego.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-ellipsis-h"></i> -->
                            <h3>Andrea Mishell Orrego Granados</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="5" />
                    <span class="radio-btn Jan"><i class="las la-check"></i>
                        <img src="Candidatos/AnggieYat.jpeg" alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-ellipsis-h"></i> -->
                            <h3>Anggie Maryann Yat Román</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                    <input type="radio" name="radio" value="6" />
                    <span class="radio-btn Henrry"><i class="las la-check"></i>
                        <img src="Candidatos/NancyChavarria.jpeg " alt="">
                        <div class="hobbies-icon">
                            <!-- <i class="las la-ellipsis-h"></i> -->
                            <h3>Nancy Vanessa Chavarría Cano</h3>
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