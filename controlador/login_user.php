<link rel="stylesheet" href="./styles.css">

<?php
    if (!empty($_POST["ingresar"])) {
        if (empty($_POST["usuario"]) or empty($_POST["clave"])) {
            echo '<div class = "alert">Algunos campos pueden estar vacíos</div>';
        } else {
            $usuario = $_POST["usuario"];
            $clave = $_POST["clave"];

            //Consulta

            $sql = $conexion -> query("SELECT * FROM usuarios WHERE Nombre = '$usuario' and Identificacion = '$clave'");

            //pregunto si existen esos datos

            if ($datos = $sql -> fetch_object()) {
                //header("location: ./PagPrincipal/principal.php");
                echo '<script>window.location="PagPrincipal/principal.php"</script';
            } else {
                echo '<div class = "alert">Datos incorrectos, reintente por favor</div>';
            }
            
        }
        
    }
?>