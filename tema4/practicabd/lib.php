<?php


    /**
     * FUNCIONES PARA BASE DE DATOS
     */

    //FUNCION PARA LA CONEXION DE LA BASE DE DATOS
    function conexionBBDD ($nombreBBDD, $usuario, $contraseña){
        try {
            $dbh = new PDO('mysql:host=172.17.0.2;dbname=' . $nombreBBDD, $usuario, $contraseña);
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

    //FUNCION PARA SACAR NOMBRE DE USUARIO
    function sacarNombre($email) {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = conexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare("select nombre from usuario where email = ?");
        $consulta->bindValue(1, $email);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
    }

    //COMPROBAMOS SI EL INICIO DE SESION ES CORRECTO, MIRANDO ASI SI CONCUERDAN LOS DATOS
    function inicioCorrecto($email, $password){

        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = conexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare("select password from usuario where email = ?");
        $consulta->bindValue(1, $email);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        if ($user = $consulta->fetch()) {
            $con = $user["password"];

            if (password_verify($password, $con)) {
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

    /**
     * FUNCIÓN PARA COMPROBAR EMAIL PARA LOGIN
     */
    function comprobarEmail($email) {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        $consulta = $conexion -> prepare("select * from usuario where email = ?");
        $consulta -> bindValue(1, $email);
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute();

        if ($user = $consulta -> fetch()) {
            return 0;
        } else {
            return 1;
        }

        $consulta = null;

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

        $conexion = null; //CERRAMOS SESION EN LA BASE DE DATOS
    }

    function insertarProyecto($nombre, $descripcion, $departamento,$fechaInicio, $fechaFin, $estado, $salario) {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare("insert into proyectos (nombre, descripcion, departamento,fechaInicial, fechaFin, estado, salario) values (?,?,?,?,?,?,?)");
        $consulta->bindValue(1, $nombre);
        $consulta->bindValue(2, $descripcion);
        $consulta->bindValue(3, $departamento);
        $consulta->bindValue(4, $fechaInicio);
        $consulta->bindValue(5, $fechaFin);
        $consulta->bindValue(6, $estado);
        $consulta->bindValue(7, $salario);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        $conexion = null; //CERRAMOS SESION EN LA BASE DE DATOS
    }

    //FUNCION PARA CONSULTAR PRODUCTOS
    function sacarProyectos(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select * from proyectos");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $proyectos = $consulta->fetchAll();

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        //RETURNAMOS LA VARIABLE PARA SER PRINTEADA
        return $proyectos;
    }
    //FUNCION PARA CONSULTAR PRODUCTOS
    function sacarProyectosActivos(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select * from proyectos where proyectos.estado = 'activo'");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $proyectos = $consulta->fetchAll();

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        //RETURNAMOS LA VARIABLE PARA SER PRINTEADA
        return $proyectos;
    }

    function sacarProyectosTerminados(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select * from proyectos where proyectos.estado = 'finalizado'");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $proyectos = $consulta->fetchAll();

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        //RETURNAMOS LA VARIABLE PARA SER PRINTEADA
        return $proyectos;
    }

    //FUNCION PARA CONSULTAR PRODUCTOS
    function sacarProyectosUsuario($id){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare("SELECT * from proyectos where id=?");
        $consulta -> bindValue(1, $consulta1);
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $proyectos = $consulta->fetchAll();

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        //RETURNAMOS LA VARIABLE PARA SER PRINTEADA
        return $proyectos;
    }

    //FUNCION PARA ELIMINAR PROYECTOS
    function borrarProyectos($id) {
        $conexion = ConexionBBDD("PHP2023","root","toor");

        $consulta = $conexion->prepare("DELETE from proyectos where id=?");
        $consulta->bindValue(1,$id);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        $conexion = null;
    }

    //FUNCION PARA VISUALIZAR UN PROYECTO EN ESPECIFICO
    function visualizarProyectos($id){
        $conexion = ConexionBBDD("PHP2023","root","toor");

        $consulta = $conexion->prepare ("SELECT * from proyectos where id = ?");
        $consulta->bindValue (1, $id);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        $visualizacion = $consulta->fetch();

        $conexion = null;

        return $visualizacion;
    }


    //FUNCION PARA BUSCAR PROYECTOS 
     function buscarProyecto($idUsuario) {

        //NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023","root","toor");

        //PREPRARAMOS LA CONSULTA
        $consulta = $conexion->prepare("SELECT * FROM proyectos WHERE id=?");
        $consulta->bindValue(1,$idUsuario);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        //SI SE HA ENCONTRADO ALGO ENTONCES RETURNAMOS LOS RESULTADOS
        if ($usuario = $consulta->fetch()) { 
            return $usuario;
        }

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null;

        //RETURNAMOS UN ARRAY VACIO YA QUE NO SE HA ENCONTRADO NADA
        return array(); 
    }

    

?>