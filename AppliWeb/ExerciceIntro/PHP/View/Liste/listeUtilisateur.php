<?php

    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = UtilisateursManager::getList();

    
    echo  '<main class="column borderBlack">';
    //affichage du titre de la liste
    echo  '<div>
                <h1>Liste d\'utilisateurs</h1>
            </div>';
    //affichage du bouton ajouter
    echo  '<div>
                <section>
                    <button class="ajouter">
                        <a href="index.php?page=formUtilisateur&mode=ajouter">
                            Ajouter
                        </a>
                    </button>
                </section>
            </div>';
    echo  '<div class="espaceHMedium"></div>';
    echo  '<div>';
        //affichage des nom des colonnes
            echo  '<section class="nomColonnes">Nom</section>';
            echo  '<section class="nomColonnes">Prénom</section>';
            echo  '<section class="nomColonnes">Email</section>';
            echo  '<section class="nomColonnes">Role</section>';
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
            echo  '<section class="alignTextCenter">'. $value->getNom() .'</section>';
            echo  '<section class="alignTextCenter">'. $value->getPrenom() .'</section>';
            echo  '<section class="alignTextCenter">'. $value->getEmail() .'</section>';
            echo  '<section class="alignTextCenter">'. $value->getRole() .'</section>';
            //affichage des boutons détails, modifier et supprimer
            echo  '<section>
                        <button class="detail">
                            <a href="index.php?page=formUtilisateur&mode=voir&id='. $value->getIdUtilisateur() .'">
                                Voir
                            </a>
                        </button>
                    </section>';

            echo  '<section>
                        <button class="update">
                            <a href="index.php?page=formUtilisateur&mode=modifier&id='. $value->getIdUtilisateur() .'">
                                Modifier
                            </a>
                        </button>
                    </section>';
                        
            echo  '<section>
                        <button class="delete">
                            <a href="index.php?page=formUtilisateur&mode=supprimer&id='. $value->getIdUtilisateur() .'">
                                Supprimer
                            </a>
                        </button>
                    </section>';
        echo  '</div>';
        echo  '<div class="espaceHMedium"></div>';
    }
    echo  '<div class="espaceHMedium"></div>';
    echo '<a href="index.php?page=Accueil">
                    <button class="detail">Retour vers l\'accueil</button>
                </a>';
    echo  '</main>';