<?php
    session_start();
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        if($_POST["userID"] == "Admin")
        {
            if($_POST["password"] == "123123")
            {
                $_SESSION["loggedIn"] = TRUE;
                header('location: ./');
            }
            else
            {
                $error = "Incorrect Password";
            }
        }
        else
        {
            $error = "Incorrect Username";
        }

        //$error = TRUE;
        //require_once("./DB/DBconnector.php");
        //if(DBCon::read(/*[Insert Stored Procdure]*/, $_POST["userID"], $_POST["password"]))
        //{
        //    $_SESSION["loggedIn"] = TRUE;
        //    header("location: ./index.php");
        //}
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="./login.php" method="post">
            <label>ID:</label><input type="text" name="userID"/>
            <br/>
            <label>Password:</label><input type="text" name="password"/>
            <br/>
            <input type="submit" name="submit" value="Log In"/>
        </form>
        <p>
            <?php echo $error; ?>
        </p>
    </body>
</html>
