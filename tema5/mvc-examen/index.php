<?php
    namespace Examen;
    use Examen\controladores\ControladorJugadores;

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
            

        if (strcmp($_REQUEST['accion'],'mostrarLogIn') == 0) {
            ControladorJugadores::mostrarFormLogIn();
        }

        if (strcmp($_REQUEST['accion'],'recibirFormularioInicioSesion') == 0) {
            $usuario = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            ControladorJugadores::recibirFormLogIn($usuario, $password);
        }


        } else {
            //Mostrar inicio
            ControladorJugadores::mostrarInicio();
        }
    }





?>