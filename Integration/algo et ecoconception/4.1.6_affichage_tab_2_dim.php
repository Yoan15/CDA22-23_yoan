<?php

$tab = [[1,2,3],[4,5,6]];

function AfficherTableauDoubleDim($tab){
    var_dump($tab);

    $tirets = "----"; //pour prendre en compte le numéro de la ligne
    $nbCol = count($tab[0]); //On compte le nombre de colonnes

    for ($i=0; $i < $nbCol; $i++) { 
        $tirets .= "----";
    }
    $tirets .= "\n"; //retour à la ligne après les tirets

    foreach ($tab as $numLigne => $ligne) {
        echo "| " . ($numLigne+1) . " "; //numéro ligne +1 pour donner la valeur 1 à la ligne 1 a la place de la valeur 0
        foreach ($ligne as $case) {
            echo "| " . $case . " "; // ajout d'un pipe à gauche de chaque valeur
        }
        echo "|\n". $tirets; // ajout d'un pipe à la fin de chaque ligne
    }
}

AfficherTableauDoubleDim($tab);