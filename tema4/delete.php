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
$consulta = $dbh -> prepare("DELETE FROM Usuarios where id=?");

    //PONEMOS LOS VALORES A INSERTAR
    $consulta -> bindValue(1,3);


//EJECUTAMOS LA CONSULTA PARA INSERTAR USUARIOS
$consulta -> execute();
?>