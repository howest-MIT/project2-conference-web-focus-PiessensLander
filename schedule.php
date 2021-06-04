<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>
    <div class="bg" style="height: 40vh"></div>

    <div class="container">
        <div class="row py-4 mb-5">
            <div class="c-nav d-flex justify-content-between align-items-center">
                <img src="img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
                <ul class="c-nav__items d-flex justify-content-center">
                    <li class="c-nav__link px-3"><a href="index.php">Home</a></li>
                    <li class="c-nav__link px-3"><a href="schedule.php" class="active">Program</a></li>
                    <li class="c-nav__link px-3"><a href="speakers.php">Speakers</a></li>
                    <li class="c-nav__link px-3"><a href="partners.php">Partners</a></li>
                    <li class="c-nav__link px-3"><a href="contact.php">Contact</a></li>
                </ul>
                <a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5">Buy tickets</a>
            </div>
        </div>
        <div class="row">
            <div class="c-title c-title--white p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>All talks</h2>
            </div>
        </div>
        <div class="js-schedule">

            <div class="row mb-5 js-schedule-aula">

            </div>
            <div class="row mb-5 js-schedule-room1">

            </div>
            <div class="row mb-5 js-schedule-room2">

            </div>
            <div class="row mb-5 js-schedule-room3">

            </div>
            <div class="row mb-5 js-schedule-room4">

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