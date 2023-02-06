<?php
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = PersonnesManager::getList();

    
    echo  '<main class="column borderBlack">';
    //affichage du titre de la liste
    echo  '<div>
                    <h1>Liste de Personnes</h1>
                </div>';
    //affichage du bouton ajouter
    echo  '<div><section>
                    <a href="index.php?page=formPersonne&mode=ajouter">
                        <button class="ajouter">Ajouter</button>
                    </a>
                </section></div>';
    echo  '<div class="espaceHMedium"></div>';
    echo  '<div>';
        //affichage des nom des colonnes
            echo  '<section class="nomColonnes">nom</section>';
            echo  '<section class="nomColonnes">prénom</section>';
            echo  '<section class="nomColonnes">Ville</section>';
        //sections pour les colonnes les boutons détails, modifier et supprimer
        echo  '<section class="nomColonnes"></section>';
        echo  '<section class="nomColonnes"></section>';
        echo  '<section class="nomColonnes"></section>';

    echo  '</div>';
    //ajout d'un espace entre l'en-tête et les données
    echo  '<div class="espaceH"></div>';
    //affichage des données
    foreach ($data as $value) {
        echo  '<div>';
            echo  '<section>'. $value->getNom() .'</section>';
            echo  '<section>'. $value->getPrenom() .'</section>';
            echo  '<section>'. VillesManager::GetVilleById($value->getIdVille())->getNomVille() .'</section>';
            //affichage des boutons détails, modifier et supprimer
            echo  '<section>
                            <a href="index.php?page=formPersonne&mode=voir&id='. $value->getId() .'">
                                <button class="detail">Voir</button>
                            </a>
                        </section>';

            echo  '<section>
                            <a href="index.php?page=formPersonne&mode=modifier&id='. $value->getId() .'">
                                <button class="update">Modifier</button>
                            </a>
                        </section>';
                        
            echo  '<section>
                            <a href="index.php?page=formPersonne&mode=supprimer&id='. $value->getId() .'">
                                <button class="delete">Supprimer</button>
                            </a>
                        </section>';
        echo  '</div>';
        echo  '<div class="espaceHMedium"></div>';
    }
    echo  '<div class="espaceHMedium"></div>';
    echo '<a href="index.php">
                    <button class="detail">Retour vers l\'accueil</button>
                </a>';
    echo  '</main>';
    //return $liste;
//}