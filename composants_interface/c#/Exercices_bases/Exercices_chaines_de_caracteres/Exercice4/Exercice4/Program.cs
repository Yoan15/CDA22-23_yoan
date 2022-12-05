using System;

namespace Exercice4
{
    class Program
    {
        static void Main(string[] args)
        {
            string _texte = "Ceci est un texte où l'on va remplacer des caractères par d'autres caractères.";
            char _a;
            char _b;
            string _texte1;
            Console.WriteLine(_texte);
            Console.WriteLine("Veuillez saisir le caractère que vous voulez remplacer dans la phrase ci-dessus : ");
            _a = Convert.ToChar(Console.ReadLine());
            Console.WriteLine("Veuillez saisir le caractère que vous voulez insérer dans la phrase : ");
            _b = Convert.ToChar(Console.ReadLine());
            _texte1 = _texte.Replace(_a, _b);
            Console.WriteLine(_texte1);
        }
    }
}
