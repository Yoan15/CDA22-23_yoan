using System;

namespace Exercice_voiture
{
    class Program
    {
        static void Main(string[] args)
        {
            Voiture voiture1;
            Voiture voiture2;
            voiture1 = new Voiture("jaune", "Citroën", "C4", 10000, MotorisationEnum.Essence);
            voiture2 = new Voiture("rouge", "Renault", "Kadjar", 8500, MotorisationEnum.Diesel);

            Console.WriteLine(voiture1.Description());
            Console.WriteLine(voiture2.Description());
            Console.WriteLine("------------------------------------------------------------------");
            voiture1.Rouler(50);
            voiture2.Rouler(500);
            Console.WriteLine(voiture1.Description());
            Console.WriteLine(voiture2.Description());
            Console.WriteLine("------------------------------------------------------------------");
            voiture1.Rouler(1000);
            voiture2.Rouler(600);
            Console.WriteLine(voiture1.Description());
            Console.WriteLine(voiture2.Description());
        }
    }
}
