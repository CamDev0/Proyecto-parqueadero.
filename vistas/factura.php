<?php
    include "../modelo/DB.php";
    include "./date.php";
    include "../controlador/cliente_controller.php";

        $id = $_GET["idT"];
        $sql = $conexion -> query("select * from dates where id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura | CCAJ</title>

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
        require_once("headerLogin.php");
    ?>
</header>
<br><br><br>
    
<section>
    <form class="formulario sombra" method = "post">
    <fieldset>
        <legend>Facturación.</legend>
            <input type= "hidden" name = "idDates" value = "<?= $_GET["idT"]?>">

                <?php
                    while ($datos = $sql -> fetch_object()){ ?>

                    <div class="contenedor-campos">
                        <div class="campos">
                            <label>Identificación Cliente: </label>
                            <input class="form" type="text" readonly onmousedown="return false;" name="nombre" value = "<?= $datos -> idUser?>">
                        </div>  

                        <div class="campos">
                            <label>Placa: </label>
                            <input class="form" type="text" readonly onmousedown="return false;" name="nombre" value = "<?= $datos -> Placa?>">
                        </div> 

                        <div class="campos">
                            <label>Fecha Ingreso: </label>
                            <input class="form" type="text" readonly onmousedown="return false;" name="nombre" value = "<?= $datos -> Fecha?>">
                        </div> 

                        <div class="campos">
                            <label>Fecha salida: </label>
                            <input class="form" type="text" readonly onmousedown="return false;" name="nombre" value = "<?= $fecha;?>">
                        </div> 

                        <div class="campos">
                            <label>Total a pagar: </label>
                            <input class="form" type="text" readonly onmousedown="return false;" name="nombre" value = "<?= $datos -> idUser?>">
                        </div> 
                        
                    </div> 
                    
                    <?php
                    }
                    ?>

                    </form>
                    <div class="ubicar-boton">
                        <a class="boton" href = "factura.php?idFin= <?= $id?>">Finalizar</a>
                    </div>

        </fieldset>
</section>


    <footer>
    <?php
        require_once("footerLogin.php");
    ?>
    </footer>
</body>
</html>