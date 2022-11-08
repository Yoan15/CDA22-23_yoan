form = document.querySelectorAll("input");
regexNom = document.getElementById("inputNom").pattern;
regexNumeroTel = document.getElementById("inputNumTel").pattern;
regexCodePostal = document.getElementById("inputCodePostal").pattern;
regexAdresseMail = document.getElementById("inputAdresseMail").pattern;
regexMotDePasse = document.getElementById("inputMdp").pattern;

form.forEach(element => {
    element.addEventListener("blur", control);
    
});

function control(event)
{
    cible = event.target;
    value = cible.value;
    pattern = cible.pattern;
    reg = new RegExp(pattern);
    isValid = reg.test(value);
    if (!isValid){
        console.log("pas bon");
        alert("veuillez réessayer")
    }
    else {
        console.log("bon");
    }
    //console.log(pattern);
    // value = cible.value
    // if (pattern.test(new RegExp(cible))) {
    //     console.log("vrai");
        // value.setCustomValidity("Veuillez saisir une valeur valide.");
        // alert("erreur veuillez réessayer");
        // cible.preventDefault();
    // }
    // else {
        //console.log("faux");
        //value.setCustomValidity("");
    // }
    //console.log(cible.value);
    //console.log(cible);
}