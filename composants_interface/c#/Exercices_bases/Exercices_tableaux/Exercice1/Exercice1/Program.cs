using System;

namespace Exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] c = new char[4];
            c[0] = 'a';
            c[3] = 'J';
            c[2] = 'k';
            c[1] = 'R';
            for (int k = 0; k < 4; k++)
            {
                Console.WriteLine(c[k]);
            }
            for (int k = 0; k < 4; k++)
            {
                c[k]++;
            }
            foreach (char i in c)
            {
                Console.WriteLine(i);
            }
        }
    }
}
