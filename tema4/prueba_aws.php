<?php

try {
    $dsn = "mysql:host=db-php.cpevx6xkthin.us-east-1.rds.amazonaws.com:3306;dbname=php";
    $dbh = new PDO($dsn, "admin", "servidor24");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo $e->getMessage();
}
    // PREPARAR LA CONSULTA
    $stmt = $dbh->prepare("SELECT * FROM usuarios");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmt->execute();

    while($row = $stmt->fetch()){
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
    }

?>
