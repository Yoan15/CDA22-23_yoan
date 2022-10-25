<?php

class Rectangle
{
    private $longueur;
    private $largeur;

    

    public function getLongueur()
    {
        return $this->longueur;
    }

    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }

    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }
}
