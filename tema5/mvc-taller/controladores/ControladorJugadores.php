<?php

    namespace Padalea\controladores;
    use Padalea\vistas\VistaInicio;
    use Padalea\vistas\VistaLogIn;
    use Padalea\vistas\VistaResultados;
    use Padalea\modelos\ModeloJugador;

    class ControladorJugadores {

        public static function mostrarInicio() {

            VistaInicio::render();
        }

        // FUNCION PARA MOSTRAR EL FORMULARIO DE LOGIN
        public static function MostrarFormularioLogin(){
                    
            VistaLogIn::render();
        }

        // FUNCION PARA INICIAR SESION 
        public static function inicioSesion($usuario, $password){
            //COMPROBAMOS SI LA CONTRASEÑA Y EL EMAIL SON CORRECTOS
            $user = ModeloJugador::iniciarSesion($usuario,$password);

            if ($user == false){
                //ControladorUsuarios:MostrarFormularioLogin();
            } else {
                //PROCESAMOS LA INFORMACION DEL FORMULARIO DE LOGIN"
                $_SESSION['usuario'] = serialize($user);

                $partidas = ModeloJugador::mostrarRegalos();

                // RENDERIZAMOS LA VISTA DE RESULTADOS
                VistaResultados::render($partidas);
                die();      
            }
                
        }



    }



?>