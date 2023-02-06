<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/head.php";
require "./PHP/View/General/header.php";
require "./PHP/View/General/nav.php";
require "./PHP/View/General/footer.php";

//appel de l'autoload
spl_autoload_register('chargerClasse');

//permet de récupérer les données du config.json
Parametres::init();
//permet de se connecter à la base de donnée
DBConnect::Connect();

$routes = [
    //route pour accueil
    "Default" => ["PHP/View/General/", "accueil", "Accueil", 0, false],

    "listePersonne" => ["PHP/View/Liste/", "listePersonne", "Liste de personnes", 0, false],
    "formPersonne" => ["PHP/View/Form/", "formPersonne", "Formulaire personne", 0, false],
    "actionPersonnes" => ["PHP/Controller/Action/", "actionPersonnes", "Actions personne", 0, false],

    "listeVille" => ["PHP/View/Liste/", "listeVille", "Liste de villes", 0, false],
    "formVille" => ["PHP/View/Form/", "formVille", "Formulaire ville", 0, false],
    "actionVilles" => ["PHP/Controller/Action/", "actionVilles", "Actions ville", 0, false]
];

echo startHtml();

if (isset($_GET["page"])) {
    $page = $_GET["page"];

    if (isset($routes[$page])) {
        afficherPage($routes[$page]);
    } else {
        afficherPage($routes["Default"]);
    }
} else {
    afficherPage($routes["Default"]);
}

echo footer();
