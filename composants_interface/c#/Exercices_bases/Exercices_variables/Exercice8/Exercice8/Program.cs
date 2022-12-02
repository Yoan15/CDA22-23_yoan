using System;

namespace Exercice8
{
    class Program
    {
        static void Main(string[] args)
        {
            Char carac;
            Console.WriteLine("Veuillez saisir un caractère : ");
            carac = Convert.ToChar(Console.ReadLine());
            Char caracUpper = Char.ToUpper(carac);
            Console.WriteLine("Le programme a transformé votre caractère "+carac+" en majuscule "+caracUpper);
        }
    }
}
