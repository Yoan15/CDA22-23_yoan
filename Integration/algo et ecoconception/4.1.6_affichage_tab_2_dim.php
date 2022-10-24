<?php

$tab = [[1,2,3],[4,5,6]];

function AfficherTableauDoubleDim($tab){
    var_dump($tab);
    foreach ($tab as $ligne) {
        foreach ($ligne as $case) {
            echo $case;
        }
    }
}

AfficherTableauDoubleDim($tab);