'use strict'

const getSessionId = function () {
  const urlParams = new URLSearchParams(window.location.search);
  const sessionId = urlParams.get('sessionid');

  if (sessionId) {
    handleData(`https://api.laprudence.be/project2/v2/talks/${sessionId}`, sessionDetails);
  } else {
    console.log('De querystring ontbreekt');
  }
};

const sessionDetails = function (response) {
  let fname = "";
  let lname = "";
  let name = "";
  let image = "";

  if (response.spreker.voornaam && response.spreker.voornaam != null) {
    fname = response.spreker.voornaam
  } else {
    fname = "";
  }

  if (response.spreker.familienaam && response.spreker.familienaam != null) {
    lname = response.spreker.familienaam
  } else {
    lname = "";
  }

  if (response.afbeelding && response.afbeelding != null) {
    image = response.afbeelding
  } else {
    image = "img_placeholder.jpg"
  }

  name = fname + " " + lname;
  document.querySelector(".js-session-title").innerHTML = `
    <div>Let's talk about...</div>
    <h1 class="text-pink">${response.titel}</h1>
    <h3><a class="text-dark" href="speaker-detail.php?speakerid=${response.spreker.id}">${name}</a></h3>`
  document.querySelector(".js-session-desc").innerHTML = `
    <h3 class="text-pink mb-4">${response.zaal.omschrijving} - ${response.start}h</h3>
    <p class="mb-4 c-session__desc">${response.omschrijving.eng}</p>
    <div class="c-speaker__like d-flex align-items-center mb-4">
            <a class="c-btn c-btn--outline js-addlike py-2 px-5 w-auto me-3">
              <i class="far fa-heart me-2"></i>Like
            </a>
            <p class="js-likes">${response.love_teller} likes</p>
          </div>
    <div class="c-session__share">
      <p class="mb-2">Share on</p>
      <div class="c-share__buttons d-flex">
        <a href="#" class="c-btn c-btn--facebook py-2 px-5 w-auto me-3">Facebook</a>
        <a href="https://twitter.com/intent/tweet?text=${response.titel}%20on%20Multi-Mania!" target="_blank" class="c-btn c-btn--twitter py-2 px-5 w-auto">Twitter</a>
      </div>
    </div>`;
  document.querySelector(".js-img").src = `img/${image}`

  document.querySelector(".js-addlike").addEventListener("click", function () {
    handleData(`https://api.laprudence.be/project2/v2/talks/${response.id}/love`, location.reload(), "PATCH", `{"extra_love":1}`)
  })
};

document.addEventListener('DOMContentLoaded', function () {
  console.info('DOM geladen');
  getSessionId();
});