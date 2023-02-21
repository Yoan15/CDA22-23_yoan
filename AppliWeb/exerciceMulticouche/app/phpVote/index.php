<?php

require "./PHP/Controller/Outils.php";
require "./PHP/View/General/head.php";
require "./PHP/View/General/footer.php";

$routes = [
    "Default" => ["PHP/View/Form/", "formVote", "Formulaire de vote", 0, false]
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
