<?php
    session_start();
    require_once("./DB/DBconnector.php");
    //error_reporting(E_ALL ^ E_NOTICE);
    if(!isset($_SESSION["loggedIn"]))
    {
        header('location: ./login.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="./CSS/main.css"/>
	</head>
	<body>
        <div id="header">
            <div id="headerButtons">
                <button value="Log Out">Log Out</button>
                <button value="Back to Search">Back to Search</button>
            </div>
        </div>
