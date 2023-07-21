<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap"
        rel="stylesheet" />
    <!-- Line Awesome CDN Link -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="main-container">
        <h2>Elige Categoría</h2>
        <div class="radio-buttons">
            <a href="votacionmister.php"><label class="custom-radio">
                    <input type="submit" name="radio" checked />
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon">
                            <i class="bi bi-gender-male"></i><br><br>
                            <h3>Masculino</h3>

                        </div>
                    </span>
                </label>
            </a>
            <a href="votacionmiss.php"><label class="custom-radio">
                    <input type="submit" name="radio" />
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon">
                            <i class="bi bi-gender-female"></i><br><br>
                            <h3>Femenino</h3>

                        </div>
                    </span>
                </label>
            </a>
        </div>
    </div>
</body>

</html>