<?php
	$username = $_SESSION["username"];
	
	if(!$username)
	{
		header('location: ./login.php');
	}
	
	