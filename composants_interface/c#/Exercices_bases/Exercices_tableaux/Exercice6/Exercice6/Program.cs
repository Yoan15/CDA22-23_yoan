using System;

namespace Exercice6
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            int _somme = 0;
            T = new int[5] {15,4,8,6,20};
            for (int i = 0; i < 5; i++)
            {
                _somme += T[i];
            }
            Console.WriteLine("La somme des éléments du tableau est " + _somme);
        }
    }
}
