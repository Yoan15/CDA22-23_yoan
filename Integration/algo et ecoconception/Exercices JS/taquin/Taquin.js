/* on mémorise l'emplacement de la case vide */
numLi = 3;
numCol = 3;

nbclicks = 0;

/* Fonction qui échange la case (lig,col) avec la case vide */
function deplace(e) {
    var boutonClique = e.target;
    var monID = boutonClique.id;

    var lig = monID.substring(4, 5);
    // console.log(lig, numLi)
    
    var col = monID.substring(5, 6);
    // console.log(col, numCol)
    var idVide = "case" + numLi + numCol
    var boutonVide = document.getElementById(idVide);
    //on regarde si la case cliquée est éloignée de 1 par rapport à la case vide (on exclu la diagonnale)
    // Math.abs donne la valeur absolue, c'est à dire la valeur sans signe
    // la somme des deplacements doit etre egale à 1
    if (Math.abs(numLi - lig) + Math.abs(numCol - col) == 1) {
        /* mise à jour du nombre de clics */
        nbclicks = nbclicks + 1;
        /* on récupère l'élément compteur */
        var noeud_compteur = document.getElementById('compteur');
        /* mettre à jour la valeur */
        noeud_compteur.innerHTML = nbclicks;

        /*On change les textes*/
        boutonVide.innerHTML = boutonClique.innerHTML;
        boutonClique.innerHTML = "";
        /* On récupère l'id de data-idet on le supprime de la case cliquée */
        var idCase = boutonClique.getAttribute('data-id');
        boutonClique.setAttribute('data-id', '');

        /* on échange les classes des deux boutons */
        boutonClique.setAttribute('class', 'caseVide');
        boutonVide.setAttribute('class', 'case');

        /* on échange les images */
        boutonVide.setAttribute('data-id', idCase);
        boutonClique.style.backgroundImage = '';
        boutonVide.style.backgroundImage = 'url(' + idCase + '.jpg)';

        /* on enlève le "focus" sur le bouton cliqué */
        boutonClique.blur();
        /* on mémorise l'emplacement de la case vide */
        numLi = lig;
        numCol = col;
    }
}

//initialise le jeu
function initGame() {
    const cases = document.getElementsByClassName("case");
    //Tableau dans le bon ordre
    //Init le tableau vide
    tabRef=[];
    //numLi les cases du jeu de Ref
    for(i=1;i<(numLi*numCol);i++){
        tabRef[i-1] = i;
        //console.log(tabRef)
    }
        
    //Melanger les cartes depuis cible (class case)
    //const cases = document.getElementsByClassName("case");
    for(i=0;i<(cases.length);i++){
        //cases[i].innerText = i+1;
        
        //retourne le plus petit entier supérieur par rapport au nombre entre () soit le nombre de cases du tabRef-1 aleatoirement
        //alea générer représente l'index de tabRef
        alea = Math.ceil(Math.random() * tabRef.length - 1);
        //retourne le chiffre aléatoire de la case
        //cases[i].innerHTML = tabRef[alea]; // Texte
        cases[i].style.backgroundImage = "url(" + tabRef[alea] + ".jpg)";
        cases[i].style.backgroundSize = "contain";
        cases[i].setAttribute('data-id', tabRef[alea]);

        // On supprime le chiffre aléatoire du tableau avant de repasser dessus pour chaque case
        tabRef.splice(alea, 1);
        // On ajout un événement clic sur la case qui appele la fonction 'deplace'
        cases[i].addEventListener("click", deplace);
    }
    // On ajoute la case vide avec son événement
    document.getElementsByClassName("caseVide")[0].addEventListener("click", deplace);
}
initGame();