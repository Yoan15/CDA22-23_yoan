<?php

function form()
{
    $form = '<main class="column">';
    $form .= '<div>
                <h1>Je suis un formulaire!!!</h1>
            </div>';
    $form .= '<div class="espaceHMedium"></div>';
    $form .= '<section>';
    $form .= '<label>test : </label>';
    $form .= '<input type="text">';
    $form .= '</section>';
    $form .= '<div class="espaceHMedium"></div>';
    $form .= '<section>';
    $form .= '<label>test2</label>';
    $form .= '<input type="text">';
    $form .= '</section>';
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