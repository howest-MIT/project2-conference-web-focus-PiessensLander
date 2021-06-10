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
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl.theme.default.css" />
  <link rel="stylesheet" href="css/screen.css" />
  <script src="script/dataHandler.js"></script>
  <script src="script/session-detail.js"></script>

</head>

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
              <a class="active" href="schedule.php">Program</a>
            </li>
            <li class="c-nav__link c-nav__link--light px-3 mb-3 mb-lg-0">
              <a href="speakers.php">Speakers</a>
            </li>
            <li class="c-nav__link c-nav__link--light px-3 mb-3 mb-lg-0">
              <a href="partners.php">Partners</a>
            </li>
            <li class="c-nav__link c-nav__link--light px-3 mb-3 mb-lg-0">
              <a href="contact.php">Contact</a>
            </li>
          </ul>
          <a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5 text-center">Buy tickets</a>
        </div>
      </div>
    </nav>
    <div class="c-back d-flex mb-5">
      <a href="schedule.php" class="c-btn c-btn--pink py-2 px-5 w-auto"><i class="fas fa-long-arrow-alt-left me-3"></i>Go back</a>
    </div>

    <div class="row">
      <div class="col-sm-12 col-lg-7">
        <div class="c-session mb-5">
          <div class="c-speaker__title mb-5 js-session-title">
            <div>Let's talk about...</div>
            <h1 class="text-pink">Visual FX for Film and TV</h1>
            <h3>Michael O'Neill</h3>
          </div>
          <div class="col-sm-12 col-lg-8 js-session-desc">
            <h3 class="text-pink mb-4">Room 1 - 10:30h</h3>
            <p class="mb-4 c-session__desc">TV interactivity is experiencing a pivotal moment. Connected TV's, second screens and the over-the-top services all compete for the ultimate rich TV experience. Will TV finally become truly connected in 2012? We'll share best practices and valuable formats for Broadcasters and brands for implementing better interactive TV services", "Second Screen Applications”</p>
            <div class="c-speaker__like d-flex align-items-center mb-4">
              <a class="c-btn c-btn--outline js-addlike py-2 px-5 w-auto me-3">
                <i class="far fa-heart me-2"></i>Like
              </a>
              <p class="js-likes">11 likes</p>
            </div>
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
        <img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Aral Balkan" class="c-img w-100 mb-4 js-img">
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