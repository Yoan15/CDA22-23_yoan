using System;

namespace Exercice2
{
    class Program
    {
        static void Main(string[] args)
        {
            int _nombre;
            int _valAbsolue;
            Console.WriteLine("Veuillez saisir un nombre : ");
            _nombre = Convert.ToInt32(Console.ReadLine());
            if (_nombre>0)
            {
                _valAbsolue = _nombre * 1;
            }
            else if (_nombre<0)
            {
                _valAbsolue = _nombre * -1;
            }
            else
            {
                _valAbsolue = 0;
            }
            Console.WriteLine("La valeur absolue du nombre "+_nombre+" est "+_valAbsolue);
        }
    }
}
