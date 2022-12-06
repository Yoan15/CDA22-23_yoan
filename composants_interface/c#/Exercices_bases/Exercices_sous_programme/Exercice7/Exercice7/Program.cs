using System;

namespace Exercice7
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            T = new int[5] { 8, 4, 5, 3, 1 };
            SommePairs(T);
        }

        public static int SommePairs(int[] T)
        {
            int n = 2;
            int somme = 0;
            for (int i = 0; i < 5; i++)
            {
                int res = T[i] % n;
                if (res == 0)
                {
                    somme += T[i];
                }
            }
            Console.WriteLine("La somme des pairs du tableau est : " + somme);
            return somme;
        }
    }
}
