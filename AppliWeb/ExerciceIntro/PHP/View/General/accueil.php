<?php

echo '<main class="column">';
echo '<h1>Accueil</h1>';
echo '<div>';
        echo '<section class=sectionAccueil>';
        echo '<a href="?page=listePersonne">
                        <button class="detail boutonAccueil">Liste des personnes</button>
                </a>';
        echo '<a href="?page=listeVille">
                        <button class="detail boutonAccueil">Liste des villes</button>
                </a>';
        echo '<a href="?page=listeUtilisateur">
                <button class="detail boutonAccueil">Liste des utilisateurs</button>
        </a>';
        echo '</section>';
echo '</div>';
echo '<div></div>';
echo '</main>';