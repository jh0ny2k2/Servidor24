<?php
    
    namespace RegalosNavidad;
    use RegalosNavidad\controladores\ControladorUsuarios;
    use RegalosNavidad\controladores\ControladorRegalos;
    use RegalosNavidad\controladores\ControladorEnlaces;

    //INICIAMOS SESION ANTES QUE NADA
    session_start();

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
                ControladorUsuarios::MostrarFormularioLogin();
            }

            if (strcmp($_REQUEST['accion'],'recibirFormularioInicioSesion') == 0) {
                $usuario = $_REQUEST['usuario'];
                $password = $_REQUEST['password'];

                ControladorUsuarios::inicioSesion($usuario, $password);
            }

            //VER REGALOS TOTALES DE LA PERSONA
            if (strcmp($_REQUEST['accion'],'mostrarTodos') == 0) {
                $idUsuario = $_REQUEST['id'];
                ControladorRegalos::mostrarRegalos($idResultado);
            }

        } else {
            //Mostrar inicio
            ControladorRegalos::mostrarInicio();
        }
    }





?>