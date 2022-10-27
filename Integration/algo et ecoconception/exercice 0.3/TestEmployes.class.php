<?php 

class TestEmployes
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
        $this->dateEmbauche = $dateEmbauche->format("Y-m-d");
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
        $anciennete = $embauche->diff($ajd);
        $anciennete = $anciennete->format("%y");
        return $anciennete;
    }

    public function prime()
    {
        $prime = (5*$this->getSalaire()/100) + ($this->anciennete()*$this->getSalaire()/100);
        $ajd = new DateTime("2022-11-30");
        $ajd = $ajd->format("d-m");
        $dateVersement = new DateTime("2023-11-30");
        $dateVersement = $dateVersement->format("d-m");
        if ($ajd == $dateVersement) {
            return "Ordre de transfert - à la banque d'un montant de ".$prime." euros confirmé.";
        }
        return "Pas de versement";
    }

    public function nombreEmployes($tabEmployes)
    {
        $nombreEmployes = count($tabEmployes);
        return "Il y a ". $nombreEmployes. " employés.";
    }

    // fonctionne pour nom et prénom
    // public function infosAlphaNomPrenom($tabEmployes)
    // {
    //     sort($tabEmployes);
    //     foreach ($tabEmployes as $value) {
    //         echo "Nom : " . $value["nom"]. ", Prenom : ". $value["prenom"]."\n";
    //     }
    // }

    public static function cmp_nom($a, $b)
    {
        return strtolower($a->nom) <=> strtolower($b->nom);
    }

    // public function infosAlphaNomPrenom($tabEmployes)
    // {
        
    // }

    //ne fonctionne pas avec les services
    // public function infosAlphaServiceNomPrenom($tabEmployes)
    // {
    //     sort($tabEmployes);
    //     foreach ($tabEmployes as $value) {
    //         echo "Service : ".$value["service"].", Nom : " . $value["nom"]. ", Prenom : ". $value["prenom"]."\n";
    //     }
    // }

    // public function masseSalariale()
    // {
        
    // }
}