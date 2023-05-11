<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud | CCAJ</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <!--para usar iconos (font-awesome) -->
    <script src="https://kit.fontawesome.com/2e3c62ed08.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Ventana emergente de confirmación-->

    <script>
        function eliminar(){
            var rpta = confirm("¿Estás seguro de eliminar el usuario?");
            return rpta;
        }
    </script>

    <header>
    <?php
        require_once("headerLogin.php");
    ?>
    </header>
    
    
    <div class="img-text">
        <div class="img-banner">
            <br><br><br><br><br><br>
            <div class="text__img">
                <h1 class="no-margin">Página oficial Parqueadero CCAJ</h1>
                <h3 class="no-margin">Actualiza</h3>
            </div>
        </div>
    </div> 

    <!--Tabla-->
    <h3 class = "text-center p-3"> Usuarios registrados</h3>

    <?php
    include "../modelo/DB.php";
    include "../controlador/delete_user.php";
    ?>

    <div class = "container-fluid h4">
        <table class="table">
        <thead class = "bg-info">
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Identificación</th>
        <th scope="col">Correo</th>
        <th scope="col">Editar / Eliminar</th>
        </tr>
        </thead>
        <tbody>
        <?php

        include "../modelo/DB.php";
        $sql = $conexion -> query("select * from usuarios");


        //recorre todos los datos el while
        while ($datos = $sql -> fetch_object()){  ?>
        <tr>
            <td> <?= $datos -> Nombre?> </td>
            <td> <?= $datos -> Apellido?> </td>
            <td> <?= $datos -> Telefono?> </td>
            <td> <?= $datos -> Identificacion?> </td>
            <td> <?= $datos -> Correo?> </td>
        <td>
            <!--obtenemos el id para actualizar y eliminar-->
            <a href = "./edit.php?idR= <?= $datos -> id ?>" class = "btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
            <a onclick="return eliminar()" href = "crud.php?idD= <?= $datos -> id ?>" class = "btn btn-small btn-danger"><i class="fa-solid fa-eraser"></i></a>
        </td>
        </tr>
        <?php 
        }

        ?>
        
        </tbody>
        </table>
    </div>

    <footer>
    <?php
        require_once("footerLogin.php");
    ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>