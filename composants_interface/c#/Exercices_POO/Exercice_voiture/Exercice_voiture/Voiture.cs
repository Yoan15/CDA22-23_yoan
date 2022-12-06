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

        public MotorisationEnum Motorisation { get; set; }

        public Voiture(String couleur, String marque, String modele, int nbKilometres, MotorisationEnum motorisation)
        {
            Couleur = couleur;
            Marque = marque;
            Modele = modele;
            NbKilometres = nbKilometres;
            Motorisation = motorisation;
        }

        //public static String Description(String couleur, String marque, String modele, int nbKilometres, String motorisation)
        //{
        //    Console.WriteLine("Cette voiture est une " + modele + " de la marque " + marque + ", de couleur " + couleur + ", de motorisation " + motorisation + ", avec " + nbKilometres + " Kilomètres");
        //}
        public String Description()
        {
            return "Cette voiture est une " + this.Modele + " de la marque " + this.Marque + ", de couleur " + this.Couleur + ", de motorisation " + this.Motorisation + ", avec " + this.NbKilometres + " Kilomètres.";
        }

        public int Rouler(int nbKilometres)
        {
            return NbKilometres = this.NbKilometres + nbKilometres;
        }
    }

    public enum MotorisationEnum
    {
        Essence,
        Diesel
    }
}
