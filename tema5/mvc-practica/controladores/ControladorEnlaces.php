<?php

    namespace RegalosNavidad\controladores;
    use RegalosNavidad\vistas\VistaInicio;
    use RegalosNavidad\modelos\ModeloEnlace;
    use RegalosNavidad\vistas\VistaLogIn;
    use RegalosNavidad\modelos\ModeloUsuario;
    use RegalosNavidad\vistas\VistaEnlace;

    class ControladorEnlaces {
        // FUNCION PARA MOSTRAR EL INICO DE LA APLICACION
        public static function mostrarInicio() {

            VistaInicio::render();
        }

        public static function verEnlaces($id){
            $enlace = ModeloEnlace::verEnlaces($id);

            VistaEnlace::render($enlace);
        }
    
        
    }

?>