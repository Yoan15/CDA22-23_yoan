<?php

global $regex;

echo '<main class="column">';
    echo '<form class="GridForm" action="index.php?page=actionConnexion" method="post"/>';

    echo '<div>
                <h1>Formulaire de connexion</h1>
            </div>';
    echo '<div class="espaceHMedium"></div>';
        echo '<section>';
        echo '<label>E-mail : </label>';
        echo '<input type="text" name="email" pattern="'. $regex["email"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
        echo '<section>';
        echo '<label>Mot de passe : </label>';
        echo '<input type="text" name="mdp" pattern="'. $regex["pwd"] .'">';
        echo '</section>';
        echo '<div class="espaceHMedium"></div>';
    echo '<div class="espaceHMedium"></div>';
    echo '<div>';
    // echo '<section>
    //             <button class="delete">
    //                 <a href="index.php?page=listeVille">
    //                     Annuler
    //                 </a>
    //             </button>
    //         </section>';
    echo '<section>
                <button type="submit" class="ajouter">Se connecter</button>
            </section>';
    echo '</div>';
    echo '</form>';
    echo '</main>';