<?php
session_start();

//controleren of ingelogd
function checkLoggedin()
{
    if (!isset($_SESSION["loggedin"])) {
        header("location:login.php");
    }
}
