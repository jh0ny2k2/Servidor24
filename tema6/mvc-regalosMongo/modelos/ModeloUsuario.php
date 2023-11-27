<?php

    namespace RegalosNavidad\modelos;
    use \PDO;
    class ModeloUsuario {

        public static function iniciarSesion ($usuario, $password){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Usuarios WHERE usuario = ? AND password = ?");
            $consulta -> bindValue(1,$usuario);
            $consulta -> bindValue(2,$password);
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'RegalosNavidad\modelos\Usuario'); //Nombre de la clase
            $consulta->execute();

            $usuario = $consulta->fetch();

            $conexionObject->cerrarConexion();

            if ($usuario == false) {
                return 0;
            } else {
                return $usuario;
            }
           
            
        }

    }


?>