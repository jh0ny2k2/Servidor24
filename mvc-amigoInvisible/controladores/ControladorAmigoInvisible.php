<?php

    namespace AmigoInvisible\controladores;
    use AmigoInvisible\vistas\VistaInicio;
    use AmigoInvisible\modelos\ModeloAmigo;
    use AmigoInvisible\modelos\ModeloParticipante;
use AmigoInvisible\vistas\ModificarParticipante;
use AmigoInvisible\vistas\VistaResultados;
    use AmigoInvisible\vistas\VistaAñadirAmigoInvisible;
    use AmigoInvisible\vistas\VistaAmigoInvisible;
    use AmigoInvisible\vistas\VistaResultadosParticipantes;

    class ControladorAmigoInvisible {

        public static function mostrarInicio() {

            VistaInicio::render();
        }

        public static function mostrarTodos() {

            $amigos = ModeloAmigo::mostrarTodos();

            VistaResultados::render($amigos);

        }

        public static function eliminarAmigoInvisible($id) {

            ModeloAmigo::eliminarAmigoInvisible($id);

            $amigos = ModeloAmigo::mostrarTodos();

            VistaResultados::render($amigos);
        }

        public static function buscarInfoAmigoInvisible($id) {

            $amigos = ModeloAmigo::buscarInfoAmigoInvisible($id);

            VistaResultados::render($amigos);
        }

        public static function añadirAmigoInvisible() {

            VistaAñadirAmigoInvisible::render();
        }

        public static function enviarAñadirAmigoInvisible($nombre, $estado, $maximo, $fecha, $lugar, $observaciones, $emoji) {

            ModeloAmigo::enviarAñadirAmigoInvisible($nombre, $estado, $maximo, $fecha, $lugar, $observaciones, $emoji);

            $amigos = ModeloAmigo::mostrarTodos();

            VistaResultados::render($amigos);
        }

        public static function mostrarAmigoInvisible($id) {

            $amigo = ModeloAmigo::buscarInfoAmigoInvisible($id);
            $participantes = ModeloParticipante::buscarParticipantes($id);

            VistaAmigoInvisible::render($amigo, $participantes);

            
        }

        public static function buscarParticipante($id) {

            $participantes = ModeloParticipante::buscarParticipante();

            VistaResultadosParticipantes::render($participantes, $id);
        }


        public static function insertarParticipante($idPartida, $id) {

            ModeloParticipante::insertarParticipante($idPartida, $id);

            $amigo = ModeloAmigo::buscarInfoAmigoInvisible($idPartida);
            $participantes = ModeloParticipante::buscarParticipantes($idPartida);

            VistaAmigoInvisible::render($amigo, $participantes);

        }
        
        public static function eliminarParticipante($idPartida, $id) {

            ModeloParticipante::eliminarParticipante($idPartida, $id);

            $amigo = ModeloAmigo::buscarInfoAmigoInvisible($idPartida);
            $participantes = ModeloParticipante::buscarParticipantes($idPartida);

            VistaAmigoInvisible::render($amigo, $participantes);
        }

        public static function verModificarParticipante($idPartida, $id) {

            $participantes = ModeloParticipante::sacarDatosParticipante($idPartida, $id);

            ModificarParticipante::render($participantes);
        }

        







    }



?>