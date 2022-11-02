<?php

function chargerClasse($classe)
{
    require $classe. '.class.php';
}

spl_autoload_register('ChargerClasse');

//$compte[] = ;
//$livret[] = ;
$client = new Client(["nom"=>"Dupont", "prenom"=> "Paul", "compte"=>new Compte(["numero"=>"50236R", "montant"=>120]), "livret"=>new Livret(["numeroLivret"=> "45789L", "montantLivret"=>1200])]);

//var_dump($compte);
//var_dump($livret);
//var_dump($client);

echo "création du client\n";
echo $aff = $client->affiche();
echo "Le client reçoit 50 euros\n";
$reçu = $client->recevoir();
var_dump($reçu);
echo $aff = $client->affiche();
echo "Le client dépense 10 euros\n";
$depense = $client->depenser();
var_dump($depense);
echo "Le client épargne 100 euros\n";
$epargne = $client->epargner();
var_dump($epargne);
echo "On applique les intérêts du livret\n";
//$interets = $client->appliqueInterets();
//var_dump($client);