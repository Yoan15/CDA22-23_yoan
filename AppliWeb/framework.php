<?php

/********** Création des dossiers **********/

$dossiers = ["framework", "framework/CSS", "framework/HTML", "framework/JS", "framework/PHP", "framework/SQL", "framework/PHP/Controller", "framework/PHP/Controller/Action", "framework/PHP/Controller/Classe", "framework/PHP/Model", "framework/PHP/Model/API", "framework/PHP/Model/Manager", "framework/PHP/View", "framework/PHP/View/Form", "framework/PHP/View/General", "framework/PHP/View/Liste"];
foreach ($dossiers as $dossier) {
    mkdir($dossier);
    file_put_contents($dossier. "/index.php", "<?php");
}