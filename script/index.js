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

    document.querySelector(".js-cards").innerHTML += `
      
      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-5 mb-2">
        <div class="c-card p-4 d-flex flex-column">
          <div class="c-card__header mb-3">
            <h3>${name}</h3>
          </div>
          <div class="c-card__image mb-3">
            <img src="img/${image}" alt="Speaker">
          </div>
          <div class="c-card__description mb-3 flex-grow-1">
            <p class="js-desciption">${truncateText(response.data[i].bio.eng,200)}</p>
          </div>
          <div class="c-card__footer d-flex flex-wrap justify-content-between gap-2">
            <a class="c-btn c-btn--outline js-addlike py-2 px-4 text-center w-auto mb-3 flex-grow-1" data-id="${response.data[i].id}">
              <i class="far fa-heart me-2"></i>Like
            </a>
            <a href="speaker-detail.php?speakerid=${response.data[i].id}" class="c-btn c-btn--pink py-2 mb-3 w-auto px-4 text-center flex-grow-1">
              More info
            </a>
          </div>
        </div>
      </div>`;

    //Add like
    let arrLikeBtn = document.querySelectorAll(".js-addlike");
    for (let btn of arrLikeBtn) {
      btn.addEventListener("click", function () {
        handleData(`https://api.laprudence.be/project2/v2/sprekers/${btn.dataset.id}/love`, location.reload(), "PATCH", `{"extra_love":1}`)
      })
    };
  };
}

function truncateText(zin, maxLength) {
  let truncated = zin;
  if (zin.length > maxLength) {
    truncated = zin.substr(0, maxLength) + '...';
  }
  return truncated;
}

document.addEventListener('DOMContentLoaded', function () {
  console.info('DOM geladen');
  handleData("https://api.laprudence.be/project2/v2/sprekers", getSpeakers)
});