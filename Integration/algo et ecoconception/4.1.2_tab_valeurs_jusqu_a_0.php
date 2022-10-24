<?php

$tab = [];

function SaisieTabZero(){
    //refait saisir des valeurs jusqu'à la saisie de 0
    do {
        $saisie = readline("veuillez saisir une valeur : \n");
        $tab[] = $saisie;
    } while ($saisie !=0);
    //retire le dernier élément du tableau
    array_pop($tab);
    var_dump($tab);
}

SaisieTabZero();