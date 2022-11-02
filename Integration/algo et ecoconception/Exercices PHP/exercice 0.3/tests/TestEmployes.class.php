<?php 

class TestEmployes
{
    //attributs
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_poste;
    private $_salaire;
    private $_service;
    private static $_compteur = 0 ;

    //getters & setters

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche(DateTime $dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function getPoste()
    {
        return $this->_poste;
    }

    public function setPoste($poste)
    {
        $this->_poste = $poste;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }

    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }

    //constructeur
    public function __construct(array $options=[])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
        self::setCompteur(self::getCompteur() + 1); //on increment le compteur
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
        $data = "*****EMPLOYE*****\n";
        $data .= "Employé - Nom : [". $this->getNom() ."], Prenom : [". $this->getPrenom() ."], Date d'embauche : [". $this->getDateEmbauche()->format('Y-m-d') ."], Poste : [". $this->getPoste() ."], Salaire : [". $this->getSalaire() ."], Service : [". $this->getService() ."]";
        return $data;
    }

    public function anciennete()
    {
        $embauche = $this->getDateEmbauche();
        $ajd = new DateTime();
        $anciennete = $embauche->diff($ajd);
        $anciennete = $anciennete->format("%y");
        return $anciennete;
    }

    public function prime()
    {
        $prime = (5*$this->getSalaire()*1000/100) + ($this->anciennete()*$this->getSalaire()*1000/100);
        $ajd = new DateTime("2022-11-30");
        $ajd = $ajd->format("d-m");
        $dateVersement = new DateTime("2023-11-30");
        $dateVersement = $dateVersement->format("d-m");
        if ($ajd == $dateVersement) {
            return "Ordre de transfert - à la banque d'un montant de ".$prime." euros confirmé.";
        }
        return "Pas de versement";
    }

    // fonctionne pour nom et prénom
    // public function infosAlphaNomPrenom($tabEmployes)
    // {
    //     sort($tabEmployes);
    //     foreach ($tabEmployes as $value) {
    //         echo "Nom : " . $value["nom"]. ", Prenom : ". $value["prenom"]."\n";
    //     }
    // }

    public static function cmpNomPrenom($a, $b)
    {
        if (strcmp($a->getNom(), $b->getNom() == 0)) {
            return strcmp($a->getPrenom(), $b->getPrenom() == 0);
        }
        return strcmp($a->getNom(), $b->getNom());
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