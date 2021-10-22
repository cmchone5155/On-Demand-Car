<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$dbcon = mysqli_connect($servername, $username, $password);

// Check connection
if (!$dbcon) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>