<?php

session_start();
date_default_timezone_set("America/Bogota");
// Primero controlamos si el método del envío es POST
if ( $_SERVER['REQUEST_METHOD'] === 'POST') {       

    // Chequeamos si el botón registro se ha presionado
    if ( isset( $_POST['registro'] ) && $_POST['registro'] == 'Registrar' ) {

        // Creamos una variable cual me indica que era el primer intento
        $_SESSION['primer_intento'] = true;

        $inicio = date('h:i:s');

        $_SESSION["inicio"] = $inicio;

        // echo 'Hora de registro: '. $_SESSION["inicio"];      

    }   
}
    // Aquí chequeamos si la variable del primer_intento está puesta

     if ( isset( $_SESSION['primer_intento'] )) {       


        $fin = date('h:i:s');

        $_SESSION["fin"] = $fin;

        // Y por último calculamos la diferencia en minutos
        $inicio = strtotime($_SESSION["inicio"]);
        $fin = strtotime($_SESSION["fin"]);
        $total = round(abs($fin - $inicio) / 60, 2);

        // Ponemos false para que vuelva a presionar el botón de "inicio"
        $_SESSION['primer_intento'] = false;
    }


?>
