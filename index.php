<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
</head>
<body>
    <table>
        <tr>
            <th>Merk</th>
            <th>Model</th>
            <th>Topsnelheid</th>
            <th>Prijs</th>
            <th>Delete</th>
        </tr>
        <?php
            include("read.php");
            include("delete.php");

            $allCars = getInfo();
            foreach($allCars as $car){
                echo "<tr>";
                    echo "<td>$car->merk</td>";
                    echo "<td>$car->model</td>";
                    echo "<td>$car->topspeed</td>";
                    echo "<td>$car->prijs</td>";
                    echo "<td><a href='delete.php?id='$car->id''>Delete record</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>