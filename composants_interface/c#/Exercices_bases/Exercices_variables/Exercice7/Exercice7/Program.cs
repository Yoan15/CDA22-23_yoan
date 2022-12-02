using System;

namespace Exercice7
{
    class Program
    {
        static void Main(string[] args)
        {
            Char lettre1;
            Char lettre2;
            lettre2 = 'a';
            const string V1 = "\\";
            Console.WriteLine("Veuillez saisir un caractère : ");
            lettre1 = Convert.ToChar(Console.ReadLine());
            String carac = string.Concat(lettre1, lettre2);
            Console.WriteLine("Le caractère saisi est "+carac);
            string uni = "u+00"+carac;
            var unicode = V1 + uni;
            Console.WriteLine("L'unicode est "+unicode);
        }
    }
}
