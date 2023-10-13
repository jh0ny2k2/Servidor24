<?php
//INICIALIZAMOS LA SESION ANTES DE TODO
session_start();

//COMPROBAMOS SI VIENE POR $_POST
if ($_POST) {

    //FORMULARIO DE LOGIN
    if (isset($_POST["login"])) {
        //TRAEMOS LA INFORMACION DEL FORMULARIO DE LOGIN
        $email = $_POST['emailLogin'];
        $password = $_POST['passwordLogin'];
        
        //PROCESAMOS LA INFORMACION DEL FORMULARIO DE LOGIN"
        $_SESSION['usuario'] = array("nombre" => "" , "email" => $email);

        //REDIRIGIR A INDEX.PHP
        header("Location: index.php");
        die();

    }

    //FORMULARIO DE REGISTRO
    if (isset($_POST["registro"])) {
        //TRAEMOS LA INFORMACION DEL FORMULARIO DE REGISTRO
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password = $_POST['contraseña'];
        $confirmarPassword = $_POST['confirmarContraseña'];
        
        //PROCESAMOS LA INFORMACION DEL FORMULARIO DE REGISTRO
        $_SESSION['usuario'] = array("nombre" => $nombre, "email" => $email);

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

//CREAMOS LA ACCION DE AÑADIR PROYECTO
if (isset($_GET['addProyecto'])) {
    if (strcmp($_GET['addProyecto'],"addProyecto") == 0) {
        $nombreProyecto = $_GET['nombreProyecto'];
        $descripcion = $_GET['descripcion'];
        $tiempo = $_GET['tiempo'];
        $fechaInicio = $_GET['fechaInicio'];
        $salario = $_GET['salario'];

        //CREAMOS LA VARIABLE DE LOS PROYECTO CONVIRTIENDOLO EN UN ARRAY
        $_SESSION['proyectos'] = array();

        //Buscar el producto con el id del producto que se ha comprado
        //$producto = buscarProducto($idProducto);

        //Buscar el id del producto en el carro
        //$posicion = array_search($idProducto, array_column($_SESSION['carro'], 'id'));

        //Si el producto está ya en el carro actualizamos la cantidad
        //if ($posicion !== FALSE) {
            //$_SESSION['carro'][$posicion]['cantidad']++;
        //} else {
            //Añadir una línea al carro
            //array_push($_SESSION['carro'], $producto);
        //}   

        //Redirigir a ver el carro de la compra
        header("Location: index.php");
        die();
        
    }
}

?>
