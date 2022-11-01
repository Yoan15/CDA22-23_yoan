<?php

class Voiture
{
    private $couleur;
    private $marque;
    private $modele;
    private $nbKilometres;
    private $motorisation;

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function getNbKilometres()
    {
        return $this->nbKilometres;
    }

    public function setNbKilometres($nbKilometres)
    {
        $this->nbKilometres = $nbKilometres;
    }

    public function getMotorisation()
    {
        return $this->motorisation;
    }

    public function setMotorisation($motorisation)
    {
        $this->motorisation = $motorisation;
    }

    public function __construct($couleur, $marque, $modele, $nbKilometres, $motorisation)
    {
        $this->setCouleur($couleur);
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setNbKilometres($nbKilometres);
        $this->setMotorisation($motorisation);
    }

    public function descriptionVoiture()
    {
        return "Cette voiture est un ". $this->modele ." de la marque ". $this->marque .", de couleur ". $this->couleur .", de motorisation ". $this->motorisation .", avec ". $this->nbKilometres ." kilomètres. ";
    }

    public function rouler($kilometres)
    {
        return $this->setNbKilometres($this->nbKilometres + $kilometres);
    }
}
