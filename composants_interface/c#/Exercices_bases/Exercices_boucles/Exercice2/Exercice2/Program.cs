using System;

namespace Exercice2
{
    class Program
    {
        static void Main(string[] args)
        {
            int a = 0;
            int b = 0;
            int c = 0;
            int d = 3;
            int m = 3;
            int n = 4;
            for (a = 0; a < m; a++)
            {
                d = 0;
                for (b = 0; b < n; b++)
                {
                    d += b;
                }
                c += d;
            }
            Console.WriteLine(a + " , " + b + " , " + c + " , " + d + " . ");
        }
    }
}
