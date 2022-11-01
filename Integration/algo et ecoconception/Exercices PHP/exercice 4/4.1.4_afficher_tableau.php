<?php

$tab = [];

function AfficherTableau() {
    //demande à l'utilisateur d'entrer différentes valeur jusqu'à une saisie vide
    do {
        $saisie = readline("Veuillez saisir une valeur (Tappez sur ENTREE pour stopper la saisie) : \n");
        $tab[] = $saisie;
    } while ($saisie != null);
    //retire la saisie vide du tableau
    array_pop($tab);

    foreach ($tab as $cle => $valeur) {
        echo "Clé : " . $cle . " Valeur : ". $valeur . "\n";
    }
}

AfficherTableau();