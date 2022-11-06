haut = document.getElementById("haut");
gauche = document.getElementById("gauche");
bas = document.getElementById("bas");
droite = document.getElementById("droite");

haut.addEventListener("click", function() {deplacer(0, -10)});
gauche.addEventListener("click", function() {deplacer(-10, 0)});
bas.addEventListener("click", function() {deplacer(0, 10)});
droite.addEventListener("click", function() {deplacer(10, 0)});

function deplacer(x, y)
{
    var carre = document.getElementById("carre");
    var styleCarre = window.getComputedStyle(carre, null);
    var hautActuel = styleCarre.top;
    var gaucheActuel = styleCarre.left;

    carre.style.top = parseInt(hautActuel) + y + "px";
    carre.style.left = parseInt(gaucheActuel) + x + "px";
}