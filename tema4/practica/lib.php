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

    function sacarPrestamoId($id){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select * from Prestamos where id = ?");
        $consulta->bindValue(1, $id);
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $proyecto = $consulta->fetch(PDO::FETCH_ASSOC);

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        //RETURNAMOS LA VARIABLE PARA SER PRINTEADA
        return $proyecto;
    }

    //FUNCION PARA CONSULTAR PRODUCTOS
    function contarLibros(){
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion -> prepare ("select count(*) as total from Libros");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        $total = $consulta;

        //CERRAMOS SESION EN LA BASE DE DATOS
        $conexion = null; 

        return $total ["total"];
    }

    function buscarElementoNombre($dni) {
        //PRIMERO NOS CONECTAMOS A LA BASE DE DATOS
        $conexion = ConexionBBDD("PHP2023", "root", "toor");

        //HACEMOS LA CONSULTA PARA LA BASE DE DATOS
        $consulta = $conexion->prepare ("select * from Prestamos where dni=?");
        $consulta->bindValue(1, $dni);
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta -> execute ();

        //PONEMOS TODOS LOS PRODUCTOS EN LA VARIABLE
        $prestamos = $consulta->fetchAll();
        
        /**
        foreach ($prestamos as $valor){
            echo '                                  <tr>';
            echo '                                      <td> ' . $valor["isbn"] . '</td>';
            echo '                                      <td> ' . $valor["dni"] . '</td>';
            echo '                                      <td> ' . $valor["fechaInicio"] . '</td>';
            echo '                                      <td> ' . $valor["fechaFin"] . '</td>';
            echo '                                      <td> ' . $valor["estado"] . '</td>';
            echo '                                      <td><a href="./controlador.php?accion=borrarPrestamo&id='.$valor["id"].'"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-close"></i></button></a>';
            echo '                                      <a href="./controlador.php?accion=editarPrestamo&id='.$valor["id"].'"><button type="button" class="btn btn-success "><i class="zmdi zmdi-edit"></i></button></a></td>';
            echo '                                  </tr>';
        };
         */
        

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