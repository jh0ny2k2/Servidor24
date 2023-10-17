<?php

    //CREAMOS UNA FUNCION PARA CONECTARSE A LA BASE DE DATOS
    function conexionPhp($bbdd,$usuario,$passw){
        //LE PASAMOS LA INFORMACION DE LA BASE DE DATOS PARA LA CONEXION
        try {
            $dsn = "mysql:host=172.17.0.1:3306;dbname=$bbdd";
            $dbh = new PDO($dsn, "$usuario", "$passw");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        //RETURNAMOS LA BASE DE DATOS
        return $bbdd;
    }

?>