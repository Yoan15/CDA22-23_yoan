<?php
$elm = new Personne($_POST);
var_dump($elm,$_POST);

switch ($_GET['mode']) {
	case "ajouter": {
		$elm = PersonnesManager::AddPersonne($elm);
		break;
	}
	case "modifier": {
		$elm = PersonnesManager::UpdatePersonne($elm, $elm->getId());
		break;
	}
	case "supprimer": {
		$elm = PersonnesManager::DeletePersonne($elm->getId());
		break;
	}
}

//header("location:index.php?page=listePersonnes");