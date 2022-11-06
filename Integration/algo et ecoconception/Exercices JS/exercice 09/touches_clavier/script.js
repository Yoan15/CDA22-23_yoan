document.addEventListener("keydown", function(event) 
{
    event = event,
    key = event.key;
    console.log(key);

    switch (key) {
        case "ArrowUp":
            deplacer(0, -10);
            break;
        case "ArrowLeft":
            deplacer(-10, 0);
            break;
        case "ArrowDown":
            deplacer(0, 10);
            break;
        case "ArrowRight":
            deplacer(10, 0);
            break;
    }
});

function deplacer(x, y)
{
    var carre = document.getElementById("carre");
    var styleCarre = window.getComputedStyle(carre, null);
    var hautActuel = styleCarre.top;
    var gaucheActuel = styleCarre.left;

    carre.style.top = parseInt(hautActuel) + y + "px";
    carre.style.left = parseInt(gaucheActuel) + x + "px";
}