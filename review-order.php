<?php
//
print_r($_POST)
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
                    <li class="c-nav__link c-nav__link--light px-3"><a href="speakers.php">Speakers</a></li>
                    <li class="c-nav__link c-nav__link--light px-3"><a href="partners.php">Partners</a></li>
                    <li class="c-nav__link c-nav__link--light px-3"><a href="contact.php">Contact</a></li>
                </ul>
                <a href="bestel.php" class="c-nav__cta c-btn c-btn--pink py-2 px-5">Buy tickets</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="c-title c-title--pink p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>Review your order</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="c-order col-12 col-lg-6 p-4">
                <p class="mb-3"><b>Order summary</b></p>
                <div class="c-order__overview">
                    <div class="c-order__amount d-flex justify-content-between py-2">
                        <p>2x Early Bird ticket</p>
                        <p>€32</p>
                    </div>
                </div>
                <div class="c-order__total mb-5">
                    <div class="c-order__amount d-flex justify-content-between py-2">
                        <p>Subtotal</p>
                        <p>€32</p>
                    </div>
                </div>
                <button type="submit" class="c-btn c-btn--pink py-2 px-5 w-auto">Complete order</button>
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
</body>

</html>