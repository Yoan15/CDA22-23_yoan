titre = document.querySelectorAll(".titre");
para = document.querySelectorAll(".paragraphe");

couleurTitre = ["brown", "blue", "green"];
couleurPara = ["purple", "cyan"];

titre.forEach(element => {
    element.addEventListener("click", changerCouleurTitre);
});

function changerCouleurTitre(event)
{
    index = 0;
    // couleurTitre[index];
    // titre = document.querySelectorAll(".titre");
    titre.style.color = 'green';
    // index = (index >= couleurTitre.length) ? 0 : index++;
    console.log(titre);
}

para.forEach(element => {
    element.addEventListener("click", changerCouleurPara);
});

function changerCouleurPara(event)
{
    index = 0;
    // couleurPara[index];
    para.style.backgroundColor = "royalblue";
}