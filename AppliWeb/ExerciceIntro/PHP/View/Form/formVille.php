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

    if (isset($_GET['id'])) {
        $elm = VillesManager::GetVilleById($_GET['id']);
    } else {
        $elm = new Ville();
    }
    echo '<main class="column center">';
    echo '<form class="GridForm" action="index.php?page=actionVilles&mode='.$_GET['mode'].'" method="post"/>';
        echo '<div>
                <h1>Formulaire d\'ajout de Ville</h1>
            </div>';
        echo '<div class="espaceHMedium"></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getIdVille().'" name=idVille></div>';
        echo '<section>';
            echo '<label>Nom ville : </label>';
            echo '<input type="text" '. $disabled .' value="'. $elm->getNomVille() .'" name="nomVille" pattern="'. $regex["alpha"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';

        echo '<div id=personne></div>';
        echo '<template id="pers">
                <div></div>
                <div class="pers"></div>
                <div></div>
                <div></div>
            </template>';
        echo '<div class="espaceHMedium"></div>';
        echo '<div>';
            echo '<section>
                    <button class="delete">
                        <a href="index.php?page=listeVille">
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