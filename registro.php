
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fuente-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="./styles.css">
    <title>Registro</title>
</head>
<body>

    <!--form-->
    <section>
        <div class = "text-center tittles">Formulario de Registro</div>
        <form class="formulario sombra" action="registro.php" method="post">
            <!--Fieldset para dar información dentro del campo de formularios.-->
            <fieldset>
                <legend>Registrate llenando todos los campos.</legend>

                <div class="contenedor-campos">
                    <div class="campos">
                        <label>Nombre</label>

                        <input class="form" type="text" placeholder="Tu primer nombre :)" name="nombre">
                    </div>  

                    <div class="campos">
                        <label>Apellido</label>

                        <input class="form" type="text" placeholder="Tu primer apellido :)" name="apellido">
                    </div> 

                    <div class="campos">
                        <label>Teléfono</label>

                        <input class="form" type="tel" placeholder="Teléfono :)" name="tel">
                    </div>
                    
                    <div class="campos">
                        <label>Identificación</label>
                    
                        <input class="form" type="id" placeholder="Tu Número de Identificación" name="id">
                    </div>

                    <div class="campos">
                        <label>Correo</label>
                    
                        <input class="form" type="email" placeholder="Tu Email" name = "email">
                    </div>
                    
                </div> <!--contenedor-campos-->

                     <?php
                    include("./DB.php");
                    include("controlador/registro_user.php");
                    ?>
                <div class="ubicar-boton">
                    <input class="boton" type="submit" value="Registrar" name="registro">
                </div>

            </fieldset>
        </form>
    </section>

    <footer class="footer">
        <p>Inicia sesión <span class="footer-name"> <a href="login.php" >Aquí.</a></span> </p>
        <p>Todos los derechos reservados. <span class="footer-name"> <a href="index.html">Parqueadero CCAJ</a></span> </p>
    </footer>

    <!------------------>

</body>
</html>


