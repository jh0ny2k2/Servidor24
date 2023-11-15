<?php

    namespace RegalosNavidad\modelos;
    use \PDO;


    class ModeloEnlace {

        public static function verEnlaces ($id) {
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Enlaces WHERE idRegalo = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\Enlace'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }

        
    }


?>