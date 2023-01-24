<?php
require "./PHP/Controller/Outils.php";
spl_autoload_register('chargerClasse');

Parametres::init();
DBConnect::Connect();
var_dump(PersonnesManager::GetAllPersonnes());
$id=3;
$nom="Chti";
$prenom="tutu";
var_dump(PersonnesManager::UpdatePersonne($nom, $prenom, $id));
//var_dump(PersonnesManager::GetPersonneById($id));
//var_dump(PersonnesManager::DeletePersonne($id));
// $nom = "Eude";
// $prenom = "Jean";
//var_dump(PersonnesManager::AddPersonne($nom, $prenom));