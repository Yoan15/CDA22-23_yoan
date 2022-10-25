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

    public function __construct($longeur, $largeur)
    {
        $this->setLongueur($longeur);
        $this->setLargeur($largeur);
    }

    public function perimetre()
    {
        return "Le périmètre du rectangle est ".($this->longueur+$this->largeur)*2;
    }

    public function aire()
    {
        return "L' aire du rectangle est ".$this->longueur*$this->largeur.".";
    }

    public function estCarre()
    {
        
    }

    public function afficherRectangle()
    {
        
    }
}
