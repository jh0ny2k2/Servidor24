<?php

    namespace AmigoInvisible\modelos;

    use \PDO;
    class ModeloParticipante {

        public static function buscarParticipante (){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM participantes");
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'AmigoInvisible\modelos\Participante'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
            
        }

        public static function insertarParticipante ($idPartida, $id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("INSERT INTO AmigosParticipantes (idParticipante, idAmigo) VALUES (?,?)");
            $consulta -> bindValue(1,$id);
            $consulta -> bindValue(2,$idPartida);
            $consulta -> execute();

            $conexionObject -> cerrarConexion();
        }

        public static function buscarParticipantes ($idPartida){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT participantes.id, participantes.email, participantes.nombre, participantes.telefono FROM participantes JOIN AmigosParticipantes WHERE idAmigo = ? AND AmigosParticipantes.idParticipante = participantes.id");
            $consulta -> bindValue(1,$idPartida);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'AmigoInvisible\modelos\Participante'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }

        public static function eliminarParticipante ($idPartida, $id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("DELETE FROM AmigosParticipantes WHERE idParticipante = ? AND idAmigo = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> bindValue(2,$idPartida);
            $consulta -> execute();

            $conexionObject -> cerrarConexion();
        }

        public static function sacarDatosParticipante ($idPartida, $id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM participantes WHERE id = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'AmigoInvisible\modelos\Participante'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }

        


         

    }


?>