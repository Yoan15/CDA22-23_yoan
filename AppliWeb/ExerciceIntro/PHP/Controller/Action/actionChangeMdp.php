<?php

//$utilisateur = UtilisateursManager::getList($_SESSION['utilisateur']->getIdUtilisateur());
$utilisateur = UtilisateursManager::GetUtilisateurById($_SESSION['utilisateur']->getIdUtilisateur());
var_dump($utilisateur);
if ($utilisateur->getMdp() != crypte($_POST['mdp'])) {
    var_dump($utilisateur);
        if ($_POST['mdp'] == $_POST['confirmMdp']) {
            //$utilisateur = new Utilisateur($_POST);
            $utilisateur->setMdp(crypte($_POST['mdp']));
            $utilisateur = UtilisateursManager::UpdateUtilisateur($utilisateur, $utilisateur->getIdUtilisateur());
            //$_SESSION['utilisateur'] = $utilisateur;
            header("location: index.php?page=actionDeconnexion");
        }
        else
        {
            echo "Les mots de passe doivent être identiques.";
        }
}
else
{
    echo 'Le mot de passe ne peut pas être la même que l\'ancien';
}

