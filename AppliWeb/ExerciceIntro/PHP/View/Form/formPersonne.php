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
        $elm = PersonnesManager::GetPersonneById($_GET['id']);
    } else {
        $elm = new Personne();
    }

    echo '<main class="column">';

    echo '<form class="GridForm" action="index.php?page=actionPersonnes&mode='.$_GET['mode'].'" method="post"/>';
    
    echo '<div>
                <h1>Formulaire d\'ajout de Personne</h1>
            </div>';
    echo '<div class="espaceHMedium"></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getId().'" name=id></div>';
        echo '<section>';
        echo '<label>Nom : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getNom() .'" name="nom">';
        echo '<label>Prénom : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getPrenom() .'" name="prenom">';
        echo '<label>Ville : </label>';
        if ($mode == "voir" || $mode == "supprimer") {
            echo combobox($elm->getIdVille(), "Ville", ["nomVille"], null, "disabled");
        } else {
            echo combobox($elm->getIdVille(), "Ville", ["nomVille"]);
        }
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
    echo '<div class="espaceHMedium"></div>';
    echo '<div>';
        echo '<section>
                <button class="delete">
                    <a href="index.php?page=listePersonne">
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