<?php

class De
{
    /************Autres Méthodes************/

    public static function lanceLeDe() //pas d'attributs donc methode static
    {
        return rand(1, 6); //retourne un nombre aléatoire entre 1 et 6 pour simuler le lancer d'un dé
    }
}