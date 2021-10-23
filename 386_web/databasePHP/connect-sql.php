<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carinfo";

// Create connection
$dbcon = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$dbcon) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$Make = filter_input(INPUT_POST, 'make');
$Model = filter_input(INPUT_POST, 'model');
$Year = filter_input(INPUT_POST, 'year');
$Mileage = filter_input(INPUT_POST, 'mileage');
$Color = filter_input(INPUT_POST, 'color');
$sql = "INSERT INTO carinfo (Make, Model, Year, Mileage, Color) VALUES ('$Make','$Model','$Year','$Mileage','$Color')";
if( $dbcon -> query($sql)){
  echo "New vehicle is inserted successfully";
}
else{
  echo "Error: ".$sql ."<br>". $dbcon->error;
}
$dbcon->close();
?>
