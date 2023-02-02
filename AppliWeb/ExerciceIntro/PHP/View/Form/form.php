<?php

function form(array $nomColonnes, string $table)
{
    $form = '<main class="column">';
    $form .= '<div>
                <h1>Formulaire d\'ajout de '. $table .'</h1>
            </div>';
    $form .= '<div class="espaceHMedium"></div>';
    foreach ($nomColonnes as $col) 
    {
        $form .= '<section>';
        $form .= '<label>'. $col .' : </label>';
        $form .= '<input type="text">';
        $form .= '</section>';
        $form .= '<div class="espaceHMedium"></div>';
    }
    $form .= '<div class="espaceHMedium"></div>';
    $form .= '<div>';
    $form .= '<section>
                <a href="index.php?page=liste">
                    <button class="delete">Annuler</button>
                </a>
            </section>';
    $form .= '<section>
                <a >
                    <button class="ajouter">Valider</button>
                </a>
            </section>';
    $form.='</div>';
    $form .= '</main>';
    return $form;
}