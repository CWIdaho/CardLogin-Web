<?php
    session_start();
    require_once("./DB/DBconnector.php");
    error_reporting(E_ALL ^ E_NOTICE);
    if(!isset($_SESSION["loggedIn"]))
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
