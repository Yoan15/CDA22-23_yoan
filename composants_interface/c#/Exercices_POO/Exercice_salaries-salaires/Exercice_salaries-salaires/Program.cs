using System;

namespace Exercice_salaries_salaires
{
    class Program
    {
        static void Main(string[] args)
        {
            //Employes empTest;
            //empTest = new Employes("Dupont", "David", 35, 50);
            //Console.WriteLine(empTest);

            Representants rep1 = new Representants("Dupont", "David", 35, 10, 2);
            //Console.WriteLine(repTest);

            Vendeurs ven1 = new Vendeurs("Doe", "John", 26, 5);
            //Console.WriteLine(venTest);

            //Techniciens techTest;
            //techTest = new Techniciens("Dupuis", "Claude", 26, 50);
            //Console.WriteLine(techTest);
        }
    }
}
