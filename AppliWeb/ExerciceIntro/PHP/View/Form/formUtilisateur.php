<?php

global $regex;

echo '<main class="column">';
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