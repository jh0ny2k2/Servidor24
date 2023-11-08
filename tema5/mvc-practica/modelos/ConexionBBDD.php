<?php

    //CREAMOS EL NAMESPACE
    namespace RegalosNavidad\modelos;

    //USAMOS LO QUE NECESITAMOS 
    use \PDO;
    use \PDOException;

    class conexionBBDD {

        private $conexion;

        public function __construct()
        {
            $host = '172.17.0.2:3306'; //La IP del contenedor Mysql, y el puerto interno del contenedor
    
            try {
                if ($this->conexion == null) {
                    $this->conexion = new PDO("mysql:host=" . $host . ";dbname=" . "RegalosNavidad", "root", "toor");
                    $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                } 
                
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        
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