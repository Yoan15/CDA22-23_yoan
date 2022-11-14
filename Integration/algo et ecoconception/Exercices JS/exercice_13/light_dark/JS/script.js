separateur = QuelNavigateur() == "firefox" ? "," : ";"
var range = document.getElementsByTagName("input")[0]; //on récupère le range
range.addEventListener("change", function () {
    switchLightDark(range.value); //on récupère la valeur du range
});
couleur = readCookie("couleur"); //on lit le cookie "couleur"
switchLightDark(couleur); //on passe la couleur à la fonction

function switchLightDark(valeur) {
    if (valeur == 2) { //si la valeur est égale à 2
        newClass = "dark"; //la class est "dark"
        range.value = 2; // on met la valeur du range à 2
    } else { //sinon
        newClass = "light"; //la class est "light"
        range.value = 1; // on met la valeur du range à 1
    }

    paragraphes = document.getElementsByClassName("paragraphe");
    for (let i = 0; i < paragraphes.length; i++) {
        paragraphes[i].setAttribute("class", "paragraphe " + newClass); //ne pas oublier l'espace à "paragraphe " avant la variable "newClass"
    }
    document.body.setAttribute("class", newClass); //on passe "light" ou "dark" en attribut au body
    createCookie("couleur", range.value, 5);
}

function createCookie(name, value, days) {
    //creation du cookie
    if (days) {
        // si le nombre de jours est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + date.toGMTString();
    } else {
        var expires = "";
    }
    //le cookie doit contenir clé = valeur; expires=temps; path=nomDomaine
    document.cookie = name + "=" + value + "," + expires + ", path=/";
}

function readCookie(name) {
    //on récupère tous les cookies du site en une fois séparé par ";"
    //on range chaque cookie dans un tab
    var listeCookies = document.cookie.split(',');
    for (let i = 0; i < listeCookies.length; i++) {
        //pour chaque cookie, on sépare en tableau la clé et la valeur
        var cookie = listeCookies[i].split("=");
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
    createCookie(name, "", -1);
}

function QuelNavigateur() {
    var ua = navigator.userAgent;
    var x = ua.indexOf("MSIE"); //Internet Explorer
    var navig = "MSIE";
    if (x == -1) {
        x = ua.indexOf("Firefox"); //Firefox
        navig = "Firefox";
        if (x == -1) {
            x = ua.indexOf("OPR"); //Opéra
            navig = "Opéra";
            if (x == -1) {
                x = ua.indexOf("EDG"); //Edge
                navig = "Edge";
                if (x == -1) {
                    x = ua.indexOf("Chrome"); //Chrome
                    navig = "Chrome";
                    if (x == -1) {
                        x = ua.indexOf("Safari"); //Safari
                        navig = "Safari";
                    }
                }
            }
        }
        return navig;
    }
}