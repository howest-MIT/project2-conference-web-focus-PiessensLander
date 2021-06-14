<?php

require_once dirname(__FILE__) . "/../database/database.php";
require_once dirname(__FILE__) . "/../model/user.php";

class TicketsRepository
{
    public static function createUser($username, $first_name, $last_name, $password)
    {
        $res = Database::execute("INSERT INTO users(username,first_name,last_name,pwd_hash) VALUES (?,?,?,?)", [$username, $first_name, $last_name, $password], "User");
        return $res;
    }
}
