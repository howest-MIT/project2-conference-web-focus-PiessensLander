<?php
require_once dirname(__FILE__) . "../../src/helper/debug.php";
require_once dirname(__FILE__) . "../../src/helper/auth.php";
require_once dirname(__FILE__) . "../../src/repository/ticketsrepository.php";
checkLoggedin();
//toon een overzicht van alle bestelde tickets
$user = TicketsRepository::getUserByUsername($_SESSION["username"]);
$orders = TicketsRepository::getAllOrders();
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
                    <ul class="navbar-nav mx-auto d-flex align-items-center">
                        <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
                            <a class="active" href="orders.php">Orders</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <a href="logout.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5 text-center">Log out</a>
                    </div>

                </div>
            </div>
        </nav>
        <div class="row mb-5">
            <div class="c-user d-flex align-items-center py-5">
                <img src="../img/pf.jpg" alt="Profile picture" class="c-user__img me-3">
                <p class="text-white">Welcome back, <b><?php echo $user->first_name . " " . $user->last_name ?></b></p>
            </div>
        </div>
        <div class="row">
            <div class="c-back d-flex mb-5">
                <a href="index.php" class="c-btn c-btn--pink py-2 px-5 w-auto"><i class="fas fa-long-arrow-alt-left me-3"></i>Go back</a>
            </div>
            <div class="col-12">
                <h3 class="text-pink mb-3">All orders</h3>
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
                        <?php foreach ($orders as $order) { ?>
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
            </div>
        </div>
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
                    data: [5, 3, 2],
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