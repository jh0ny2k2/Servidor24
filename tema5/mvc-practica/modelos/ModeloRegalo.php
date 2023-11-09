<?php

    namespace RegalosNavidad\modelos;
    use \PDO;

    class ModeloRegalo {
        
        public static function mostrarRegalos($idUsuario){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Regalos, Usuarios where Usuarios.id = Regalos.idUsuario and Regalos.idUsuario = ?");
            $consulta -> bindValue(1,$idUsuario);
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\Regalo'); //Nombre de la clase
            $consulta->execute();

            $regalo = $consulta->fetch();
           
            $conexionObject->cerrarConexion();

            return $regalo;
        }
    }




?>