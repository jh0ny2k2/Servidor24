<?php

    //INICIALIZAMOS LA SESION
    //session_start();

    //CREAMOS LA ACCION PARA SACAR CARTA
    if($_GET) {
        //COMPROBAMOS QUE SE RECIBE LA ACCION
        if (isset($_GET['accion'])) {

            //COMPROBAMOS QUE LA ACCION ES LA DE SACARCARTA
            if (strcmp($_GET['accion'],"sacarCarta") == 0) {

                $contador = 0;

                do {
                    if (isset($_SESSION['cartasBarajadas'])) {
                        $carta = $_SESSION['cartasBarajadas'];
                        
                        //BUSCAMOS UN NUMERO DEL 0 AL 39
                        $i = random_int(0,39);
                        //SACAMOS LA CARTA DEL NUMERO ANTERIORMENTE SACADO
                        echo '<img src=" '. $carta[$i]["url"] .'" width="200" alt="">';
                        $contador = $contador + $cartas[$i]["value"];
            
                        
                    }
                } while ($contador <= 7.5);

                echo '<p>Puntuación : ' . $contador . '</p>';
                //REDIRIGIMOS A INDEX.PHP
                header("Location: Ejercicio.php");
                die();
            }
            
        }

    }

?>