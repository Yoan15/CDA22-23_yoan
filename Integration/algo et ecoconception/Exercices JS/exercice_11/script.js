form = document.querySelector("form");
nom = document.getElementById("inputNom");
numeroTel = document.getElementById("inputNumTel");
codePostal = document.getElementById("inputCodePostal");
adresseMail = document.getElementById("inputAdresseMail");
motDePasse = document.getElementById("inputMdp");

nom.addEventListener("input", event =>{
    inputNom = event.target;
    nomSaisi = inputNom.value;
    nomSaisi = nomSaisi.toUpperCase();
});

// numeroTel.addEventListener("input", event =>{
//     if (numeroTel.validity.typeMismatch) {
//         numeroTel.setCustomValidity("Veuillez saisir un numéro de téléphone valide.");
//         numeroTel.reportValidity;
//     }
//     else
//     {
//         numeroTel.setCustomValidity("");
//     }
// });

numeroTel.addEventListener("input", event =>{
    inputNumTel = event.target;
});

codePostal.addEventListener("input", event =>{
    inputCodePostal = event.target;
});

// adresseMail.addEventListener("input", event =>{
//     if (adresseMail.validity.typeMismatch) {
//         adresseMail.setCustomValidity("Veuillez saisir une adresse mail.");
//         adresseMail.reportValidity;
//     }
//     else
//     {
//         adresseMail.setCustomValidity("");
//     }
// });

adresseMail.addEventListener("input", event =>{
    inputAdresseMail = event.target;
});

motDePasse.addEventListener("input", event =>{
    inputMot = event.target;
});

// form.addEventListener("submit", event =>{
//     if (!adresseMail.validity.valid) {
//         event.preventDefault();
//     }
// });

function erreurMail()
{

}