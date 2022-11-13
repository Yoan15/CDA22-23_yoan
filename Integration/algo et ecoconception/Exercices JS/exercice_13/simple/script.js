createCookie("toto", JSON.stringify(Array(1,2,3,4,5)), 1);
var maValeur = readCookie("toto");
alert(maValeur);
//eraseCookie("toto"); //permet d'effacer le cookie

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