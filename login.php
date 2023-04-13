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
    <title>Login | CCAJ</title>
</head>
<body>

    <!--form-->
    <section>
        <div class = "text-center tittles">Inicia sesión con tu nombre y tu identificación</div>
        <form class="formulario sombra" action="login.php" method="post">
            <!--Fieldset para dar información dentro del campo de formularios.-->
            <fieldset>
                <legend>Iniciar Sesión.</legend>

                <div class="contenedor-campos">
                    <div class="campos">
                        <label>Usuario</label>

                        <input class="form" type="text" placeholder="El nombre que usaste al registrarte:)" name="usuario">
                    </div>  

                    <div class="campos">
                        <label>Contraseña</label>

                        <input class="form" type="text" placeholder="Tu identificación:)" name="clave">
                    </div> 
       
                </div> <!--contenedor-campos-->
                        <?php
                        include("DB.php");
                        include("controlador/login_user.php");
                         ?>
                <div class="ubicar-boton">
                    <input class="boton" type="submit" value="Ingresar" name="ingresar">
                </div>

            </fieldset>
        </form>
    </section>

    <footer class="footer">
        <p>Puedes registrarte <span class="footer-name"> <a href="registro.php" >Aquí.</a></span> </p>

        <p>Todos los derechos reservados. <span class="footer-name"> <a href="index.html" >Parqueadero CCAJ</a></span> </p>
    </footer>

    <!------------------>

</body>
</html>
