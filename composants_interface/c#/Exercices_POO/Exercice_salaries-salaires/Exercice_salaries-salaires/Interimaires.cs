using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Interimaires : Techniciens
    {
        const double VALSAL = 0.5;

        public int NbHeure { get; set; }

        public Interimaires(string nom, string prenom, int age, int nbHeure) : base(nom, prenom, age)
        {
        }

        public override double CalculerSalaire()
        {
            return NbHeure * VALSAL;
        }
    }
}
