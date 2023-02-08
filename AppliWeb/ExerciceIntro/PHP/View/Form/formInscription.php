<?php

global $regex;
//var_dump($_SESSION);

echo '<main class="column center">';
    echo '<form class="GridForm" action="index.php?page=actionInscription" method="post"/>';
        echo '<div>
                    <h1>Formulaire d\'inscription</h1>
                </div>';
        echo '<div class="espaceHMedium"></div>';
            echo '<section>';
                echo '<label>Nom : </label>';
                echo '<input type="text" name="nom" pattern="'. $regex["alpha"] .'" required>';
            echo '</section>';
            echo '<div class="espaceHMedium"></div>';
            echo '<section>';
                echo '<div class="espaceHMedium"></div>';
                echo '<label>Prénom : </label>';
                echo '<input type="text" name="prenom" pattern="'. $regex["alpha"] .'" required>';
            echo '</section>';
            echo '<div class="espaceHMedium"></div>';
            echo '<section>';
                echo '<label>E-mail : </label>';
                echo '<input type="text" name="email" pattern="'. $regex["email"] .'" required>';
            echo '</section>';
            echo '<div class="espaceHMedium"></div>';
            echo '<section>';
                echo '<label>Mot de passe : </label>';
                echo '<input type="password" name="mdp" pattern="'. $regex["pwd"] .'" required>';
            echo '</section>';
            echo '<div class="espaceHMedium"></div>';
            echo '<section>';
                echo '<label>Confirmation du mot de passe : </label>';
                echo '<input type="password" name="confirmMdp" pattern="'. $regex["pwd"] .'" required>';
            echo '</section>';
            echo '<div class="espaceHMedium"></div>';
        echo '<div class="espaceHMedium"></div>';
        echo '<div>';
            echo '<section>
                        <button type="submit" class="ajouter">S\'inscrire</button>
                    </section>';
            echo '<section>
                    <button class="detail">
                        <a href="index.php?page=formConnexion">
                            Cliquez ici pour accéder au formulaire de connexion.
                        </a>
                    </button>
                </section>';
        echo '</div>';
    echo '</form>';
echo '</main>';