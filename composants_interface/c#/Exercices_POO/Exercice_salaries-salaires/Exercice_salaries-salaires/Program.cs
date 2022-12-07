using System;
using System.Collections.Generic;

namespace Exercice_salaries_salaires
{
    class Program
    {
        static void Main(string[] args)
        {
            Entreprise e = new Entreprise("Promo IRIS");
            e.Embaucher(new Representants("Dupont", "Giselle", 35, 5, 14));
            e.Embaucher(new Representants("Dupont", "Georges", 29, 10, 2));
            e.Embaucher(new Vendeurs("Doe", "Paul  ", 26, 12));
            e.Embaucher(new Vendeurs("Doe", "Pierre", 37, 5));
            e.Embaucher(new Vendeurs("Doe", "Jacques", 42, 1));
            e.Embaucher(new Techniciens("Noble", "Robert", 46));
            e.Embaucher(new Techniciens("Noble", "Raymond", 58));
            e.Embaucher(new Interimaires("Bon", "Jean-Claude", 28, 80));
            Console.WriteLine(e);
        }
    }
}
