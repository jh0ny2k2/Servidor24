<?php

    namespace RegalosNavidad\controladores;
    use RegalosNavidad\vistas\VistaInicio;
    use RegalosNavidad\vistas\VistaLogIn;
    use RegalosNavidad\modelos\ModeloUsuario;

    class ControladorEnlaces {
        // FUNCION PARA MOSTRAR EL INICO DE LA APLICACION
        public static function mostrarInicio() {

            VistaInicio::render();
        }
    
        
    }

?>