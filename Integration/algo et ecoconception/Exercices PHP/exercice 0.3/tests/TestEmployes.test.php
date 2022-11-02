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
    foreach ($tab as $elmt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elmt->__toString() . "\n";
    }
    echo "\n";

}

$a1 = new TestAgences(["Nom" => "tutu", "adresse" => "12 rue toto","restauration" => "restaurant d'entreprise" ,"codePostal" => "59520" , "ville" => "Lille"]);
$a2 = new TestAgences(["Nom" => "toto", "adresse" => "154 rue tata","restauration" =>"ticket restaurant" ,"codePostal" => "62102", "ville" => "Lens"]);
$a3 = new TestAgences(["Nom" => "tata", "adresse" => "132 rue tutu","restauration" =>"restaurant d'entreprise" ,"codePostal" => "52013", "ville" => "Marseille"]);
$enfant[] = new TestEnfants(["Nom"=>"Dupond", "Prenom"=>"Axel", "Age"=>2]);
$enfant[] = new TestEnfants(["Nom"=>"Riviera", "Prenom"=>"Alejandro", "Age"=>15]);
$enfant[] = new TestEnfants(["Nom"=>"Doe", "Prenom"=>"Charlie", "Age"=>22]);
$enfant[] = new TestEnfants(["Nom"=>"Wallace", "Prenom"=>"Jean", "Age"=>11]);
$e[] = new TestEmployes(["nom"=> "Dupond","prenom"=> "David","dateEmbauche"=> new DateTime("2019-01-19"),"poste"=> "Comptable","salaire"=> 20,"service"=> "Comptabilité", "agence"=>$a2]);
$e[] = new TestEmployes(["nom"=> "Dupond","prenom"=> "Claude","dateEmbauche"=> new DateTime("2015-05-18"),"poste"=> "Vendeur","salaire"=> 17,"service"=> "Commercial", "agence"=>$a1, "enfants"=>[$enfant[0]]]);
$e[] = new TestEmployes(["nom"=> "Riviera","prenom"=> "Antonio","dateEmbauche"=> new DateTime("2022-03-01"),"poste"=> "Responsable Réseaux","salaire"=> 35,"service"=> "Informatique", "agence"=>$a2, "enfants"=>[$enfant[1]]]);
$e[] = new TestEmployes(["nom"=> "Wallace","prenom"=> "Marcelus","dateEmbauche"=> new DateTime("2000-10-29"),"poste"=> "Agent de sécurité","salaire"=> 23,"service"=> "Sécurité", "agence"=>$a3, "enfants"=>[$enfant[3]]]);
$e[] = new TestEmployes(["nom"=> "Doe","prenom"=> "John","dateEmbauche"=> new DateTime("1980-12-06"),"poste"=> "Responsable","salaire"=> 50,"service"=> "RH", "agence"=>$a3, "enfants"=>[$enfant[2]]]);

echo "Il y a " . TestEmployes::getCompteur() . " employés créé \n";

//usort($e, array("TestEmployes", "cmpNomPrenom"));
usort($e, array("TestEmployes", "cmpServiceNomPrenom"));

AfficherTab($e);

$masseSalarialeTotale = 0;
foreach ($e as $elmt) 
{
    $masseSalarialeTotale += $elmt->masseSalariale();
}
echo "Masse salariale totale : ". $masseSalarialeTotale ."\n";

$ajd = new DateTime("now");
$jourPrime = (new DateTime())->setDate($ajd->format("Y"), 9, 30);

if ($jourPrime < $ajd) //comparaison des dates
{
    foreach ($e as $elmt) {
        echo "Ordre de transfert envoyé à ". $elmt->getNom() ." ". $elmt->getPrenom() ." pour un montant de ". $elmt->prime() ." euros.\n";
    }
} 
else 
{
    echo "Ordre de transfert non envoyé.";
}