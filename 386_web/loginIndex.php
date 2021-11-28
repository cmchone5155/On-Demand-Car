<!DOCTYPE html>
<html>
    <head>
	<link rel= "stylesheet" href= "style.css">
        <title>OnDemandCar</title>
    </head>
    <body>
	<div class="container">
		<div class="header">
	       		OnDemadCar
            	</div>
            	<div class="panel left">
	        <p><a href="<!--URL_here-->">Homepage</a></p>
		<p><a href="<!--URL_here-->/386_web/Rentee/">Rent a vehicle</a></p>
		<p><a href="<!--URL_here-->/386_web/Renter/">Rent out your car!</a><p>
		<p><a href="<!--URL_here-->/386_web/AboutUs/">About Us</a><p>
		<p><a href="<!--URL_here-->/386_web/Sign-in/">Sign-in</a><p>
            	</div>
	    	<div class="mainbody">
                	<form action="login.php" method="post">
				<h2>Login</h2>
				<?php if(isset($_GET['error'])) { ?>
					<p class="error"> <?php echo $_GET['error'}; ?> </p>
				<?php } >
				<label> User Name</label>
				<input type="text" name="uname" placeholder="User Name"><br>
				<label> Password</label>
				<input type="password" name="pass" placeholder="password"><br>
				<button type="submit">Login</button>
			</form>
		</div>
        </div>
    </body>
</html>