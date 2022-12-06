using System;

namespace Exercice1._2_1
{
    class Program
    {
        static void Main(string[] args)
        {
            int n;
            Console.WriteLine("Veuillez saisir un nombre : ");
            n = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Le nombre choisi est " + n);
            Unites(n);
            Dizaines(n);
        }

        public static int Unites(int n)
        {
            if (n < 10)
            {
                Console.WriteLine("Le nombre comporte " + n + " unités.");
            }
            return n;
        }

        public static int Dizaines(int n)
        {
            if (n > 10)
            {
                int n1 = n / 10;
                int n2 = n % 10;
                Console.WriteLine("Le nombre comporte " + n1 + " dizaines et "+ n2 + " unités.");
            }
            return n;
        }

        public static int Extrait(int n, int p)
        {

            return n;
        }

        public static int NbChiffres(int n)
        {
            return n;
        }

        public static int SommeChiffres(int n)
        {
            return n;
        }
    }
}
