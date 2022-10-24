<?php

$tab = [];

function TrierTab(){
    do {
        $valeur = readline("Veuillez saisir une valeur (Tappez sur ENTREE pour stopper la saisie) : \n");
        $tab[] = $valeur;
    } while ($valeur != null);
    array_pop($tab);
    
    sort($tab);
    var_dump($tab);
}

TrierTab();