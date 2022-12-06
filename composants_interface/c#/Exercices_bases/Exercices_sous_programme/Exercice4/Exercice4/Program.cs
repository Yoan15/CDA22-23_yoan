using System;

namespace Exercice4
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            T = new int[5] { 6, 47, 8, 2, 4 };
            Somme(T);
        }

        public static int Somme(int[] T)
        {
            int _somme = 0;
            for (int i = 0; i < 5; i++)
            {
                _somme += T[i];
            }
            Console.WriteLine("La somme est valeurs du tableau est : " + _somme);
            return T[0];
        }
    }
}
