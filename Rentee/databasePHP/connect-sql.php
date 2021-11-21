<?php
$servername = "ondemandcar.cct5gbx1grsn.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "ondemandcar";

// Create connection
$dbcon= mysqli_connect($servername, $username, $password);

// Check connection
if (!$dbcon) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>