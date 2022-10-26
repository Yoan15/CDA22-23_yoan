<?php 

class Employes
{
    //attributs
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $poste;
    private $salaire;
    private $service;

    //getters & setters

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    public function getPoste()
    {
        return $this->poste;
    }

    public function setPoste($poste)
    {
        $this->poste = $poste;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setService($service)
    {
        $this->service = $service;
    }

    //constructeur
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

    //autres fonctions
    public function __toString()
    {
        return "Employé - Nom : [". $this->getNom() ."], Prenom : [". $this->getPrenom() ."], Date d'embauche : [". $this->getDateEmbauche() ."], Poste : [". $this->getPoste() ."], Salaire : [". $this->getSalaire() ."], Service : [". $this->getService() ."]";
    }

    public function anciennete()
    {
        $embauche = new DateTime($this->getDateEmbauche());
        $ajd = new DateTime();
        $anciennte = $embauche->diff($ajd);
        return $anciennte->format("L'employé a une ancienneté de %y ans.");
    }
}