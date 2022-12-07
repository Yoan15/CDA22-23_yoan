using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Employes
    {
        public string Nom { get; set; }

        public string Prenom { get; set; }

        public int Age { get; set; }

        public double Salaire { get; set; }

        public Employes(string nom, string prenom, int age, double salaire)
        {
            Nom = nom;
            Prenom = prenom;
            Age = age;
            Salaire = salaire;
        }

        public override string ToString()
        {
            return $"Nom : {Nom}\tPrenom : {Prenom}\tAge : {Age}\tSalaire : {Salaire}";
        }

        public void Afficher()
        {
            Console.WriteLine(this);
        }

        public virtual Double CalculerSalaire()
        {
            return Salaire;
        }
    }
}
