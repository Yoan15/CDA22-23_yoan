<?php

global $regex;
$mode = $_GET['mode'];
    $disabled = " ";
    switch ($mode) {
        case "voir":
        case "supprimer":
            $disabled = " disabled ";
            break;
    }
//var_dump($_GET);

if (isset($_GET['id'])) {
    $elm = UtilisateursManager::GetUtilisateurById($_GET['id']);
} else {
    $elm = new Utilisateur();
}

echo '<main class="column">';
    echo '<form class="GridForm" action="index.php?page=actionUtilisateurs&mode='.$_GET['mode'].'" method="post"/>';

    echo '<div>
                <h1>Formulaire Utilisateurs</h1>
            </div>';
    echo '<div class="espaceHMedium"></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getIdUtilisateur().'" name=idUtilisateur></div>';
        echo '<section>';
        echo '<label>Nom : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getNom() .'" name="nom" pattern="'. $regex["alpha"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
        echo '<section>';
        echo '<label>Prénom : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getPrenom() .'" name="prenom" pattern="'. $regex["alpha"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
        echo '<section>';
        echo '<label>Email : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getEmail() .'" name="email" pattern="'. $regex["email"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
       // echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getMdp().'" name=mdp></div>';
        echo '<section>';
        echo '<label>Mot de passe : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getMdp() .'" name="mdp" pattern="'. $regex["pwd"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
        echo '<section>';
        echo '<label>Rôle : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getRole() .'" name="role" pattern="'. $regex["num"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
    echo '<div class="espaceHMedium"></div>';
    echo '<div>';
    echo '<section>
                <button class="delete">
                    <a href="index.php?page=listeUtilisateur">
                        Annuler
                    </a>
                </button>
            </section>';
    echo ($mode == "voir") ? " " : '<section>
                <button type="submit" class="ajouter">Valider</button>
            </section>';
    echo '</div>';
    echo '</form>';
    echo '</main>';