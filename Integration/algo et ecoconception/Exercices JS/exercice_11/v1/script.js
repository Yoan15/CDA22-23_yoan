form = document.querySelectorAll("input");
nom = document.getElementById("inputNom");
numeroTel = document.getElementById("inputNumTel");
codePostal = document.getElementById("inputCodePostal");
adresseMail = document.getElementById("inputAdresseMail");
motDePasse = document.getElementById("inputMdp");

nom.addEventListener("blur", event =>{
    inputNom = event.target;
    nomSaisi = inputNom.value;
    majuscule = nomSaisi.charAt(0).toUpperCase();
    resteNom = nomSaisi.slice(1).toLowerCase();
    nomModif = majuscule + resteNom;
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

numeroTel.addEventListener("blur", event =>{
    inputNumTel = event.target;
});

codePostal.addEventListener("blur", event =>{
    inputCodePostal = event.target;
});

adresseMail.addEventListener("submit", event =>{
    if (adresseMail.validity.typeMismatch) {
        adresseMail.setCustomValidity("Veuillez saisir une adresse mail valide.");
        adresseMail.reportValidity;
    }
    else
    {
        adresseMail.setCustomValidity("");
    }
});

// adresseMail.addEventListener("input", event =>{
//     if (!adresseMail.validity.valid) {
//         erreurMail();
//     }
// });

motDePasse.addEventListener("blur", event =>{
    //inputMotDePasse = event.target;
    if (motDePasse.validity.typeMismatch) {
        motDePasse.setCustomValidity("Veuillez saisir un mot de passe valide.");
        motDePasse.reportValidity;
    }
    else
    {
        motDePasse.setCustomValidity("");
    }
});

// form.addEventListener("submit", event =>{
//     if (!adresseMail.validity.valid || adresseMail.validity.valueMissing) {
//         event.preventDefault();
//     }
// });

// function erreurMail()
// {
//     if (adresseMail.validity.valueMissing) {
//         adresseMailErreur.textContent = "Une adresse mail ne peut pas être vide."
//     }

//     adresseMailErreur.className = "erreur active";
// }