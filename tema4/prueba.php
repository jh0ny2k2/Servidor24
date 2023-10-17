<?php

try {
    $dsn = "mysql:host=172.17.0.1:3306;dbname=PHP2023";
    $dbh = new PDO($dsn, "root", "toor");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo $e->getMessage();
}
    // PREPARAR LA CONSULTA
    $stmt = $dbh->prepare("SELECT * FROM Usuarios");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmt->execute();

    while($row = $stmt->fetch()){
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
    }

?>