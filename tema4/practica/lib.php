<?php

    //FUNCION PARA LA CONEXION DE LA BASE DE DATOS
    function conexionBBDD ($nombreBBDD, $usuario, $contraseña){
        $dbh= null;
        try {
            $dbh = new PDO('mysql:host=172.17.0.2;dbname=' . $nombreBBDD, $usuario, $contraseña);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        return $dbh;
    }

    //FUNCION PARA CONSULTAR PRODUCTOS
    function sacarPrestamos(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare ("select * from Prestamos");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $proyectos = $consulta->fetchAll();

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        //RETURNAMOS LA VARIABLE PARA SER PRINTEADA
        return $proyectos;
    }

    function sacarTopUsuarios () {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare ("select Usuarios.nombre, count(Prestamos.id) as cantidad_prestamos from Usuarios join Prestamos on Usuarios.id = Prestamos.id group by Usuarios.nombre order by cantidad_prestamos desc limit 10");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();
 
        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $prestamos = $consulta->fetchAll();
 
        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 
 
        //RETURNAMOS LA VARIABLE PARA SER PRINTEADA
        return $prestamos;
    }

    function modificarProducto($id,$fecha,$estado){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023","root","toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare ("update Prestamos.fechaFin, Prestamos.estado from productos where id =?");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        $conexion = null;
    }

    function sacarPrestamoId($id){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select * from Prestamos where id = ?");
        $consulta->bindValue(1, $id);
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $prestamos = $consulta->fetch(PDO::FETCH_ASSOC);
        
        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        //RETURNAMOS LA VARIABLE PARA SER PRINTEADA
        return $prestamos;
    }

    //FUNCION PARA CONSULTAR PRODUCTOS
    function contarLibros(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select count(id) as cantidadLibros from Libros");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        $total = $consulta->fetch(PDO::FETCH_ASSOC);

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        return $total;
    }

    function contarPrestamosTotales(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select count(id) as cantidadPrestamos from Prestamos");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        $total = $consulta->fetch(PDO::FETCH_ASSOC);

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        return $total;
    }

    function contarPrestamosCurso(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select count(id) as cantidadPrestamosCurso from Prestamos");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        $total = $consulta->fetch(PDO::FETCH_ASSOC);

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        return $total;
    }

    function contarPrestamosFinalizados(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select count(id) as cantidadPrestamosFinalizados from Prestamos");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        $total = $consulta->fetch(PDO::FETCH_ASSOC);

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        return $total;
    }

    function buscarElementoNombre($dni) {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare ("select * from Prestamos where estado=?");
        $consulta->bindValue(1, $dni);
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $prestamos = $consulta->fetchall();

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        return $prestamos;
    }

    function borrarPrestamos($id){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("delete from Prestamos where id = ?");
        $consulta->bindValue(1, $id);
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        $conexion = null; //CERRAMOS SESION EN LA BASE DE DATOS
    }

    function registrarPrestamo($isbn, $dni, $fechaInicio, $fechaFin, $estado) {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("insert into Prestamos(isbn, dni, fechaInicio, fechaFin, estado) values (?,?,?,?,?)");
        $consulta->bindValue(1, $isbn);
        $consulta->bindValue(2, $dni);
        $consulta->bindValue(3, $fechaInicio);
        $consulta->bindValue(4, $fechaFin);
        $consulta->bindValue(5, $estado);
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        $conexion = null; //CERRAMOS SESION EN LA BASE DE DATOS
    }
?>