using System;

namespace Exercice5
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            T = new int[10];
            T[0] = 1;
            for (int i = 0; i < 10; i++)
            {
                T[i] = i + 1;
                Console.WriteLine(T[i]);
            }
        }
    }
}
