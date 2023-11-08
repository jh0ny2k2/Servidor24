<?php

    namespace RegalosNavidad\controladores;
    use RegalosNavidad\vistas\VistaInicio;
    use RegalosNavidad\vistas\VistaLogIn;
    use RegalosNavidad\modelos\ModeloUsuario;

    class ControladorRegalosNavidad {
        // FUNCION PARA MOSTRAR EL INICO DE LA APLICACION
        public static function mostrarInicio() {

            VistaInicio::render();
        }
        
        // FUNCION PARA MOSTRAR EL FORMULARIO DE LOGIN
        public static function MostrarFormularioLogin(){
            
            VistaLogIn::render();
        }

        // FUNCION PARA INICIAR SESION 
        public static function inicioSesion($usuario, $password){

            ModeloUsuario::iniciarSesion($usuario,$password);
        }
        }

    



?>