<?php
//
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
                    <ul class="navbar-nav mx-auto ">
                        <li class="c-nav__link c-nav__link--light px-3 mb-3 mb-lg-0">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="c-nav__link c-nav__link--light px-3 mb-3 mb-lg-0">
                            <a href="schedule.php">Program</a>
                        </li>
                        <li class="c-nav__link c-nav__link--light px-3 mb-3 mb-lg-0">
                            <a href="speakers.php">Speakers</a>
                        </li>
                        <li class="c-nav__link c-nav__link--light px-3 mb-3 mb-lg-0">
                            <a href="partners.php">Partners</a>
                        </li>
                        <li class="c-nav__link c-nav__link--light px-3 mb-3 mb-lg-0">
                            <a class="active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <a href="bestel.php" class="c-nav__cta c-btn c-btn--pink py-2 px-5 text-center">Buy tickets</a>
                </div>
            </div>
        </nav>
        <div class="row mb-3">
            <div class="c-title c-title--pink p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>Contact us</h2>
            </div>
        </div>
        <form class="c-booking mb-5" method="POST" action="review-order.php">
            <div class="row">
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <div class="c-contact__input d-flex flex-column mb-4">
                        <label for="fullname" class="mb-2">Full name</label>
                        <input type="text" name="fullname" class="c-contact__input--text" placeholder="Full name" required />
                    </div>
                    <div class="c-contact__input d-flex flex-column mb-4">
                        <label for="email" class="mb-2">E-mail address</label>
                        <input type="email" name="email" class="c-contact__input--text" placeholder="E-mail address" required />
                    </div>
                    <div class="c-contact__input d-flex flex-column">
                        <label for="phone" class="mb-2">Phone</label>
                        <input type="phone" name="phone" class="c-contact__input--text" placeholder="Phone" required />
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mb-sm-3 mb-0">
                    <div class="c-booking__input d-flex flex-column mb-4">
                        <label for="message" class="mb-2">Your message</label>
                        <textarea type="text" name="message" class="c-contact__input--textarea mb-3" placeholder="Your message" required /></textarea>
                        <div class="c-contact__submit d-flex justify-content-end">
                            <button type="submit" class="c-btn c-btn--pink py-2 px-5 w-auto">Send message</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <iframe class="c-contact__map" src="https://maps.google.com/maps?q=sint-martens-latemlaan%201B&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>