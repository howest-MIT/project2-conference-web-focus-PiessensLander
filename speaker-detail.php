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
          <li class="c-nav__link c-nav__link--light px-3"><a href="speakers.php">Speakers</a></li>
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
      <div class="c-speaker mb-5">
        <div class="c-speaker__name">
          <div class="c-badge bg-pink mb-2">Speaker</div>
          <h1 class="text-pink">Aral Balkan</h1>
        </div>
      </div>
      <div class="row gap-5">
        <div class="col-sm-12 col-lg-4">
          <img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Aral Balkan" class="c-img w-100 mb-4">
          <div class="c-speaker__share">
            <p class="mb-2">Share on</p>
            <div class="c-share__buttons d-flex">
              <a href="#" class="c-btn c-btn--facebook py-2 px-5 w-auto me-3">Facebook</a>
              <a href="https://twitter.com/intent/tweet?text=Aral%20Balkan%20on%20Multi-Mania!" target="_blank" class="c-btn c-btn--twitter py-2 px-5 w-auto">Twitter</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-7">
          <h2 class="mb-2 text-pink">Bio</h2>
          <p class="mb-4">@aral is a designer, developer, author, teacher, entrepreneur, and performer; a Renaissance Geek with a passion for designing user experiences and a desire to make the world a better place through technology and oratory. These days he's organizing the Update conference as part of the Brighton Digital Festival and makes iPhone apps like his critically-acclaimed Feathers. He is a passionate User Experience advocate who tries to work on Stuff That Matters. In 2008, Aral created and staged the world's first fully-virtual web conference,

            <head>, creating a model for future conferences that are environmentally-friendly. In 2009, at least two new conferences directly stated that they were inspired by

              <head> and adopted the

                <head> model. As developer, Aral has been programming for over twenty years (he started really early), has a love for learning new programming languages, a passion for simplicity, and an enduring fondness for both visual and experience design. He is the creator of the SWX data format (the native data format for the Flash Platform) and SWX-PHP (the PHP implementation of SWX-RPC). Unabashedly an alpha geek, he is currently hacking Objective-C on the iPhone, Python and Django on Google App Engine, and Flash, Flex, and ActionScript on the Flash Platform. As entrepreneur, Aral is founder and director of Naklab, a UK-based idea factory and web consultancy and Geek Ninja Factory, a design and development training company par excellence. Aral is an advocate of open source and Creative Commons and has launched several open initiatives and projects, including OSFlash, the home of the open-source Flash community, SWX, and, more recently, the Google App Engine Backup and Restore project to bring data portability to the App Engine platform. Aral is immensely passionate about the potential that the Internet holds for individual empowerment, education, and the democratization of communication and self-expression. He finds the convergence of commoditized infrastructure, multi-gestural interfaces, the emerging ubiquity of the mobile Internet, and location-based services hugely exciting.
          </p>
          <div class="c-speaker__like d-flex align-items-center mb-4">
            <a class="c-btn c-btn--outline py-2 px-5 w-auto me-3">
              <i class="far fa-heart me-2"></i>Like
            </a>
            <p>11 likes</p>
          </div>
          <div class="c-speaker__socials mb-5">
            <p class="mb-2">Find <b>Aral Balkan</b> on</p>
            <div class="c-socials__buttons d-flex">
              <a href="#" class="c-btn c-btn--facebook py-2 px-5 w-auto me-3">Facebook</a>
              <a href="#" class="c-btn c-btn--twitter py-2 px-5 w-auto">Twitter</a>
            </div>
          </div>
        </div>
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
  <script src="script/speaker-detail.js"></script>
</body>

</html>