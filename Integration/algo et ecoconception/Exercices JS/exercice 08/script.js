carte = document.getElementById("carte");
carte.innerHTML = '<img src="./img/card_off.png" alt="">'; 

retourner = 0;

carte.addEventListener("click", retournerCarte);

function retournerCarte(event)
{
    if (retourner == 0) {
        retourner = 1;
        carte.innerHTML = '<img src="./img/card_on.png" alt="">';
        setTimeout(positionOrigine, 2000); //timer de 2s avant que la fonction positionOrigine soit executée
    }
    else
    {
        carte.innerHTML = '<img src="./img/card_off.png" alt="">'; //remplace la carte "on" par la carte "off"
        retourner = 0; //si pour une raison x ou y retourner était déjà à 1 cela permet de le mettre à 0
    }
    console.log(retourner);
}

function positionOrigine(event)
{
    if (retourner == 1) {
        carte.innerHTML = '<img src="./img/card_off.png" alt="">';
        retourner = 0;
    }
}