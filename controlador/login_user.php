<link rel="stylesheet" href="./styles.css">

<?php
    if (!empty($_POST["ingresar"])) {
        if (empty($_POST["usuario"]) or empty($_POST["clave"])) {
            echo '<div class = "alert">Algunos campos pueden estar vacíos</div>';
        } else {
            $usuario = $_POST["usuario"];
            $clave = $_POST["clave"];

            //Consulta

            $sql = $conexion -> query("SELECT * FROM admin WHERE User = '$usuario' and Password = '$clave'");

            //pregunto si existen esos datos

            if ($datos = $sql -> fetch_object()) {
                echo '<script>window.location="../vistas/principal.php"</script>';
            } else {
                echo '<div class = "alert">Datos incorrectos, reintente por favor</div>';
            }
            
        }
        
    }
?>