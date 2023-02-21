<?php

global $regex;

echo '<main class="column center">';
    echo '<form class="GridForm" action="" method="post">';
        echo '<div>
                <h1>Formaulaire de vote</h1>
            </div>';
            echo '<div class="espaceHMedium"></div>';
            echo '<h2>Veuillez voter pour votre candidat</h2>';
            echo '<div class="espaceHMedium"></div>';
            echo '<section>';
                echo '<input type="radio" id="Chat" value="Chat" name="reponse">';
                echo '<label for="Chat">Chat</label>';
            echo '</section>';
            echo '<section>';
                echo '<input type="radio" id="Chien" value="Chien" name="reponse">';
                echo '<label for="Chien">Chien</label>';
            echo '</section>';
            echo '<section>';
                echo '<label>Veuillez saisir votre code de vote : </label>';
                echo '<input type="text" value="" name="numCode" pattern="'. $regex["alphaNum"] .'" required>';
            echo '</section>';
            echo '<section>';
                echo '<button type="submit" class="ajouter">Valider</button>';
            echo '</section>';
    echo '</form>';
echo '</main>';