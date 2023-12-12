<?php
    namespace AmigoInvisible;
    use AmigoInvisible\controladores\ControladorAmigoInvisible;

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
            

            if (strcmp($_REQUEST['accion'], 'mostrarTodos') == 0) {
                
                ControladorAmigoInvisible::mostrarTodos();
            }

            if (strcmp($_REQUEST['accion'], 'eliminarAmigoInvisible') == 0) {
                $id = $_REQUEST['id'];
                
                ControladorAmigoInvisible::eliminarAmigoInvisible($id);
            }

            if (strcmp($_REQUEST['accion'], 'buscarInfoAmigoInvisible') == 0) {
                $id = $_REQUEST['id'];
                
                ControladorAmigoInvisible::buscarInfoAmigoInvisible($id);
            }
            
            if (strcmp($_REQUEST['accion'], 'añadirAmigoInvisible') == 0) {
                
                ControladorAmigoInvisible::añadirAmigoInvisible();
            }


            if (strcmp($_REQUEST['accion'], 'enviarAñadirAmigoInvisible') == 0) {
                $nombre = $_REQUEST['nombre'];
                $estado = $_REQUEST['estado'];
                $maximo = $_REQUEST['maximo'];
                $fecha = $_REQUEST['fecha'];
                $lugar = $_REQUEST['lugar'];
                $observaciones = $_REQUEST['observaciones'];
                $emoji = $_REQUEST['emoji'];

                ControladorAmigoInvisible::enviarAñadirAmigoInvisible($nombre, $estado, $maximo, $fecha, $lugar, $observaciones, $emoji);
            }

            if (strcmp($_REQUEST['accion'], 'mostrarAmigoInvisible') == 0) {
                $id = $_REQUEST['id'];
                
                ControladorAmigoInvisible::mostrarAmigoInvisible($id);
            }

            if (strcmp($_REQUEST['accion'], 'buscarParticipante') == 0) {
                $id = $_REQUEST['idAmigoInvisible'];
                
                ControladorAmigoInvisible::buscarParticipante($id);
            }


            if (strcmp($_REQUEST['accion'], 'añadirParticipanteAmigoInvisible') == 0) {
                $idPartida = $_REQUEST['idPartida'];
                $idJugador = $_REQUEST['id'];
                
                ControladorAmigoInvisible::insertarParticipante($idPartida, $idJugador);
            }

            if (strcmp($_REQUEST['accion'], 'eliminarParticipante') == 0) {
                $id = $_REQUEST['id'];
                $idAmigo = $_REQUEST['idAmigoInvisible'];
                
                ControladorAmigoInvisible::eliminarParticipante($idAmigo, $id);
            }

            if (strcmp($_REQUEST['accion'], 'verModificarParticipante') == 0) {
                $id = $_REQUEST['id'];
                $idAmigo = $_REQUEST['idAmigoInvisible'];
                
                ControladorAmigoInvisible::verModificarParticipante($idAmigo, $id);
            }

            if (strcmp($_REQUEST['accion'], 'enviarModificarParticipante') == 0) {
                $id = $_REQUEST['id'];
                $idAmigo = $_REQUEST['idAmigoInvisible'];
                
                ControladorAmigoInvisible::verModificarParticipante($idAmigo, $id);
            }
            
            

            


            



        } else {
            //Mostrar inicio
            ControladorAmigoInvisible::mostrarInicio();
        }
    }





?>