<?php 

    //INICIALIZAMOS LA SESION
    session_start();

    //INCLUIMOS EL ARCHIVO DE LIB.PHP
    include_once("lib.php");

    //COMPROBAMOS SI VIENE POR $_POST
    if ($_POST) {

        //FORMULARIO DE LOGIN
        if (isset($_POST["login"])) {
            //TRAEMOS LA INFORMACION DEL FORMULARIO DE LOGIN
            $email = $_POST['email'];
            $password = $_POST['password'];

            //PROCESAMOS LA INFORMACION DEL FORMULARIO DE LOGIN"
            $_SESSION['usuario'] = array("nombre" => "" , "email" => $email);
            
            //REDIRIGIMOS A INDEX.PHP
            header("Location: index.php");
            die();
        }

        if (isset($_POST["registroPrestamo"])) {
            //TRAEMOS LA INFORMACION DEL FORMULARIO DE REGISTRO DE PRÉSTAMO
            $isbn = $_POST["isbn"];
            $dni = $_POST["dni"];
            $fechaInicio = $_POST["fechaInicio"];
            $fechaFin = $_POST["fechaFin"];
            $estado = $_POST["estado"];

            //LLAMAMOS A LA FUNCION PARA INGRESAR EL NUEVO PRESTAMO
            registrarPrestamo($isbn, $dni, $fechaInicio, $fechaFin, $estado);

            //REDIRIGIMOS A INDEX.PHP
            header("Location: index.php");
            die();
        }

        if (isset($_POST["buscar"])) {
            //TRAEMOS LA INFORMACION DEL FORMULARIO BUSQUEDA
            $buscar = $_POST["buscar"];

            //LLAMAMOS A LA FUNCION PARA SACAR LOS PROYECTOS POR NOMBRE
            buscarElementoNombre($buscar);

            //REDIRIGIMOS A INDEX.PHP
            header("Location: index.php");
            die();
        }
    }





    //CREAMOS LA ACCION PARA REALIZAR EL LOG OUT DE LA SESION
    if($_GET) {

        //COMPROBAMOS QUE SE RECIBE LA ACCION
        if (isset($_GET['accion'])) {

            //COMPROBAMOS QUE LA ACCION ES LA DE CERRAR SESION
            if (strcmp($_GET['accion'],"cerrarSesion") == 0) {
                session_destroy();

                //REDIRIGIMOS A INDEX.PHP
                header("Location: index.php");
                die();
            }

            //COMPROBAMOS QUE LA ACCION ES LA DE CERRAR SESION
            if (strcmp($_GET['accion'],"borrarPrestamo") == 0) {
                borrarPrestamos($_GET['id']);

                //REDIRIGIMOS A INDEX.PHP
                header("Location: index.php");
                die();
            }
            

            if(strcmp($_GET['accion'], "editarPrestamo") == 0) {
                sacarPrestamoId($_GET['id']);

                //REDIRIGIMOS A INDEX.PHP
                header("Location: modificar.php");
                die();
            }
        }

        
    }
?>