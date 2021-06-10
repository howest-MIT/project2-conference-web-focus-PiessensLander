<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>
    <div class="bg" style="height: 35vh"></div>

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
                        <li class="c-nav__link px-3 mb-3 mb-lg-0">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="c-nav__link px-3 mb-3 mb-lg-0">
                            <a href="schedule.php">Program</a>
                        </li>
                        <li class="c-nav__link px-3 mb-3 mb-lg-0">
                            <a href="speakers.php">Speakers</a>
                        </li>
                        <li class="c-nav__link px-3 mb-3 mb-lg-0">
                            <a class="active" href="partners.php">Partners</a>
                        </li>
                        <li class="c-nav__link px-3 mb-3 mb-lg-0">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5 text-center">Buy tickets</a>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="c-title c-title--white p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>Partners</h2>
            </div>
        </div>
        <div class="row mb-5 c-sponsors">
            <h3 class="text-white">Gold sponsors</h3>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
                <a href="https://www.jetbrains.com/idea/" target="_blank" class="text-center mb-4"><img src="img/intellij.png" alt="IntellIJ"></a>
                <h5 class="text-pink">IntelliJ</h5>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
                <a href="https://www.discord.com" target="_blank" class="text-center mb-4"><img src="img/discord.png" alt="Discord"></a>
                <h5 class="text-pink">Discord</h5>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
                <a href="https://www.telenet.be" target="_blank" class="text-center mb-4"><img src="img/telenet.png" alt="Telenet"></a>
                <h5 class="text-pink">Telenet</h5>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
                <a href="https://microsoft.com" target="_blank" class="text-center mb-4"><img src="img/microsoft.png" alt="Microsoft"></a>
                <h5 class="text-pink">Microsoft</h5>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
                <a href="https://howest.be" target="_blank" class="text-center mb-4"><img src="img/howest.png" alt="Howest"></a>
                <h5 class="text-pink">Howest</h5>
            </div>
        </div>
        <div class="row mb-5 c-sponsors d-flex align-items-center">
            <h3 class="text-pink">Friends and sponsors</h3>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center">
                <a href="https://coca-cola.com" target="_blank" class="text-center"><img src="img/cocacola.png" alt="IntellIJ"></a>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center">
                <a href="https://digitalocean.com" target="_blank" class="text-center"><img src="img/digitalocean.png" alt="Digital Ocean"></a>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center">
                <a href="https://nordvpn.com" target="_blank" class="text-center"><img src="img/nordvpn.jpg" alt="NordVPN"></a>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center">
                <a href="https://stubru.be" target="_blank" class="text-center"><img src="img/stubru.png" alt="StuBr"></a>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex flex-column align-items-center">
                <a href="https://vlaanderen.be" target="_blank" class="text-center"><img src="img/vlaamseoverheid.jpg" alt="Vlaamse overheid"></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>