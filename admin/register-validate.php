<?php
require_once dirname(__FILE__) . "../../src/helper/debug.php";
require_once dirname(__FILE__) . "../../src/helper/auth.php";
require_once dirname(__FILE__) . "../../src/repository/ticketsrepository.php";

if (isset($_POST["submit"])) {
    if (isset($_POST["username"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["password"])) {
        $user = TicketsRepository::getUserByUsername($_POST["username"]);
        if ($user) {
            echo "User already exists. Please log in <a href='login.php'>here</a>.";
        } else {
            $username = $_POST["username"];
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $pwd_hash = password_hash($_POST["password"], PASSWORD_BCRYPT);

            $res = TicketsRepository::createUser($username, $first_name, $last_name, $pwd_hash);

            if ($res > 0) {
                header("location:index.php");
            } else {
                echo "Registration failed. Please try again.";
            }
        }
    } else {
        echo "Not all required fields were filled. Please try again.";
    }
}
