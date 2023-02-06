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
    echo '<main class="column">';
    echo '<form class="GridForm" action="index.php?page=actionVilles&mode='.$_GET['mode'].'" method="post"/>';

    echo '<div>
                <h1>Formulaire d\'ajout de Ville</h1>
            </div>';
    echo '<div class="espaceHMedium"></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getIdVille().'" name=idVille></div>';
        echo '<section>';
        echo '<label>Nom ville : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getNomVille() .'" name="nomVille">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
    echo '<div class="espaceHMedium"></div>';
    echo '<div>';
    echo '<section>
                <a href="index.php?page=listeVille">
                    <button class="delete">
                        Annuler
                    </button>
                </a>
            </section>';
    echo ($mode == "voir") ? " " : '<section>
                <button type="submit" class="ajouter">Valider</button>
            </section>';
    echo '</div>';
    echo '</form>';
    echo '</main>';