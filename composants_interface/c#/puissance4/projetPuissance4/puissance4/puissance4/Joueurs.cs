using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace puissance4
{
    class Joueurs
    {
        public String Couleurs { get; set; }
        public String Nom { get; set; }
        public int Numeros { get; set; }
        public static List<String> ListCouleur { get; set; }

        public Joueurs(string couleurs, string nom, int numeros)
        {
            Couleurs = couleurs;
            Nom = nom;
            Numeros = numeros;
        }

        private static bool couleurExiste(List<String> couleur)
        {
            if (true)
            {
                return true;
            }
        }
    }
}
