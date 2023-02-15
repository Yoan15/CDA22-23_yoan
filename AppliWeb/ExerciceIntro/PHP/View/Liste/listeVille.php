<?php
//On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
$data = VillesManager::getList();

$formDepartement = ($_GET['page'] == 'formDepartement' ? true : false);

//si on est pas dans le formDepartement on affiche ce qu'il y a dans le if
if (!$formDepartement) {
    echo '<main class="column borderBlack">';
}

//affichage du titre de la liste
echo '<div>
            <h1>Liste de Villes</h1>
        </div>';
//affichage du bouton ajouter
if (!$formDepartement) {
    echo '<div>
            <section>
                <button class="ajouter">
                    <a href="index.php?page=formVille&mode=ajouter">
                        Ajouter
                    </a>
                </button>
            </section>
        </div>';
}

echo '<div class="espaceHMedium"></div>';

if (!$formDepartement) {
    echo '<div>';
        //affichage des nom des colonnes
        echo '<section class="nomColonnes">nomVille</section>';
        echo '<section class="nomColonnes">departement</section>';
        //sections pour les colonnes les boutons détails, modifier et supprimer
        echo '<section class="nomColonnes"></section>';
        echo '<section class="nomColonnes"></section>';
        echo '<section class="nomColonnes"></section>';

    echo '</div>';
}

//ajout d'un espace entre l'en-tête et les données
echo '<div class="espaceH"></div>';

if (!$formDepartement) {
    foreach ($data as $value) {
        echo '<div>';
        echo '<section class="alignTextCenter">' . $value->getNomVille() . '</section>';
        //on récupère le nom du département grâce à l'idDepartement de la table ville
        if ($value->getIdDepartement() != null) {
            echo '<section class="alignTextCenter">' . DepartementsManager::GetDepartementById($value->getIdDepartement())->getNomDepartement() . '</section>';
        } else {
            echo '<section class="alignTextCenter"></section>';
        }
        
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
    echo '<a href="index.php?page=Accueil">
                <button class="detail">Retour vers l\'accueil</button>
            </a>';
} else {
    //affichage des données
    foreach ($data as $value) {
        $ville = VillesManager::getList(['idVille'], ['idDepartement' => $_GET['id'], 'idVille' => $value->getIdVille()]);

        echo '<div class="listeVilles">';
        echo '<div class="checkVille">';
        //le ternaire permet de savoir quelle(s) villes sont dans quel département
        echo '<section><input type=checkbox class="test" ' . ($ville ? ($ville[0]->getIdVille() == $value->getIdVille() ? ' checked ' : '') : '') . ' data-id="' . $value->getIdVille() . '" data-name="' . $value->getNomVille() . '"/></section>';
        echo '<section class="alignTextCenter">' . $value->getNomVille() . '</section>';
        echo '</div>';
    }
}

if (!$formDepartement) {
    echo '</main>';
}
