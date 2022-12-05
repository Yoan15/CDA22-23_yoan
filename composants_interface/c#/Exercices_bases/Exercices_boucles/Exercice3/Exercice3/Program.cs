using System;

namespace Exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            int a, b, c, d;
            a = 1;
            b = 2;
            c = a / b;
            d = (a == b) ? 3 : 4;
            Console.WriteLine(c + " , " + d + " . ");
            a = ++b;
            b %= 3;
            Console.WriteLine(a + " , " + b + " . ");
            b = 1;
            for (a = 0; a <= 10; a++)
            {
                c = ++b;
            }
            Console.WriteLine(a + " , " + b + " , " + c + " , " + d + " . ");
        }
    }
}
