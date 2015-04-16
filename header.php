<?php
    require_once("./DB/DBConnector.php");
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header('location: ./login.php');
    }
    else
    {
        $username = $_SESSION["username"];
    }
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
        <button value="Log Out">Log Out</button>
        <button value="Back to Search">Back to Search</button>
