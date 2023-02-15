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

session_start();

/**
 * guide des roles:
 * 0 - visiteur
 * 1 - utilisateur
 * 2 - manager
 * 3 - admin 
 */
$routes = [
    //routes pour connexion et inscription
    "Default" => ["PHP/View/Form/", "formInscription", "Formulaire d'inscription", 0, false],
    "actionInscription" => ["PHP/Controller/Action/", "actionInscription", "Actions inscription", 0, false],
    "formConnexion" => ["PHP/View/Form/", "formConnexion", "Formulaire de connexion", 0, false],
    "actionConnexion" => ["PHP/Controller/Action/", "actionConnexion", "Actions connexion", 0, false],
    "actionDeconnexion" => ["PHP/Controller/Action/", "actionDeconnexion", "Actions Deconnexion", 0, false],
    "formChangeMdp" => ["PHP/View/Form/", "formChangeMdp", "Formulaire de changement de mot de passe", 0, false],
    "actionChangeMdp" => ["PHP/Controller/Action/", "actionChangeMdp", "Actions Changement de Mot de Passe", 0, false],
    //route pour accueil
    "Accueil" => ["PHP/View/General/", "accueil", "Accueil", 1, false],

    "ListePersonneApi" => ["PHP/Model/API/", "ListePersonneApi", "ListePersonneApi", 1, true],
    "ListeVillesApi" => ["PHP/Model/API/", "ListeVillesApi", "ListeVillesApi", 1, true],
    "MajVillesDepartementApi" => ["PHP/Model/API/", "MajVillesDepartementApi", "MajVillesDepartementApi", 1, true],

    "listePersonne" => ["PHP/View/Liste/", "listePersonne", "Liste de personnes", 1, false],
    "formPersonne" => ["PHP/View/Form/", "formPersonne", "Formulaire personne", 1, false],
    "actionPersonnes" => ["PHP/Controller/Action/", "actionPersonnes", "Actions personne", 1, false],

    "listeVille" => ["PHP/View/Liste/", "listeVille", "Liste de villes", 2, false],
    "formVille" => ["PHP/View/Form/", "formVille", "Formulaire ville", 2, false],
    "actionVilles" => ["PHP/Controller/Action/", "actionVilles", "Actions ville", 2, false],

    "listeDepartement" => ["PHP/View/Liste/", "listeDepartement", "Liste de Département", 2, false],
    "formDepartement" => ["PHP/View/Form/", "formDepartement", "Formulaire département", 2, false],
    "actionDepartements" => ["PHP/Controller/Action/", "actionDepartements", "Actions départements", 2, false],

    "listeUtilisateur" => ["PHP/View/Liste/", "listeUtilisateur", "Liste des utilisateurs", 3, false],
    "formUtilisateur" => ["PHP/View/Form/", "formUtilisateur", "Formulaire utilisateur", 3, false],
    "actionUtilisateurs" => ["PHP/Controller/Action/", "actionUtilisateurs", "Actions utilisateur", 3, false]
];

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
