using System;
using System.Linq;

namespace Exercice12
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            int min;
            int max;
            T = new int[] { 5, 45, 1, 9, 8 };
            max = T.Max();
            min = T.Min();
            Console.WriteLine("Le nombre minimum du tableau est : "+ min + " et le nombre maximum du tableau est : "+ max);
        }
    }
}
