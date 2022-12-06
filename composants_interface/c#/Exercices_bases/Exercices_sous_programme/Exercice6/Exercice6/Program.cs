using System;

namespace Exercice6
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            int k;
            T = new int[15] { 4, 87, 254, 6, 1, 95747, 546, 25, 489, 87, 61, 354, 78, 2, 46 };
            Console.WriteLine("Veuillez saisir un nombre à rechercher : ");
            k = Convert.ToInt32(Console.ReadLine());
            Existe(T, k);
        }

        public static bool Existe(int[] T, int k)
        {
            int _trouve;
            _trouve = Array.IndexOf(T, k);
            if (_trouve == -1)
            {
                Console.WriteLine("Le nombre n'existe pas dans le tableau.");
                return false;
            }
            else
            {
                Console.WriteLine("Le nombre a été trouvé, il se trouve à la position : " + _trouve);
                return true;
            }
        }
    }
}
