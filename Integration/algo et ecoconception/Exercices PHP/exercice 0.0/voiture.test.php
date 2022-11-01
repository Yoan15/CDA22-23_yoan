<?php

require 'voiture.class.php';

$voiture1 = new Voiture("verte", "Citroën", "C4", "10000", "Essence");
echo $voiture1->descriptionVoiture()."\n";
$voiture1->rouler(10000)."\n";
echo $voiture1->descriptionVoiture()."\n";
$voiture1->rouler(10000)."\n";
echo $voiture1->descriptionVoiture()."\n";

$voiture2 = new Voiture("rouge", "Renault", "Kadjar", "15000", "Diesel");
echo $voiture2->descriptionVoiture()."\n";