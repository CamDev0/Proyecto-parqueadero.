<link rel="stylesheet" href="../styles.css">

<?php

if(!empty($_GET["idD"])) {

    $id = $_GET["idD"];

    $sql = $conexion -> query("Delete from usuarios WHERE id = $id");

    if ($sql == 1) {
        echo '<div class = "success">Usuario eliminado correctamente</div>';
    } else {
        echo '<div class = "alert">Error al eliminar, reintente por favor</div>';
    }
    
}

?>