function majVente(){
        //on récupère les éléments qui sont des inputs
        lesInputs = document.getElementsByTagName("input")
        //dans ce cas précis on commence à 1 pour ne pas ajouter un event listener sur le filtre qui se situe en haut de la liste
        for (let i = 1; i < lesInputs.length; i++) {
            //on ajout un écouteur d'évènement dès qu'il y a un changement et on éxecute la fonction 'changement'
            lesInputs[i].addEventListener("change", changement);
        }

        function changement(event) {
            //on met la cible dans une variable
            inputModifie = event.target
            //on récupère l'attribut 'data-idVente' de la cible
            idVente = inputModifie.getAttribute("data-idVente");
            //on récupère la nouvelle valeur affectée à la cible
            qte = inputModifie.value;
            //on instancie une nouvelle requête HTTP
            var requ2 = new XMLHttpRequest();
          //requ2.open(methode,        URL fichier API,        asynchone);
            requ2.open('POST', 'index.php?page=ModifVenteAPI', true);
            requ2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            //on crée les arguments en concaténant l'idVente et la quantité
            args = "idVente=" + idVente + "&qte=" + qte
            //on initialise la requête et on fournit les arguments
            requ2.send(args);
            // requ2.onreadystatechange = function (event) {
            //     if (this.readyState === XMLHttpRequest.DONE) {
            //         if (this.status === 200) {
            //             console.log(this.responseText);
            //             reponse = JSON.parse(this.responseText);
            //         }
            //     }
            //     else
            //         console.log("Erreur" + this.status + this.responseText);
            // }
        }
    }
