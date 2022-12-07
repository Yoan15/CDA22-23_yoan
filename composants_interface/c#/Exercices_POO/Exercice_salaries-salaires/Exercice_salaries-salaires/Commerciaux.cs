using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Commerciaux : Employes
    {
        public int NbPrime { get; set; }

        public Commerciaux(string nom, string prenom, int age, double salaire, int nbPrime) : base(nom, prenom, age, salaire)
        {
            NbPrime = nbPrime;
        }
    }
}
