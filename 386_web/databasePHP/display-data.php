<?php

$Make = filter_input(INPUT_POST, 'Make')
$Model = filter_input(INPUT_POST, 'Model')
$Year = filter_input(INPUT_POST, 'Year')
$Mileage = filter_input(INPUT_POST, 'Mileage')
$Color = filter_input(INPUT_POST, 'Color')

if(!empty($Make) && !empty($Model) && !empty($Year) && !empty($Mileage)
 && !empty($Color){
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "carinfo"
   
   // Create connection
   $dbcon = mysqli_connect($servername, $username, $password, $dbname);
 }
 else{
   echo "Please fill in all the entries"
 }

// Check connection
if (!$dbcon) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "INSERT INTO carinfo( Make, Model, Year, Mileage, Color)
values = ('$Make', '$Model','$Year','$Mileage','$Color')";
if( $dbcon -> query$sqL){
  echo "New vehicle is inserted successfully";
}  
else{
  echo "Error: ". $sqL ."<br>". $dbcon->error  ;
}
$dbcon->close();
?>
