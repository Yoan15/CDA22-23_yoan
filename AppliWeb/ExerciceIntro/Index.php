<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/head.php";
require "./PHP/View/General/header.php";
require "./PHP/View/General/nav.php";
require "./PHP/View/General/footer.php";
require "./PHP/View/Liste/listePersonne.php";
require "./PHP/View/Liste/listeVille.php";
require "./PHP/View/Form/formPersonne.php";
require "./PHP/View/Form/formVille.php";
require "./PHP/View/Form/form.php";

//appel de l'autoload
spl_autoload_register('chargerClasse');

//permet de récupérer les données du config.json
Parametres::init();
//permet de se connecter à la base de donnée
DBConnect::Connect();

$routes = [
    //routes pour la liste
    "listePersonne" => "?page=listePersonne",
    "listeVille" => "?page=listeVille",

    //routes pour le formulaire
    "ajouterPersonne" => "?page=formPersonne&action=ajouter",
    "modifierPersonne" => "?page=formPersonne&action=modifier",
    "supprimerPersonne" => "?page=formPersonne&action=supprimer",
    "ajouterVille" => "?page=formVille&action=ajouter",
    "modifierVille" => "?page=formVille&action=modifier",
    "supprimerVille" => "?page=formVille&action=supprimer",
];

echo startHtml();

//echo combobox(null, "Ville", ["idVille", "nomVille"]);

if (isset($_GET["page"]) && $_GET["page"] == "formVille")
{
    echo formVille();
}
elseif (isset($_GET["page"]) && $_GET["page"] == "listeVille") 
{
    echo ListeVille();
}
else 
{
    echo ListeVille();
}

echo footer();