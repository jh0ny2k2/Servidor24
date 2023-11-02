<?php

    namespace Formula1\controladores;
    use formula1\vistas\VistaInicio;

    class ControladorFormula1 {

        //CREAMOS UNA FUNCION PARA MOSTRAR EL INICIO
        public static function mostrarInicio() {
            VistaInicio::render();
        }

        public static function mostrarResultados() {
            //HACEMOS LA CONSULTA DE BASE DE DATOS
            $resultados = Resultado::mostrarResultados();

            //LLAMAMOS A LA VISTA
            VistaInicio::render($resultados);
        }



    }



?>