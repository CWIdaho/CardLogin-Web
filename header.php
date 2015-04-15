<?php
    session_start();
    if($username = $_SESSION["username"])
    {
        echo "This exists";
    }
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
        <button value="Log Out">Log Out</button>
        <button value="Back to Search">Back to Search</button>
