<?php
    //INICIAMOS SESION ANTES QUE NADA
    session_start();

    namespace RegalosNavidad;
    use RegalosNavidad\controladores\ControladorRegalosNavidad;

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
        if (isset($_REQUEST['accion'])) {
           

            if (strcmp($_REQUEST['accion'],'mostrarLogIn') == 0) {
                ControladorRegalosNavidad::MostrarFormularioLogin();
            }

            if (strcmp($_REQUEST['accion'],'recibirFormularioInicioSesion') == 0) {
                $nombre = $_REQUEST['nombre'];
                $password = $_REQUEST['password'];

                ControladorRegalosNavidad::inicioSesion($nombre, $password);
            }

        } else {
            //Mostrar inicio
            ControladorRegalosNavidad::mostrarInicio();
        }
    }





?>