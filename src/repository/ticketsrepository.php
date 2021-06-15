<?php

require_once dirname(__FILE__) . "/../database/database.php";
require_once dirname(__FILE__) . "/../model/user.php";
require_once dirname(__FILE__) . "/../model/order.php";
require_once dirname(__FILE__) . "/../model/aantal.php";

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
        $item = Database::getRows("SELECT * FROM orders WHERE orderID=?", [$id], "Order");
        return $item;
    }

    public static function updateOrder($name, $email, $phone, $early_bird, $student, $group_ticket, $id)
    {
        $int = Database::execute("UPDATE orders SET name=?,email=?,phone=?,early_bird=?,student=?,group_ticket=? WHERE orderID=?", [$name, $email, $phone, $early_bird, $student, $group_ticket, $id]);
        return $int;
    }

    public static function deleteOrder($id)
    {
        $int = Database::execute("DELETE FROM orders WHERE orderID=?", [$id]);
        return $int;
    }

    public static function getEarlyBirdAmount()
    {
        $int = Database::getSingleRow("SELECT SUM(early_bird) as 'aantal' FROM orders", null, "Aantal");
        return $int;
    }
    public static function getStudentAmount()
    {
        $int = Database::getSingleRow("SELECT SUM(student) as 'aantal' FROM orders", null, "Aantal");
        return $int;
    }
    public static function getGroupAmount()
    {
        $int = Database::getSingleRow("SELECT SUM(group_ticket) as 'aantal' FROM orders", null, "Aantal");
        return $int;
    }
}
