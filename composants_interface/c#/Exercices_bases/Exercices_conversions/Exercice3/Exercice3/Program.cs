using System;

namespace Exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            float _kMarchandises;
            float _kCartons;
            float resultat;
            int nbCartons;
            Console.WriteLine("Veuillez saisir le poids en kilos de marchandises :");
            _kMarchandises = float.Parse(Console.ReadLine());
            Console.WriteLine("Veuillez saisir le poids maximal des cartons : ");
            _kCartons = float.Parse(Console.ReadLine());
            resultat = _kMarchandises / _kCartons;
            nbCartons = Convert.ToInt32(resultat);
            Console.WriteLine("On peut placer "+nbCartons+" cartons dans le camion.");
        }
    }
}
