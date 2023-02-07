<?php


$utilisateur = UtilisateursManager::getList();

if ($utilisateur[0]->getMdp() !== crypte($_POST['mdp'])) {
        if ($_POST['mdp'] == $_POST['confirmMdp']) {
            $utilisateur = new Utilisateur($_POST);
            $utilisateur -> setMdp(crypte($utilisateur->getMdp()));
            UtilisateursManager::UpdateUtilisateur($utilisateur, $utilisateur->getIdUtilisateur());
            $_SESSION['utilisateur'] = $utilisateur;
            header("location: index.php?page=Accueil");
        }
}
echo 'Le mot de passe ne peut pas être la même que l\'ancien';
