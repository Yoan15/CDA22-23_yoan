<?php

$tab = [];
$longueur = 0;
$invite = null;

function SaisieTab(int $longueur, $invite)
{
    $longueur = readline("Veuillez saisir une longueur : ");
    $invite = readline("Veuillez saisir un type : ");
    for ($i=0; $i < $longueur; $i++) { 
        $valeur = readline("veuillez saisir une valeur : ");
        $tab[] = $valeur;
    }
    var_dump($tab);
}

SaisieTab($longueur, $invite);