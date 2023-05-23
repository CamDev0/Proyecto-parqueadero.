<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | CCAJ</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/icon.png">

    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <!--Header - nav-->
    <header>
    <?php
        require_once("header.php");
    ?>
    </header>
    
    
    <div class="img-text">
        <div class="img-banner">
            <br><br><br><br><br><br>
            <div class="text__img">
                <h2 class="no-margin">Página oficial Parqueadero CCAJ</h2>
                <p class="no-margin">Sobre nosotros...</p>
            </div>
        </div>
    </div>
    
    <!--Principal content-->

    <section class="container principal-content">
        
        <main class="blog">
            <h3>Sobre Nosotros</h3>

            <article class="entrada">
                <div class="entrada__img">
                    <img src="../img/nosotros.png" alt="threeImage">
                </div>
                
                <div class="entrada__text">
                    <h4 class="no-margin">Parqueadero CCAJ</h4>
                    <p>
                        Parqueadero CCAJ es una empresa que construye soluciones inteligentes de parqueo, con una alta tecnología. Es avanzado en Latinoamérica en diseñar, construir y puesta en funcionamiento de los sistemas mecanizados de parqueaderos.
                        Nuestra empresa cuenta con un equipo interdisciplinario con experiencia en el desarrollo de proyectos, instalación, mantenimiento y operación.
                    </p>
                </div>

            </article>
        </main>

    </section>

    <footer>
    <?php
        require_once("footer.php");
    ?>
    </footer>
</body>
</html>