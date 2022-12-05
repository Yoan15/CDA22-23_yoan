using System;

namespace Exercice7
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            int _nbATrouver;
            T = new int[10] { 8, 45, 7, 10, 5, 6, 91, 2, 64, 71 };
            Console.WriteLine("Veuillez saisir un nombre à trouver : ");
            _nbATrouver = Convert.ToInt32(Console.ReadLine());
            T.Find(T, _nbATrouver);
        }
    }
}
