listeDesserts = document.querySelectorAll("ul");
bouttonAjoutDessert = document.querySelectorAll("button");

listeDesserts.forEach(element => {
    element.addEventListener("click", retirerDessert)
});

bouttonAjoutDessert.forEach(element => {
    element.addEventListener("click", ajouterDessert)
});

function retirerDessert(event)
{
    evt = event.target;
    this.removeChild(evt);
}

function ajouterDessert(event)
{
    dessert = prompt("Veuillez saisir un dessert à ajouter");
    node = document.createElement("li");
    node.appendChild(document.createTextNode(dessert));
    document.querySelector("ul").appendChild(node);
}