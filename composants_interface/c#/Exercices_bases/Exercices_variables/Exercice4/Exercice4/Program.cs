using System;

namespace Exercice4
{
    class Program
    {
        static void Main(string[] args)
        {
            float nombre;
            Console.WriteLine("Veuillez saisir un nombre à virgule : ");
            nombre = float.Parse(Console.ReadLine());
            Console.WriteLine("Le nombre saisi est "+nombre);
        }
    }
}
