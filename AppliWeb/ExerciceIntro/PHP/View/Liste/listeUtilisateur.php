<?php
    // if (!isset($_SESSION)) {
    //     header('location:index.php?page=Default');
    // }
    // else if ($_SESSION['role'] !== 3) {
    //     header('location:index.php?page=Accueil');
    // }

    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = UtilisateursManager::getList();

    
    echo  '<main class="column borderBlack">';
    //affichage du titre de la liste
    echo  '<div>
                    <h1>Liste d\'utilisateurs</h1>
                </div>';
    //affichage du bouton ajouter
    echo  '<div><section>
                    <a href="index.php?page=formUtilisateur&mode=ajouter">
                        <button class="ajouter">Ajouter</button>
                    </a>
                </section></div>';
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
            echo  '<section>'. $value->getNom() .'</section>';
            echo  '<section>'. $value->getPrenom() .'</section>';
            echo  '<section>'. $value->getEmail() .'</section>';
            echo  '<section>'. $value->getRole() .'</section>';
            //affichage des boutons détails, modifier et supprimer
            echo  '<section>
                            <a href="index.php?page=formUtilisateur&mode=voir&id='. $value->getIdUtilisateur() .'">
                                <button class="detail">Voir</button>
                            </a>
                        </section>';

            echo  '<section>
                            <a href="index.php?page=formUtilisateur&mode=modifier&id='. $value->getIdUtilisateur() .'">
                                <button class="update">Modifier</button>
                            </a>
                        </section>';
                        
            echo  '<section>
                            <a href="index.php?page=formUtilisateur&mode=supprimer&id='. $value->getIdUtilisateur() .'">
                                <button class="delete">Supprimer</button>
                            </a>
                        </section>';
        echo  '</div>';
        echo  '<div class="espaceHMedium"></div>';
    }
    echo  '<div class="espaceHMedium"></div>';
    echo '<a href="index.php?page=Accueil">
                    <button class="detail">Retour vers l\'accueil</button>
                </a>';
    echo  '</main>';