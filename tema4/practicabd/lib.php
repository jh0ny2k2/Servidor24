<?php


    /**
     * FUNCIONES PARA BASE DE DATOS
     */

    //FUNCION PARA LA CONEXION DE LA BASE DE DATOS
    function conexionBBDD ($nombreBBDD, $usuario, $contraseña){
        try {
            $dbh = new PDO('mysql:host=172.17.0.3;dbname=' . $nombreBBDD, $usuario, $contraseña);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        return $dbh;
    }

    /**
     * FUNCIONES PARA CALCULAR COSAS CON LA BASE DE DATOS
     */

    //COMPROBAMOS SI EL INICIO DE SESION ES CORRECTO, MIRANDO ASI SI CONCUERDAN LOS DATOS
    function inicioCorrecto($email, $password){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = conexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare("select * from usuario where email = ?");
        $consulta->bindValue(1, $email);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        if ($user = $consulta->fetch()) {
            $contrasenaBBDD = $user['password'];

            if (password_verify($password, $contrasenaBBDD)) {
                //CONTRASEÑA CORRECTA
                return 1;
            } else {
                //CONTRASEÑA INCORRECTA
                return 0;
            }
        } else {
            //NO SE HA ENCONTRADO EL USUARIO
            return 0; 
        }
    }

    function comprobarEmail($email) {

    }

    function insertarUsario($nombre, $apellidos, $email, $password, $provincia) {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare("insert into usuario (nombre, apellidos, email, password, provincia) values (?,?,?,?,?)");
        $consulta->bindValue(1, $nombre);
        $consulta->bindValue(2, $apellidos);
        $consulta->bindValue(3, $email);
        $consulta->bindValue(4, $password);
        $consulta->bindValue(5, $provincia);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        $con = null; // Cerrar conexión
    }

    function insertarProyecto($nombre, $descripcion, $departamento, $estado, $salario) {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare("insert into usuario (nombre, descripcion, departamento, estado, salario) values (?,?,?,?,?)");
        $consulta->bindValue(1, $nombre);
        $consulta->bindValue(2, $descripcion);
        $consulta->bindValue(3, $departamento);
        $consulta->bindValue(4, $estado);
        $consulta->bindValue(5, $salario);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        $con = null; // Cerrar conexión
    }
?>