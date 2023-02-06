const green = "inputCorrect";
const red = "inputIncorrect";

var listeForm = document.querySelectorAll('form');

listeForm.forEach(formulaire => {
    let listeInputs = formulaire.querySelectorAll("input:not([type='submit']):not([type='reset']):not([type='button']), select, textarea");
    let submit = formulaire.querySelector("input([type='submit']), button[type='submit']");
    let reset = formulaire.querySelector("input[type='reset']");
    let listeInputsValidity = {};

    InputsCheckValidity();
});


/**********fonctions**********/

/**
 * fonction qui permet de vérifier la validité des inputs
 * 
 * @param {[object]} listeInputs 
 * @param {[]} listeInputsValidity 
 * @param {object} submit 
 * @param {object} formulaire 
 */
function InputsCheckValidity(listeInputs, listeInputsValidity, submit, formulaire) {
    listeInputs.forEach(element => {
        if (element.checkValidity()) {
            listeInputsValidity[element.name] = true;
        }
        else
        {
            listeInputsValidity[element.name] = false;
        }
    });

    //changement des inputs selon les états
    changeColor(listeInputs, listeInputsValidity);
    //Activation ou non du bouton submit
    afficheBoutonSubmit(listeInputsValidity, submit);
};

/**
 * fonction qui permet de changer la couleur d'un input
 * 
 * @param {[object]} listeInputs 
 * @param {[]} listeInputsValidity 
 */
function changeColor(listeInputs, listeInputsValidity) {
    listeInputs.forEach(element => {
        //on enlève les classes déjà présentes
        element.classList.remove(green, red);
        //si la liste des inputs possède une valeur et que l'élément n'est pas vide
        if (listeInputsValidity[element.name] == true && element.value != "") {
            element.classList.add(green);
        }
        //si la liste des inputs ne possède pas une valeur et que l'élément est un type "number" ou que l'élément n'est pas égale à vide
        else if (listeInputsValidity[element.name] == false && (element.type == "number" || element.value != ""))
        {
            element.classList.add(red);
        }
    });
};

/**
 * Affiche le bouton submit uniquement si les inputs sont correctement remplis
 * 
 * @param {[]} listeInputsValidity 
 * @param {object} submit 
 */
function afficheBoutonSubmit(listeInputsValidity, submit)
{
    //on active le bouton submit
    submit.disabled = false;
    //on le désactive si un input est "false" (mal rempli)
    if (Object.values(listeInputsValidity).indexOf(false) != -1) {
        submit.disabled = true;
    }
}