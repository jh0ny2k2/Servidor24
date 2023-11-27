<?php

    namespace RegalosNavidad\modelos;
    use \PDO;

    class ModeloRegalo {
        
        public static function mostrarRegalos($id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Regalos where idUsuario = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\Regalo'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }

        public static function añadirRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario){
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("INSERT INTO Regalos (nombre, destinatario, precio, estado, anio, idUsuario) VALUES (?,?,?,?,?,?)");
            $consulta -> bindValue(1,$nombre);
            $consulta -> bindValue(2,$destinatario);
            $consulta -> bindValue(3,$precio);
            $consulta -> bindValue(4,$estado);
            $consulta -> bindValue(5,$anio);
            $consulta -> bindValue(6,$idUsuario);
            $consulta -> execute();

            $conexionObject -> cerrarConexion();
 
        }
        public static function modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $id, $idRegalo){
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("UPDATE Regalos SET nombre = ?, destinatario = ?, precio = ?, estado = ?, anio = ? where id = ? ");
            $consulta -> bindValue(1,$nombre);
            $consulta -> bindValue(2,$destinatario);
            $consulta -> bindValue(3,$precio);
            $consulta -> bindValue(4,$estado);
            $consulta -> bindValue(5,$anio);
            $consulta -> bindValue(6,$idRegalo);
            $consulta -> execute();

            $conexionObject -> cerrarConexion();
 
        }

        public static function sacarInfoRegalo($id){
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Regalos where id = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\Regalo'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }

        public static function eliminarRegalo($id){
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("DELETE FROM Regalos WHERE id = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> execute();

            $conexionObject -> cerrarConexion();
        }

        public static function mostrarRegalosAnio($id) {
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Regalos where idUsuario = ? ORDER BY anio ");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\Regalo'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }

        public static function mostrarRegalosAnioDesc($id) {
            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Regalos where idUsuario = ? ORDER BY anio DESC");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\Regalo'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }
    }

?>