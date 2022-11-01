<?php

$tab = array(1 => "Anne",
            2 => "Laurent",
            3 => "Julien",
            4 => "Vincent",
            5 => "Lara");

//permet de rechercher une clé par rapport à une valeur dans un tableau
$cle = array_search("Vincent", $tab);
echo $cle . "\n";

//permet de rechercher si une valeur (et uniquement une valeur pas la clé) est dans le tableau
$valARechercher = readline("Veuillez saisir la valeur à rechercher : ");
if (in_array($valARechercher, $tab)) {
    echo $valARechercher . " est dans le tableau.";
}else {
    echo $valARechercher . " n'est pas dans le tableau.";
}