<?php

$dsn = "mysql:host=localhost;dbname=php-pdo-crud-toets;charset=UTF8";

try {
    $pdo = new PDO($dsn, "root", "15122005");
} catch(PDOException $e){
    echo $e->getMessage();
}

$sql = "DELETE FROM dureauto WHERE id = :tmpId";

$statement = $pdo->prepare($sql);

$statement->bindValue(':tmpId', $_GET["id"], PDO::PARAM_INT);
$statement->execute();
if($statement){
    echo "Record is verwijderd";
    header('Refresh:3; url=index.php');
}
else{
    echo "Record is niet verwijderd";
    header('Refresh:3; url=index.php');
}