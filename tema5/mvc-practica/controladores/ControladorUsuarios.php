<?php

    namespace RegalosNavidad\controladores;

    use RegalosNavidad\modelos\ModeloRegalo;
    use RegalosNavidad\vistas\VistaInicio;
    use RegalosNavidad\vistas\VistaLogIn;
    use RegalosNavidad\vistas\VistaResultados;
    use RegalosNavidad\modelos\ModeloUsuario;
    

    class ControladorUsuarios {
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
            //COMPROBAMOS SI LA CONTRASEÑA Y EL EMAIL SON CORRECTOS
            $user = ModeloUsuario::iniciarSesion($usuario,$password);

            if ($user == false){
                //ControladorUsuarios:MostrarFormularioLogin();
            } else {
                //PROCESAMOS LA INFORMACION DEL FORMULARIO DE LOGIN"
                $_SESSION['usuario'] = serialize($user);

                $usu = unserialize($_SESSION['usuario']);
                // RENDERIZAMOS LA VISTA DE RESULTADOS
                $producto = ModeloRegalo::mostrarRegalos($usu -> getId());
                VistaResultados::render($producto);
                die();      
            }
                
        }

        public static function cerrarSesion() {

            //DESTROZAMOS LA SESION 
            session_destroy();

            //REDIRIGIMOS LA VISTA INICIO
            VistaInicio::render();    
        }
        
    }
        
        


?>