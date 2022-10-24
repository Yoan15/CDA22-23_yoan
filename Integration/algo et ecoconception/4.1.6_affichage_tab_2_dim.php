<?php

$tab = [[1,2,3],[4,5,6]];

function AfficherTableauDoubleDim($tab){
    var_dump($tab);
    foreach ($tab as $numLigne => $ligne) {
        echo "| " . ($numLigne+1) . " "; //numéro ligne +1 pour donner la valeur 1 à la ligne 1 a la place de la valeur 0
        foreach ($ligne as $case) {
            echo "| " . $case . " "; // ajout d'un pipe à gauche de chaque valeur
        }
        echo "|\n"; // ajout d'un pipe à la fin de chaque ligne
    }
}

AfficherTableauDoubleDim($tab);