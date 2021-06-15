'use strict';

let getSpeakerId = function () {
  //lees https://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
  //lees https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
  const urlParams = new URLSearchParams(window.location.search);
  const speakerId = urlParams.get('speakerid');
  const html_placeholder = document.querySelector('.js-placeholder');

  if (speakerId) {
    handleData(`https://api.laprudence.be/project2/v2/sprekers/${speakerId}`, speakerDetails);
  } else {
    html_placeholder.innerHTML = 'De querystring ontbreekt';
    console.log('De querystring ontbreekt');
  }
};

const speakerDetails = function (response) {
  let fname = "";
  let lname = "";
  let name = "";
  let image = "";

  if (response.voornaam && response.voornaam != null) {
    fname = response.voornaam
  } else {
    fname = "";
  }

  if (response.familienaam && response.familienaam != null) {
    lname = response.familienaam
  } else {
    lname = "";
  }

  if (response.afbeelding && response.afbeelding != null) {
    image = response.afbeelding
  } else {
    image = "user_placeholder.png"
  }

  name = fname + " " + lname;
  document.querySelector(".js-socials").innerHTML = ""
  document.querySelector(".js-sharetwitter").href = `https://twitter.com/intent/tweet?text=${name} will be talking at Mult-Mania!`
  document.querySelector(".js-speakername").innerHTML = name;
  document.querySelector(".js-img").src = `img/${image}`;
  document.querySelector(".js-bio").innerHTML = response.bio["eng"];
  document.querySelector(".js-likes").innerHTML = response.love_teller + " likes";
  document.querySelector(".c-speaker__socials").innerHTML = "";
  if (response.facebook || response.twitter) {
    document.querySelector(".c-speaker__socials").innerHTML += `
    <p class="mb-2">Find <b>${name}</b> on</p>
    <div class="c-socials__buttons d-flex js-socials flex-wrap">
    </div>`;
  }
  if (response.facebook) {
    document.querySelector(".js-socials").innerHTML += `<a href="${response.facebook}" target="_blank" class="c-btn c-btn--facebook py-2 px-5 w-auto me-3 mb-3 mb-lg-0">Facebook</a>`;
  }
  if (response.twitter) {
    document.querySelector(".js-socials").innerHTML += `<a href="${response.twitter}" target="_blank" class="c-btn c-btn--twitter py-2 px-5 w-auto me-3 mb-3 mb-lg-0">Twitter</a>`;
  }

  document.querySelector(".js-addlike").addEventListener("click", function () {
    handleData(`https://api.laprudence.be/project2/v2/sprekers/${response.id}/love`, location.reload(), "PATCH", `{"extra_love":1}`)
  })

  for (let talk of response.talks) {
    console.log(talk.titel);
    document.querySelector(".js-talks").innerHTML = ""
    document.querySelector(".js-talks").innerHTML += `<div class="mb-2"><b>${name}</b>'s talks:</div>`
    document.querySelector(".js-talks").innerHTML += `
    <div class="d-flex">
    <a href="session-detail.php?sessionid=${talk.id}" class="c-schedule__item d-flex flex-column me-4">
        <p class="c-schedule__time">${talk.start}h</p>
        <p class="c-schedule__speaker">${name}</p>
        <p class="c-schedule__topic">${talk.titel}</p>
    </a>
    </div>`
  }
};

document.addEventListener('DOMContentLoaded', function () {
  console.info('DOM geladen');
  getSpeakerId();
});