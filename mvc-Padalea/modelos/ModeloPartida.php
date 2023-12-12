<?php 

    namespace  Padalea\modelos;

    

    use \PDO;

    class ModeloPartida {

        public static function mostrarPartidos(){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Partidas ORDER BY fecha DESC");
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Padalea\modelos\Partidas'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }

        public static function enviarAñadirPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("INSERT INTO Partidas (fecha, hora, ciudad, lugar, cubierto, estado) VALUES (?,?,?,?,?,?)");
            $consulta -> bindValue(1,$fecha);
            $consulta -> bindValue(2,$hora);
            $consulta -> bindValue(3,$ciudad);
            $consulta -> bindValue(4,$lugar);
            $consulta -> bindValue(5,$cubierto);
            $consulta -> bindValue(6,$estado);
            
            $consulta -> execute();

            $idPartida = $conexion -> lastInsertId();

            $consulta = $conexion->prepare("INSERT INTO JugadoresPartidas (idJugador, idPartida) VALUES (?,?)");
            $consulta -> bindValue(1, $idPartida);
            $consulta -> bindValue(2, unserialize($_SESSION['usuarios']) -> getId());

            $conexionObject -> cerrarConexion();

            return $idPartida;
        }

        public static function buscarUltimaPartida($id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Partidas WHERE id = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Padalea\modelos\Partidas'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();
            
            $consulta -> execute();

            return $regalos;
        }

        public static function buscarCreador(){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Jugadores WHERE id = ?");
            $consulta -> bindValue(1, unserialize($_SESSION['usuarios']) -> getId());
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Padalea\modelos\Jugador'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();
            
            $consulta -> execute();

            return $regalos;
        }

        public static function entrarPartida($id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("INSERT INTO JugadoresPartidas (idJugador, idPartida) VALUES (?,?)");
            $consulta -> bindValue(1, $id);
            $consulta -> bindValue(2, unserialize($_SESSION['usuarios']) -> getId());
            $consulta -> execute();
            
            $consulta -> execute();
        }

        public static function sacarDatosPartida($id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Partidas JOIN JugadoresPartidas ON Partidas.id = JugadoresPartidas.idPartida WHERE Partidas.id = ?");
            $consulta -> bindValue(1, $id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Padalea\modelos\Partidas'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            return  $regalos;
        }

        public static function sacarJugadoresPartida($id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Jugadores JOIN JugadoresPartidas ON Jugadores.id = JugadoresPartidas.idPartida WHERE JugadoresPartidas.idPartida = ?");
            $consulta -> bindValue(1, $id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Padalea\modelos\Jugador'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            return  $regalos;
        }
        
        

    }

?>