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
  <script src="script/speakers.js"></script>

</head>

<body>
  <div class="bg" style="height: 45vh"></div>

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
          <ul class="navbar-nav mx-auto d-flex align-items-center">
            <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
              <a href="index.php">Home</a>
            </li>
            <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
              <a href="schedule.php">Program</a>
            </li>
            <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
              <a class="active" href="speakers.php">Speakers</a>
            </li>
            <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
              <a href="partners.php">Partners</a>
            </li>
            <li class="c-nav__link py-sm-2 px-3 mb-3 mb-lg-0">
              <a href="contact.php">Contact</a>
            </li>
          </ul>
          <div class="d-flex justify-content-center">
            <a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5 text-center">Buy tickets</a>
          </div>

        </div>
      </div>
    </nav>
    <div class="row">
      <div class="c-title c-title--white p-4 d-flex flex-row align-items-center justify-content-between flex-wrap">
        <h2 class="mb-3 mb-md-0">All speakers</h2>
      </div>
    </div>
    <div class="row d-flex mb-5 flex-wrap js-speakers">
    </div>
    <div class="row mb-5">
      <div class="c-pagination p-3 d-flex justify-content-between align-items-center js-pagination">

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
  </div>
  <script>


  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>