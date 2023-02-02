<?php

function form()
{
    $form = '<div><h1>Je suis un formulaire!!!</h1></div>';
    $form .= '<div>
                <a href="index.php?page=liste">
                    <button class="delete">Annuler</button>
                </a>
            </div>';
    return $form;
}