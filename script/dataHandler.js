const handleData = function (url, callback, method = "GET", body = null, authToken = null) {
    fetch(url, {
            method: method,
            body: body,
            headers: {
                "content-type": "application/json",
                Authorization: "Bearer " + authToken,
            },
        })
        .then(function (response) {
            if (!response.ok) {
                throw Error(`Probleem bij de fetch(). Status Code: ${response.status}`);
            } else {
                console.info("Er is een response teruggekomen van de server");
                //indien een geldige, lege response.body teruggestuurd wordt, bypassen we het omzetten van deze body.
                if (response.headers.get("content-length") == 0) {
                    callback();
                } else {
                    return response.json();
                }
            }
        })
        .then(function (jsonObject) {
            console.info("json object is aangemaakt");
            console.info("verwerken data");
            callback(jsonObject);
        });

};