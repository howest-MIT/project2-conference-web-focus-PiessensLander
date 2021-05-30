<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>
  <div class="bg" style="height: 45vh"></div>

  <div class="container">
    <div class="row py-4 mb-5">
      <div class="c-nav d-flex justify-content-between align-items-center">
        <img src="img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
        <ul class="c-nav__items d-flex justify-content-center">
          <li class="c-nav__link px-3"><a href="#">Home</a></li>
          <li class="c-nav__link px-3"><a href="#" class="active">Program</a></li>
          <li class="c-nav__link px-3"><a href="#">Partners</a></li>
          <li class="c-nav__link px-3"><a href="#">Contact</a></li>
        </ul>
        <a href="#" class="c-nav__cta c-btn c-btn--outline py-2 px-5">Buy tickets</a>
      </div>
    </div>
    <div class="row">
      <div class="c-title c-title--white p-4 mb-5 d-flex flex-row align-items-center justify-content-between">
        <h2>All speakers (28)</h2>
        <div class="c-title__filter d-flex flex-row">
          <p class="me-3">Filter by:</p>
          <select name="speaker_filter" id="speaker_filter">
            <option value="most_popular">Most popular</option>
            <option value="alphabetical"> Alphabetical (A-Z)</option>
          </select>
        </div>
      </div>

    </div>
    <div class="row d-flex mb-5">
      <div class="col-sm-6 col-md-4 col-xl-3 mt-3 align-items-stretch">
        <div class="c-card p-4">
          <div class="c-card__header mb-3">
            <h3>Aral Balkan</h3>
          </div>
          <div class="c-card__image mb-3">
            <img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Speaker">
          </div>
          <div class="c-card__description mb-3 d-flex">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda temporibus esse ipsam! Veniam ea reprehenderit amet animi magni fugit odio placeat sapiente facilis quam, autem reiciendis itaque culpa aliquam tempora.</^p>
          </div>
          <div class="c-card__footer d-flex flex-wrap justify-content-between">
            <a class="c-btn c-btn--outline py-2 px-5 w-auto">
              Like
            </a>
            <a class="c-btn c-btn--pink py-2 px-5 w-auto">
              More info
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-xl-3 mt-3">
        <div class="c-card p-4">
          <div class="c-card__header mb-3">
            <h3>Aral Balkan</h3>
          </div>
          <div class="c-card__image mb-3">
            <img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Speaker">
          </div>
          <div class="c-card__description mb-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus odio eligendi velit unde eos praesentium, illo harum placeat eaque voluptatem.</p>
          </div>
          <div class="c-card__footer d-flex flex-wrap justify-content-between">
            <a class="c-btn c-btn--outline py-2 px-5 w-auto">
              Like
            </a>
            <a class="c-btn c-btn--pink py-2 px-5 w-auto">
              More info
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-xl-3 mt-3">
        <div class="c-card p-4">
          <div class="c-card__header mb-3">
            <h3>Aral Balkan</h3>
          </div>
          <div class="c-card__image mb-3">
            <img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Speaker">
          </div>
          <div class="c-card__description mb-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laudantium nihil possimus quo consequuntur ipsam molestias iure libero placeat veritatis. Neque autem unde veritatis tempora reprehenderit eveniet nesciunt fuga maxime? Fugit voluptatum, incidunt modi culpa maxime amet numquam assumenda odio sunt illo asperiores facere aut cupiditate, a quos quaerat dolor!</p>
          </div>
          <div class="c-card__footer d-flex flex-wrap justify-content-between">
            <a class="c-btn c-btn--outline py-2 px-5 w-auto">
              Like
            </a>
            <a class="c-btn c-btn--pink py-2 px-5 w-auto">
              More info
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-xl-3 mt-3">
        <div class="c-card p-4">
          <div class="c-card__header mb-3">
            <h3>Aral Balkan</h3>
          </div>
          <div class="c-card__image mb-3">
            <img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Speaker">
          </div>
          <div class="c-card__description mb-3">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi, quod.</p>
          </div>
          <div class="c-card__footer d-flex flex-wrap justify-content-between">
            <a class="c-btn c-btn--outline py-2 px-5 w-auto">
              Like
            </a>
            <a class="c-btn c-btn--pink py-2 px-5 w-auto">
              More info
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



</body>

</html>