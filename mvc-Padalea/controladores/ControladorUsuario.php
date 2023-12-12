<?php

    namespace Padalea\controladores;

    use Padalea\modelos\ModeloJugador;
    use Padalea\vistas\VistaResultados;
    use Padalea\vistas\VistaInicio;
    use Padalea\vistas\VistaLogIn;
    use Padalea\modelos\ModeloPartida;


    class ControladorUsuario {

        public static function mostrarInicio() {

            VistaInicio::render();
        }

        public static function mostrarLogIn() {

            VistaLogIn::render();
        }

        public static function realizarLogIn($email, $usuario) {

            $user = ModeloJugador::realizarLogIn($email, $usuario);

            if ($user == false){
                //ControladorUsuario:MostrarLogIn();
            } else {
                //PROCESAMOS LA INFORMACION DEL FORMULARIO DE LOGIN"
                $_SESSION['usuarios'] = serialize($user);

                $producto = ModeloPartida::mostrarPartidos();

                // RENDERIZAMOS LA VISTA DE RESULTADOS
                VistaResultados::render($producto);
                die();      
            }


            VistaLogIn::render();
        }

        public static function cerrarSesion() {

            session_destroy();

            VistaLogIn::render();
        }





    }



?>