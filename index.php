<?php
$title = "oefening 13";
$cars = array
(
    array("Saab", 22, 36, 58),
    array("Volkswagen", 12, 45, 57),
    array("BMW", 12, 23, 35),
    array("Sköda", 12, 55, 67)
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h1><?=$title?></h1>
    <table>
        <tr>
            <th>Merk</th>
            <th>Stock</th>
            <th>Aantal verkocht</th>
            <th>Totaal aantal</th>
        </tr>
    <?php
     
        for($col = 0; $col < count($cars); $col++) {

        echo "<tr>";

        for($row = 0; $row < count($cars[$col]); $row++){

            echo "<td>{$cars[$col][$row]}</td>";

        }

        echo ('</tr>');
        
        }

    ?>

</body>
</html>