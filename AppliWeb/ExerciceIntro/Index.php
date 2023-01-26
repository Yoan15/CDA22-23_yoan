<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";

//appel de l'autoload
spl_autoload_register('chargerClasse');

//permet de récupérer les données du config.json
Parametres::init();
//persmet de se connecter à la base de donnée
DBConnect::Connect();
// var_dump(PersonnesManager::ListePersonnes());
//$id=6;
//$personne = new Personne(["nom"=>"Champi", "prenom"=>"Toad"]);
//var_dump(PersonnesManager::UpdatePersonne($personne, $id));
//var_dump(PersonnesManager::GetPersonneById($id));
//var_dump(PersonnesManager::DeletePersonne($id));

//var_dump(PersonnesManager::AddPersonne($personne));
$nomColonnes = ["nom", "prenom" ];
$conditions = ["id" => "1->5", "nom" => "%d%"]; 
$orderBy = null;
$limit = null;
$api = true;
$debug = true;

var_dump(PersonnesManager::getList($nomColonnes,"Personne",   $conditions ,  $orderBy,  $limit ,  $api,  $debug ));
