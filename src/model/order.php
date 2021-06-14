<?php
//plaats hier je ticket model
class Order
{
    public $orderID;
    public $name;
    public $email;
    public $phone;
    public $early_bird;
    public $student;
    public $group_ticket;
    public $order_date;

    public function __construct($orderID = -1, $name = null, $email = null, $phone = null, $early_bird = 0, $student = 0, $group_ticket = 0, $order_date = null)
    {
        $this->orderID = $orderID;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->early_bird = $early_bird;
        $this->student = $student;
        $this->group_ticket = $group_ticket;
        $this->order_date = $order_date;
    }
}
