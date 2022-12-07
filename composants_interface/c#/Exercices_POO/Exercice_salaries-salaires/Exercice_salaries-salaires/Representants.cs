using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Representants : Commerciaux
    {
        const double SALAIRE = 50;
        const int VALPRIME = 5;
        const int VALDEPLACEMENT = 1;

        public int NbDeplacement { get; set; }
        public Representants(string nom, string prenom, int age, int nbPrime, int nbDeplacement) : base(nom, prenom, age, SALAIRE, nbPrime)
        {
            NbDeplacement = nbDeplacement;
        }

        public override double CalculerSalaire()
        {
            return SALAIRE + NbPrime * VALPRIME + NbDeplacement * VALDEPLACEMENT;
        }

        public override string ToString()
        {
            return base.ToString() + "\tdont salaire de " + SALAIRE + " + " + NbPrime + " primes à " + VALPRIME + " + " + NbDeplacement + " déplacements à " + VALDEPLACEMENT;
        }
    }
}
