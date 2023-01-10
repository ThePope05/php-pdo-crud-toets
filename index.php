<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            $allCars = getInfo();
            foreach($allCars as $car){
                echo "<tr>";
                    echo "<td>$car->merk</td>";
                    echo "<td>$car->model</td>";
                    echo "<td>$car->topspeed</td>";
                    echo "<td>$car->prijs</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>