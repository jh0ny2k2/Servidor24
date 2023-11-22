<?php

    namespace Padalea\controladores;
    use Padalea\modelos\ModeloPartida;

    class ControladorPartidas {

        public static function verTodos(){

            $usu = unserialize($_SESSION['usuario']);
            $regalos = ModeloRegalo::mostrarRegalos($usu -> getId());

            VistaResultados::render($regalos);
        }
    }

?>