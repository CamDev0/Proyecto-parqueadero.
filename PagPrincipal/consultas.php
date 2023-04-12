<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas | CCAJ</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <!--Header - nav-->

    <header class="header no-margin no-padding"> 
        <div class="container">
            <div class="navbar">
                <a class="logo" href="#">
                    <h1 class="logo__name no-margin text-center">Parqueadero<spa class="logo__bold">CCAJ</spa> </h1>
                </a>
                    <nav class="nav">
                        <a href="consultas.php" class="nav__link">Consultas</a>
                        <a href="crud.php" class="nav__link">Editar Datos</a>
                        <a href="../index.html" class="nav__link">Salir</a>
                    </nav>
            </div>
        </div>
    </header>
    
    
    <div class="img-text">
        <div class="img-banner">
            <br><br><br><br><br><br>
            <div class="text__img">
                <h1 class="no-margin">Página oficial Parqueadero CCAJ</h1>
                <h3 class="no-margin">Consulta</h3>
            </div>
        </div>
    </div>
    
    <!--Tabla-->
    <h3 class = "text-center p-3"> Usuarios registrados</h3>
    <div class = "container-fluid h4">
    <table class="table">
    <thead class = "bg-info">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Identificación</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include "../DB.php";
    $sql = $conexion -> query("select * from usuarios");

    //recorre todos los datos de la DB el while
    while ($datos = $sql -> fetch_object()){  ?>
        <tr>
        <td> <?= $datos -> id?> </td>
        <td> <?= $datos -> Nombre?> </td>
        <td> <?= $datos -> Apellido?> </td>
        <td> <?= $datos -> Telefono?> </td>
        <td> <?= $datos -> Identificacion?> </td>
        <td> <?= $datos -> Correo?> </td>
      </tr>
    <?php 
    }
    
   ?>

  </tbody>
</table>
    </div>

    <footer class="footer-principal">
        <div class="container">
            <div class="navbar"> 
                <a class="logo" href="#">
                    <h1 class="logo__name no-margin text-center">Parqueadero<span class="logo__bold">CCAJ</span> </h1>
                </a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>