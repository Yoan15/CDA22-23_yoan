<?php

function ListeVille()
{
    $liste = "";
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = VillesManager::getList();

    
    $liste .= '<main class="column borderBlack">';
    //affichage du titre de la liste
    $liste .= '<div>
                    <h1>Liste de Villes</h1>
                </div>';
    //affichage du bouton ajouter
    $liste .= '<div><section>
                    <a href="index.php?page=formVille&mode=ajouter">
                        <button class="ajouter">Ajouter</button>
                    </a>
                </section></div>';
    $liste .= '<div class="espaceHMedium"></div>';
    $liste .= '<div>';
        //affichage des nom des colonnes
        //foreach ($nomColonnes as $col) {
            $liste .= '<section class="nomColonnes">idVille</section>';
            $liste .= '<section class="nomColonnes">nomVille</section>';
        //}
        //sections pour les colonnes les boutons détails, modifier et supprimer
        $liste .= '<section class="nomColonnes"></section>';
        $liste .= '<section class="nomColonnes"></section>';
        $liste .= '<section class="nomColonnes"></section>';

    $liste .= '</div>';
    //ajout d'un espace entre l'en-tête et les données
    $liste .= '<div class="espaceH"></div>';
    //affichage des données
    foreach ($data as $value) {
        $liste .= '<div>';
            // foreach ($nomColonnes as $col) 
            // {
                $liste .= '<section>'. $value->getIdVille() .'</section>';
                $liste .= '<section>'. $value->getNomVille() .'</section>';
            //}
            //affichage des boutons détails, modifier et supprimer
            $liste .= '<section>
                            <a href="index.php?page=formVille&mode=voir&id='. $value->getIdVille() .'">
                                <button class="detail">Voir</button>
                            </a>
                        </section>';

            $liste .= '<section>
                            <a href="index.php?page=formVille&mode=modifier&id='. $value->getIdVille() .'">
                                <button class="update">Modifier</button>
                            </a>
                        </section>';
                        
            $liste .= '<section>
                            <a href="index.php?page=formVille&mode=supprimer&id='. $value->getIdVille() .'">
                                <button class="delete">Supprimer</button>
                            </a>
                        </section>';
        $liste .= '</div>';
        $liste .= '<div class="espaceHMedium"></div>';
    }
    $liste .= '</main>';
    return $liste;
}