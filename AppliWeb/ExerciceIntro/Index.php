<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/head.php";
require "./PHP/View/Liste/ListePersonne.php";
require "./PHP/View/Form/FormPersonne.php";
require "./PHP/View/General/footer.php";

//appel de l'autoload
spl_autoload_register('chargerClasse');

//permet de récupérer les données du config.json
Parametres::init();
//permet de se connecter à la base de donnée
DBConnect::Connect();
//$id=6;
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

//echo combobox(null, "Ville", ["idVille", "nomVille"]);

echo head();
echo test();
echo afficheListePersonne("personne_ville");
echo footer();