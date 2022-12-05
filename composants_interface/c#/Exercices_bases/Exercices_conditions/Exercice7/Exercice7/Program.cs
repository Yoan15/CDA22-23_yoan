using System;

namespace Exercice7
{
    class Program
    {
        static void Main(string[] args)
        {
            int _a;
            int _b;
            int _res = 0;
            char _op;
            Console.WriteLine("Veuillez saisir une valeur a : ");
            _a = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Veuillez saisir une valeur b : ");
            _b = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Veuillez saisir un opérateur : ");
            _op = Convert.ToChar(Console.ReadLine());
            switch (_op)
            {
                case '+':
                    _res = _a + _b;
                    break;
                case '-':
                    _res = _a - _b;
                    break;
                case '*':
                    _res = _a * _b;
                    break;
                case '/':
                    _res = _a / _b;
                    break;
            }
            Console.WriteLine("Le resultat est " + _res);
        }
    }
}
