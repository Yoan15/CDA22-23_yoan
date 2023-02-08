<?php

function nav()
{
    $nav = '<nav>
                <ol>
                    <li>
                        <a href="index.php?page=Accueil">Accueil</a>
                    </li>
                    <li>
                        <a href="index.php?page=listePersonne">Liste des personnes</a>
                    </li>
                    <li>
                        <a href="index.php?page=listeVille">Liste des villes</a>
                    </li>
                    <li>
                        <a href="index.php?page=listeUtilisateur">Liste des utilisateurs</a>
                    </li>
                </ol>
            </nav>';
    return $nav;
}