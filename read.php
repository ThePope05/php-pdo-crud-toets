<?php

$dsn = "mysql:host=localhost;dbname=php-pdo-crud-toets;charset=UTF8";

try {
    $pdo = new PDO($dsn, "root", "15122005");
} catch(PDOException $e){
    echo $e->getMessage();
}

$sql = "SELECT * FROM dureauto";

$statement = $pdo->prepare($sql);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($result);