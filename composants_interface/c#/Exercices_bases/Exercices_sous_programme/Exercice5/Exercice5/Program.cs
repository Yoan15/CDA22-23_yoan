using System;
using System.Linq;

namespace Exercice5
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] T;
            T = new int[10] {624,912,6,78,3,54,63,2,4,8};
            Min(T);
        }

        public static int Min(int[] T)
        {
            int nbMin = T.Min();
            Console.WriteLine("Le nombre minimum du tableau est : " + nbMin);
            return T[0];
        }
    }
}
