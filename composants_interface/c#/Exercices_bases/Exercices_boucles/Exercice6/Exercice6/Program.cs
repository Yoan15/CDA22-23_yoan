using System;

namespace Exercice6
{
    class Program
    {
        static void Main(string[] args)
        {
            int _n;
            int _res;
            Console.WriteLine("Veuillez saisir un nombre : ");
            _n = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Table de " + _n);
            for (int i = 1; i <= 10; i++)
            {
                _res = _n * i;
                Console.WriteLine(i + " : " + _res);
            }
        }
    }
}
