<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal | CCAJ</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <!--Header - nav-->

    <header>
    <?php
        require_once("headerLogin.php");
    ?>
    </header>
    
    
    <div class="img-text">
        <div class="img-banner">
            <br><br><br><br><br><br>
            <div class="text__img">
                <h2 class="no-margin">Página oficial Parqueadero CCAJ</h2>
                <p class="no-margin">Registros</p>
            </div>
        </div>
    </div>
    
    <!--Principal content-->

    <section class="container principal-content">
        
        <main class="blog">
            <h3>Registros</h3>

            <article class="entrada">
                <div class="entrada__img">
                    <img src="../img/Principal.jpg" alt="threeImage">
                </div>
                
                <div class="entrada__text">
                    <h4 class="no-margin">Consultas</h4>
                    <p style="text-align: justify;">
                        Aquí puedes consultar los usuarios que se inscribieron  en el formulario de registro.
                    </p>
                    <p>
                        También puedes actualizarlos y eliminarlos :)
                    </p>
                </div>

            </article>
        </main>

    </section>

    <footer>
    <?php
        require_once("footerLogin.php");
    ?>
    </footer>

</body>
</html>