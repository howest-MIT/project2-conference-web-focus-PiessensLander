<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>
    <div class="bg" style="height: 20vh"></div>

    <div class="container">
        <div class="row py-4 mb-5">
            <div class="c-nav d-flex justify-content-between align-items-center">
                <img src="img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
                <ul class="c-nav__items d-flex justify-content-center">
                    <li class="c-nav__link px-3"><a href="index.php">Home</a></li>
                    <li class="c-nav__link px-3"><a href="schedule.php">Program</a></li>
                    <li class="c-nav__link px-3"><a href="speakers.php">Speakers</a></li>
                    <li class="c-nav__link px-3"><a href="partners.php" class="active">Partners</a></li>
                    <li class="c-nav__link px-3"><a href="contact.php">Contact</a></li>
                </ul>
                <a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5">Buy tickets</a>
            </div>
        </div>
        <div class="row">
            <div class="c-title c-title--white p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
                <h2>Partners</h2>
            </div>
        </div>
        <div class="row mb-5 c-sponsors">
            <h3 class="text-pink">Gold sponsors</h3>
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
</body>

</html>