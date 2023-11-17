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

        public static function borrarEnlace($id) {
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("DELETE FROM Enlaces WHERE id = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> execute();

            $conexionObject -> cerrarConexion();
        }

        public static function añadirEnlace($tienda, $precio, $link, $id) {
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("INSERT INTO Enlaces (tienda,precio,links,idRegalo) values (?,?,?,?)");
            $consulta -> bindValue(1,$tienda);
            $consulta -> bindValue(2,$precio);
            $consulta -> bindValue(3,$link);
            $consulta -> bindValue(4,$id);
            $consulta -> execute();

            $conexionObject -> cerrarConexion();
        }

        
    }


?>