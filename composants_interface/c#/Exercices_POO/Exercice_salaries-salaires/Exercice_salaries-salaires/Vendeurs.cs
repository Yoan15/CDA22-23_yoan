using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Vendeurs : Commerciaux
    {
        const double SALAIRE = 50;
        const int VALPRIME = 2;
        public Vendeurs(string nom, string prenom, int age, int nbPrime) : base(nom, prenom, age, SALAIRE, nbPrime)
        {
        }

        public override double CalculerSalaire()
        {
            return SALAIRE + NbPrime * VALPRIME;
        }

        public override string ToString()
        {
            return base.ToString() + "\tdont salaire de : " + SALAIRE + " + " + NbPrime + " primes à " + VALPRIME;
        }
    }
}
