<?php
    $_SESSION["loggedIn"] = FALSE;
    session_end();
    header("location: ./");
