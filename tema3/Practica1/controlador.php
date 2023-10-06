<?php
    //INICIALIZAMOS LA SESION ANTES DE TODO
    session_start();

    if ($_POST) {
        //FORMULARIO DE REGISTRO
        if (isset($_POST["formRegistro"])) {

            //Controlar que las contraseñas sean iguales            
            if (strcmp($password, $password2) != 0) {
                //echo "Qué pasa";
                header("Location: registro.php?error=NoCoinciden");
                die();
            }

            //PROCESAR LA INFORMACIÓN"
            $_SESSION['usuario'] = array("nombre" => $nombre, "email" => $email);

            //REDIRIGIR A INDEX.HTML
            header("Location: index.php");
            die();

        }
    }


?>