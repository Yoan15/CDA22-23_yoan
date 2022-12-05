using System;

namespace Exercice7
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            int _nbATrouver;
            int _trouve;
            T = new int[10] { 8, 45, 7, 10, 5, 6, 91, 2, 64, 71 };
            Console.WriteLine("Veuillez saisir un nombre à trouver : ");
            _nbATrouver = Convert.ToInt32(Console.ReadLine());
            _trouve = Array.IndexOf(T, _nbATrouver);
            if (_trouve == -1)
            {
                Console.WriteLine("Le nombre n'existe pas dans le tableau.");
            }
            else
            {
                Console.WriteLine("Le nombre " + _nbATrouver + " se trouve à l'index numéro : " + _trouve);
            }
        }
    }
}
