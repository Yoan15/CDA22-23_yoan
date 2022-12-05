using System;

namespace Exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            int age;
            Console.WriteLine("Veuillez saisir votre age : ");
            age = Convert.ToInt32(Console.ReadLine());
            if (age>=18)
            {
                Console.WriteLine("Vous êtes majeur.");
            }
            else if(age>=0)
            {
                Console.WriteLine("Vous êtes mineur.");
            }
            else
            {
                Console.WriteLine("Erreur");
            }
        }
    }
}
