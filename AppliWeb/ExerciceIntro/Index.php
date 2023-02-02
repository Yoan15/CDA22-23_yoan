<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/general.php";
require "./PHP/View/Liste/liste.php";
require "./PHP/View/Form/form.php";

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

echo startHtml();

//var_dump(VillesManager::GetVilleById(2));

//echo combobox(null, "Ville", ["idVille", "nomVille"]);

if (isset($_GET["page"]) && $_GET["page"] == "form")
{
    echo form();
}
elseif (isset($_GET["page"]) && $_GET["page"] == "liste") 
{
    echo liste(["id", "nom", "prenom", "idVille"], "Personne");
}
else 
{
    echo liste(["id", "nom", "prenom", "idVille"], "Personne");
}

echo footer();