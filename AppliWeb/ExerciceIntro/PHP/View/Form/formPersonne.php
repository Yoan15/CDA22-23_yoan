<?php

// function formPersonne()
// {
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
    // if (isset($_GET["action"]) && $_GET["action"] == "modifier")
    // {
        
    // }

    echo '<form class="GridForm" action="index.php?page=actionPersonnes&mode='.$_GET['mode'].'" method="post"/>';
    
    echo '<div>
                <h1>Formulaire d\'ajout de Personne</h1>
            </div>';
    echo '<div class="espaceHMedium"></div>';
    // foreach ($nomColonnes as $col) 
    // {
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getId().'" name=Id></div>';
        echo '<section>';
        echo '<label>Nom : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getNom() .'">';
        echo '<label>Prénom : </label>';
        echo '<input type="text" '. $disabled .' value="'. $elm->getPrenom() .'">';
        echo '<label>Ville : </label>';

        echo combobox($elm->getIdVille(), "Ville", ["nomVille"]);
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
    //}
    echo '<div class="espaceHMedium"></div>';
    echo '<div>';
    echo '<section>
                <a href="index.php?page=listePersonne">
                    <button class="delete">Annuler</button>
                </a>
            </section>';
    echo '<section>
                <a >
                    <button class="ajouter">Valider</button>
                </a>
            </section>';
    echo '</div>';
    echo '</form>';
    echo '</main>';
//     return $form;
// }