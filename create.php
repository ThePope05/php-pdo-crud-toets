<?php

$dsn = "mysql:host=localhost;dbname=php-pdo-crud-toets;charset=UTF8";

try {
    $pdo = new PDO($dsn, "root", "15122005");
} catch(PDOException $e){
    echo $e->getMessage();
}

$sql = "INSERT INTO dureauto
        (`id`,
        `merk`,
        `model`,
        `topspeed`,
        `prijs`)
VALUES (NULL, 
        :merk,
        :model,
        :topspeed,
        :prijs)";

$statement = $pdo->prepare($sql);

$statement->bindValue(':merk', $_GET["merk"], PDO::PARAM_STR);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);

return $result;