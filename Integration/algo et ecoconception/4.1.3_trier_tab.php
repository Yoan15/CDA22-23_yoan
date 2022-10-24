<?php

$tab = [];

function TrierTab(){
    //demande à l'utilisateur d'entrer différentes valeur jusqu'à une saisie vide
    do {
        $valeur = readline("Veuillez saisir une valeur (Tappez sur ENTREE pour stopper la saisie) : \n");
        $tab[] = $valeur;
    } while ($valeur != null);
    //retire la saisie vide du tableau
    array_pop($tab);
    //tri du tableau
    sort($tab);
    return $tab;
}

TrierTab();