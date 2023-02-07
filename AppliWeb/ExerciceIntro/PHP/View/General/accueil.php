<?php

echo '<main class="column">';
echo '<h1>Accueil</h1>';
echo '<div>';
        echo '<a href="?page=listePersonne">
                        <button class="detail">Liste des personnes</button>
                </a>';
        echo '<a href="?page=listeVille">
                        <button class="detail">Liste des villes</button>
                </a>';
        echo '<a href="?page=listeUtilisateur">
                <button class="detail">Liste des utilisateurs</button>
        </a>';
echo '</div>';
echo '</main>';