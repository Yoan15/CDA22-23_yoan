using System;

namespace Exercice1._2_2
{
    class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int n;
            Console.WriteLine("Veuillez saisir un nombre 'a' : ");
            a = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Veuillez saisir un nombre 'b' : ");
            b = Convert.ToInt32(Console.ReadLine());
            n = a / b;
            Console.WriteLine(n);
        }

        public static int SommeDiviseursStricts(int n)
        {
            return n;
        }

        public static bool SontAmis(int a, int b)
        {
            return true;
        }
    }
}
