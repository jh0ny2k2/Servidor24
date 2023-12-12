<?php

    namespace AmigoInvisible\modelos;

    use \PDO;
    class ModeloAmigo {

        public static function mostrarTodos (){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM amigoInvisibles");
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'AmigoInvisible\modelos\AmigoInvisible'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
            
        }

        public static function eliminarAmigoInvisible ($id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("DELETE FROM amigoInvisibles WHERE id = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> execute();

            $conexionObject -> cerrarConexion();
        }

        public static function buscarInfoAmigoInvisible ($id){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();
            
            $consulta = $conexion->prepare("SELECT * FROM amigoInvisibles WHERE id = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'AmigoInvisible\modelos\AmigoInvisible'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetch();

            $conexionObject -> cerrarConexion();

            return $regalos;
            
        }

        public static function enviarAñadirAmigoInvisible($nombre, $estado, $maximo, $fecha, $lugar, $observaciones, $emoji) {

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();
            
            $consulta = $conexion->prepare("INSERT INTO amigoInvisibles (nombre, estado, maximoDinero, fechaTope, lugar, observaciones, emoji) VALUES (?,?,?,?,?,?,?)");
            $consulta -> bindValue(1,$nombre);
            $consulta -> bindValue(2,$estado);
            $consulta -> bindValue(3,$maximo);
            $consulta -> bindValue(4,$fecha);
            $consulta -> bindValue(5,$lugar);
            $consulta -> bindValue(6,$observaciones);
            $consulta -> bindValue(7,$emoji);
            $consulta -> execute();


            $conexionObject -> cerrarConexion();
        }
        
        public static function mostrarAmigoInvisible($id) {

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();
            
            $consulta = $conexion->prepare("SELECT * FROM amigoInvisibles WHERE id = ?");
            $consulta -> bindValue(1,$id);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'AmigoInvisible\modelos\AmigoInvisible'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetch();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }




    }


?>