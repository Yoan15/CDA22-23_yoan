<?php

$elm = new Utilisateur($_POST);
var_dump($elm,$_POST);

switch ($_GET['mode']) {
	case "ajouter": {
		
		$elm = UtilisateursManager::AddUtilisateur($elm);
		break;
	}
	case "modifier": {
        //$elm->setMdp(crypte('Default-Mdp1'));
		$elm = UtilisateursManager::UpdateUtilisateur($elm, $elm->getIdUtilisateur());
		break;
	}
	case "supprimer": {
		$elm = UtilisateursManager::DeleteUtilisateur($elm);
		break;
	}
}

header("location:index.php?page=listeUtilisateur");