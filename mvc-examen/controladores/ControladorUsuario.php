<?php

    namespace Examen\controladores;
    use Examen\vistas\VistaInicio;
    use Examen\vistas\VistaLogIn;

    class ControladorUsuario {

        public static function mostrarInicio() {

            VistaInicio::render();
        }

        public static function mostrarLogIn() {

            VistaLogIn::render();
        }

        public static function realizarLogIn($email, $password) {

            VistaLogIn::render();
        }





    }



?>