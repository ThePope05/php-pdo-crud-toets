<?php

function getInfo(){
    $dsn = "mysql:host=localhost;dbname=php-pdo-crud-toets;charset=UTF8";

    try {
        $pdo = new PDO($dsn, "root", "15122005");
    } catch(PDOException $e){
        echo $e->getMessage();
    }

    $sql = "SELECT * FROM dureauto ORDER BY prijs asc";

    $statement = $pdo->prepare($sql);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_OBJ);

    return $result;
}