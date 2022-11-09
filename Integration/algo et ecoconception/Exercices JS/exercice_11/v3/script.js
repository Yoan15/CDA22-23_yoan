inputs = document.querySelectorAll("input");

inputs.forEach(element => {
    element.addEventListener("input", controlValidity);
});

function controlValidity(event)
{
    zoneMessage = event.target.nextElementSibling;

    if (event.target.checkValidity()) {
        zoneMessage.innerHTML = '<img src="./img/icons8-checkmark-48.png" alt="" width=20 height=20> OK';
        //ajout de la classe "ok" et on retire la classe "ko" si elle a été ajoutée si l'utilisateur à changé des valeurs
        zoneMessage.classList.add("messageOk");
        zoneMessage.classList.remove("messageKo");
        event.target.classList.add("inputOk");
        event.target.classList.remove("inputKo");
    }
    else{
        zoneMessage.innerHTML = '<img src="./img/icons8-cross-mark-48.png" alt="" width=20 height=20> ' + event.target.title;
        //ajout de la classe "ko" et on retire la classe "ok" si elle a été ajoutée si l'utilisateur à changé des valeurs
        zoneMessage.classList.add("messageKo");
        zoneMessage.classList.remove("messageOk");
        event.target.classList.add("inputKo");
        event.target.classList.remove("inputOk");
        //event.target.preventDefault();
    }

    
}