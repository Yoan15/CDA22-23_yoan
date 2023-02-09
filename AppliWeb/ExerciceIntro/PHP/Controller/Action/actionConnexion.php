<?php

//vérifie si l'adresse email utilisée pour l'inscription est déjà enregistrée dans la BDD
$utilisateur = UtilisateursManager::getList(null, ['email' => $_POST['email']]);
//si l'utilisateur existe
if ($utilisateur != null) {
    //si le mot de passe dans la BDD correspond au mdp crypté donné par le post
    if ($utilisateur[0]->getMdp() == crypte($_POST['mdp']))
    {
        echo 'connexion réussie';
        $_SESSION['utilisateur'] = $utilisateur[0];
        header("location: index.php?page=Default");
    }
    header("location: index.php?page=Accueil");
}
else
{
    header("location: index.php?page=Default");
}
