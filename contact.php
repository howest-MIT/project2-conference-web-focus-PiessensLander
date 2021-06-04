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
                    <li class="c-nav__link c-nav__link--light px-3"><a href="speakers.php">Speakers</a></li>
                    <li class="c-nav__link c-nav__link--light px-3"><a href="partners.php">Partners</a></li>
                    <li class="c-nav__link c-nav__link--light px-3"><a href="contact.php" class="active">Contact</a></li>
                </ul>
                <a href="bestel.php" class="c-nav__cta c-btn c-btn--pink py-2 px-5">Buy tickets</a>
            </div>
        </div>
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
</body>

</html>