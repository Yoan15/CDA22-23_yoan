using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace puissance4
{
    class Parties
    {
        public int NbJoueur { get; set; }
        public List<String> listJoueur { get; set; }
        public int nbAligne { get; set; }

        public Parties(int nbJoueur, List<string> listJoueur, int nbAligne)
        {
            NbJoueur = nbJoueur;
            this.listJoueur = listJoueur;
            this.nbAligne = nbAligne;
        }

        
    }
}
