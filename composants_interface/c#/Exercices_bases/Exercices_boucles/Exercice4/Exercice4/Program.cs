using System;

namespace Exercice4
{
    class Program
    {
        static void Main(string[] args)
        {
            int _n;
            Console.WriteLine("Veuillez saisir un nombre : ");
            _n = Convert.ToInt32(Console.ReadLine());
            if (_n > 0)
            {
                //for (int i = _n; i > 0 ; i--)
                //{
                //    _n = _n - 1;
                //    Console.WriteLine(_n);
                //}

                //while (_n > 0)
                //{
                //    _n = _n - 1;
                //    Console.WriteLine(_n);
                //}

                do
                {
                    _n = _n - 1;
                    Console.WriteLine(_n);
                } while (_n > 0);
            }
            else
            {
                Console.WriteLine("Le nombre ne peut pas être negatif ou nul.");
            }
        }
    }
}
