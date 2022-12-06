using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_voiture
{
    class Voiture
    {
        public String Couleur { get; set; }

        public String Marque { get; set; }

        public String Modele { get; set; }

        public int NbKilometres { get; set; }

        public String Motorisation { get; set; }

        public Voiture(String couleur, String marque, String modele, int nbKilometres, String motorisation)
        {
            Couleur = couleur;
            Marque = marque;
            Modele = modele;
            NbKilometres = nbKilometres;
            Motorisation = motorisation;
        }

        public static String Description(String couleur, String marque, String modele, int nbKilometres, String motorisation)
        {
            Console.WriteLine("Cette voiture est une " + modele + " de la marque " + marque + ", de couleur " + couleur + ", de motorisation " + motorisation + ", avec " + nbKilometres + " Kilomètres");
        }
    }
}
