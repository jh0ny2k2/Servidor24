<?php
    //INICIALIZAMOS LA SESION
    session_start();

    include_once("lib.php");

    //CREAMOS LA ACCION PARA SACAR CARTA
    if ($_GET) {

        if (isset($_GET["accion"])) {

            //COMPROBAMOS QUE LA ACCION ES LA DE SACARCARTA
            if (strcmp($_GET['accion'],"sacarCarta") == 0) {   

                if (isset($_SESSION['cartasBarajadas'])) {
                    $carta = $_SESSION['cartasBarajadas'];
                        
                    //BUSCAMOS UN NUMERO DEL 0 AL 39
                    $i = random_int(0,39);
                    //SACAMOS LA CARTA DEL NUMERO ANTERIORMENTE SACADO
                    echo '  <a href="controlador.php?accion=sacarCarta">
                               <img src="./cartas/dorso-rojo.svg" width="200" alt="">  
                            </a>';

                    echo '<img src=" '. $carta[$i]["url"] .'" width="200" alt="">';
                    
                    calcularValor($carta[$i]["value"]);
                }

                //REDIRIGIMOS A INDEX.PHP
                //header("Location: Ejercicio.php");
                //die();
            }
        }
    }

?>