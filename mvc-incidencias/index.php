<?php
    namespace Incidencias;
    use Incidencias\controladores\ControladorIncidencias;

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

            if (strcmp($_REQUEST['accion'],'mostrarIncidencias') == 0) {
                ControladorIncidencias::mostrarIncidencias();
            }

            if (strcmp($_REQUEST['accion'],'editarIndicencia') == 0) {
                $id = $_REQUEST['id'];

                ControladorIncidencias::editarIncidencia($id);
            }
            
            if (strcmp($_REQUEST['accion'],'enviarModificarIncidencia') == 0) {
                $id = $_REQUEST['id'];
                $solucion = $_REQUEST['solucion'];
                $estado = $_REQUEST['estado'];

                ControladorIncidencias::enviarModificarIncidencia($id, $solucion, $estado);
            }

            if (strcmp($_REQUEST['accion'],'eliminarIncidencia') == 0) {
                $id = $_REQUEST['id'];

                ControladorIncidencias::eliminarIncidencia($id);
            }

            if (strcmp($_REQUEST['accion'],'añadirIncidencia') == 0) {

                ControladorIncidencias::añadirIncidencia();
            }

            if (strcmp($_REQUEST['accion'],'buscarCliente') == 0) {
                $dni = $_REQUEST['dni'];

                ControladorIncidencias::buscarCliente($dni);
            }

            if (strcmp($_REQUEST['accion'],'añadirIncidenciaCliente') == 0) {
                $id = $_REQUEST['id'];

                ControladorIncidencias::añadirIncidenciaCliente($id);
            }

            if (strcmp($_REQUEST['accion'],'enviarAñadirIncidencia') == 0) {
                $latitud = floatval($_REQUEST['latitud']);
                $longitud = floatval($_REQUEST['longitud']);
                $ciudad =$_REQUEST['ciudad'];
                $direccion = $_REQUEST['direccion'];
                $solucion = $_REQUEST['solucion'];
                $estado = $_REQUEST['estado'];
                $id = $_REQUEST['id'];

                ControladorIncidencias::enviarAñadirIncidencias($latitud, $longitud, $ciudad, $direccion, $solucion, $estado, $id);
            }

            if (strcmp($_REQUEST['accion'],'buscarIncidencia') == 0) {
                $incidencia = $_REQUEST['incidencia'];

                ControladorIncidencias::buscarIncidencia($incidencia);
            }


            




        } else {
            //Mostrar inicio
            ControladorIncidencias::mostrarInicio();
        }
    }





?>