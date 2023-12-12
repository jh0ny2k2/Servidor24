<?php
    namespace Examen;
    use Examen\controladores\ControladorUsuario;

    //Autocargar las clases --------------------------
    spl_autoload_register(function ($class) {
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php"; 
    });
    //Fin Autcargar ----------------------------------


    if (isset($_REQUEST)) {
        //Tratamiento de botones, forms, ...
        if (isset($_REQUEST["accion"])) {
            echo "Tratar acción";

            if (strcmp($_REQUEST['accion'], 'mostrarLogIn') == 0) {
                
                controladorUsuario::mostrarLogIn();
            }

            if (strcmp($_REQUEST['accion'], 'realizarLogIn') == 0) {
                $email = $_REQUEST['email'];
                $password = $_REQUEST['password'];

                ControladorUsuario::realizarLogIn($email, $password);
            }



        } else {
            //Mostrar inicio
            ControladorUsuario::mostrarInicio();
        }
    }





?>