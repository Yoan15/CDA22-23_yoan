var carre = document.getElementById("carre");

enfonce = false;

carre.addEventListener("mousedown", sourisEstEnfoncee);
document.addEventListener("mouseup", sourisEstRelachee);
document.addEventListener("mousemove", sourisDeplacement);

function sourisEstEnfoncee()
{
    enfonce = true;
}

function sourisEstRelachee()
{
    enfonce = false;
}

function sourisDeplacement(event)
{
    if (enfonce) {
        carre.style.left = event.clientX + "px";
        carre.style.top = event.clientY + "px";
    }
}