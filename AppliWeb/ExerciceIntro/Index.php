<?php
require "./PHP/Controller/Outils.php";
spl_autoload_register('chargerClasse');

Parametres::init();
DBConnect::Connect();
var_dump(PersonnesManager::GetAllPersonnes());
$nom = "Eude";
$prenom = "Jean";
var_dump(PersonnesManager::AddPersonne($nom, $prenom));