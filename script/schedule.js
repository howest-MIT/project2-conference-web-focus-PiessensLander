"use strict";

const getTalks = function (response) {
    for (let i of response) {
        handleData(`https://api.laprudence.be/project2/v2/zalen/${i.id}/talks`, processTalks);
    }
};

const processTalks = function (response) {
    if (response.id == 100) {
        document.querySelector(".js-schedule-aula").innerHTML = `
        <h3 class="text-white">${response.omschrijving}</h3>
        <div class="c-schedule d-flex flex-wrap js-aula-talks">
        </div>`
        for (let i of response.talks) {
            let fname = "";
            let lname = "";
            let name = "";

            if (i.spreker.voornaam && i.spreker.voornaam != null) {
                fname = i.spreker.voornaam
            } else {
                fname = "";
            }

            if (i.spreker.familienaam && i.spreker.familienaam != null) {
                lname = i.spreker.familienaam
            } else {
                lname = "";
            }

            name = fname + " " + lname;
            document.querySelector(".js-aula-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${name}</p>
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
            let fname = "";
            let lname = "";
            let name = "";

            if (i.spreker.voornaam && i.spreker.voornaam != null) {
                fname = i.spreker.voornaam
            } else {
                fname = "";
            }

            if (i.spreker.familienaam && i.spreker.familienaam != null) {
                lname = i.spreker.familienaam
            } else {
                lname = "";
            }

            name = fname + " " + lname;
            document.querySelector(".js-room1-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${name}</p>
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
            let fname = "";
            let lname = "";
            let name = "";

            if (i.spreker.voornaam && i.spreker.voornaam != null) {
                fname = i.spreker.voornaam
            } else {
                fname = "";
            }

            if (i.spreker.familienaam && i.spreker.familienaam != null) {
                lname = i.spreker.familienaam
            } else {
                lname = "";
            }

            name = fname + " " + lname;
            document.querySelector(".js-room2-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${name}</p>
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
            let fname = "";
            let lname = "";
            let name = "";

            if (i.spreker.voornaam && i.spreker.voornaam != null) {
                fname = i.spreker.voornaam
            } else {
                fname = "";
            }

            if (i.spreker.familienaam && i.spreker.familienaam != null) {
                lname = i.spreker.familienaam
            } else {
                lname = "";
            }

            name = fname + " " + lname;
            document.querySelector(".js-room3-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${name}</p>
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
            let fname = "";
            let lname = "";
            let name = "";

            if (i.spreker.voornaam && i.spreker.voornaam != null) {
                fname = i.spreker.voornaam
            } else {
                fname = "";
            }

            if (i.spreker.familienaam && i.spreker.familienaam != null) {
                lname = i.spreker.familienaam
            } else {
                lname = "";
            }

            name = fname + " " + lname;
            document.querySelector(".js-room4-talks").innerHTML += `
            <a href="session-detail.php?sessionid=${i.id}" class="c-schedule__item d-flex flex-column me-4 mt-4">
                <p class="c-schedule__time">${i.start}h</p>
                <p class="c-schedule__speaker">${name}</p>
                <p class="c-schedule__topic">${i.titel}</p>
            </a>`
        };
    }
};

document.addEventListener('DOMContentLoaded', function () {
    console.info('DOM geladen');
    handleData("https://api.laprudence.be/project2/v2/zalen", getTalks);
});