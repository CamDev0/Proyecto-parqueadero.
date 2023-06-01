
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
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="./styles.css">
    <title>Registro | CCAJ</title>
</head>
<body>

    <header>
    <?php
        require_once("headerLogin.php");
    ?>
    </header>
    <!--form-->
    <section>
      <div class = "text-center tittles"></div>
        <form class="formulario sombra" action="registro.php" method="post">
            <!--Fieldset para dar información dentro del campo de formularios.-->
            <fieldset>
                <legend>Registrar clientes.</legend>
                <div class="contenedor-campos">
                    <div class="campos">
                        <label>Nombre</label>

                        <input class="form" type="text" placeholder="Primer nombre :)" name="nombre">
                    </div>  

                    <div class="campos">
                        <label>Apellido</label>

                        <input class="form" type="text" placeholder="Primer apellido :)" name="apellido">
                    </div> 

                    <div class="campos">
                        <label>Teléfono</label>

                        <input class="form" type="tel" placeholder="Teléfono :)" name="tel">
                    </div>
                    
                    <div class="campos">
                        <label>Identificación</label>
                    
                        <input class="form" type="id" placeholder="Número de Identificación" name="id">
                    </div>

                    <div class="campos">
                        <label>Placa del Vehículo</label>
                    
                        <input class="form" type="id" placeholder="ID del vehículo" name="placa">
                    </div>

                    <div class="campos">
                        <label>Correo</label>
                    
                        <input class="form" type="email" placeholder="Email" name = "email">
                    </div>
                    
                </div> <!--contenedor-campos-->

                     <?php
                    include("../modelo/DB.php");
                    include("../controlador/registro_user.php");
                    include("../controlador/date_controller.php");
                    include("./date.php");
                    include("../modelo/contador.php");
                    ?>

                <input type= "hidden" name = "fecha" value = "<?= $fecha?>">
                <input type= "hidden" name = "hora" value = "<?= $hour?>">
                <input type= "hidden" name = "min" value = "<?= $min?>">

                <div class="ubicar-boton">
                    <input class="boton" type="submit" value="Registrar" name="registro">
                </div>
            </fieldset>
        </form>
    </section>

    <footer>
    <?php
        require_once("footerLogin.php");
    ?>
    </footer>
    <!------------------>

</body>
</html>


