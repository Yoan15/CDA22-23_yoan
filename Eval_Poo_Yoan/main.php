<?php

function chargerClasse($classe)
{
    require $classe. '.class.php';
}

spl_autoload_register('ChargerClasse');

$compte[] = new Compte(["numero"=>"50236R", "montant"=>120]);
$livret[] = new Livret(["numeroLivret"=> "45789L", "montantLivret"=>1200]);
$client[] = new Client(["nom"=>"Dupont", "prenom"=> "Paul", "compte"=>$compte[0], "livret"=>$livret[0]]);

$data = Client::afficher();