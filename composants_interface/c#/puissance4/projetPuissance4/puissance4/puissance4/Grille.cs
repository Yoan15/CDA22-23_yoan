using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace puissance4
{
    class Grille
    {
        

        public int NbLignes { get; set; }
        public int NbColonnes { get; set; }
        public String [,] Cases { get; set; }

        public Grille(int nbLignes, int nbColonnes, string[,] cases)
        {
            NbLignes = nbLignes;
            NbColonnes = nbColonnes;
            Cases = cases;
        }

        public bool estPlein()
        {
            if (true)
            {
                return true;
            }
        }

        public bool colonnePleine(int colonne)
        {

        }

        public String mettreUnPion(int colonne)
        {

        }

        public bool estAligne(int colonne, int ligne)
        {
            if (true)
            {
                return true;
            }
        }
    }
}
