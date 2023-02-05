<?php

function formPersonne()
{
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
        $elm = PersonnesManager::GetPersonneById($_GET['id']);
    } else {
        $elm = new Personne();
    }

    $form = '<main class="column">';
    // if (isset($_GET["action"]) && $_GET["action"] == "modifier")
    // {
        
    // }

    $form .= '<form class="GridForm" action="index.php?page=actionPersonnes&mode='.$_GET['mode'].'" method="post"/>';
    
    $form .= '<div>
                <h1>Formulaire d\'ajout de Personne</h1>
            </div>';
    $form .= '<div class="espaceHMedium"></div>';
    // foreach ($nomColonnes as $col) 
    // {
        $form.='<div class="noDisplay"><input type="hidden" value="'.$elm->getId().'" name=Id></div>';
        $form .= '<section>';
        $form .= '<label>Nom : </label>';
        $form .= '<input type="text">';
        $form .= '<label>Prénom : </label>';
        $form .= '<input type="text">';
        $form .= '<label>Nom : </label>';
        $form .= '<input type="text">';
        $form .= '</section>';
        $form .= '<div class="espaceHMedium"></div>';
    //}
    $form .= '<div class="espaceHMedium"></div>';
    $form .= '<div>';
    $form .= '<section>
                <a href="index.php?page=listePersonne">
                    <button class="delete">Annuler</button>
                </a>
            </section>';
    $form .= '<section>
                <a >
                    <button class="ajouter">Valider</button>
                </a>
            </section>';
    $form .= '</div>';
    $form .= '</form>';
    $form .= '</main>';
    return $form;
}