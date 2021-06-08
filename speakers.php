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
    <div class="row py-4 mb-5">
      <div class="c-nav d-flex justify-content-between align-items-center">
        <img src="img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
        <ul class="c-nav__items d-flex justify-content-center">
          <li class="c-nav__link px-3"><a href="index.php">Home</a></li>
          <li class="c-nav__link px-3"><a href="schedule.php">Program</a></li>
          <li class="c-nav__link px-3"><a href="speakers.php" class="active">Speakers</a></li>
          <li class="c-nav__link px-3"><a href="partners.php">Partners</a></li>
          <li class="c-nav__link px-3"><a href="contact.php">Contact</a></li>
        </ul>
        <a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5">Buy tickets</a>
      </div>
    </div>
    <div class="row">
      <div class="c-title c-title--white p-4 d-flex flex-row align-items-center justify-content-between">
        <h2>All speakers</h2>
        <div class="c-title__filter d-flex flex-row">
          <p class="me-3">Order by:</p>
          <select name="speaker_filter" id="speaker_filter">
            <option value="most_popular">Most popular</option>
            <option value="alphabetical"> Alphabetical (A-Z)</option>
            <option value="likes"> Most likes</option>
          </select>
        </div>
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
    function truncateText(selector, maxLength) {
      var element = document.querySelector(selector),
        truncated = element.innerText;

      if (truncated.length > maxLength) {
        truncated = truncated.substr(0, maxLength) + '...';
      }
      return truncated;
    }
    document.querySelector('p').innerText = truncateText('p', 20);
  </script>
</body>

</html>