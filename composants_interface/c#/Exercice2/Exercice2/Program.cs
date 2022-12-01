using System;

namespace Exercice2
{
    class Program
    {
        static void Main(string[] args)
        {
            //string nombre;
            //Console.WriteLine("Veuillez saisir un nombre entier : ");
            //nombre = Console.ReadLine();
            //Console.WriteLine("Le nombre que vous avez saisi est " + nombre);

            int nombre;
            Console.WriteLine("Veuillez saisir un nombre entier : ");
            nombre = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Le nombre que vous avez saisi est " + nombre);
        }
    }
}
