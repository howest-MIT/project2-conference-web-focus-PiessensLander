<?php
//
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
        <div class="row py-4 mb-5">
            <div class="c-nav d-flex justify-content-between align-items-center">
                <img src="../img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
                <ul class="c-nav__items d-flex justify-content-center">
                    <li class="c-nav__link px-3"><a href="../index.php">Home</a></li>
                    <li class="c-nav__link px-3"><a href="../schedule.php">Program</a></li>
                    <li class="c-nav__link px-3"><a href="../speakers.php">Speakers</a></li>
                    <li class="c-nav__link px-3"><a href="../partners.php">Partners</a></li>
                    <li class="c-nav__link px-3"><a href="../contact.php">Contact</a></li>
                </ul>
                <a href="../bestel.php" class="c-btn c-btn--outline py-2 px-5 w-auto">Buy tickets</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="c-title c-title--white p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>Edit order - #0001</h2>
            </div>
        </div>
        <div class="c-back d-flex mb-5">
            <a href="#" class="c-btn c-btn--pink py-2 px-5 w-auto" onclick="history.back(-1)"><i class="fas fa-long-arrow-alt-left me-3"></i>Go back</a>
        </div>
        <form class="c-booking mb-5" method="POST" action="review-order.php">
            <div class="row">
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <p class="c-booking__step">Personal information</p>
                </div>
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <p class="c-booking__step">Select type and amount</p>
                </div>
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <div class="c-booking__step">
                        <button type="submit" class="c-btn c-btn--pink py-2 px-5 w-auto">Complete order</button>
                        <p class="text-grey">You can review your order before payment</p>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <div class="c-booking__input d-flex flex-column mb-4">
                        <label for="fullname" class="mb-2">Full name</label>
                        <input type="text" name="fullname" class="c-booking__input--text" placeholder="Full name" required />
                    </div>
                    <div class="c-booking__input d-flex flex-column mb-4">
                        <label for="email" class="mb-2">E-mail address</label>
                        <input type="email" name="email" class="c-booking__input--text" placeholder="E-mail address" required />
                    </div>
                    <div class="c-booking__input d-flex flex-column">
                        <label for="phone" class="mb-2">Phone</label>
                        <input type="phone" name="phone" class="c-booking__input--text" placeholder="Phone" required />
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
                                <input type="number" id="amount-earlybird" name="amount-earlybird" class="c-booking__input--amount" min="1">
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
                                <input type="number" id="amount-student" name="amount-student" class="c-booking__input--amount" min="1">
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
                                <input type="number" id="amount-group" name="amount-group" class="c-booking__input--amount" min="6">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end mt-5">
                        <button type="button" class="c-btn c-btn--warning py-2 px-5 w-auto" data-bs-toggle="modal" data-bs-target="#warningModal">Delete order</button>
                    </div>
                </div>
            </div>
        </form>
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
    <!-- Modal -->
    <div class="modal fade" id="warningModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 class="text-pink">Are you sure?</h3>
                    <p>This action cannot be reversed.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="c-btn c-btn--pink py-2 px-5 border-0" data-bs-dismiss="modal">Yes</button>
                    <button type="button" class="c-btn c-btn--outline py-2 px-5">No</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>