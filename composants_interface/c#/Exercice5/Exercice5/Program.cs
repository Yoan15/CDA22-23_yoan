using System;

namespace Exercice5
{
    class Program
    {
        static void Main(string[] args)
        {
            float n1;
            float n2;
            float n3;
            float somme;
            float moyenne;
            Console.WriteLine("Veuillez saisir un premier nombre : ");
            n1 = float.Parse(Console.ReadLine());
            Console.WriteLine("Veuillez saisir un second nombre : ");
            n2 = float.Parse(Console.ReadLine());
            Console.WriteLine("Veuillez saisir un troisième nombre : ");
            n3 = float.Parse(Console.ReadLine());
            somme = n1 + n2 + n3;
            moyenne = somme / 3;
            Console.WriteLine("La moyenne de vos nombres est "+moyenne);
        }
    }
}
