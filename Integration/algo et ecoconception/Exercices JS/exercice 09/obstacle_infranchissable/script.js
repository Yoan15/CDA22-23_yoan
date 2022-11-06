document.addEventListener("keydown", function(event) 
{
    event = event,
    key = event.key;
    var vitesse = 10;

    switch (key) {
        case "ArrowUp":
            deplacer(0, -vitesse);
            break;
        case "ArrowLeft":
            deplacer(-vitesse, 0);
            break;
        case "ArrowDown":
            deplacer(0, vitesse);
            break;
        case "ArrowRight":
            deplacer(vitesse, 0);
            break;
        case "Home":
            deplacer(-vitesse, -vitesse);
            break;
        case "End":
            deplacer(-vitesse, vitesse);
            break;
        case "PageUp":
            deplacer(vitesse, -vitesse);
            break;
        case "PageDown":
            deplacer(vitesse, vitesse);
            break;
    }
});

function deplacer(x, y) //sans la parseInt le carré passe à travers l'objet
{
    var carre = document.getElementById("carre");
    var obstacle = document.getElementById("obstacle");

    var styleCarre = window.getComputedStyle(carre, null);
    var styleObstacle = window.getComputedStyle(obstacle, null);
    
    var haut = parseInt(styleCarre.top);
    var gauche = parseInt(styleCarre.left);
    var largeur = parseInt(styleCarre.width);
    var hauteur = parseInt(styleCarre.height);
    
    var hautObstacle = parseInt(styleObstacle.top);
    var gaucheObstacle = parseInt(styleObstacle.left);
    var largeurObstacle = parseInt(styleObstacle.width);
    var hauteurObstacle = parseInt(styleObstacle.height);

    

    if (peutSeDeplacer(haut + y, gauche + x, largeur, hauteur, hautObstacle, gaucheObstacle, largeurObstacle, hauteurObstacle)) { // sans le + y et + x dans les parametres de la fonction le carré se bloque quand il tape l'obstacle
        carre.style.top = haut + y + "px";
        carre.style.left = parseInt(gauche) + x + "px";        
    }
}

function peutSeDeplacer(haut, gauche, largeur, hauteur, hautObstacle, gaucheObstacle, largeurObstacle, hauteurObstacle)
{
    if (gauche < gaucheObstacle + largeurObstacle && gauche + largeur > gaucheObstacle && haut < hautObstacle + hauteurObstacle && haut + hauteur > hautObstacle) {
        return false;
    }
    return true;
}