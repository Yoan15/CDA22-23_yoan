<?php

global $regex;

echo '<main class="column center">';
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
                echo '<input type="password" name="mdp" pattern="'. $regex["pwd"] .'">';
            echo '</section>';
            echo '<div class="espaceHMedium"></div>';
        echo '<div class="espaceHMedium"></div>';
        echo '<div>';
            echo '<section>
                        <button type="submit" class="ajouter">Se connecter</button>
                    </section>';
            echo '<section>
                    <button class="detail">
                        <a href="index.php?page=formInscription">
                            Cliquez ici pour accéder à l\'inscription
                        </a>
                    </button>
                </section>';
        echo '</div>';
    echo '</form>';
echo '</main>';