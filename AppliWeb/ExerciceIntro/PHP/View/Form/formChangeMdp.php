<?php

global $regex;
//var_dump($_GET);

if (isset($_GET['id'])) {
    $elm = UtilisateursManager::GetUtilisateurById($_GET['id']);
} else {
    $elm = new Utilisateur();
}

echo '<main class="column">';
    echo '<form class="GridForm" action="index.php?page=actionChangeMdp" method="post"/>';

    echo '<div>
                <h1>Changement de mot de passe</h1>
            </div>';
    echo '<div class="espaceHMedium"></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getIdUtilisateur().'" name=idUtilisateur></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getNom().'" name=idUtilisateur></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getPrenom().'" name=idUtilisateur></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getEmail().'" name=idUtilisateur></div>';
        echo '<section>';
        echo '<label>Nouveau mot de passe : </label>';
        echo '<input type="text" name="mdp" pattern="'. $regex["pwd"] .'" required>';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
        echo '<section>';
        echo '<label>Confirmation du nouveau mot de passe : </label>';
        echo '<input type="text" name="confirmMdp" pattern="'. $regex["pwd"] .'" required>';
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
    echo '<section>
                <button type="submit" class="ajouter">Valider</button>
            </section>';
    echo '</div>';
    echo '</form>';
    echo '</main>';