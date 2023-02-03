<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/head.php";
require "./PHP/View/General/header.php";
require "./PHP/View/General/nav.php";
require "./PHP/View/General/footer.php";
require "./PHP/View/Liste/liste.php";
require "./PHP/View/Form/form.php";

//appel de l'autoload
spl_autoload_register('chargerClasse');

//permet de récupérer les données du config.json
Parametres::init();
//permet de se connecter à la base de donnée
DBConnect::Connect();

$routes = [
    //routes pour la liste
    "listePersonne" => "?page=liste",
    "listeVille" => "?page=liste",

    //routes pour le formulaire
    "ajouterPersonne" => "?page=form&action=ajouter",
    "modifierPersonne" => "?page=form&action=modifier",
    "supprimerPersonne" => "?page=form&action=supprimer",
    "ajouterVille" => "?page=form&action=ajouter",
    "modifierVille" => "?page=form&action=modifier",
    "supprimerVille" => "?page=form&action=supprimer",
];

echo startHtml();

//echo combobox(null, "Ville", ["idVille", "nomVille"]);

if (isset($_GET["page"]) && $_GET["page"] == "form")
{
    echo form(["id", "nom", "prenom", "idVille"], "Personne");
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