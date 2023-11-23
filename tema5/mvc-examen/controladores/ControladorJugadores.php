<?php

    namespace Examen\controladores;
    use Examen\vistas\VistaInicio;
    use Examen\vistas\VistaLogIn;
    use Examen\vistas\VistaResultados;
    use Examen\modelos\ModeloJugador;
    use Examen\modelos\ModeloPartida;

    class ControladorJugadores {

        public static function mostrarInicio() {

            VistaInicio::render();
        }

        public static function mostrarFormLogIn() {

            VistaLogIn::render();
        }

        public static function recibirFormLogIn($email, $password) {

            //COMPROBAMOS SI LA CONTRASEÑA Y EL EMAIL SON CORRECTOS
            $user = ModeloJugador::iniciarSesion($email,$password);

            if ($user == false){
                //ControladorUsuarios:MostrarFormularioLogin();
            } else {
                //PROCESAMOS LA INFORMACION DEL FORMULARIO DE LOGIN"
                $_SESSION['usuario'] = serialize($user);

                $producto = ModeloPartida::mostrarPartidos();

                // RENDERIZAMOS LA VISTA DE RESULTADOS
                VistaResultados::render($producto);
                die();      
            }


            VistaLogIn::render();
        }


    }



?>