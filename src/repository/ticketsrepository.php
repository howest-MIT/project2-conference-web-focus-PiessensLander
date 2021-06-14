<?php

require_once dirname(__FILE__) . "/../database/database.php";
require_once dirname(__FILE__) . "/../model/user.php";
require_once dirname(__FILE__) . "/../model/order.php";

class TicketsRepository
{
    public static function createUser($username, $first_name, $last_name, $password)
    {
        $res = Database::execute("INSERT INTO users(username,first_name,last_name,pwd_hash) VALUES (?,?,?,?)", [$username, $first_name, $last_name, $password], "User");
        return $res;
    }

    public static function getUserByUsername($username)
    {
        $item = Database::getSingleRow("SELECT * FROM users WHERE username=?", [$username], "User");
        return $item;
    }

    public static function createOrder($name, $email, $phone, $early_bird, $student, $group_ticket)
    {
        $res = Database::execute("INSERT INTO orders(name,email,phone,early_bird,student,group_ticket,order_date) VALUES(?,?,?,?,?,?,NOW())", [$name, $email, $phone, $early_bird, $student, $group_ticket], "Order");
        return $res;
    }

    public static function getAllOrders()
    {
        $arr = Database::getRows("SELECT * FROM orders", null, "Order");
        return $arr;
    }

    public static function getLatestOrders()
    {
        $arr = Database::getRows("SELECT * FROM orders ORDER BY order_date DESC LIMIT 5", null, "Order");
        return $arr;
    }

    public static function getOrderById($id)
    {
        $arr = Database::execute("SELECT * FROM orders WHERE orderID=?", [$id], "Order");
        return $arr;
    }
}
