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

        if (isset($_REQUEST['accion'])) {
            
            /**
             * METODOS DE USUARIOS
             */

            
            //METODO REQUEST PARA MOSTRAR EL FORMULARIO DE LOGIN
            if (strcmp($_REQUEST['accion'],'mostrarLogIn') == 0) {

                if (isset($_SESSION["usuario"])) {
                    ControladorRegalos::verTodos();
                }  else {
                    ControladorUsuarios::MostrarFormularioLogin();
                }
            }

            //METODO REQUEST PARA CERRAR LA SESION
            if (strcmp($_REQUEST['accion'], 'cerrarSesion') == 0) {
                ControladorUsuarios::cerrarSesion();
            }

            //METODO REQUEST PARA INGRESAR AL USUARIO
            if (strcmp($_REQUEST['accion'],'recibirFormularioInicioSesion') == 0) {
                $usuario = $_REQUEST['usuario'];
                $password = $_REQUEST['password'];

                ControladorUsuarios::inicioSesion($usuario, $password);
            }


            /**
             * METODOS PARA REGALOS
             */

            //METODO REQUEST PARA MOSTRAR FORMULARIO DE INGRESO DE REGALOS
            if (strcmp($_REQUEST['accion'], 'añadirRegalo') == 0) {
                ControladorRegalos::verAñadirRegalo();
            }

            //METODO REQUEST PARA AÑADIR EL REGALO
            if (strcmp($_REQUEST['accion'], 'enviarAñadirRegalo') == 0) {
                $nombre = $_REQUEST['nombre'];
                $destinatario = $_REQUEST['destinatario'];
                $precio = $_REQUEST['precio'];
                $estado = $_REQUEST['estado'];
                $anio = $_REQUEST['anio'];
                $id = $_REQUEST['id'];

                ControladorRegalos::añadirRegalo($nombre, $destinatario, $precio, $estado, $anio,$id);
            }

            if (strcmp($_REQUEST['accion'], 'mostrarTodos') == 0) {
                $id = $_REQUEST['id'];
                
                ControladorRegalos::verTodos($id);
            }

            //METODO REQUEST PARA ELIMINAR UN REGALO
            if (strcmp($_REQUEST['accion'], 'eliminarRegalo') == 0) {
                $id = $_REQUEST['id'];
                ControladorRegalos::eliminarRegalo($id);
            }

            //METODO REQUEST PARA VISUALIZAR REGALO
            if (strcmp($_REQUEST['accion'], 'visualizarRegalo') == 0) {
                $id = $_REQUEST['id'];
                ControladorRegalos::verVisualizarRegalo($id);
            }

            //METODO REQUEST PARA MODIFICAR REGALO
            if (strcmp($_REQUEST['accion'], 'modificarRegalo') == 0) {
                $id = $_REQUEST['id'];
                ControladorRegalos::verFormModificarRegalo($id);
            }

            //METODO REQUEST PARA AÑADIR EL REGALO
            if (strcmp($_REQUEST['accion'], 'enviarModificarRegalo') == 0) {
                $nombre = $_REQUEST['nombre'];
                $destinatario = $_REQUEST['destinatario'];
                $precio = $_REQUEST['precio']; 
                $estado = $_REQUEST['estado'];
                $anio = $_REQUEST['anio'];
                $id = $_REQUEST['id'];
                $idRegalo = $_REQUEST['idRegalo'];

                ControladorRegalos::modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id, $idRegalo);
            }

            //METODO PARA MOOSTRAR PRODUCTOS POR AÑO
            if (strcmp($_REQUEST['accion'], 'mostrarTodosAnio') == 0) {
                ControladorRegalos::mostrarTodosAnio();
            }

            //METODO PARA MOOSTRAR PRODUCTOS POR AÑO
            if (strcmp($_REQUEST['accion'], 'mostrarTodosAnioDesc') == 0) {
                ControladorRegalos::mostrarTodosAnioDesc();
            }
            
            
            /**
             * METODOS PARA ENLACES
             */

            //METODO PARA VER LOS ENLACES
            if (strcmp($_REQUEST['accion'], 'verEnlaces') == 0) {
                $id = $_REQUEST['id'];
                
                ControladorEnlaces::verEnlaces($id);
            }
            
            if (strcmp($_REQUEST['accion'], 'eliminarEnlace') == 0) {
                $id = $_REQUEST['id'];
                
                ControladorEnlaces::borrarEnlace($id);
            }
            
            if (strcmp($_REQUEST['accion'], 'añadirEnlace') == 0) {
                $id = $_REQUEST['id'];
                
                ControladorEnlaces::añadirEnlace($id);
            }

            //METODO REQUEST PARA AÑADIR ENLACE
            if (strcmp($_REQUEST['accion'], 'enviarAñadirEnlace') == 0) {
                $tienda = $_REQUEST['tienda'];
                $precio = $_REQUEST['precio'];
                $link = $_REQUEST['link'];
                $id = $_REQUEST['id'];

                ControladorEnlaces::enviarAñadirEnlace($tienda, $precio, $link, $id);
            }

        } else {
            //Mostrar inicio
            ControladorRegalos::mostrarInicio();
        }
    }





?>