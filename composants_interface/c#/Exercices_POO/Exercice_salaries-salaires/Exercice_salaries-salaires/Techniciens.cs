using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Techniciens : Employes
    {
        const double SALAIRE = 40;


        public Techniciens(string nom, string prenom, int age) : base(nom, prenom, age, SALAIRE)
        {
        }

        public override double CalculerSalaire()
        {
            return SALAIRE;
        }
    }
}
