titre = document.querySelectorAll("h1, h2, h3");
para = document.querySelectorAll("p");

couleursTitres = ["titleA", "titleB", "titleC"];
couleursPara = ["purple", "cyan"];

iteration = 1;

titre.forEach(element => {
    element.addEventListener("click", changerCouleurTitre);
});

para.forEach(element => {
    element.addEventListener("click", changerCouleurPara);
});

function changerCouleurTitre(event)
{
    titre = event.target;
    allTitres = document.querySelectorAll(titre.localName);
    allTitres.forEach(title =>{
        for (let index = 0; index < couleursTitres.length; index++) {
            const element = couleursTitres[index];
            title.classList.toggle(element, iteration % couleursTitres.length == index);
        }
    })
    iteration++;
}

function changerCouleurPara(event)
{
    paragraphe = event.target;
    paragraphe.classList.toggle("para2");
}