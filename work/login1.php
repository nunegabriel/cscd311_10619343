<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "demo";


mysql_connect ($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){

	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql ="select * from loginform where user = '" .$uname."' AND Pass='".$password."' limit 1";

	$result = mysql_query($sql);
	if(mysql_num_rows($result)==1){
	echo "You Have Successfully Logged in";
	header('location:admin.php');
	exit();
	}

	else{
	echo "You Have Entered An Incorrect Password";
	
	exit();
	}
}


?>




<!DOCTYPE html>
<html>
	<head>
		<title>Form in Design</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>
		<div class="container">
			<!-- <img src="imgs/login2.jpg"> -->
			<p>  LOGIN  </p>
				<form method="POST" action="">
					<div class="form_input">
					<p>
						<label>USERNAME:</label>
						<input type="text" name="username" placeholder="Enter Username" required>
					</p>
					</div>
					<div class="form_input">
						<label>PASSWORD:</label>
						<input type="password" name="password" placeholder="Enter Your Password" required>
					</div>
					
					<p>
					<button type="submit" id="btnSub">Login</button>
					</p>
				</form>
			
		</div>
	</body>
</html> 
