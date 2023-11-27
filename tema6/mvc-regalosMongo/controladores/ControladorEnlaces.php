<?php

    namespace RegalosNavidad\controladores;
    use RegalosNavidad\vistas\VistaInicio;
    use RegalosNavidad\modelos\ModeloEnlace;
    use RegalosNavidad\vistas\VistaAñadirEnlace;
    use RegalosNavidad\vistas\VistaEnlace;

    class ControladorEnlaces {
        // FUNCION PARA MOSTRAR EL INICO DE LA APLICACION
        public static function mostrarInicio() {

            VistaInicio::render();
        }

        public static function verEnlaces($id){
            $enlace = ModeloEnlace::verEnlaces($id);

            VistaEnlace::render($enlace, $id);
        }

        public static function borrarEnlace($id) {

            ModeloEnlace::borrarEnlace($id);

            $enlace = ModeloEnlace::verEnlaces($id);

            VistaEnlace::render($enlace, $id);
        }

        public static function añadirEnlace ($id) {

            VistaAñadirEnlace::render($id);
        }

        public static function enviarAñadirEnlace($tienda, $precio, $link, $id) {

            ModeloEnlace::añadirEnlace($tienda, $precio, $link, $id);

            $enlace = ModeloEnlace::verEnlaces($id);

            VistaEnlace::render($enlace, $id);
        }
    
        
    }

?>