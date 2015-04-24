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
        <link rel="icon" type="image/png" href="./Images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
	</head>
	<body>
        <header class="header">
            <img src="logo.png" alt="MaSCA" style="width:200px;height:200px;">
        </header>
