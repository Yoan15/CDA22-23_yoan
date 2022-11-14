inputs = document.getElementsByClassName("checkValidity");

var mdp = document.getElementById("mdp");
var confirmMdp = document.getElementById("confirmMdp");
submit = document.getElementsByClassName("submit")

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("input", function (event){
        updateValidity(event.target);
    });
    
}

//empecher le copier dans la zone mdp et confirm
mdp.addEventListener("contextmenu", annule);
confirmMdp.addEventListener("contextmenu", annule);
//empecher le coller dans la confirmation
confirmMdp.addEventListener("paste", annule);

function updateValidity(input) 
{
    estValide = validateInput(input);
    impactValidity(input, estValide);
}

function validateInput(input) 
{
    estValide = input.checkValidity(); //on vérifie la validité de l'input
    if (!estValide && input.value == "" && input.required) { //si n'est pas valide et que la valeur est vide est que l'input est requis
        estValide = 0; // alors estValid est égal à 0
    }
    return estValide; // on retourne si estValide est vrai ou faux
}

function impactValidity(input, estValide)
{
    var message = input.parentNode.getElementsByTagName("h3")[0];
    message.classList.add("visible");
    //image = input.parentNode.getElementsByTagName("i")[1];

    switch (estValide) { // si estValide
        case true: //vrai
            message.innerHTML = "Champ valide."; //on affiche dans le h3 "Champ valide"
            input.style.backgroundColor = "green"; //fond vert sur l'input pour indiquer que c'est bon
            break;
        case 0:
            message.innerHTML = "Champ requis!"; // si le champ est vide après avoir intéragi dessus on affiche que le champ est requis
            break;
        case false:
            message.innerHTML = input.title; //si le champ est incorrect on affiche le texte du "title" de l'input pour aider l'utilisateur
            input.style.backgroundColor = "red"; // fond rouge pour bien indiquer que le champ est incorrect
            break;
        default:
            break;
    }
}

function annule(event) {
    event.preventDefault(); //annule la fonction standard associée à la frappe ou au clic
    return false;
}