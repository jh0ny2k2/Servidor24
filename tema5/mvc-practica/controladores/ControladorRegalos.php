<?php

    namespace RegalosNavidad\controladores;
    use RegalosNavidad\vistas\VistaInicio;
    use RegalosNavidad\modelos\ModeloRegalo;

    class ControladorRegalos {
        // FUNCION PARA MOSTRAR EL INICO DE LA APLICACION
        public static function mostrarInicio() {

            VistaInicio::render();
        }
    
        public static function mostrarRegalos($idUsuario) {
            ModeloRegalo::mostrarRegalos($idUsuario);
        }
        
    }

    



?>