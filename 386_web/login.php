<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return data;
	}
}

$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

if(empty($uname)){
	header("Location: loginIndex.html?error=User Name is required");
	exit();
}
else if(empty($pass)){
	header("Location: loginIndex.html?error=Password is required");
	exit();
}

$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

$result = mysqli_query($conn, sql);

if(mysqli_num_row($result) === 1) {
	$row = mysqli_fetch_assoc($result);
	if($row['user_name'] === $uname && $row['password'] === $pass) {
		echo "Logged In!";
		$_SESSION['user_name'] = $row['user_name'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['id'] = $row['id'];
		header("Location: homePage.html");
		exit();
	}
	else{
		header("Location: loginIndex.html?error=Incorrect User Name or Password");
		exit();
	}
}
else{
	header("Location: loginIndex.html");
	exit();
}