<?php
//on require ce dont on a besoin initialement
require "./PHP/Controller/Outils.php";
require "./PHP/View/General/head.php";
require "./PHP/View/General/header.php";
require "./PHP/View/General/footer.php";

//appel de l'autoload
spl_autoload_register('chargerClasse');

//récupère les informations du config.json
Parametres::init();
//se connecte à la BDD
DBConnect::Connect();

$routes = [
    "Default" => ["PHP/View/Liste/", "listeArticle", "Liste d'Articles", 0, false],
    //routes pour les articles
    "listeArticle" => ["PHP/View/Liste/", "listeArticle", "Liste d'Articles", 0, false],
    "formArticle" => ["PHP/View/Form/", "formArticle", "Formulaire d'Articles", 0, false],
    //routes pour les actions
    "actionArticles" => ["PHP/Controller/Action/", "actionArticles", "Actions Articles", 0, false],
    //routes pour les API
    "ListeArticlesApi" => ["PHP/Model/API/", "ListeArticlesApi", "ListeArticlesApi", 0, true]
];

if (isset($_GET["page"])) {
    $page = $_GET["page"];

    if (isset($routes[$page])) {
        afficherPage($routes[$page]);
    }else {
        afficherPage($routes["Default"]);
    }
} else {
    afficherPage($routes["Default"]);
}