
<?php
    include "../modelo/DB.php";

    //obtenemos el id que se envìa
    $idR = $_GET["idR"];
    //con ese id, hacemos la consulta
    $sql = $conexion -> query("select * from usuarios where id = $idR");

?>

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
    <link rel="stylesheet" href="../styles.css">
    <title>Edit | CCAJ</title>
</head>
<body>

    <header>
    <?php
        require_once("headerLogin.php");
    ?>
    </header>
    <br><br><br>
    <!--form-->
    <section>
        <form class="formulario sombra" method = "post">
            <!--Fieldset para dar información dentro del campo de formularios.-->
            <fieldset>
                <legend>Edita cualquier campo.</legend>
                <input type= "hidden" name = "idRegister" value = "<?= $_GET["idR"]?>">
                <?php
                    while ($datos = $sql -> fetch_object()){ ?>
                        <div class="contenedor-campos">
                        <div class="campos">
                            <label>Nombre</label>
    
                            <input class="form" type="text"  name="nombre" value = "<?= $datos -> Nombre?>">
                        </div>  
    
                        <div class="campos">
                            <label>Apellido</label>
    
                            <input class="form" type="text" name="apellido" value = "<?= $datos -> Apellido?>">
                        </div> 
    
                        <div class="campos">
                            <label>Teléfono</label>
    
                            <input class="form" type="tel"  name="tel" value = "<?= $datos -> Telefono?>">
                        </div>
                        
                        <div class="campos">
                            <label>Identificación</label>
                        
                            <input class="form" type="id"  name="id" value = "<?= $datos -> Identificacion?>">
                        </div>

                        <div class="campos">
                            <label>ID del vehículo</label>
                        
                            <input class="form" type="id"  name="placa" value = "<?= $datos -> Placa?>">
                        </div>
    
                        <div class="campos">
                            <label>Correo</label>
                        
                            <input class="form" type="email"  name = "email" value = "<?= $datos -> Correo?>">
                        </div>
                        
                    </div> 
                    
                    <?php
                    }

                    include "../controlador/modificar_user.php";
                    ?>

                <div class="ubicar-boton">
                    <input class="boton" type="submit" value="Actualizar" name="edit">
                </div>

            </fieldset>
        </form>
    </section>

    <footer>
    <?php
        require_once("footerLogin.php");
    ?>
    </footer>
</body>
</html>


