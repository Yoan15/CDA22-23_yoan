<?php

if ($_POST['mdp'] == $_POST['confirmMdp']) {
    //vérifie si l'adresse email utilisée pour l'inscription est déjà enregistrée dans la BDD
    $addresseUtilisee = UtilisateursManager::getList(['email'], ['email' => $_POST['email']]);
    if ($addresseUtilisee == null) {
        $utilisateur = new Utilisateur($_POST);
        $utilisateur -> setRole(1);
        $utilisateur -> setMdp(crypte($utilisateur->getMdp()));
        UtilisateursManager::AddUtilisateur($utilisateur);
        $_SESSION['utilisateur'] = $utilisateur;
        header("location: index.php?page=Accueil");
    }
    else
    {
        header("location: index.php?page=Default");
    }
} else {
    header("location: index.php?page=Default");
}
