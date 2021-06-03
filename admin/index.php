<?php
//toon een overzicht van alle bestelde tickets
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
    <div class="bg" style="height: 35vh"></div>
    <div class="container">
        <div class="row py-4 mb-5">
            <div class="c-nav d-flex justify-content-between align-items-center">
                <img src="../img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
                <ul class="c-nav__items d-flex justify-content-center">
                    <li class="c-nav__link c-nav__link px-3"><a href="../index.php">Home</a></li>
                    <li class="c-nav__link c-nav__link px-3"><a href="../schedule.php">Program</a></li>
                    <li class="c-nav__link c-nav__link px-3"><a href="../partners.php">Partners</a></li>
                    <li class="c-nav__link c-nav__link px-3"><a href="../contact.php">Contact</a></li>
                </ul>
                <a href="../bestel.php" class="c-btn c-btn--outline py-2 px-5 w-auto">Buy tickets</a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="c-user d-flex align-items-center">
                <img src="../img/pf.jpg" alt="Profile picture" class="c-user__img me-3">
                <p class="text-white">Welcome back, <b>Lander Piessens</b></p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-6 col-lg-3">
                <div class="c-stat d-flex p-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-euro-sign c-stat__icon d-flex align-items-center justify-content-center me-4"></i>
                        <div class="c-stat__detail">
                            <p>Total sales</p>
                            <p class="fs-2 text-pink">€123,45</p>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-external-link-square-alt fs-4"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="c-stat d-flex p-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-ticket-alt c-stat__icon d-flex align-items-center justify-content-center me-4"></i>
                        <div class="c-stat__detail">
                            <p>Early Bird tickets</p>
                            <p class="fs-2 text-pink">2</p>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-external-link-square-alt fs-4"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="c-stat d-flex p-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-ticket-alt c-stat__icon d-flex align-items-center justify-content-center me-4"></i>
                        <div class="c-stat__detail">
                            <p>Student tickets</p>
                            <p class="fs-2 text-pink">5</p>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-external-link-square-alt fs-4"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="c-stat d-flex p-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-ticket-alt c-stat__icon d-flex align-items-center justify-content-center me-4"></i>
                        <div class="c-stat__detail">
                            <p>Group tickets</p>
                            <p class="fs-2 text-pink">3</p>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-external-link-square-alt fs-4"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-7">
                <h3 class="text-pink mb-3">Recent orders</h3>
                <table class="table table-hover c-table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Order date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">#0001</th>
                            <td>John Doe</td>
                            <td>01/06/2021</td>
                            <td>Student</td>
                            <td>
                                <a href="edit-order.php" class="c-btn c-btn--pink py-2 px-5">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#0002</th>
                            <td>John Doe</td>
                            <td>01/06/2021</td>
                            <td>Student</td>
                            <td>
                                <a href="edit-order.php" class="c-btn c-btn--pink py-2 px-5">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#0003</th>
                            <td>John Doe</td>
                            <td>01/06/2021</td>
                            <td>Student</td>
                            <td>
                                <a href="edit-order.php" class="c-btn c-btn--pink py-2 px-5">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#0004</th>
                            <td>John Doe</td>
                            <td>01/06/2021</td>
                            <td>Student</td>
                            <td>
                                <a href="edit-order.php" class="c-btn c-btn--pink py-2 px-5">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#0005</th>
                            <td>John Doe</td>
                            <td>01/06/2021</td>
                            <td>Student</td>
                            <td>
                                <a href="edit-order.php" class="c-btn c-btn--pink py-2 px-5">Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="c-table__all d-flex justify-content-center">
                    <a href="#" class="c-btn c-btn--pink py-2 px-5 w-auto" data-bs-toggle="modal" data-bs-target="#warningModal">View all orders</a>

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