<?php

function formVille()
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
        $elm = VillesManager::GetVilleById($_GET['id']);
    } else {
        $elm = new Ville();
    }
    $form = '<main class="column">';
    // if (isset($_GET["action"]) && $_GET["action"] == "modifier")
    // {
        
    // }
    
    $form .= '<form class="GridForm" action="index.php?page=actionVilles&mode='.$_GET['mode'].'" method="post"/>';

    $form .= '<div>
                <h1>Formulaire d\'ajout de Ville</h1>
            </div>';
    $form .= '<div class="espaceHMedium"></div>';
    // foreach ($nomColonnes as $col) 
    // {
        $form.='<div class="noDisplay"><input type="hidden" value="'.$elm->getIdVille().'" name=IdVille></div>';
        $form .= '<section>';
        $form .= '<label>Nom ville : </label>';
        $form .= '<input type="text" '. $disabled .' value="'. $elm->getNomVille() .'" name="nomVille">';
        $form .= '</section>';
        $form .= '<div class="espaceHMedium"></div>';
    //}
    $form .= '<div class="espaceHMedium"></div>';
    $form .= '<div>';
    $form .= '<section>
                <a href="index.php?page=listeVille">
                    <button class="delete">Annuler</button>
                </a>
            </section>';
    $form .= ($mode == "voir") ? " " : '<section>
                <a >
                    <button class="ajouter">Valider</button>
                </a>
            </section>';
    $form.='</div>';
    $form.='</form>';
    $form .= '</main>';
    return $form;
}