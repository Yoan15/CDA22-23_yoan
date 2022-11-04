// grille = document.getElementById("grille");
// template = document.getElementsByTagName("template")[0];
// for (let i = 0; i < 10; i++) {
//     const element = template.content.cloneNode(true);
//     grille.appendChild(element);
// }

grille = document.getElementById("grille");
template = document.getElementsByTagName("template")[0];
for (let i = 0; i < 1; i++) {
    const element = template.content.cloneNode(true);
    grille.appendChild(element);
}

quantites = document.querySelectorAll(".qte");
prixUnitaires = document.querySelectorAll(".pu");
prix = document.querySelectorAll(".prix");

quantites.forEach(element=>{
    element.addEventListener("input", calcul);
});
prixUnitaires.forEach(element=>{
    element.addEventListener("input", calcul);
});

function calcul(event)
{
    input = event.target;
    if (input.classList.contains("qte")) 
    {
        index = Array.from(quantites).indexOf(input);  
    } 
    else
    {
        index = Array.from(prixUnitaires).indexOf(input);
    }

    if (quantites[index].value!="" && prixUnitaires[index].value!="") 
    {
        prix[index].value = quantites[index].value * prixUnitaires[index].value;    
    }
    calculTotal();
}

function calculTotal(event)
{
    somme=0;
    prix.forEach(element=>{
        somme += element.value*1
    });
    document.getElementsByClassName("total")[0].value = somme;
}