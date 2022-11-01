<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

$employe = new Employes(["nom"=> "Dupont","prenom"=> "Claude","dateEmbauche"=> new DateTime("2019-01-19"),"poste"=> "Comptable","salaire"=> 20000,"service"=> "Comptabilité"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

$employe = new Employes(["nom"=> "Dupond","prenom"=> "Charles","dateEmbauche"=> new DateTime("2015-05-18"),"poste"=> "Vendeur","salaire"=> 17000,"service"=> "Commercial"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

$employe = new Employes(["nom"=> "Riviera","prenom"=> "Antonio","dateEmbauche"=> new DateTime("2022-03-01"),"poste"=> "Responsable Réseaux","salaire"=> 35000,"service"=> "Informatique"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

$employe = new Employes(["nom"=> "Wallace","prenom"=> "Marcelus","dateEmbauche"=> new DateTime("2000-10-29"),"poste"=> "Agent de sécurité","salaire"=> 23000,"service"=> "Sécurité"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

$employe = new Employes(["nom"=> "Doe","prenom"=> "John","dateEmbauche"=> new DateTime("1980-12-06"),"poste"=> "Responsable","salaire"=> 50000,"service"=> "RH"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";