<?php

    namespace RegalosNavidad\controladores;
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
            ModeloUsuario::iniciarSesion($usuario,$password);
            
            //PROCESAMOS LA INFORMACION DEL FORMULARIO DE LOGIN"
            $_SESSION['usuario'] = array("usuario" => $usuario);

            // RENDERIZAMOS LA VISTA DE RESULTADOS
            VistaResultados::render();
            die();
            // } else {
                // RENDERIZAMOS LA VISTA DE INICIO
                // VistaLogIn::render();
                // die();
        

            
        }
    }
        
        


?>