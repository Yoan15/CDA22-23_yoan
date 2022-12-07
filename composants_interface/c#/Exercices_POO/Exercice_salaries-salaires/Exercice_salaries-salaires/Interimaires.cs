using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Interimaires : Techniciens
    {
        const double ValSal = 0.5;
        public int NbHeure { get; set; }

        public Interimaires(string nom, string prenom, int age, double salaire, int nbHeure) : base(nom, prenom, age, salaire)
        {
            NbHeure = nbHeure;
        }
    }
}
