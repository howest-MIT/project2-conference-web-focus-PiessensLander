<?php
//
require_once dirname(__FILE__) . "../../src/helper/auth.php";
require_once dirname(__FILE__) . "../../src/repository/ticketsrepository.php";
checkLoggedin();
if (isset($_GET["orderid"])) {
    $order = TicketsRepository::getOrderById($_GET["orderid"]);
} else {
    header("location:index.php");
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        TicketsRepository::deleteOrder($_GET["orderid"]);
        header("location:index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multi-Mania 2022</title>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/screen.css" />

</head>

<body>
    <div class="bg" style="height: 20vh;"></div>
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
                            <a class="active" href="orders.php">Orders</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5 text-center">Buy tickets</a>
                    </div>

                </div>
            </div>
        </nav>
        <div class="row mb-3">
            <div class="c-title c-title--white p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>Edit order - #<?php echo $order[0]->orderID ?></h2>
            </div>
        </div>
        <div class="c-back d-flex mb-5">
            <a href="index.php" class="c-btn c-btn--pink py-2 px-5 w-auto"><i class="fas fa-long-arrow-alt-left me-3"></i>Go back</a>
        </div>
        <form class="c-booking mb-5" method="POST" action="edit-order-validate.php">
            <div class="row">
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <p class="c-booking__step">Personal information</p>
                </div>
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <p class="c-booking__step">Select type and amount</p>
                </div>
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <div class="c-booking__step d-flex">
                        <button type="submit" name="submit" class="c-btn c-btn--pink py-2 px-5 w-auto me-3">Update order</button>
                        <div class="d-flex">
                            <a class="c-btn c-btn--warning py-2 px-5 w-auto" data-bs-toggle="modal" data-bs-target="#warningModal">Delete order</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <div class="c-booking__input d-flex flex-column mb-4">
                        <label for="fullname" class="mb-2">Order ID</label>
                        <input type="text" name="id" class="c-booking__input--text" placeholder="ID" required readonly value="<?php echo $order[0]->orderID ?>" />
                    </div>
                    <div class="c-booking__input d-flex flex-column mb-4">
                        <label for="fullname" class="mb-2">Full name</label>
                        <input type="text" name="fullname" class="c-booking__input--text" placeholder="Full name" required value="<?php echo $order[0]->name ?>" />
                    </div>
                    <div class="c-booking__input d-flex flex-column mb-4">
                        <label for="email" class="mb-2">E-mail address</label>
                        <input type="email" name="email" class="c-booking__input--text" placeholder="E-mail address" required value="<?php echo $order[0]->email ?>" />
                    </div>
                    <div class="c-booking__input d-flex flex-column">
                        <label for="phone" class="mb-2">Phone</label>
                        <input type="phone" name="phone" class="c-booking__input--text" placeholder="Phone" required value="<?php echo $order[0]->phone ?>" />
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <div class="row mb-3">
                        <div class="c-booking__ticket d-flex">
                            <div class="c-booking__type d-flex justify-content-between align-items-center p-3 w-100">
                                <div class="c-type__info me-4">
                                    <h5 class="text-pink">Early Bird</h5>
                                    <p>Discounted price</p>
                                    <p>Early entrance (9:00am)</p>
                                </div>
                                <div class="c-type__price">
                                    <h5 class="text-pink">€99</h5>
                                    <p class="caption">Per ticket</p>
                                </div>
                            </div>
                            <div class="c-booking__amount d-flex justify-content-center">
                                <input type="number" id="amount-earlybird" name="amount-earlybird" class="c-booking__input--amount" min=0 value="<?php echo $order[0]->early_bird ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="c-booking__ticket d-flex">
                            <div class="c-booking__type d-flex justify-content-between align-items-center p-3 w-100">
                                <div class="c-type__info me-4">
                                    <h5 class="text-pink">Student</h5>
                                    <p>Discounted price</p>
                                    <p>Early entrance (9:00am)</p>
                                </div>
                                <div class="c-type__price">
                                    <h5 class="text-pink">€45</h5>
                                    <p class="caption">Per ticket</p>
                                </div>
                            </div>
                            <div class="c-booking__amount d-flex">
                                <input type="number" id="amount-student" name="amount-student" class="c-booking__input--amount" min=0 value="<?php echo $order[0]->student ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="c-booking__ticket d-flex ">
                            <div class="c-booking__type d-flex justify-content-between align-items-center p-3 w-100">
                                <div class="c-type__info me-4">
                                    <h5 class="text-pink">Group</h5>
                                    <p>Discounted price</p>
                                    <p>Min. of 6 tickets</p>
                                </div>
                                <div class="c-type__price">
                                    <h5 class="text-pink">€89</h5>
                                    <p class="caption">Per ticket</p>
                                </div>
                            </div>
                            <div class="c-booking__amount d-flex justify-content-center">
                                <input type="number" id="amount-group" name="amount-group" class="c-booking__input--amount" min=0 value="<?php echo $order[0]->group_ticket ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <p class="text-center text-white">&copy; Multi-Mania, 2021</p>
                <br>
                <p class="text-center text-white">Images copyright: Frederik Jaques</p>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="warningModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 class="text-pink">Are you sure?</h3>
                    <p>This action cannot be reversed.</p>
                </div>
                <div class="modal-footer">
                    <a href="?action=delete&orderid=<?php echo $order[0]->orderID ?>" class="c-btn c-btn--pink py-2 px-5 border-0 text-center">Yes</a>
                    <button type="button" class="c-btn c-btn--outline py-2 px-5">No</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>