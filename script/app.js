"use strict";
/*
    [GET] - Talks per hall: http://api.laprudence.be/project2/v2/zalen/{id}/talks
    [GET] - All speakers (pagination): http://api.laprudence.be/project2/v2/sprekers
    [GET] - Speaker detail: http://api.laprudence.be/project2/v2/sprekers/{id}
    [GET] - All talks by speaker: http://api.laprudence.be/project2/v2/sprekers/{id}/talks
    [PATCH] - Speaker likes : http://api.laprudence.be/project2/v2/sprekers/{id}/love
    [GET] - Talk detail: http://api.laprudence.be/project2/v2/talks/{id}
*/

let getSpeakerId = function () {
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
    console.log(response)
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

document.addEventListener('DOMContentLoaded', function () {
    console.info('DOM geladen');
    getSpeakerId();
    handleData("http://api.laprudence.be/project2/v2/zalen", getTalks);
});