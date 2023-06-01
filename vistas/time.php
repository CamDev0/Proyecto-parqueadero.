
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activos | CCAJ</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">

    <script src="https://kit.fontawesome.com/2e3c62ed08.js" crossorigin="anonymous"></script>

</head>

<body>

<!-- <script>
        function finalHour(){

            var tot = <?php $total; ?>
            return tot;
        }
</script> -->

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
                <h1 class="no-margin">Página oficial Parqueadero CCAJ</h1>
                <h3 class="no-margin">Clientes</h3>
            </div>
        </div>
    </div>
    <br>

    <?php
    include "../modelo/DB.php";
    //mandamos el post del filtro (buscar)
    if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
    ?>

<form id="form2" name="form2" method = "post" action = "time.php"> 
    <div class = "campos">
        <label class= "form-label">| Buscar por Identificación o Placa</label>
        <input type= "text" class="form-filtro" id="buscar" name="buscar" value = "<?php echo $_POST['buscar'] ?>">
    </div>
    <div class="col-1">
        <input type= "submit" class = "boton-filtro" value="Buscar" style = "background-color: #7BB4E3;">
    </div>



    <?php
    //si post está vacío que me ponga un espacio
    if ($_POST['buscar'] == ''){$_POST['buscar'] = ' ';}

    //separa los campos para la busqueda
    $aKeyword = explode(" ", $_POST['buscar']);
    
    //primera query que nos muestre todos los datos
    if ($_POST['buscar'] == '')
    {
        $query = "select id, idUser, Placa, Fecha, Hora, Minutos from dates";
    }
    //sino está vacío el post pues que traiga el filtro
    else{
        $query = "select id, idUser, Placa, Fecha, Hora, Minutos  from dates ";

        if ($_POST['buscar'] != '')
        {
            $query .= "WHERE (idUser LIKE LOWER('%".$aKeyword[0]."%') OR Placa LIKE LOWER('%".$aKeyword[0]."%'))";
        }
        //Por si escribimos dos palabras
        for ($i = 1; $i < count($aKeyword); $i++)
        {
            if(!empty($aKeyword[$i]))
            {
                $query .= " OR idUser LIKE '%" .$aKeyword[$i] ."%' OR Placa LIKE '%" .$aKeyword[$i] ."%' ";
            }
        }
    }

    $sql = $conexion -> query($query);

    ?>
</form>
    <!--Tabla-->
    <h3 class = "text-center p-3"> Clientes actuales</h3>
    <div class = "container-fluid h4">
    <table class="table">
    <thead class = "bg-info">
    <tr>
      <th scope="col">Identificación</th>
      <th scope="col">Placa</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Minutos</th>
      <th scope="col">Finalizar</th>
    </tr>
  </thead>
  <tbody>

    <?php
    while ($rowSql = $sql -> fetch_assoc()){  ?>

        <tr>
        <td> <?php echo $rowSql["idUser"];?> </td>
        <td> <?php echo $rowSql["Placa"];?> </td>
        <td> <?php echo $rowSql["Fecha"];?> </td>
        <td> <?php echo $rowSql["Hora"];?> </td>
        <td> <?php echo $rowSql["Minutos"];?> </td>
        <td>
            <a href = "./factura.php?idT= <?= $rowSql["id"];?>" class = "btn btn-small btn-danger"><i class="fa-solid fa-eraser"></i></a>
        </td>
      </tr>
    <?php 
    }
   ?>
  </tbody>
  </table>

    <footer>
    <?php
        require_once("footerLogin.php");
    ?>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>