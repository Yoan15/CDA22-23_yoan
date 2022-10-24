<?php

$tab = [[1,2,3],[4,5,6]];

function AfficherTableauDoubleDim($tab){
    var_dump($tab);
    foreach ($tab as $numLigne => $ligne) {
        echo $numLigne;
        foreach ($ligne as $case) {
            echo "| ". $case . " "; // ajout d'un pipe à gauche de chaque valeur
        }
        echo "|\n"; // ajout d'un pipe à la fin de chaque ligne
    }
}

AfficherTableauDoubleDim($tab);