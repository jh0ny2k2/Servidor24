<?php

    namespace Padalea\controladores;

    use Padalea\modelos\ModeloPartida;
use Padalea\vistas\Partida;
use Padalea\vistas\VistaAñadirPartida;
    use Padalea\vistas\VistaResultados;

    class ControladorPartidas {

       public static function mostrarNuevaPartida() {

        VistaAñadirPartida::render();
        
       }

       public static function enviarAñadirPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado) {

        $id = ModeloPartida::enviarAñadirPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado);

        
        $partida = ModeloPartida::buscarUltimaPartida($id);
        $jugador = ModeloPartida::buscarCreador();

        Partida::render($partida, $jugador);

       }

       public static function entrarPartida($id) {
        
            ModeloPartida::entrarPartida($id);

            $datos = ModeloPartida::sacarDatosPartida($id);
            $jugador = ModeloPartida::sacarJugadoresPartida($id);

            Partida::render($datos, $jugador);

       }





        
    }



?>