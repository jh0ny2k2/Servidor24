<?php 

    namespace  Padalea\modelos;

    use \PDO;

    class ModeloJugador {


        public static function realizarLogIn ($email, $password){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Jugadores WHERE email = ? AND password = ?");
            $consulta -> bindValue(1,$email);
            $consulta -> bindValue(2,$password);
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Padalea\modelos\Jugador'); //Nombre de la clase
            $consulta->execute();

            $email = $consulta->fetch();

            $conexionObject->cerrarConexion();

            if ($email == false) {
                return 0;
            } else {
                return $email;
            }
           
            
        }

    }


?>