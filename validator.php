<?php
    if($_SERVER["REQUEST_METHOD"] != 'POST')
    {
        header('location: ./login.php');
    }
    else
    {
        require_once("./DB/DBconnector.php");
        if(DBCon::read(/*[Insert Stored Procdure]*/, $_POST["userID"], $_POST["password"]))
        {
            $_SESSION["loggedIn"] = TRUE;
        }
        else
        {
            header('location: ./login.php')
        }
    }
