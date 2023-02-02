<?php

function liste(array $nomColonnes, string $table, array $conditions = null, string $orderby = null)
{
    $liste = "";
    $id = $table::getAttributes()[0];
    $colonnes = [];
    $colonnes = $nomColonnes;
    $colonnes[] = $id;
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = ($table.'sManager')::getList($nomColonnes, $conditions, $orderby, null, false, false);

    $liste .= '<main class="column borderBlack">';
    $liste .= '<div>';
        //affichage des nom des colonnes
        foreach ($nomColonnes as $col) {
            $liste .= '<section>'. $col .'</section>';
        }
        //sections pour les colonnes les boutons détails, modifier et supprimer
        $liste .= '<section></section>';
        $liste .= '<section></section>';
        $liste .= '<section></section>';

    $liste .= '</div>';
    //ajout d'un espace entre l'en-tête et les données
    $liste .= '<div class="espaceH"></div>';
    //affichage des données
    foreach ($data as $value) {
        $liste .= '<div>';
            foreach ($nomColonnes as $col) 
            {
                $liste .= '<section>'.appelGet($value, $col) .'</section>';
            }
            //affichage des boutons détails, modifier et supprimer
            $liste .= '<section>
                            <a href="index.php?pages=./PHP/View/Form/form.php/?action=voir&idVille=">
                                <button class="detail">Voir</button>
                            </a>
                        </section>';
            $liste .= '<section>
                            <a href="index.php?pages=./PHP/View/Form/form.php/?action=modif&idVille=">
                                <button class="update">Modifier</button>
                            </a>
                        </section>';
            $liste .= '<section>
                            <a href="index.php?pages=./PHP/View/Form/form.php/?action=suppr&idVille=">
                                <button class="delete">Supprimer</button>
                            </a>
                        </section>';
        $liste .= '</div>';
        $liste .= '<div class="espaceHMedium"></div>';
    }
    $liste .= '</main>';
    return $liste;
}