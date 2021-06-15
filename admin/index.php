<?php
require_once dirname(__FILE__) . "../../src/helper/debug.php";
require_once dirname(__FILE__) . "../../src/helper/auth.php";
require_once dirname(__FILE__) . "../../src/repository/ticketsrepository.php";
checkLoggedin();
//toon een overzicht van alle bestelde tickets
$user = TicketsRepository::getUserByUsername($_SESSION["username"]);
$latestOrders = TicketsRepository::getLatestOrders();

$aantal_earlybird = TicketsRepository::getEarlyBirdAmount();
$aantal_student = TicketsRepository::getStudentAmount();
$aantal_group = TicketsRepository::getGroupAmount();

$total_sales = ($aantal_earlybird->aantal * 99) + ($aantal_student->aantal * 45) + ($aantal_group->aantal * 89);


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
    <div class="bg" style="height: 30vh"></div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light c-nav py-4">
            <div class="container-fluid m-0 p-0">
                <a class="navbar-brand w-auto c-nav__logo" href="#">
                    <img src="../img/logo_fw.png" alt="Logo" class="w-100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ">
                        <li class="c-nav__link px-3 mb-3 mb-lg-0">
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li class="c-nav__link px-3 mb-3 mb-lg-0">
                            <a href="orders.php">Orders</a>
                        </li>
                    </ul>
                    <a href="logout.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5 text-center">Log out</a>
                </div>
            </div>
        </nav>
        <div class="row mb-5">
            <div class="c-user d-flex align-items-center">
                <img src="../img/pf.jpg" alt="Profile picture" class="c-user__img me-3">
                <p class="text-white">Welcome back, <b><?php echo $user->first_name . " " . $user->last_name ?></b></p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-6 col-lg-3">
                <div class="c-stat d-flex p-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-euro-sign c-stat__icon d-flex align-items-center justify-content-center me-4"></i>
                        <div class="c-stat__detail">
                            <p>Total sales</p>
                            <p class="fs-2 text-pink">€<?php echo $total_sales ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="c-stat d-flex p-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-ticket-alt c-stat__icon d-flex align-items-center justify-content-center me-4"></i>
                        <div class="c-stat__detail">
                            <p>Early Bird tickets</p>
                            <p class="fs-2 text-pink"><?php echo $aantal_earlybird->aantal ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="c-stat d-flex p-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-ticket-alt c-stat__icon d-flex align-items-center justify-content-center me-4"></i>
                        <div class="c-stat__detail">
                            <p>Student tickets</p>
                            <p class="fs-2 text-pink"><?php echo $aantal_student->aantal ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="c-stat d-flex p-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-ticket-alt c-stat__icon d-flex align-items-center justify-content-center me-4"></i>
                        <div class="c-stat__detail">
                            <p>Group tickets</p>
                            <p class="fs-2 text-pink"><?php echo $aantal_group->aantal ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-7">
                <h3 class="text-pink mb-3">Recent orders</h3>
                <table class="table table-hover c-table">
                    <thead>
                        <tr class="d-flex">
                            <th class="d-flex w-100" scope="col">ID</th>
                            <th class="d-flex w-100" scope="col">Name</th>
                            <th class="d-flex w-100" scope="col">Order date</th>
                            <th class="d-flex w-100" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($latestOrders as $order) { ?>
                            <tr class="d-flex">
                                <th class="d-flex w-100" scope="row"><?php echo $order->orderID ?></th>
                                <td class="d-flex w-100"><?php echo $order->name ?></td>
                                <td class="d-flex w-100"><?php echo $order->order_date ?></td>
                                <td class="d-flex w-100">
                                    <div>
                                        <a href="edit-order.php?orderid=<?php echo $order->orderID ?>" class="c-btn c-btn--pink py-2 px-5 text-center">Details</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="c-table__all d-flex justify-content-center">
                    <a href="orders.php" class="c-btn c-btn--pink py-2 px-5 w-auto">View all orders</a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5">
                <canvas id="sales" class="c-graph p-3" width="400" height="400">
                    <div class="c-graph__title d-flex align-items-center flex-column">
                        <h2 class="text-pink">10</h2>
                        <p>tickets sold</p>
                    </div>
                </canvas>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script>
        var ctx = document.getElementById('sales');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Student', 'Group', 'Early Bird'],
                datasets: [{
                    data: [<?php echo $aantal_student->aantal ?>, <?php echo $aantal_group->aantal ?>, <?php echo $aantal_earlybird->aantal ?>],
                    backgroundColor: [
                        'rgb(197, 72, 147)',
                        'rgb(149, 0, 91)',
                        'rgb(99, 35, 74)'
                    ]
                }],
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Doughnut Chart'
                        }
                    }
                },
            },
        })
    </script>
</body>

</html>