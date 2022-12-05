using System;

namespace Exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            float _note;
            Console.WriteLine("Veuillez saisir une note : ");
            _note = float.Parse(Console.ReadLine());
            if (_note>10)
            {
                Console.WriteLine("admis");
            }
            else if (_note>=8)
            {
                Console.WriteLine("rattrapage");
            }
            else if (_note>0)
            {
                Console.WriteLine("ajourné");
            }
            else
            {
                Console.WriteLine("erreur");
            }
        }
    }
}
