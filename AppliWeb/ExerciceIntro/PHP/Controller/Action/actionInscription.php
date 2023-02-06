<?php
var_dump($_POST);

if ($_POST['mdp'] == $_POST['confirmMdp']) {
    //vérifie si l'adresse email utilisée pour l'inscription est déjà enregistrée dans la BDD
    $addresseUtilisee = UtilisateurManager::getList(['email'], ['email' => $_POST['email']]);
    if ($addresseUtilisee == null) {
        $utilisateur = new Utilisateur();
        $utilisateur -> set_role('utilisateur');
        $utilisateur -> set_mdp(crypte($utilisateur->get_mdp()));
        UtilisateurManager::AddUtilisateur($utilisateur);
        $_SESSION['utilisateur'] = $utilisateur;
        var_dump($utilisateur);
    }
    else
    {
        //header("location: index.php?page=Accueil");
    }
    //header("location: index.php?page=Default");
} else {
    //header("location: index.php?page=Default");
}
