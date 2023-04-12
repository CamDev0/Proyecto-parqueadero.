<?php
    if(!empty($_POST["edit"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["tel"]) and !empty($_POST["id"]) and !empty($_POST["email"]) ) {
            # code...
        } else {
            echo '<div class = "alert"> Algunos campos pueden estar vacìos. </div>';
        }
        
    }

?>