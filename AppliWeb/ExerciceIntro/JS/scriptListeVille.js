var getlocation = document.location.href;
var url = new URL(getlocation);
var page = url.searchParams.get('page');

if (page == 'formVille') {
    var request = new XMLHttpRequest();
    //on met à 'true' pour l'asynchrone
    request.open('POST', 'index.php?page=ListePersonneApi', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    idVille = document.getElementsByName('idVille')[0].value
    args = "idVille=" + idVille;
    request.send(args)

    request.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                console.log(this.responseText);
                reponse = JSON.parse(this.responseText);
                reponse.forEach(element => {
                    template = document.getElementsById("personne");
                    cible = document.getElementById("pers");
                    contenu = template.content.cloneNode(true);
                    cible.appendChild(contenu);
                    pers = document.querySelector(".pers")
                    pers.innerHTML = element.nom + element.prenom
                    pers.classList.remove("pers")
                });
            }
        }
    }
}