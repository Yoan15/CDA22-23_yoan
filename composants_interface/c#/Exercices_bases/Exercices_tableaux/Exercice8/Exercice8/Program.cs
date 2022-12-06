using System;

namespace Exercice8
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            T = new int[4] { 1, 2, 3, 4 };
            Console.WriteLine("---------------------------Tab1---------------------------");
            for (int i = 0; i < 4; i++)
            {
                Console.WriteLine(T[i]);
            }

            int[] T2;
            T2 = new int[4] { T[2], T[3], T[0], T[1] };
            Console.WriteLine("---------------------------Tab2---------------------------");
            for (int j = 0; j < 4; j++)
            {
                Console.WriteLine(T2[j]);
            }
        }
    }
}
