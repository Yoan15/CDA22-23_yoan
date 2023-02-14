<?php

echo '<main>';

echo '<div class="flex-0-1"></div>';

echo '<div><section class="colonne">';

$objets = ClientsManager::getList(null, null, null, Parametres::getNbEltParPage());
echo '<div class="noDisplay NbEltParPage">' . Parametres::getNbEltParPage() . '</div>';
echo '<div class="bigEspace"></div>';
echo '<div class="bigEspace"></div>'; //Création du template de la grid
echo '<div class="grid-col-5 gridListe">';

echo '<div class="caseListe titreListe grid-columns-span-5">Liste des Clients </div>';
echo '<div class="bigEspace"></div>';
echo '<div class="grid-columns-span-5"><div class="demi"></div><input name="filtre" title="entrer le mot à chercher puis cliquer sur le filtre" placeholder="mot à chercher"/><i class="fa-solid fa-filter" title="entrer le mot à chercher puis cliquer sur le filtre"></i><div class="demi"></div></div>';
echo '<div class="caseListe grid-columns-span-5">
<div></div>
<div class="bigEspace"></div>
<div class="caseListe"><a href="index.php?page=FormClients&mode=Ajouter"><i class="fas fa-plus"></i></a></div>
<div></div>
</div>';

echo '<div class="caseListe labelListe" data-name= "NomClient">NomClient</div>';
echo '<div class="caseListe labelListe" data-name= "VilleClient">VilleClient</div>';

//Remplissage de div vide pour la structure de la grid
echo '<div class="caseListe"></div>';
echo '<div class=" caseListe texteClair ">Nombre d\'éléments :</div><div class="mini" id="nbEnregs"></div> ';
echo '</div><div class="grid-col-5 gridListe grid-contenu">';
foreach ($objets as $elm)
{
	echo '<div class ="idClient noDisplay" >'.$elm->getIdClient().'</div>';
    echo '<div class="donnees ">' . $elm->getNomClient() . '</div>';
    echo '<div class="donnees "></div>';
    echo '<a href="index.php?page=FormClients&mode=Afficher&id=' . $elm->getIdClient() . '"><i class="fas fa-file-contract"></i></a>';

    echo '<a href="index.php?page=FormClients&mode=Modifier&id=' . $elm->getIdClient() . '"><i class="fas fa-pen"></i></a>';

    echo '<a href="index.php?page=FormClients&mode=Supprimer&id=' . $elm->getIdClient() . '"><i class="fas fa-trash-alt"></i></a>';
}
//Derniere ligne du tableau (bouton retour)
echo '</div>
<div class="bigEspace"></div>';

echo '<div class="caseListe grid-columns-span-5">
	<div></div>
	<a href="index.php?page=Accueil"><button><i class="fas fa-arrow-left"></i></button></a>
	<div></div>
</div>';

echo '<div class="bigEspace grid-columns-span-9"></div>';

echo '<div class="bigEspace grid-columns-span-9 pagination"></div>';

echo '<div class="bigEspace grid-columns-span-9"></div>';
echo '</div>'; //Div
echo '<div class="flex-0-1"></div>';
echo '</section></main>';
