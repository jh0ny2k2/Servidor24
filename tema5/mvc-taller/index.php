<?php
    namespace Padalea;
    use Padalea\controladores\ControladorJugadores;
    use Padalea\controladores\ControladorPartidas;

    //Autocargar las clases --------------------------
    spl_autoload_register(function ($class) {
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php"; 
    });
    //Fin Autcargar ----------------------------------


    if (isset($_REQUEST)) {

        //METODO REQUEST PARA MOSTRAR EL FORMULARIO DE LOGIN
        if (strcmp($_REQUEST['accion'],'mostrarLogIn') == 0) {

            if (isset($_SESSION["usuario"])) {
                ControladorPartidas::verTodos();
            }  else {
                ControladorJugadores::MostrarFormularioLogin();
            }
        }


        } else {
            //Mostrar inicio
            ControladorJugadores::mostrarInicio();
        }
    





?>