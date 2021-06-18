<?php

require_once dirname(__FILE__) . "../../src/helper/debug.php";
require_once dirname(__FILE__) . "../../src/helper/auth.php";
require_once dirname(__FILE__) . "../../src/repository/ticketsrepository.php";

if (isset($_POST["submit"])) {
    $rows = TicketsRepository::updateOrder($_POST["fullname"], $_POST["email"], $_POST["phone"], $_POST["amount-earlybird"], $_POST["amount-student"], $_POST["amount-group"], $_POST["id"]);
    if ($rows > 0) {
        header("location:index.php");
    } else {
        echo "No records were updated.";
    }
} else {
    echo "Edit failed.";
}
