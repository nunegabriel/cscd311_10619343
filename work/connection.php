<?php

	$dbhost = "localhost";
	$dbuser='root';
	$dbpass="";
	$db="study";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if($conn-> connect_error){
	echo("connection failed: ". $conn-> connect_error);
}

?>