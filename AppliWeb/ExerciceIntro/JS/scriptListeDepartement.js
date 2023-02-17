var getlocation = document.location.href;
var url = new URL(getlocation);
var page = url.searchParams.get('page');

if (page == 'formDepartement') {
    var request = new XMLHttpRequest();
    //on met à 'true' pour l'asynchrone
    request.open('POST', 'index.php?page=ListeVillesApi', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    idDepartement = document.getElementsByName('idDepartement')[0].value
    args = "idDepartement=" + idDepartement;
    request.send(args)

    request.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            //si le status est le code 200
            if (this.status === 200) {
                //console.log(this.responseText);
                //on scinde les données reçues en réponse
                reponse = JSON.parse(this.responseText);
                console.log(reponse);
                //pour chaque élément on insert les noms et prénoms des personnes habitants dans la ville sélectionnée 
                //dans une "div" à partir d'un "template" puis on retire la classe du template
                reponse.forEach(element => {
                    template = document.getElementById("ville");
                    cible = document.getElementById("villes");
                    //on clone le contenu du template
                    contenu = template.content.cloneNode(true);
                    //on ajoute le contenu du template dans la div cible
                    cible.appendChild(contenu);
                    //on sélectionne la class du template
                    vil = document.querySelector(".vil")
                    vil.innerHTML = element.nomVille
                    vil.classList.remove("vil")
                });
            }
        }
    }
}