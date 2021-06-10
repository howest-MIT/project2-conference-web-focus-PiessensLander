'use strict'

const perPage = 3;

const getSpeakers = function (response) {
    document.querySelector(".js-cards").innerHTML = "";
    for (let i = 0; i < perPage; i++) {
        let fname = "";
        let lname = "";
        let name = "";
        let image = "";

        if (response.data[i].voornaam && response.data[i].voornaam != null) {
            fname = response.data[i].voornaam
        } else {
            fname = "";
        }

        if (response.data[i].familienaam && response.data[i].familienaam != null) {
            lname = response.data[i].familienaam
        } else {
            lname = "";
        }

        if (response.data[i].afbeelding && response.data[i].afbeelding != null) {
            image = response.data[i].afbeelding
        } else {
            image = "user_placeholder.png"
        }

        name = fname + " " + lname;

        document.querySelector(".js-cards").innerHTML += `<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-5 mb-2">
        <div class="c-card p-4">
          <div class="c-card__header mb-3">
            <h3>${name}</h3>
          </div>
          <div class="c-card__image mb-3">
            <img src="img/${image}" alt="Speaker">
          </div>
          <div class="c-card__description mb-3 d-flex">
            <p>${response.data[i].bio.eng}</p>
          </div>
          <div class="c-card__footer d-flex flex-wrap justify-content-between">
            <a class="c-btn c-btn--outline js-like py-2 px-4 px-xl-5 w-lg-auto text-center mb-3 mb-lg-0">
              <i class="far fa-heart me-2"></i>Like
            </a>
            <a href="speaker-detail.php?speakerid=${i.id}" class="c-btn c-btn--pink py-2 px-5 w-lg-auto text-center">
              More info
            </a>
          </div>
        </div>
      </div>`;

        // Add like
        // document.querySelectorAll(".js-like").addEventListener("click", function () {
        //   handleData(`http://api.laprudence.be/project2/v2/sprekers/${response.id}/love`,);
        // })
    };



}

document.addEventListener('DOMContentLoaded', function () {
    console.info('DOM geladen');
    handleData("http://api.laprudence.be/project2/v2/sprekers", getSpeakers)
});