<?php

class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $username;
    public $password;

    public function __construct($id = -1, $first_name = "", $last_name = "", $username = "", $password = "")
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->password = $password;
    }
}
