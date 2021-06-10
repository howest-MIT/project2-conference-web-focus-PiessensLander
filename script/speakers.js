'use strict'

const getSpeakers = function (response) {
  document.querySelector(".js-speakers").innerHTML = "";
  for (let i of response.data) {
    let fname = "";
    let lname = "";
    let name = "";
    let image = "";

    if (i.voornaam && i.voornaam != null) {
      fname = i.voornaam
    } else {
      fname = "";
    }

    if (i.familienaam && i.familienaam != null) {
      lname = i.familienaam
    } else {
      lname = "";
    }

    if (i.afbeelding && i.afbeelding != null) {
      image = i.afbeelding
    } else {
      image = "user_placeholder.png"
    }

    name = fname + " " + lname;

    document.querySelector(".js-speakers").innerHTML += `<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-5 mb-2">
        <div class="c-card p-4">
          <div class="c-card__header mb-3">
            <h3>${name}</h3>
          </div>
          <div class="c-card__image mb-3">
            <img src="img/${image}" alt="Speaker">
          </div>
          <div class="c-card__description mb-3 d-flex">
            <p>${i.bio.eng}</p>
          </div>
          <div class="c-card__footer d-flex flex-wrap justify-content-between">
            <a class="c-btn c-btn--outline js-like py-2 px-4 px-xl-5 w-auto text-center mb-3 mb-xl-0">
              <i class="far fa-heart me-2"></i>Like
            </a>
            <a href="speaker-detail.php?speakerid=${i.id}" class="c-btn c-btn--pink py-2 px-5 w-auto text-center">
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

  document.querySelector('.js-pagination').innerHTML = `
  <p>Page ${response.current_page} of ${response.last_page}</p>
    <div class="c-pagination__pages d-flex">
  </div>`;

  for (let i = 1; i < response.last_page + 1; i++) {
    document.querySelector(".c-pagination__pages").innerHTML += `
    <div class="c-pagination__page p-2 d-flex justify-content-center align-items-center" data-page="${i}">
      <a href="#" >${i}</a>
    </div>`
  };

  document.querySelector(".c-pagination__pages").innerHTML += `
  <div class="c-pagination__page c-pagination__next p-2 d-flex justify-content-center align-items-center">
    <a href="#"><i class="fas fa-chevron-right"></i></a>
  </div>`;

  let allPages = document.querySelectorAll(".c-pagination__page");

  for (let i of allPages) {
    if (i.dataset.page == 1) {
      i.classList.toggle("c-pagination__firstpage");
    }
    if (i.dataset.page == response.current_page) {
      i.classList.toggle("c-pagination__pages--active");
    }
    i.addEventListener("click", function () {
      handleData(`http://api.laprudence.be/project2/v2/sprekers?page=${i.dataset.page}`, getSpeakers)
    })
  }


  document.querySelector('.c-pagination__firstpage').addEventListener("click", function () {
    handleData(response.first_page_url, getSpeakers);
  });
  document.querySelector('.c-pagination__next').addEventListener("click", function () {
    handleData(response.next_page_url, getSpeakers);
    console.log(response.current_page)
  });


}

document.addEventListener('DOMContentLoaded', function () {
  console.info('DOM geladen');
  handleData("http://api.laprudence.be/project2/v2/sprekers", getSpeakers)
});