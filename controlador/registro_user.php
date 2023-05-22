<link rel="stylesheet" href="../styles.css">

<?php

//validamos que todo este lleno a lo que se presione el botón

if(!empty($_POST["registro"]))
{
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["tel"]) or empty($_POST["id"])  or empty($_POST["placa"]) or empty($_POST["email"])) {
    echo '<div class="alert">Algunos campos pueden estar vacíos </div>';
    } else {
        //capturamos los datos

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $tel = $_POST["tel"];
        $id = $_POST["id"];
        $placa = $_POST["placa"];
        $email = $_POST["email"];
        
        //registramos a la BD
        
        $sql = $conexion -> query("INSERT INTO usuarios(Nombre, Apellido, Telefono, Identificacion, Placa, Correo) values ('$nombre', '$apellido','$tel', $id, '$placa', '$email')");



        //validamos si el usuario se ingresó correctamente
        if ($sql == 1) {
            echo '<div class="success">Usuario registrado correctamente </div>';
        }
        else {
            echo '<div class="alert">Error al registrar, reintente por favor </div>';
        }
        
    }

}

?>