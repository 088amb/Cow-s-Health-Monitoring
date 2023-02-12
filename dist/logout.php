<?php
    session_start(); //to check if there is a session
    session_destroy(); //destroy sesssion to commit logout
    unset($_SESSION['id']); //remove id from session
    unset($_SESSION['pass']);
    header('location:index.php'); //redirect to login
    exit(); //terminate execution of current script(logout.php)
?>