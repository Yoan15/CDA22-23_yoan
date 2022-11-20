nombre = document.querySelector(".nombre");
nombre.addEventListener("input", pairImpair);

function pairImpair(event) {
    nombreDonne = event.target.value;
    nombreCalcul = nombreDonne%2;
    console.log(nombreCalcul);
    console.log(nombreDonne);
    if (nombreCalcul == 0) {
        event.target.nextElementSibling.innerHTML = "Le nombre est pair";
    } else {
        event.target.nextElementSibling.innerHTML = "Le nombre est impair";
    }
}