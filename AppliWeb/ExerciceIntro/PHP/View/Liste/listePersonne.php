<?php

function listePersonne()
{
    $liste = "";
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = PersonnesManager::getList();

    
    $liste .= '<main class="column borderBlack">';
    //affichage du titre de la liste
    $liste .= '<div>
                    <h1>Liste de Personnes</h1>
                </div>';
    //affichage du bouton ajouter
    $liste .= '<div><section>
                    <a href="index.php?page=formPersonne&mode=ajouter">
                        <button class="ajouter">Ajouter</button>
                    </a>
                </section></div>';
    $liste .= '<div class="espaceHMedium"></div>';
    $liste .= '<div>';
        //affichage des nom des colonnes
        //foreach ($nomColonnes as $col) {
            $liste .= '<section class="nomColonnes">nom</section>';
            $liste .= '<section class="nomColonnes">prénom</section>';
            $liste .= '<section class="nomColonnes">Ville</section>';
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
                $liste .= '<section>'. $value->getNom() .'</section>';
                $liste .= '<section>'. $value->getPrenom() .'</section>';
                $liste .= '<section>'. VillesManager::GetVilleById($value->getIdVille())->getNomVille() .'</section>';
            //}
            //affichage des boutons détails, modifier et supprimer
            $liste .= '<section>
                            <a href="index.php?page=formPersonne&mode=voir&id='. $value->getIdVille() .'">
                                <button class="detail">Voir</button>
                            </a>
                        </section>';

            $liste .= '<section>
                            <a href="index.php?page=formPersonne&mode=modifier&id='. $value->getIdVille() .'">
                                <button class="update">Modifier</button>
                            </a>
                        </section>';
                        
            $liste .= '<section>
                            <a href="index.php?page=formPersonne&mode=supprimer&id='. $value->getIdVille() .'">
                                <button class="delete">Supprimer</button>
                            </a>
                        </section>';
        $liste .= '</div>';
        $liste .= '<div class="espaceHMedium"></div>';
    }
    $liste .= '</main>';
    return $liste;
}