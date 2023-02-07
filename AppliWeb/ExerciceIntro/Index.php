<?php
//On require les outils pour pouvoir avoir accès à l'autoload ainsi que d'autres outils nécessaires
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/head.php";
require "./PHP/View/General/header.php";
require "./PHP/View/General/nav.php";
require "./PHP/View/General/footer.php";
require "./PHP/Model/Manager/UtilisateursManager.php";

//appel de l'autoload
spl_autoload_register('chargerClasse');

//permet de récupérer les données du config.json
Parametres::init();
//permet de se connecter à la base de donnée
DBConnect::Connect();

session_start();

$routes = [
    //routes pour connexion et inscription
    "Default" => ["PHP/View/Form/", "formInscription", "Formulaire d'inscription", 0, false],
    "actionInscription" => ["PHP/Controller/Action/", "actionInscription", "Actions inscription", 0, false],
    "formConnexion" => ["PHP/View/Form/", "formConnexion", "Formulaire de connexion", 0, false],
    "actionConnexion" => ["PHP/Controller/Action/", "actionConnexion", "Actions connexion", 0, false],
    "actionDeconnexion" => ["PHP/Controller/Action/", "actionDeconnexion", "Actions Deconnexion", 0, false],
    //route pour accueil
    "Accueil" => ["PHP/View/General/", "accueil", "Accueil", 0, false],

    "listePersonne" => ["PHP/View/Liste/", "listePersonne", "Liste de personnes", 0, false],
    "formPersonne" => ["PHP/View/Form/", "formPersonne", "Formulaire personne", 0, false],
    "actionPersonnes" => ["PHP/Controller/Action/", "actionPersonnes", "Actions personne", 0, false],

    "listeVille" => ["PHP/View/Liste/", "listeVille", "Liste de villes", 0, false],
    "formVille" => ["PHP/View/Form/", "formVille", "Formulaire ville", 0, false],
    "actionVilles" => ["PHP/Controller/Action/", "actionVilles", "Actions ville", 0, false],

    "listeUtilisateur" => ["PHP/View/Liste/", "listeUtilisateur", "Liste des utilisateurs", 0, false],
    "formUtilisateur" => ["PHP/View/Form/", "formUtilisateur", "Formulaire utilisateur", 0, false],
    "actionUtilisateurs" => ["PHP/Controller/Action/", "actionUtilisateurs", "Actions utilisateur", 0, false]
];

echo startHtml();

echo headerHtml();

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
