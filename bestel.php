<?php
//
?>


<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>
    <div class="container">
        <div class="row py-4 mb-5">
            <div class="c-nav d-flex justify-content-between align-items-center">
                <img src="img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
                <ul class="c-nav__items d-flex justify-content-center">
                    <li class="c-nav__link c-nav__link--light px-3"><a href="index.php">Home</a></li>
                    <li class="c-nav__link c-nav__link--light px-3"><a href="schedule.php">Program</a></li>
                    <li class="c-nav__link c-nav__link--light px-3"><a href="partners.php">Partners</a></li>
                    <li class="c-nav__link c-nav__link--light px-3"><a href="#">Contact</a></li>
                </ul>
                <a href="bestel.php" class="c-nav__cta c-btn c-btn--pink py-2 px-5">Buy tickets</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="c-title c-title--pink p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>Order your tickets</h2>
            </div>
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
</body>

</html>