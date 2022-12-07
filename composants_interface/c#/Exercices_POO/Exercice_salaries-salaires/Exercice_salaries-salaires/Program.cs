using System;
using System.Collections.Generic;

namespace Exercice_salaries_salaires
{
    class Program
    {
        static void Main(string[] args)
        {
            //Employes empTest;
            //empTest = new Employes("Dupont", "David", 35, 50);
            //Console.WriteLine(empTest);

            Representants rep1 = new Representants("Dupont", "Giselle", 35, 5, 14);
            Representants rep2 = new Representants("Dupont", "Georges", 29, 10, 2);
            Vendeurs ven1 = new Vendeurs("Doe", "Paul", 26, 12);
            Vendeurs ven2 = new Vendeurs("Doe", "Pierre", 37, 5);
            Vendeurs ven3 = new Vendeurs("Doe", "Jacques", 42, 1);

            List<Commerciaux> comm = new List<Commerciaux>();
            comm.Add(ven1);
            comm.Add(ven2);
            comm.Add(ven3);
            comm.Add(rep1);
            comm.Add(rep2);
            foreach (var c in comm)
            {
                Console.WriteLine(c);
            }

            //Techniciens techTest;
            //techTest = new Techniciens("Dupuis", "Claude", 26, 50);
            //Console.WriteLine(techTest);
        }
    }
}
