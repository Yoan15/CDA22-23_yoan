<?php

function liste(array $nomColonnes, string $table, array $conditions = null, string $orderby = null)
{
    $liste = "";
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = ($table.'sManager')::getList($nomColonnes, $conditions, $orderby, null, false, false);

    
    $liste .= '<main class="column borderBlack">';
    $liste .= '<div>
                    <h1>Liste de '. $table .'</h1>
                </div>';
    //affichage du bouton ajouter
    $liste .= '<div><section>
                    <a href="index.php?page=./PHP/View/Form/form.php">
                        <button class="ajouter">Ajouter</button>
                    </a>
                </section></div>';
    $liste .= '<div class="espaceHMedium"></div>';
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
                            <a href="index.php?page=./PHP/View/Form/form.php">
                                <button class="detail">Voir</button>
                            </a>
                        </section>';

            $liste .= '<section>
                            <a href="index.php?page=./PHP/View/Form/form.php">
                                <button class="update">Modifier</button>
                            </a>
                        </section>';
                        
            $liste .= '<section>
                            <a href="index.php?page=./PHP/View/Form/form.php">
                                <button class="delete">Supprimer</button>
                            </a>
                        </section>';
        $liste .= '</div>';
        $liste .= '<div class="espaceHMedium"></div>';
    }
    $liste .= '</main>';
    return $liste;
}