<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

$employe = new TestEmployes(["nom"=> "Dupont","prenom"=> "Claude","dateEmbauche"=> "2019-01-19","poste"=> "Comptable","salaire"=> 20000,"service"=> "Comptabilité"]);
echo $employe."\n";
echo $employe->anciennete(). "\n";

$employe = new TestEmployes(["nom"=> "Dupond","prenom"=> "Charles","dateEmbauche"=> "2022-01-19","poste"=> "Comptable","salaire"=> 17000,"service"=> "Comptabilité"]);
echo $employe."\n";
echo $employe->anciennete(). "\n";