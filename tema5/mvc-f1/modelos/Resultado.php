<?php

    namespace Formula1\modelos;
    use Formula1\modelos\ConexionBBDD;
    use \PDO;

    class ModeloResultados {


        public static function mostrarTodos() {

            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM resultados");
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Formula1\modelos\Resultado'); //Nombre de la clase
            $consulta->execute();
    
            $resultados = $consulta->fetchAll();

            $conexionObject->cerrarConexion();

            return $resultados;
        }
    }


?>