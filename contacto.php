<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | CCAJ</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">

    <link rel="stylesheet" href="./styles.css">

</head>

<body>
    <!--Header - nav-->

    <header>
    <?php
        require_once("vistas/header.php");
    ?>
    </header>
    
    <div class="img-text">
        <div class="img-banner">
            <br><br><br><br><br><br>
            <div class="text__img">
                <h2 class="no-margin">Página oficial Parqueadero CCAJ</h2>
                <p class="no-margin">Contacto...</p>
            </div>
        </div>
    </div>
    
    <!--Principal content-->

    <section class="container principal-content">
        
        <main class="blog">
            <h3>Contáctanos</h3>

            <article class="entrada">
                <div class="entrada__img">
                    <img src="img/nosotros.png" alt="threeImage">
                </div>
                
                <div class="entrada__text">
                    <h4 class="no-margin">Oficina:</h4>
                    <p>
                        Medellín Calle 55 #14A-54
                    </p>
                    <h4 class="no-margin">Correo:</h4>
                    <p>
                        ccajparking@gmail.com
                    </p>
                    <h4 class="no-margin">Número:</h4>
                    <p>
                        (571) 6514325 / 27 / 45
                    </p>
                </div>

            </article>
        </main>

    </section>

    <footer>
    <?php
        require_once("vistas/footer.php");
    ?>
    </footer>
</body>
</html>