using System;

namespace Exercice3
{
    class Program
    {
        static void Main(string[] args)
        {
            int n1;
            int n2;
            int somme;
            int quotient;
            Console.WriteLine("Veuillez saisir un premier nombre : ");
            n1 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Veuillez saisir un second nombre : ");
            n2 = Convert.ToInt32(Console.ReadLine());
            somme = n1 + n2;
            Console.WriteLine("La somme de vos nombres est "+somme);
            quotient = n1 / n2;
            Console.WriteLine("Le quotient de vos nombres est "+quotient);
        }
    }
}
