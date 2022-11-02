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
    private TestAgences $_agence;
    private $_enfants = [];

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

    public function getAgence()
    {
        return $this->_agence;
    }

    public function setAgence(TestAgences $agence)
    {
        $this->_agence = $agence;
    }

    public function getEnfants()
    {
        return $this->_enfants;
    }

    public function setEnfants(array $enfants)
    {
        $this->_enfants = $enfants;
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
        $data .= "Employé - Nom : [". $this->getNom() ."],\n Prenom : [". $this->getPrenom() ."],\n Date d'embauche : [". $this->getDateEmbauche()->format('Y-m-d') ."],\n Poste : [". $this->getPoste() ."],\n Salaire : [". $this->getSalaire() ."],\n Service : [". $this->getService() ."],\n";
        $data .= $this->chequeVacances() ? "L'employé peut bénificier des chèques vacances.\n" : "L'employé ne peut pas bénificier des chèques vacances.\n";
        $data .= "\n *****AGENCE*****\n ".$this->getAgence()->__toString();
        $data .= "\n *****ENFANTS*****\n ";
        if (count($this->getEnfants()) > 0) 
        {
            foreach ($this->getEnfants() as $enfant) 
            {
                $data .= $enfant->__toString();
            }
        }
        else
        {
            $data .= "pas d'enfants";
        }
        $data .= "\n*****CHEQUES NOEL*****\n";
        $cheques = $this->chequeNoel();
        if (array_sum($cheques) > 0) 
        {
            foreach ($cheques as $key => $nbCheque) 
            {
                if ($nbCheque > 0) 
                {
                    $data .= $nbCheque. " chèque(s) de  ".$key."\n";
                }
            }
        }
        else 
        {
            $data .= "pas de chèques noël";
        }
        return $data;
    }

    public function anciennete()
    {
        $ajd = new DateTime();
        $interval = $ajd->diff($this->getDateEmbauche(), true); //true pour obliger l'intervale a être positif
        $anciennete = $interval->format("%y")*1; // *1 pour avoir un int
        return $anciennete;
    }

    // public function prime()
    // {
    //     $prime = (5*$this->getSalaire()*1000/100) + ($this->anciennete()*$this->getSalaire()*1000/100);
    //     $ajd = new DateTime("2022-11-30");
    //     $ajd = $ajd->format("d-m");
    //     $dateVersement = new DateTime("2023-11-30");
    //     $dateVersement = $dateVersement->format("d-m");
    //     if ($ajd == $dateVersement) {
    //         return "Ordre de transfert - à la banque d'un montant de ".$prime." euros confirmé.";
    //     }
    //     return "Pas de versement";
    // }

    public function primeSalaire()
    {
        return $this->getSalaire()*1000 *0.05; //calcul de la prime annuelle
    }

    public function primeAnciennete()
    {
        return $this->getSalaire()*1000 * 0.02 * $this->anciennete(); //calcul de la prime d'anciennete
    }

    public function prime()
    {
        return $this->primeSalaire() + $this->primeAnciennete(); //montant total de la prime
    }

    public function equalsTo($obj)
    {
        return true;
    }

    public static function cmpNomPrenom($obj1, $obj2) //comparaison nom et prenom
    {
        if (strcmp($obj1->getNom(), $obj2->getNom() == 0)) 
        {
            return strcmp($obj1->getPrenom(), $obj2->getPrenom());
        }
        return strcmp($obj1->getNom(), $obj2->getNom());
    }

    public function masseSalariale()
    {
        return $this->getSalaire() * 1000 + $this->prime();
    }

    public static function cmpServiceNomPrenom($obj1, $obj2) //comparaison du service ou appel fonction cmp nom et prenom
    {
        if ($obj1->getService() < $obj2->getService()) {
            return -1;
        } 
        elseif ($obj1->getService() > $obj2->getService()) 
        {
            return 1;  
        } 
        else 
        {
            return self::cmpNomPrenom($obj1, $obj2);
        }
    }

    public function chequeVacances()
    {
        return ($this->anciennete() >= 1); //verification si l'ancienneté est sup ou égale à 1 an
    }

    public function chequeNoel()
    {
        $cheque = ["0" => 0, "20" => 0, "30" => 0, "50" => 0];
        foreach ($this->getEnfants() as $enfant) 
        {
            $cheque[$enfant->montantChequeNoel()] += 1;
        }
        $cheque["0"] = 0;
        return $cheque;
    }
}