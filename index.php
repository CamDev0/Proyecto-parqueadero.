<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero | CCAJ</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">

    <link rel="stylesheet" href="./styles.css">

</head>

<body>
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
                <p class="no-margin">Consulta nuestros servicios</p>
            </div>
        </div>
    </div>
    
    <!--Principal content-->

    <section class="container principal-content">
        
        <main class="blog">
            <h3>Nuestros Servicios</h3>

            <article class="entrada">
                <div class="entrada__img">
                    <img src="img/servicio1.jpg" alt="firstImage">
                </div>

                <div class="entrada__text">
                    <h4 class="no-margin">Parqueo de Carros</h4>
                    <p>
                        Somos una empresa dedicada a ofrecer un espacio seguro y conveniente para el estacionamiento de carros. Nos aseguramos de que su vehículo esté protegido mientras realiza sus actividades diarias.
                    </p>
                    <p>
                        Contamos con un amplio estacionamiento cubierto, servicio de seguridad las 24 horas y personal capacitado para atender a nuestros clientes. Además, ofrecemos tarifas competitivas y descuentos por estacionamientos prolongados. Nuestra misión es brindar una experiencia de estacionamiento cómoda y confiable a nuestros clientes, garantizando la protección de sus vehículos y su satisfacción en todo momento.
                    </p>
                    <p>
                        ¡Confíe en nosotros para el cuidado y protección de su carro en nuestro parqueadero de carros!
                    </p>
                </div>

            </article>

            <article class="entrada">
                <div class="entrada__img">
                    <img src="img/servicio2.jpg" alt="twoImage">      
                </div>

                <div class="entrada__text">
                    <h4 class="no-margin">Parqueadero de motos</h4>
                    <p>
                        En nuestro parqueadero de motos, contamos con espacios de estacionamiento amplios y separados, para garantizar que cada moto esté totalmente protegida. Además,  ofrecemos medidas de seguridad adicionales como cámaras de vigilancia, para prevenir robos y vandalismo.
                    </p>
                    <p>
                        De igual manera, nuestro equipo de seguridad y vigilancia está atento para garantizar la seguridad de su moto. Nos preocupamos por la satisfacción de nuestros clientes y siempre buscamos brindar un servicio de calidad, amigable y eficiente.
                    </p>

                    <p>
                        ¡Confíe en nosotros para el cuidado y protección de su moto en nuestro parqueadero de motos!

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