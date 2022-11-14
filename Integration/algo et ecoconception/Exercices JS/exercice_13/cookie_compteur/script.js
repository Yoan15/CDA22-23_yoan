separateur = QuelNavigateur() == "firefox" ? "," : ";"
var text = document.querySelector("p");
var boutton = document.querySelector("button");
visites = readCookie("compteur");

window.addEventListener("load", function () {
    increment(visites);
});

boutton.addEventListener("click", function () {
    init()
});

function increment(visites) {
    visites = visites++;
    console.log(visites);
    text.innerHTML += visites + " fois";
    createCookie("compteur", visites, 5);
}

function init() {
    eraseCookie("compteur");
}

function createCookie(name, value, days) {
    //creation du cookie
    if (days) {
        // si le nombre de jours est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = 'expires=' + date.toGMTString();
    } else {
        var expires = '';
    }
    //le cookie doit contenir clé = valeur; expires=temps; path=nomDomaine
    document.cookie = name + '=' + value + ',' + expires + ', path=/';
}

function readCookie(name) {
    //on récupère tous les cookies du site en une fois séparé par ';'
    //on range chaque cookie dans un tab
    var listeCookies = document.cookie.split(',');
    for (let i = 0; i < listeCookies.length; i++) {
        //pour chaque cookie, on sépare en tableau la clé et la valeur
        var cookie = listeCookies[i].split('=');
        //si la clé correspond au cookie recherché, on renvoit la valeur
        if (cookie[0] == name) {
            return cookie[1];
        } else {
            return null;
        }
    }
}

function eraseCookie(name) {
    //pour supprimer un cookie, on le périme
    createCookie(name, '', -1);
}

function QuelNavigateur() {
    var ua = navigator.userAgent;
    var x = ua.indexOf('MSIE'); //Internet Explorer
    var navig = 'MSIE';
    if (x == -1) {
        x = ua.indexOf('Firefox'); //Firefox
        navig = 'Firefox';
        if (x == -1) {
            x = ua.indexOf('OPR'); //Opéra
            navig = 'Opéra';
            if (x == -1) {
                x = ua.indexOf('EDG'); //Edge
                navig = 'Edge';
                if (x == -1) {
                    x = ua.indexOf('Chrome'); //Chrome
                    navig = 'Chrome';
                    if (x == -1) {
                        x = ua.indexOf('Safari'); //Safari
                        navig = 'Safari';
                    }
                }
            }
        }
        return navig;
    }
}