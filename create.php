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
$statement->bindValue(':model', $_GET["model"], PDO::PARAM_STR);
$statement->bindValue(':topspeed', $_GET["speed"], PDO::PARAM_STR);
$statement->bindValue(':prijs', $_GET["prijs"], PDO::PARAM_STR);


$statement->execute();

if($statement){
    echo "Record is toegevoegd";
    header('Refresh:3; url=index.php');
}
else{
    echo "Record is niet toegevoegd";
    header('Refresh:3; url=index.php');
}