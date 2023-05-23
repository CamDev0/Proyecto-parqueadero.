<?php

if(!empty($_POST["registro"]))
{
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["tel"]) or empty($_POST["id"])  or empty($_POST["placa"]) or empty($_POST["email"])) {
    echo '\n';
    } else {
        //capturamos los datos
        $idUser = $_POST["id"];
        $placa = $_POST["placa"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $minutos = $_POST["min"];
        
        //registramos a la BD
        $sql = $conexion -> query("INSERT INTO dates (idUser, Placa, Fecha, Hora, Minutos) values ('$idUser', '$placa','$fecha', $hora, '$minutos')");

    }

}

?>