<?php

    //CREAMOS EL NAMESPACE
    namespace RegalosNavidad\modelos;

    //USAMOS LO QUE NECESITAMOS 
    use MongoDB\Client;

    class conexionBBDD {

        private $conexion;

        public function __construct()
        {
            $this->conexion = (new Client('mongodb://root:toor@mongo:27018'))->regalosNavidad;
        
        }

        /**
         * Get the value of conexion
         */ 
        public function getConexion()
        {
            return $this->conexion;
        }

        public function cerrarConexion() {
            $this->conexion = null;
        }
    }





?>