<?php
	session_start();
	$username = $_SESSION["username"];
	if(!$username)
	{
		header('location: ./login.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	