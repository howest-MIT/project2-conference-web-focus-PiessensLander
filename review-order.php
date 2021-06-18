<?php
//

require_once dirname(__FILE__) . "/src/repository/ticketsrepository.php";

$amount_earlybird = 0;
$amount_student = 0;
$amount_group = 0;

if (isset($_POST["submit"])) {
    if (isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["phone"])) {
        if ($_POST["amount-earlybird"] == "") {
            $amount_earlybird = 0;
        } else {
            $amount_earlybird = $_POST["amount-earlybird"];
        }
        if ($_POST["amount-student"] == "") {
            $amount_student = 0;
        } else {
            $amount_student = $_POST["amount-student"];
        }
        if ($_POST["amount-group"] == "") {
            $amount_group = 0;
        } else {
            $amount_group = $_POST["amount-group"];
        }
        TicketsRepository::createOrder($_POST["fullname"], $_POST["email"], $_POST["phone"], $amount_earlybird, $amount_student, $amount_group);
        $total_earlybird = 99 * $amount_earlybird;
        $total_student = 45 * $amount_student;
        $total_group = 89 * $amount_group;
        $subtotal = $total_earlybird + $total_group + $total_student;
    } else {
        $error = "Not all required fields were filled.";
    }
} else {
    header("location:bestel.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light c-nav py-4">
            <div class="container-fluid m-0 p-0">
                <a class="navbar-brand w-auto c-nav__logo" href="#">
                    <img src="img/logo_fw.png" alt="Logo" class="w-100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto d-flex align-items-center">
                        <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
                            <a href="schedule.php">Program</a>
                        </li>
                        <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
                            <a href="speakers.php">Speakers</a>
                        </li>
                        <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
                            <a href="partners.php">Partners</a>
                        </li>
                        <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5 text-center">Buy tickets</a>
                    </div>

                </div>
            </div>
        </nav>
        <div class="row mb-3">
            <div class="c-title c-title--pink p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>Your order is confirmed!</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="c-order col-12 col-lg-6 p-4">
                <p class="mb-3"><b>Order summary</b></p>
                <div class="c-order__overview">
                    <?php if ($_POST["amount-earlybird"] !== "") { ?>
                        <div class="c-order__amount d-flex justify-content-between py-2">
                            <p><?php echo $_POST["amount-earlybird"] ?>x Early Bird ticket</p>
                            <p>€<?php echo 99 * $_POST["amount-earlybird"] ?></p>
                        </div>
                    <?php } ?>
                    <?php if ($_POST["amount-student"] !== "") { ?>
                        <div class="c-order__amount d-flex justify-content-between py-2">
                            <p><?php echo $_POST["amount-student"] ?>x Student ticket</p>
                            <p>€<?php echo 45 * $_POST["amount-student"] ?></p>
                        </div>
                    <?php } ?>
                    <?php if ($_POST["amount-group"] !== "") { ?>
                        <div class="c-order__amount d-flex justify-content-between py-2">
                            <p><?php echo $_POST["amount-group"] ?>x Group ticket</p>
                            <p>€<?php echo 89 * $_POST["amount-group"] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="c-order__total mb-5">
                    <div class="c-order__amount d-flex justify-content-between py-2">
                        <p><b>Subtotal</b></p>
                        <p><b>€<?php echo $subtotal ?></b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <p class="text-center text-white">&copy; Multi-Mania, 2021</p>
                <br>
                <p class="text-center text-white">Images copyright: Frederik Jaques</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>