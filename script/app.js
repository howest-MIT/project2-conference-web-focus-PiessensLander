"use strict";
/*
    [GET] - Talks per hall: http://api.laprudence.be/project2/v2/zalen/{id}/talks
    [GET] - All speakers (pagination): http://api.laprudence.be/project2/v2/sprekers
    [GET] - Speaker detail: http://api.laprudence.be/project2/v2/sprekers/{id}
    [GET] - All talks by speaker: http://api.laprudence.be/project2/v2/sprekers/{id}/talks
    [PATCH] - Speaker likes : http://api.laprudence.be/project2/v2/sprekers/{id}/love
    [GET] - Talk detail: http://api.laprudence.be/project2/v2/talks/{id}
*/

const getSpeakerId = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const speakerId = urlParams.get('speakerid');

    if (speakerId) {
        handleData(`http://api.laprudence.be/project2/v2/sprekers/${speakerId}`, speakerDetails);
    } else {
        console.log('De querystring ontbreekt');
    }
};

const speakerDetails = function (response) {
    document.querySelector(".js-socials").innerHTML = ""
    document.querySelector(".js-sharetwitter").href = `https://twitter.com/intent/tweet?text=${response.voornaam}%20${response.familienaam}%20will%20be%20talking%20at%20Multi-Mania!`
    document.querySelector(".js-speakername").innerHTML = response.voornaam + " " + response.familienaam;
    document.querySelector(".js-speakernamesocial").innerHTML = response.voornaam + " " + response.familienaam;
    document.querySelector(".js-bio").innerHTML = response.bio["eng"];
    document.querySelector(".js-likes").innerHTML = response.love_teller + " likes";
    if (response.facebook) {
        document.querySelector(".js-socials").innerHTML += `<a href="${response.facebook}" target="_blank" class="c-btn c-btn--facebook py-2 px-5 w-auto me-3">Facebook</a>`;
    }
    if (response.twitter) {
        document.querySelector(".js-socials").innerHTML += `<a href="${response.twitter}" target="_blank" class="c-btn c-btn--twitter py-2 px-5 w-auto me-3">Twitter</a>`;
    }
};

const getTalks = function (response) {
    for (let i of response) {
        handleData(`http://api.laprudence.be/project2/v2/zalen/${i.id}/talks`, processTalks);
    }
}

const processTalks = function (response) {
    if (response.id == 100) {
        document.querySelector(".js-schedule-aula").innerHTML = `
        <h3 class="text-white">${response.omschrijving}</h3>
        <div class="c-schedule d-flex flex-wrap js-aula-talks">
        </div>`
        for (let i of response.talks) {
            document.querySelector(".js-aula-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${i.spreker.voornaam} ${i.spreker.familienaam}</p>
                <p class="c-schedule__topic">${i.titel}</p>
            </a>`
        };
    }
    if (response.id == 101) {
        document.querySelector(".js-schedule-room1").innerHTML = `
        <h3 class="text-pink">${response.omschrijving}</h3>
        <div class="c-schedule d-flex flex-wrap js-room1-talks">
        </div>`
        for (let i of response.talks) {
            document.querySelector(".js-room1-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${i.spreker.voornaam} ${i.spreker.familienaam}</p>
                <p class="c-schedule__topic">${i.titel}</p>
            </a>`
        };
    }
    if (response.id == 102) {
        document.querySelector(".js-schedule-room2").innerHTML = `
        <h3 class="text-pink">${response.omschrijving}</h3>
        <div class="c-schedule d-flex flex-wrap js-room2-talks">
        </div>`
        for (let i of response.talks) {
            document.querySelector(".js-room2-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${i.spreker.voornaam} ${i.spreker.familienaam}</p>
                <p class="c-schedule__topic">${i.titel}</p>
            </a>`
        };
    }
    if (response.id == 103) {
        document.querySelector(".js-schedule-room3").innerHTML = `
        <h3 class="text-pink">${response.omschrijving}</h3>
        <div class="c-schedule d-flex flex-wrap js-room3-talks">
        </div>`
        for (let i of response.talks) {
            document.querySelector(".js-room3-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${i.spreker.voornaam} ${i.spreker.familienaam}</p>
                <p class="c-schedule__topic">${i.titel}</p>
            </a>`
        };
    }
    if (response.id == 104) {
        document.querySelector(".js-schedule-room4").innerHTML = `
        <h3 class="text-pink">${response.omschrijving}</h3>
        <div class="c-schedule d-flex flex-wrap js-room4-talks">
        </div>`
        for (let i of response.talks) {
            document.querySelector(".js-room4-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${i.spreker.voornaam} ${i.spreker.familienaam}</p>
                <p class="c-schedule__topic">${i.titel}</p>
            </a>`
        };
    }
}

const getSessionId = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const sessionId = urlParams.get('sessionid');

    if (sessionId) {
        handleData(`http://api.laprudence.be/project2/v2/talks/${sessionId}`, sessionDetails);
    } else {
        console.log('De querystring ontbreekt');
    }
};

const sessionDetails = function (response) {
    console.log(response);
    document.querySelector(".js-session-title").innerHTML = `
    <div>Let's talk about...</div>
    <h1 class="text-pink">${response.titel}</h1>
    <h3>${response.spreker.voornaam} ${response.spreker.familienaam}</h3>`
    document.querySelector(".js-session-desc").innerHTML = `
    <h3 class="text-pink mb-4">${response.zaal.omschrijving} - ${response.start}h</h3>
    <p class="mb-4 c-session__desc">${response.omschrijving.eng}</p>
    <div class="c-session__share">
      <p class="mb-2">Share on</p>
      <div class="c-share__buttons d-flex">
        <a href="#" class="c-btn c-btn--facebook py-2 px-5 w-auto me-3">Facebook</a>
        <a href="https://twitter.com/intent/tweet?text=${response.titel}%20on%20Multi-Mania!" target="_blank" class="c-btn c-btn--twitter py-2 px-5 w-auto">Twitter</a>
      </div>
    </div>`
};

const getSpeakers = function (response) {
    for (let i of response.data) {
        console.log(i);
        document.querySelector(".js-speakers").innerHTML += `<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-5 mb-2">
        <div class="c-card p-4">
          <div class="c-card__header mb-3">
            <h3>${i.voornaam} ${i.familienaam}</h3>
          </div>
          <div class="c-card__image mb-3">
            <img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Speaker">
          </div>
          <div class="c-card__description mb-3 d-flex">
            <p>${i.bio.eng}</p>
          </div>
          <div class="c-card__footer d-flex flex-wrap justify-content-between">
            <a class="c-btn c-btn--outline py-2 px-4 w-auto">
              <i class="far fa-heart me-2"></i>Like
            </a>
            <a href="speaker-detail.php?speakerid=${i.id}" class="c-btn c-btn--pink py-2 px-5 w-auto">
              More info
            </a>
          </div>
        </div>
      </div>`
    }
}

document.addEventListener('DOMContentLoaded', function () {
    console.info('DOM geladen');
    getSpeakerId();
    getSessionId();
    handleData("http://api.laprudence.be/project2/v2/zalen", getTalks);
    handleData("http://api.laprudence.be/project2/v2/sprekers", getSpeakers)
});