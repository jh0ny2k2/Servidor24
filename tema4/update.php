<?php

try {
    $dsn = "mysql:host=172.17.0.1:3306;dbname=PHP2023";
    $dbh = new PDO($dsn, "root", "toor");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo $e->getMessage();
}

//INSERTAR USUARIO
$consulta = $dbh -> prepare("UPDATE Usuarios set email=?, password=? where id=?");

    //PONEMOS LOS VALORES A INSERTAR
    $consulta -> bindValue(1,"pepejuan@gmail.com");
    $consulta -> bindValue(2,"igual");
    $consulta -> bindValue(3,3);


//EJECUTAMOS LA CONSULTA PARA INSERTAR USUARIOS
$consulta -> execute();
?>