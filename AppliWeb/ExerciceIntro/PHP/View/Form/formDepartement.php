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
        $elm = DepartementsManager::GetDepartementById($_GET['id']);
    } else {
        $elm = new Departement();
    }
    echo '<main class="column center">';
    echo '<form class="GridForm" action="index.php?page=actionDepartements&mode='.$_GET['mode'].'" method="post"/>';
        echo '<div>
                <h1>Formulaire d\'ajout de Departement</h1>
            </div>';
        echo '<div class="espaceHMedium"></div>';
        echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getIdDepartement().'" name=idDepartement></div>';
        echo '<section>';
            echo '<label>Nom Departement : </label>';
            echo '<input type="text" '. $disabled .' value="'. $elm->getNomDepartement() .'" name="nomDepartement" pattern="'. $regex["*"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
        // if ($mode == "voir") {
        //     echo '<div><p>Personnes habitant dans cette ville : </p></div>';
        //     echo '<div id=personne></div>';
        // }
        
        // echo '<template id="perso">
        //         <div class="pers"></div>
        //     </template>';
        echo '<div class="espaceHMedium"></div>';
        echo '<div>';
            echo '<section>
                    <button class="delete">
                        <a href="index.php?page=listeDepartement">
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