<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

// $employe = new TestEmployes(["nom"=> "Dupont","prenom"=> "Claude","dateEmbauche"=> new DateTime("2019-01-19"),"poste"=> "Comptable","salaire"=> 20,"service"=> "Comptabilité"]);
// echo $employe."\n";
// echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
// echo $employe->prime()."\n\n";

// //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// $employe = new TestEmployes(["nom"=> "Dupond","prenom"=> "Charles","dateEmbauche"=> new DateTime("2015-05-18"),"poste"=> "Vendeur","salaire"=> 17,"service"=> "Commercial"]);
// echo $employe."\n";
// echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
// echo $employe->prime()."\n\n";

// //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// $employe = new TestEmployes(["nom"=> "Riviera","prenom"=> "Antonio","dateEmbauche"=> new DateTime("2022-03-01"),"poste"=> "Responsable Réseaux","salaire"=> 35,"service"=> "Informatique"]);
// echo $employe."\n";
// echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
// echo $employe->prime()."\n\n";

// //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// $employe = new TestEmployes(["nom"=> "Wallace","prenom"=> "Marcelus","dateEmbauche"=> new DateTime("2000-10-29"),"poste"=> "Agent de sécurité","salaire"=> 23,"service"=> "Sécurité"]);
// echo $employe."\n";
// echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
// echo $employe->prime()."\n\n";

// //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// $employe = new TestEmployes(["nom"=> "Doe","prenom"=> "John","dateEmbauche"=> new DateTime("1980-12-06"),"poste"=> "Responsable","salaire"=> 50,"service"=> "RH"]);
// echo $employe."\n";
// echo "L'employé a une ancienneté de ".$employe->anciennete()." ans."."\n";
// echo $employe->prime()."\n\n";

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
function AfficherTab($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt->__toString() . "\n";
    }
    echo "\n";

}
$e[] = new TestEmployes(["nom"=> "Dupond","prenom"=> "David","dateEmbauche"=> new DateTime("2019-01-19"),"poste"=> "Comptable","salaire"=> 20,"service"=> "Comptabilité"]);
$e[] = new TestEmployes(["nom"=> "Dupond","prenom"=> "Claude","dateEmbauche"=> new DateTime("2015-05-18"),"poste"=> "Vendeur","salaire"=> 17,"service"=> "Commercial"]);
$e[] = new TestEmployes(["nom"=> "Riviera","prenom"=> "Antonio","dateEmbauche"=> new DateTime("2022-03-01"),"poste"=> "Responsable Réseaux","salaire"=> 35,"service"=> "Informatique"]);
$e[] = new TestEmployes(["nom"=> "Wallace","prenom"=> "Marcelus","dateEmbauche"=> new DateTime("2000-10-29"),"poste"=> "Agent de sécurité","salaire"=> 23,"service"=> "Sécurité"]);
$e[] = new TestEmployes(["nom"=> "Doe","prenom"=> "John","dateEmbauche"=> new DateTime("1980-12-06"),"poste"=> "Responsable","salaire"=> 50,"service"=> "RH"]);

echo "Il y a " . TestEmployes::getCompteur() . " employés créé \n";
AfficherTab($e);

usort($e, array("TestEmployes", "cmpNomPrenom"));
//echo $employe->infosAlphaServiceNomPrenom($tabEmployes). "\n\n";
