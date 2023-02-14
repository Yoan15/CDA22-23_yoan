var requ2 = new XMLHttpRequest();
//requête à 'true' pour dire qu'elle est asynchone
requ2.open('POST', 'index.php?page=ListeClientsAPI', true);
requ2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
requ2.send();
//la fonction sera executée à chaque fois que la propriété readyState change
requ2.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log(this.responseText);
            reponse = JSON.parse(this.responseText);
            // on aplatit le tableau
            reponseTab = {}
            reponse.forEach(elt => {
                //pour chaque 'element' on ajoute l'id du client et sa ville dans 'reponseTab'
                reponseTab[elt['IdClient']] = elt['VilleClient'];
            });
            console.log(reponseTab);
            // On cherche les lignes à remplir
            lignes = document.querySelectorAll(".idClient");
            lignes.forEach(ligne => {
                //on recupere l'id de la ligne
                id = ligne.innerHTML
                // on cherche l'élément dans lequel ecrire
                cible = ligne.nextElementSibling.nextElementSibling
                // on affecte la ville
                cible.innerHTML = reponseTab[id];
            });
        }
        else
            //console.log du status et de la réponse envoyée
            console.log("Erreur" + this.status + this.responseText);
    }
}