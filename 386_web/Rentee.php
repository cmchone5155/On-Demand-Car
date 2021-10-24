<!DOCTYPE html>
<html>
    <head>
	<link rel= "stylesheet" href= "style.css">
        <title>OnDemandCar Rentee Portal</title>
    </head>
    <body>
	<div class="container">
		<div class="header">
	       		OnDemandCar
            	</div>
            	<div class="panel left">
	        <p><a href="<!--URL_here-->">Homepage</a></p>
		<p><a href="!--URL_here-->/386_web/Renter/">Rent a vehicle</a></p>
		<p><a href="!--URL_here-->/386_web/Rentee/">Rent out your car!</a><p>
		<p><a href="!--URL_here-->/386_web/AboutUs/">About Us</a><p>
            	</div>
	    	<div class="mainbody">
                <p>As a rentee you will be renting a vehicle, here are all your choices. Enjoy!</p>
		</div>
        </div>
	<?php
	include ('connect-sql.php');

	$sqlget = "SELECT * FROM ondemandcar.vehicle;";
	$sqldata = mysqli_query($dbcon, $sqlget) or  die('error');

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
    </body>
</html>
