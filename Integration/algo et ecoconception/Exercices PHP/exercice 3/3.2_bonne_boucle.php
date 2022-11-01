<?php

//variables
$somme = 0;
$nbArticles = -1;
$paye;
$reste;

//prix
do {
    $prix = readline("prix de l'objet (tapez 0 pour stopper la saisie) : ");
    $somme = $somme + $prix;
    $nbArticles++;

} while ($prix != 0);

echo "vous devez ". $somme . " euros\n";
echo "vous avez ". $nbArticles . " articles\n";

//somme payée
do {
    $paye = readline("Veuillez saisir le montant que vous allez payer : ");
} while ($paye < $somme);

//reste
$reste = $paye - $somme;

while ($reste >= 10) {
    echo "billet 10";
    $reste -= 10;
}

if ($reste >= 5) {
    echo "billet 5";
}

while ($reste >= 1) {
    echo "pièce 1";
    $reste -= 1;
}