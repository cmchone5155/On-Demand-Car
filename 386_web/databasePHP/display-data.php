<?php

include ('connect-sql.php');

$sqlget = "SELECT * FROM ondemandcar.vehicle;";
$sqldata = mysqli_query($dbcon, $sqlget) or die(mysqli_error($dbcon));

echo "<table>";
echo "<tr><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th><th>Color</th></tr>";

while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['make'];
    echo "</td><td>";
    echo $row['model'];
    echo "</td><td>";
    echo $row['carYear'];
    echo "</td><td>";
    echo $row['mileage'];
    echo "</td><td>";
    echo $row['color'];
    echo "</td></tr>";
}

echo "</table>";

?>