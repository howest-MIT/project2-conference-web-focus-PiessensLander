<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>

  <div class="container">
    <div class="row py-4 mb-5">
      <div class="c-nav c-nav--light d-flex justify-content-between align-items-center">
        <img src="img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
        <ul class="c-nav__items d-flex justify-content-center">
          <li class="c-nav__link c-nav__link--light px-3"><a href="index.php">Home</a></li>
          <li class="c-nav__link c-nav__link--light px-3"><a href="schedule.php" class="active">Program</a></li>
          <li class="c-nav__link c-nav__link--light px-3"><a href="partners.php">Partners</a></li>
          <li class="c-nav__link c-nav__link--light px-3"><a href="contact.php">Contact</a></li>
        </ul>
        <a href="bestel.php" class="c-nav__cta c-btn c-btn--pink py-2 px-5">Buy tickets</a>
      </div>
    </div>
    <div class="c-back d-flex mb-5">
      <a href="#" class="c-btn c-btn--pink py-2 px-5 w-auto" onclick="history.back(-1)"><i class="fas fa-long-arrow-alt-left me-3"></i>Go back</a>
    </div>

    <div class="row">
      <div class="col-sm-12 col-lg-7">
        <div class="c-session mb-5">
          <div class="c-speaker__title mb-5">
            <div>Let's talk about...</div>
            <h1 class="text-pink">Visual FX for Film and TV</h1>
            <h3>Michael O'Neill</h3>
          </div>
          <div class="col-sm-12 col-lg-8">
            <h3 class="text-pink mb-4">Room 1 - 10:30h</h3>
            <p class="mb-4 c-session__desc">TV interactivity is experiencing a pivotal moment. Connected TV's, second screens and the over-the-top services all compete for the ultimate rich TV experience. Will TV finally become truly connected in 2012? We'll share best practices and valuable formats for Broadcasters and brands for implementing better interactive TV services", "Second Screen Applications”</p>
            <div class="c-session__share">
              <p class="mb-2">Share on</p>
              <div class="c-share__buttons d-flex">
                <a href="#" class="c-btn c-btn--facebook py-2 px-5 w-auto me-3">Facebook</a>
                <a href="https://twitter.com/intent/tweet?text=Aral%20Balkan%20on%20Multi-Mania!" target="_blank" class="c-btn c-btn--twitter py-2 px-5 w-auto">Twitter</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-5">
        <img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Aral Balkan" class="c-img w-100 mb-4">
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