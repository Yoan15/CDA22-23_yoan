cartes = document.querySelectorAll("[data-image]");

cartes.forEach(element => {
    element.addEventListener("click", retournerCarte);
});

compteur = 0;

nbJoueurs = 0;

//demarrerPartie();
//melangerCartes();

function demarrerPartie()
{
    nbJoueurs = prompt("combien de joueur(s) ?");
}

function melangerCartes()
{
    cartes[1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8];
    console.log(cartes);
}

function afficherCartes()
{
    newImgRecto = document.createElement("img");
    newImgRecto.setAttribute("data-image", )
}

function retournerCarte(event)
{
    carteRetournee = event.target;
    if (carteRetournee.getAttribute("data-image")=="plage") {
        carteRetournee.classList.add("noDisplay");
        carteRetournee.nextElementSibling.classList.remove("noDisplay");
    }
    else
    {
        carteRetournee.classList.add("noDisplay");
        carteRetournee.previousElementSibling.classList.remove("noDisplay");
    }
}

function verifier()
{
    if (carteRetournee.getAttribute("data-image")==carteRetournee.getAttribute("data-image")) {
        compteur++;
        element.removeEventListener("click");
    }
    else
    {
        masquerCartes();
        compteur++;
    }
}

function masquerCartes()
{
    
}