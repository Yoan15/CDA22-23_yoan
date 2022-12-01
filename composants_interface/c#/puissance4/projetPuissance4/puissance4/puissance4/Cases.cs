using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace puissance4
{
    class Cases
    {
        public Joueurs Joueur { get; set; }
        public bool IsVide { get; set; }
        public Cases(Joueurs joueur, bool isVide)
        {
            Joueur = joueur;
            IsVide = isVide;
        }

        public bool estJouable(Joueurs joueur)
        {
            if (true)
            {
                return true;
            }
        }
    }
}
