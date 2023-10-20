<?php
//INICIALIZAMOS LA SESION ANTES DE TODO
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
        
        //COMPROBAMOS SI LA CONTRASEÑA Y EL EMAIL SON CORRECTOS
        if (inicioCorrecto($email,$password)){
            //PROCESAMOS LA INFORMACION DEL FORMULARIO DE LOGIN"
            $_SESSION['usuario'] = array("nombre" => "" , "email" => $email);
            echo ' <p>entra</p>';
            //REDIRIGIMOS A INDEX.PHP
            //header("Location: index.php");
            //die();
        } else {
            //REDIRIGIR A LOGIN POR ERROR EN LOS DATOS
            //header("Location: login.php?error=Datos incorrectos");
            //die();
            echo ' <p>error</p>';
        }
    }

    //FORMULARIO DE REGISTRO
    if (isset($_POST["registro"])) {
        //TRAEMOS LA INFORMACION DEL FORMULARIO DE REGISTRO
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password = $_POST['contraseña'];
        $provincia = $_POST['provincia'];
        
        //COMPROBAMOS SI EL EMAIL ESTA YA EN LA BASE DE DATOS
        //if (!comprobarEmail($email)) {
            //header("Location: registro.php?error=Email en uso");
            //die();
        //}

        //Encriptar password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT, [15]);

        //PROCESAMOS LA INFORMACION DEL FORMULARIO DE REGISTRO
        $_SESSION['usuario'] = array("nombre" => $nombre, "email" => $email);

        //INSERTAMOS USUARIO EN LA BBDD
        insertarUsario($nombre, $apellidos, $email, $password, $provincia);

        //REDIRIGIR A INDEX.PHP
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
    }

}

//FORMULARIO PARA AÑADIR UN PROYECTO
if (isset($_POST["registroProyecto"])) {
    //TRAEMOS LA INFORMACION DEL FORMULARIO DE REGISTRO
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $departamento = $_POST['departamento'];
    $estado = $_POST['estado'];
    $salario = $_POST['salario'];

    //PROCESAMOS LA INFORMACION DEL FORMULARIO DE REGISTRO
    $_SESSION['usuario'] = array("nombre" => $nombre, "descripcion" => $descripcion, "departamento" => $departamento, "estado" => $estado, "salario" => $salario);

    //INSERTAMOS USUARIO EN LA BBDD
    insertarProyecto($nombre, $descripcion, $departamento, $estado, $salario);

    //REDIRIGIR A INDEX.PHP
    header("Location: index.php");
    die();

} 

?>