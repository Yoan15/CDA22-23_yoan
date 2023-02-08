<?php

echo '<main class="column">';
echo '<h1>Accueil</h1>';
echo '<div>';
        //echo '<section class=sectionAccueil>';
        echo '<div class=divAccueil>
                <a href="?page=listePersonne" class=lienAccueil>
                        <button class="detail boutonAccueil">Liste des personnes</button>
                </a></div>';
echo '</div>';
echo '<div>';
        echo '<div class=divAccueil>
                <a href="?page=listeVille" class=lienAccueil>
                        <button class="detail boutonAccueil">Liste des villes</button>
                </a></div>';
echo '</div>';
        //echo '</section>';
echo '<div>';
echo '<div class=divAccueil>
        <a href="?page=listeUtilisateur" class=lienAccueil>
                <button class="detail boutonAccueil">Liste des utilisateurs</button>
        </a></div>';
echo '</div>';
echo '</main>';