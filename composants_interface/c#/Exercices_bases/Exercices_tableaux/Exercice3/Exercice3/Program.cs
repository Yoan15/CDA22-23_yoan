using System;

namespace Exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] k;
            k = new int[10];
            k[0] = 1;
            k[1] = 1;
            for (int i = 2; i < 10; i++)
            {
                k[i] = 0;
            }
            for (int j = 1; j <= 3; j++)
            {
                for (int i = 1; i < 10; i++)
                {
                    k[i] += k[i - 1];
                }
            }
            foreach (int p in k)
            {
                Console.WriteLine(p);
            }
        }
    }
}
