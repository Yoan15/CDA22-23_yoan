<?php

require 'voiture.class.php';

$voiture1 = new Voiture("verte", "Citroën", "C4", "10000", "Essence");
var_dump($voiture1);
//$voiture1->descriptionVoiture();

//$voiture2 = new Voiture($couleur, $marque, $modele, $nbKilometres, $motorisation);
//$voiture1->descriptionVoiture("rouge", "Renault", "Kadjar", "15000", "Diesel");