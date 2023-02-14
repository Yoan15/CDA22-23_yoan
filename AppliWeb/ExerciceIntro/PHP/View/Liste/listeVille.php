<?php
//On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
$data = VillesManager::getList();

$formDepartement = ($_GET['page'] == 'formDepartement' ? true : false);

if (!$formDepartement) {
    echo '<main class="column borderBlack">';
}

//affichage du titre de la liste
echo '<div>
                    <h1>Liste de Villes</h1>
                </div>';
//affichage du bouton ajouter
echo '<div>
            <section>
                <button class="ajouter">
                    <a href="index.php?page=formVille&mode=ajouter">
                        Ajouter
                    </a>
                </button>
            </section>
        </div>';
echo '<div class="espaceHMedium"></div>';
echo '<div>';
//affichage des nom des colonnes
echo '<section class="nomColonnes">nomVille</section>';
echo '<section class="nomColonnes">departement</section>';
//sections pour les colonnes les boutons détails, modifier et supprimer
echo '<section class="nomColonnes"></section>';
echo '<section class="nomColonnes"></section>';
echo '<section class="nomColonnes"></section>';

echo '</div>';
//ajout d'un espace entre l'en-tête et les données
echo '<div class="espaceH"></div>';

// if (!$formDepartement) {
//     foreach ($data as $value) {
//         echo '<div>';
//         echo '<section class="alignTextCenter">' . $value->getNomVille() . '</section>';
//         echo '<section class="alignTextCenter">' . DepartementsManager::GetDepartementById($value->getIdDepartement())->getNomDepartement() . '</section>';
//         //affichage des boutons détails, modifier et supprimer
//         echo '<section>
//                 <button class="detail">
//                     <a href="index.php?page=formVille&mode=voir&id=' . $value->getIdVille() . '">
//                         Voir
//                     </a>
//                 </button>
//             </section>';

//         echo '<section>
//                 <button class="update">
//                     <a href="index.php?page=formVille&mode=modifier&id=' . $value->getIdVille() . '">
//                         Modifier
//                     </a>
//                 </button>
//             </section>';

//         echo '<section>
//                 <button class="delete">
//                     <a href="index.php?page=formVille&mode=supprimer&id=' . $value->getIdVille() . '">
//                         Supprimer
//                     </a>
//                 </button>
//             </section>';
//         echo '</div>';
//         echo '<div class="espaceHMedium"></div>';
//     }
// }



//affichage des données
foreach ($data as $value) {
    echo '<div>';
    echo '<section class="alignTextCenter">' . $value->getNomVille() . '</section>';
    echo '<section class="alignTextCenter">' . DepartementsManager::GetDepartementById($value->getIdDepartement())->getNomDepartement() . '</section>';
    //affichage des boutons détails, modifier et supprimer
    echo '<section>
                        <button class="detail">
                            <a href="index.php?page=formVille&mode=voir&id=' . $value->getIdVille() . '">
                                Voir
                            </a>
                        </button>
                    </section>';

    echo '<section>
                        <button class="update">
                            <a href="index.php?page=formVille&mode=modifier&id=' . $value->getIdVille() . '">
                                Modifier
                            </a>
                        </button>
                    </section>';

    echo '<section>
                        <button class="delete">
                            <a href="index.php?page=formVille&mode=supprimer&id=' . $value->getIdVille() . '">
                                Supprimer
                            </a>
                        </button>
                    </section>';
    echo '</div>';
    echo '<div class="espaceHMedium"></div>';
}
echo  '<div class="espaceHMedium"></div>';
echo '<a href="index.php?page=Accueil">
                    <button class="detail">Retour vers l\'accueil</button>
                </a>';
if (!$formDepartement) {
    echo '</main>';
}
