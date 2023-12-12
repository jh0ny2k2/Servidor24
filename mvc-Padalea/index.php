<?php
    namespace Padalea;

use ControladorPartida;
use Padalea\controladores\ControladorUsuario;
    use Padalea\controladores\ControladorPartidas;

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
        if (isset($_REQUEST["accion"])) {
            
            if (strcmp($_REQUEST['accion'],'mostrarLogIn') == 0) {

                ControladorUsuario::mostrarLogIn();
            }

            if (strcmp($_REQUEST['accion'],'realizarLogIn') == 0) {
                $email = $_REQUEST['email'];
                $password = $_REQUEST['password'];

                ControladorUsuario::realizarLogIn($email, $password);
            }

            if (strcmp($_REQUEST['accion'],'añadirPartida') == 0) {

                controladorPartidas::mostrarNuevaPartida();
                
            }

            if (strcmp($_REQUEST['accion'],'enviarAñadirPartida') == 0) {
                $fecha = $_REQUEST['fecha'];
                $hora = $_REQUEST['hora'];
                $ciudad = $_REQUEST['ciudad'];
                $lugar = $_REQUEST['lugar'];
                $cubierto = $_REQUEST['cubierto'];
                $estado = $_REQUEST['estado'];
                
                controladorPartidas::enviarAñadirPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado);
                
            }

            if (strcmp($_REQUEST['accion'],'cerrarSesion') == 0) {

                controladorUsuario::cerrarSesion();
                
            }

            if (strcmp($_REQUEST['accion'],'entrarPartida') == 0) {
                $id = $_REQUEST['id'];

                ControladorPartidas::entrarPartida($id); 
            }




        } else {
            //Mostrar inicio
            ControladorUsuario::mostrarInicio();
        }
    }





?>