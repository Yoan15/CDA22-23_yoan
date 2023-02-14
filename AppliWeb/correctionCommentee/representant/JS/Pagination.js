// Programme qui permet la gestion de la pagination dans une liste présentée sous forme de grid
nbEltParPage = document.querySelector(".NbEltParPage").innerHTML;
pagination = document.querySelector(".pagination");
grid = document.querySelectorAll(".grid-contenu")[0];
divNbEnreg = document.getElementById("nbEnregs");
var requ = new XMLHttpRequest();
var nbEnreg = 0
pageActive = 1
var arrayConditions = {};
filtreEnCours = false;
AfficherPage(1, true);

function GestionBouton(index) {
    pagination.innerHTML = ""
    nbPages = Math.trunc(nbEnreg / nbEltParPage) + 1
    if (nbPages > 50) {
        nbEltParPage = 200
        nbPages = Math.trunc(nbEnreg / nbEltParPage) + 1
    }
    divNbEnreg.innerHTML = nbEnreg;
    dernierBouton = nbPages.toString();
    AddBouton("<");
    for (let i = 0; i < nbPages; i++) {
        AddBouton(i + 1);
    }
    AddBouton(">");
    ActiveBouton("<", false);
    FocusBouton(index, true);
    if (nbPages == 1) ActiveBouton(">", false);
}
function AddBouton(index) {
    btn = document.createElement("Button");
    btn.name = index;
    btn.innerHTML = index;
    btn.addEventListener("click", ClickBouton);
    pagination.appendChild(btn);
}
function ActiveBouton(index, flag) {
    document.getElementsByName(index)[0].disabled = !flag;
}
function FocusBouton(index, flag) {
    if (flag) {
        document.getElementsByName(index)[0].classList.add("bgc5");
        pageActive = index;
    }
    else
        document.getElementsByName(index)[0].classList.remove("bgc5");
}
function ClickBouton(event) {
    boutonClique = event.target;
    switch (boutonClique.name) {
        case "<":
            index = pageActive * 1 - 1;
            break;
        case ">":
            index = pageActive * 1 + 1;
            break;
        case dernierBouton:
            index = nbPages;
            break;
        default:
            index = boutonClique.name;
            break;
    }
    AfficherPage(index, false);
    ActiveBouton("<", true);
    ActiveBouton(">", true);
    if (index == 1) ActiveBouton("<", false);
    if (index == nbPages) ActiveBouton(">", false);
}
function AfficherPage(index, filtre) {
    // FocusBouton(pageActive, false);
    // FocusBouton(index, true);
    pageActive = index;
    grid.innerHTML = "";

    var requ2 = new XMLHttpRequest();
    requ2.open('POST', 'index.php?page=ListeAPI', true);
    requ2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    // if (filtreEnCours) 
    // {
    //     offset =null;// un filtre annule l'offset et la pageActive
    //     pageActive=1;
    // }
    // else 
    offset = (pageActive - 1) * nbEltParPage + "," + nbEltParPage;
    args = ("table=" + classe + "&conditions=" + JSON.stringify(arrayConditions) + "&orderBy=" + CreerStringTris() + "&limit=" + offset + "&selection=" + JSON.stringify(selection));
    console.log(args);
    requ2.send(args);
    filtreEnCours = false;
    requ2.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                console.log(this.responseText);
                reponse = JSON.parse(this.responseText);
                contenu = "";
                nbEnreg = reponse.compte;
                liste = reponse.liste
                // Condition en fonction des pages
                /*exemple */
                if (page == "ListeProduits") {
                    temp = document.getElementsByTagName("template")[0];
                    liste.forEach(element => {
                        contenu = temp.content.cloneNode(true);
                        grid.appendChild(contenu);
                        grid.innerHTML = grid.innerHTML.replaceAll("IdProduit", element.IdProduit);
                        grid.innerHTML = grid.innerHTML.replaceAll("NomProduit", element.NomProduit);
                        grid.innerHTML = grid.innerHTML.replaceAll("CouleurProduit", element.CouleurProduit);
                        grid.innerHTML = grid.innerHTML.replaceAll("PoidsProduit", element.PoidsProduit);
                    });
                } 
                else if (page == "ListeVentes") {
                    temp = document.getElementsByTagName("template")[0];
                    liste.forEach(element => {
                        contenu = temp.content.cloneNode(true);
                        grid.appendChild(contenu);
                        grid.innerHTML = grid.innerHTML.replaceAll("IdVente", element.IdVente);
                        grid.innerHTML = grid.innerHTML.replaceAll("IdRepres", element.IdRepres);
                        grid.innerHTML = grid.innerHTML.replaceAll("IdClient", element.IdClient);
                        grid.innerHTML = grid.innerHTML.replaceAll("IdProduit", element.IdProduit);
                        grid.innerHTML = grid.innerHTML.replaceAll("Quantite", element.Quantite);
                    });
                    majVente();
                } 
                

                // grid.innerHTML = contenu;
                if (filtre) {
                    pageActive = 1
                    GestionBouton(1);
                }
                else {
                    pageActive = index
                    GestionBouton(index);
                }
            } else {
                console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
            }
        }
    };
}