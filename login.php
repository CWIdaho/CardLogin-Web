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
        <link rel="icon" type="image/png" href="./Images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
	</head>
	<body>
        <header class="header">
            <img src="./Images/logo.png" alt="MaSCA" style="width:200px;height:200px;">
        </header>
        <section class="box">
            <div id="logform2">
                <form action="./login.php" method="post">
                    <legend><h2>Login</h2></legend>
                    <label>ID:</label><input class="tbox" type="text" name="userID"/>
                    <br/>
                    <label>Password:</label><input class="tbox" type="text" name="password"/>
                    <br/>
                    <input class="submitButton" type="submit" name="submit" value="Log In"/>
                    <p id="error">
                        <?php echo $error; ?>
                    </p>
                </form>
            </div>
        </section>
    </body>
</html>
