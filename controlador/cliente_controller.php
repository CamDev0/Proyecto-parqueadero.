<link rel="stylesheet" href="../styles.css">

<?php

if(!empty($_GET["idFin"])) {

    $id = $_GET["idFin"];

    $sql = $conexion -> query("Delete from dates WHERE id = $id");
    
    if ($sql == 1) {
        echo '<script>window.location="../vistas/time.php"</script>';
    } 
}


?>