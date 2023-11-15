<?php

    namespace RegalosNavidad\controladores;
    use RegalosNavidad\vistas\VistaInicio;
    use RegalosNavidad\modelos\ModeloRegalo;
    use RegalosNavidad\vistas\VistaAñadirRegalo;
    use RegalosNavidad\vistas\VistaModificarRegalo;
    use RegalosNavidad\vistas\VistaResultados;
    use RegalosNavidad\vistas\VistaVisualizarRegalo;

    class ControladorRegalos {
        // FUNCION PARA MOSTRAR EL INICO DE LA APLICACION
        public static function mostrarInicio() {

            VistaInicio::render();
        }

        /**
         * AÑADIR REGALOS
         */
        public static function verAñadirRegalo(){

            VistaAñadirRegalo::render();
        }


        pubLic static function añadirRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario){

            $producto = ModeloRegalo::añadirRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario);

            $usu = unserialize($_SESSION['usuario']);
            // RENDERIZAMOS LA VISTA DE RESULTADOS
            $productos = ModeloRegalo::mostrarRegalos($usu -> getId());
            VistaResultados::render($productos);
            die();
        }

        public static function verTodos($id){
            $regalos = ModeloRegalo::mostrarRegalos($id);

            VistaResultados::render($regalos);
        }
    
        /**
         * MODIFICAR REGALOS
         */
        public static function verFormModificarRegalo($id){

            $producto = ModeloRegalo::sacarInfoRegalo($id);

            VistaModificarRegalo::render($producto, $id);
        }

        //METODO PARA VISUALIZAR DATOS DEL PRODUCTO
        public static function verVisualizarRegalo($id){

            $producto = ModeloRegalo::sacarInfoRegalo($id);

            VistaVisualizarRegalo::render($producto, $id);
        }

        pubLic static function ModificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario, $idRegalo){

            $producto = ModeloRegalo::ModificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario, $idRegalo);

            $usu = unserialize($_SESSION['usuario']);
            // RENDERIZAMOS LA VISTA DE RESULTADOS
            $productos = ModeloRegalo::mostrarRegalos($usu -> getId());
            VistaResultados::render($productos, $idRegalo);
            die();
        }

        /**
         * ELIMINAR REGALO
         */
        public static function eliminarRegalo($id){

            ModeloRegalo::eliminarRegalo($id);

            $usu = unserialize($_SESSION['usuario']);
            // RENDERIZAMOS LA VISTA DE RESULTADOS
            $productos = ModeloRegalo::mostrarRegalos($usu -> getId());
            VistaResultados::render($productos);
            die();
        }

        

        
    }

    



?>