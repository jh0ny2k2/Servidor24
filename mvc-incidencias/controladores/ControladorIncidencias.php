<?php

    namespace Incidencias\controladores;

    use Incidencias\modelos\ModeloIncidencia;
    use Incidencias\vistas\VistaInicio;
    use Incidencias\vistas\VistaModificarIncidencia;
    use Incidencias\vistas\VistaResultados;
    use Incidencias\modelos\ModeloCliente;
    use Incidencias\vistas\VistaResultadosClientes;
    use Incidencias\vistas\VistaAñadirIncidencia;

    class ControladorIncidencias {

        public static function mostrarInicio() {

            VistaInicio::render();
        }

        public static function mostrarIncidencias() {

            $incidencias = ModeloIncidencia::mostrarIncidencias();

            VistaResultados::render($incidencias);
        }

        public static function editarIncidencia($id) {

            $incidencia = ModeloIncidencia::editarIncidencia($id);

            VistaModificarIncidencia::render($incidencia);
        }
        
        public static function enviarModificarIncidencia($id, $solucion, $estado) {

            ModeloIncidencia::enviarModificarIncidencia($id, $solucion, $estado);

            $incidencias = ModeloIncidencia::mostrarIncidencias();

            VistaResultados::render($incidencias);
        }

        public static function eliminarIncidencia($id) {

            ModeloIncidencia::eliminarIncidencia($id);

            $incidencias = ModeloIncidencia::mostrarIncidencias();

            VistaResultados::render($incidencias);
        }

        public static function añadirIncidencia() {
            
            $clientes = ModeloCliente::mostrarClientes();

            VistaResultadosClientes::render($clientes);
        }

        public static function buscarCliente($dni) {
            
            $clientes = ModeloCliente::buscarCliente($dni);

            VistaResultadosClientes::render($clientes);
        }

        public static function añadirIncidenciaCliente($id) {

            VistaAñadirIncidencia::render($id);
        }

        public static function enviarAñadirIncidencias($latitud, $longitud, $ciudad, $direccion, $solucion, $estado, $id) {

            ModeloIncidencia::enviarModificarIncidencias($latitud, $longitud, $ciudad, $direccion, $solucion, $estado, $id);

            $incidencias = ModeloIncidencia::mostrarIncidencias();

            VistaResultados::render($incidencias);
        }

        public static function buscarIncidencia($incidencia) {
            
            $incidencias = ModeloIncidencia::buscarIncidencia($incidencia);

            VistaResultados::render($incidencias);
        }




    }



?>