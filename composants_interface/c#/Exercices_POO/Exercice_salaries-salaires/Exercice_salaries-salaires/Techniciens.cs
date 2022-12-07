using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Techniciens : Employes
    {
        const double Salaire = 40;
        public Techniciens(string nom, string prenom, int age, double salaire) : base(nom, prenom, age, salaire)
        {
        }
    }
}
