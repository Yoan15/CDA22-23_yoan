<?php

class Cercles
{
    private $diametre;

    public function getDiametre()
    {
        return $this->diametre;
    }

    public function setDiametre($diametre)
    {
        $this->diametre = $diametre;
    }

    public function __construct(array $options=[])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set". ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

    public function perimetre()
    {
        return $this->getDiametre()*pi();
    }

    public function aire()
    {
        $r = $this->getDiametre()/2;
        return pi()*$r*$r;
    }

    public function afficherCercle()
    {
        return "Diamètre : [". $this->getDiametre() ."] - Perimètre [". $this->perimetre() ."] - Aire [". $this->aire() ."]";
    }
}
