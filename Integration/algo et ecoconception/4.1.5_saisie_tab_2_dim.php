<?php



function SaisieTabDouble(){
    $tab = [];
    $nbValeurs = readline("Veuillez saisir le nombre d'objets à créer : ");
    for ($x=0; $x < $nbValeurs; $x++) { 
        $objet = readline("Veuillez saisir le nom de votre objet : ");
        $tab[] = $objet;
        $nbParametres = readline("Veuillez saisir le nombre de paramètre : ");
        for ($y=0; $y < $nbParametres; $y++) { 
            $parametres = readline("Veuillez saisir les parametres de votre objet : ");
            $tab[$objet][] = $parametres;
            var_dump($tab);
        }
    }
}

SaisieTabDouble();