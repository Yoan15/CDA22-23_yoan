using System;

namespace Exercice6
{
    class Program
    {
        static void Main(string[] args)
        {
            float longueur;
            float largeur;
            float surface;
            Console.WriteLine("Veuillez saisir la longueur du rectangle : ");
            longueur = float.Parse(Console.ReadLine());
            Console.WriteLine("Veuillez saisir la largeur du rectangle : ");
            largeur = float.Parse(Console.ReadLine());
            surface = longueur * largeur;
            Console.WriteLine("La surface de votre rectangle est de "+surface);
        }
    }
}
