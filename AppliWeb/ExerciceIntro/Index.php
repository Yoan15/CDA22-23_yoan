<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/general.php";
require "./PHP/View/Liste/liste.php";

//appel de l'autoload
spl_autoload_register('chargerClasse');

//permet de récupérer les données du config.json
Parametres::init();
//permet de se connecter à la base de donnée
DBConnect::Connect();
//$personne = new Personne(["nom"=>"Champi", "prenom"=>"Toad"]);

//var_dump(PersonnesManager::AddPersonne($personne));
//$nomColonnes = ["id", "nom", "prenom", "idVille" ];
//$conditions = ["id" => "1->5", "nom" => "%d%"]; 
//$conditions = ["id" => "2"];
// $attributs = "selected";
// $orderBy = null;
// $limit = null;
// $api = true;
// $debug = true;
//var_dump(PersonnesManager::getList($nomColonnes, "personne", $conditions , $orderBy, $limit , $api, $debug));

//var_dump(VillesManager::getList($nomVilles, "ville", $conditionsVilles, $orderBy, $limit, $api, $debug));

//echo starthtml();

//var_dump(VillesManager::GetVilleById(2));

echo combobox(null, "Ville", ["idVille", "nomVille"]);

//echo footer();