'use strict';

let getSpeakerId = function () {
  //lees https://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
  //lees https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
  const urlParams = new URLSearchParams(window.location.search);
  const speakerId = urlParams.get('speakerid');
  const html_placeholder = document.querySelector('.js-placeholder');

  if (speakerId) {
    handleData(`http://api.laprudence.be/project2/v2/sprekers/${speakerId}`, speakerDetails);
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
  document.querySelector(".js-sharetwitter").href = `https://twitter.com/intent/tweet?text=${response.voornaam}%20${response.familienaam}%20will%20be%20talking%20at%20Multi-Mania!`
  document.querySelector(".js-speakername").innerHTML = name;
  document.querySelector(".js-speakernamesocial").innerHTML = name;
  document.querySelector(".js-img").src = `img/${image}`;
  document.querySelector(".js-bio").innerHTML = response.bio["eng"];
  document.querySelector(".js-likes").innerHTML = response.love_teller + " likes";
  if (response.facebook) {
    document.querySelector(".js-socials").innerHTML += `<a href="${response.facebook}" target="_blank" class="c-btn c-btn--facebook py-2 px-5 w-auto me-3 mb-3 mb-lg-0">Facebook</a>`;
  }
  if (response.twitter) {
    document.querySelector(".js-socials").innerHTML += `<a href="${response.twitter}" target="_blank" class="c-btn c-btn--twitter py-2 px-5 w-auto me-3 mb-3 mb-lg-0">Twitter</a>`;
  }
};

document.addEventListener('DOMContentLoaded', function () {
  console.info('DOM geladen');
  getSpeakerId();
});