<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

$employe = new TestEmployes(["nom"=> "Dupont","prenom"=> "Claude","dateEmbauche"=> new DateTime("2019-01-19"),"poste"=> "Comptable","salaire"=> 20000,"service"=> "Comptabilité"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

$employe = new TestEmployes(["nom"=> "Dupond","prenom"=> "Charles","dateEmbauche"=> new DateTime("2015-05-18"),"poste"=> "Vendeur","salaire"=> 17000,"service"=> "Commercial"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

$employe = new TestEmployes(["nom"=> "Riviera","prenom"=> "Antonio","dateEmbauche"=> new DateTime("2022-03-01"),"poste"=> "Responsable Réseaux","salaire"=> 35000,"service"=> "Informatique"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

$employe = new TestEmployes(["nom"=> "Wallace","prenom"=> "Marcelus","dateEmbauche"=> new DateTime("2000-10-29"),"poste"=> "Agent de sécurité","salaire"=> 23000,"service"=> "Sécurité"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

$employe = new TestEmployes(["nom"=> "Doe","prenom"=> "John","dateEmbauche"=> new DateTime("1980-12-06"),"poste"=> "Responsable","salaire"=> 50000,"service"=> "RH"]);
echo $employe."\n";
echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
echo $employe->prime()."\n\n";

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$tabEmployes = [
    ["nom"=> "Dupont","prenom"=> "Claude","dateEmbauche"=> "2019-01-19","poste"=> "Comptable","salaire"=> 20000,"service"=> "Comptabilité"],
    ["nom"=> "Dupond","prenom"=> "Charles","dateEmbauche"=> "2015-05-18","poste"=> "Vendeur","salaire"=> 17000,"service"=> "Commercial"],
    ["nom"=> "Riviera","prenom"=> "Antonio","dateEmbauche"=> "2022-03-01","poste"=> "Responsable Réseaux","salaire"=> 35000,"service"=> "Informatique"],
    ["nom"=> "Wallace","prenom"=> "Marcelus","dateEmbauche"=> "2000-10-29","poste"=> "Agent de sécurité","salaire"=> 23000,"service"=> "Sécurité"],
    ["nom"=> "Doe","prenom"=> "John","dateEmbauche"=> "1980-12-06","poste"=> "Responsable","salaire"=> 50000,"service"=> "RH"]
];

//var_dump($tabEmployes);
echo $employe->nombreEmployes($tabEmployes)."\n\n";
echo $employe->infosAlphaNomPrenom($tabEmployes). "\n\n";

