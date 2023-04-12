<link rel="stylesheet" href="../styles.css">

<?php
    if(!empty($_POST["edit"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["tel"]) and !empty($_POST["id"]) and !empty($_POST["email"]) ) {
           
            $idR = $_POST["idRegister"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $tel = $_POST["tel"];
            $cod = $_POST["id"];
            $email = $_POST["email"];

            $sql = $conexion -> query("Update usuarios SET Nombre = '$nombre', Apellido = '$apellido', Telefono = '$tel', Identificacion = '$cod', Correo = '$email' WHERE id = $idR");

            //validamos si se cumple.
            if ($sql == 1) {
                header("location: ../PagPrincipal/crud.php");
            } else {
                echo '<div class = "alert"> Error al actualizar, reintente por favor </div>';
            }
            

        } else {
            echo '<div class = "alert"> Algunos campos pueden estar vacìos. </div>';
        }
        
    }

?>