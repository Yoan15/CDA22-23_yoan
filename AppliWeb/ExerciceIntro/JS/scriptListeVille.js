var getlocation = document.location.href;
var url = new URL(getlocation);
var page = url.searchParams.get('page');
var mode = url.searchParams.get('mode');
console.log(mode);

if (page == 'formVille' && mode == 'voir') {
    var request = new XMLHttpRequest();
    //on met à 'true' pour l'asynchrone
    request.open('POST', 'index.php?page=ListePersonneApi', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    idVille = document.getElementsByName('idVille')[0].value
    args = "idVille=" + idVille;
    request.send(args)

    request.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            //si le status est le code 200
            if (this.status === 200) {
                console.log(this.responseText);
                //on scinde les données reçues en réponse
                reponse = JSON.parse(this.responseText);
                //pour chaque élément on insert les noms et prénoms des personnes habitants dans la ville sélectionnée 
                //dans une "div" à partir d'un "template" puis on retire la classe du template
                reponse.forEach(element => {
                    template = document.getElementById("perso");
                    cible = document.getElementById("personne");
                    //on clone le contenu du template
                    contenu = template.content.cloneNode(true);
                    //on ajoute le contenu du template dans la div cible
                    cible.appendChild(contenu);
                    //on sélectionne la class du template
                    pers = document.querySelector(".pers")
                    pers.innerHTML = element.nom + " " + element.prenom
                    pers.classList.remove("pers")
                });
            }
        }
    }
}