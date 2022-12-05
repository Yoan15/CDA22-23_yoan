using System;

namespace Exercice1
{
    class Program
    {
        static void Main(string[] args)
        {
            string texte = "Les framboises sont perchées sur le tabouret de mon grand-père.";
            foreach (var ch in texte)
            {
                Console.Write("'{0}'" + " ", ch);
            }
        }
    }
}
