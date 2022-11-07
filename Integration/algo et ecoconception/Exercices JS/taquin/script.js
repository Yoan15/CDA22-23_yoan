grille = document.getElementById("grid3");
template = document.getElementsByTagName("template")[0];
txt="";
tableauOrigine = [];
for (let i = 0; i < 8; i++) {
    element = template.content.cloneNode(true);
    //console.log(div);
    eltAjoute = grille.appendChild(element);
    div = document.createElement("div");
    div.appendChild(document.createTextNode(i));
    grid3.Childs(-1).appendChild(div);
    tableauOrigine[i] = i + 1;
}

tableauOrigine.push('');
tableauJeu = tableauOrigine;

