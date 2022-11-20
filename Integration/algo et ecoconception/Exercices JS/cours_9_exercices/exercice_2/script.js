age = document.querySelector("#age");
age.addEventListener("input", calculAge);

function calculAge(event) {
    dateNow = new Date();
    anneeNow = dateNow.getFullYear();
    anneeDonnee = event.target.value;
    diff = anneeNow - anneeDonnee;

    if (diff < 18) {
        event.target.nextElementSibling.innerHTML = "Vous êtes mineur.";
    } else {
        event.target.nextElementSibling.innerHTML = "Vous êtes majeur.";
    }
}