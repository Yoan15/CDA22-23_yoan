<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/head.php";
require "./PHP/View/General/header.php";
require "./PHP/View/General/nav.php";
require "./PHP/View/General/footer.php";
// require "./PHP/View/Liste/listePersonne.php";
// require "./PHP/View/Liste/listeVille.php";
// require "./PHP/View/Form/formPersonne.php";
// require "./PHP/View/Form/formVille.php";
// require "./PHP/View/Form/form.php";

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

//echo combobox(null, "Ville", ["idVille", "nomVille"]);

// if (isset($_GET["page"]) && $_GET["page"] == "formPersonne")
// {
//     echo formPersonne();
// }
// elseif (isset($_GET["page"]) && $_GET["page"] == "listePersonne") 
// {
//     echo ListePersonne();
// }
// else 
// {
//     echo ListePersonne();
// }

// if (isset($_GET["page"]) && $_GET["page"] == "formVille")
// {
//     echo formVille();
// }
// elseif (isset($_GET["page"]) && $_GET["page"] == "listeVille") 
// {
//     echo ListeVille();
// }
// else 
// {
//     echo ListeVille();
// }

if (isset($_GET["page"])) {
    $page = $_GET["page"];
    //var_dump($page);

    if (isset($routes[$page])) {
        afficherPage($routes[$page]);
        //var_dump($routes[$page]);
    } else {
        afficherPage($routes["Default"]);
    }
} else {
    afficherPage($routes["Default"]);
}

echo footer();
