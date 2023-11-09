<?php

    namespace RegalosNavidad\modelos;
    use \PDO;
    class ModeloUsuario {

        public static function iniciarSesion ($usuario, $password){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Usuarios where usuario = ?");
            $consulta -> bindValue(1,$usuario);
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\Usuario'); //Nombre de la clase
            $consulta->execute();

            $usuario = $consulta->fetch();

            if (strcmp($usuario->getPassword(), $password) == 0) {
                return 1;
            } else {
                return 0;
            }
           
            $conexionObject->cerrarConexion();

        }

    }


?>