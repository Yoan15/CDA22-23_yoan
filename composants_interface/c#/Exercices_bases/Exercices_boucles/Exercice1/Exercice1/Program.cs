using System;

namespace Exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            int a = 1;
            int b = 0;
            int n = 5;
            while (a<=n)
            {
                b += a++;
                Console.WriteLine(a + " , " + b);
            }
        }
    }
}
