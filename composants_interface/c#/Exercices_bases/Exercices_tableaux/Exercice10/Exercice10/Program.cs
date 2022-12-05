using System;

namespace Exercice10
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            T = new int[7] { 1, 2, 3, 4, 5, 6, 7 };
            for (int i = 0; i < 7; i++)
            {
                Console.WriteLine(T[i]);
            }
            Array.Reverse(T);
            for (int i = 0; i < 7; i++)
            {
                Console.WriteLine(T[i]);
            }
        }
    }
}
