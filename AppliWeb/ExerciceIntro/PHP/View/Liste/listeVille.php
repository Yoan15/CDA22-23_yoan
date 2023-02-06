<?php
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = VillesManager::getList();

    
    echo '<main class="column borderBlack">';
    //affichage du titre de la liste
    echo '<div>
                    <h1>Liste de Villes</h1>
                </div>';
    //affichage du bouton ajouter
    echo '<div><section>
                    <a href="index.php?page=formVille&mode=ajouter">
                        <button class="ajouter">Ajouter</button>
                    </a>
                </section></div>';
    echo '<div class="espaceHMedium"></div>';
    echo '<div>';
        //affichage des nom des colonnes
            echo '<section class="nomColonnes">nomVille</section>';
        //sections pour les colonnes les boutons détails, modifier et supprimer
        echo '<section class="nomColonnes"></section>';
        echo '<section class="nomColonnes"></section>';
        echo '<section class="nomColonnes"></section>';

    echo '</div>';
    //ajout d'un espace entre l'en-tête et les données
    echo '<div class="espaceH"></div>';
    //affichage des données
    foreach ($data as $value) {
        echo '<div>';
                echo '<section>'. $value->getNomVille() .'</section>';
            //affichage des boutons détails, modifier et supprimer
            echo '<section>
                            <a href="index.php?page=formVille&mode=voir&id='. $value->getIdVille() .'">
                                <button class="detail">Voir</button>
                            </a>
                        </section>';

            echo '<section>
                            <a href="index.php?page=formVille&mode=modifier&id='. $value->getIdVille() .'">
                                <button class="update">Modifier</button>
                            </a>
                        </section>';
                        
            echo '<section>
                            <a href="index.php?page=formVille&mode=supprimer&id='. $value->getIdVille() .'">
                                <button class="delete">Supprimer</button>
                            </a>
                        </section>';
        echo '</div>';
        echo '<div class="espaceHMedium"></div>';
    }
    echo  '<div class="espaceHMedium"></div>';
    echo '<a href="index.php">
                    <button class="detail">Retour vers l\'accueil</button>
                </a>';
    echo '</main>';