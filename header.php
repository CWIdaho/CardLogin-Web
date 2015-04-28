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
        <link rel="stylesheet" type="text/css" href="./CSS/table.css"/>
        <script>
        function setFocus()
        {
            document.getElementById("studentID").focus();
        }

        function validateForm(){
            var x = document.forms["inputForm"]["studentID"].value;
            var error;
            if (x == null || x == " "){
             document.getElementById("alert").innerHTML = "Invalid Read please try again";
            document.getElementById("studentID").focus();


            return false;

            }
            var validator = new RegExp(/(APIN)\w+%\w+\?|(BOI)\w+%\w+\?/g);
           var isValueValid = validator.test(x);

            if (!(isValueValid)){
                var error = "Invalid card please us a CWI student ID card";
                document.getElementById("alert").innerHTML = error;
                document.getElementById("studentID").value = ' ';
                document.getElementById("studentID").focus();

                return false;
            }

        }
        </script>
	</head>
	<body>
        <header class="header">
            <img src="./Images/logo.png" alt="MaSCA" style="width:200px;height:200px;">
        </header>
