
        using System;
        using System.IO;
        using System.Collections.Generic;
        using System.Linq;
        using System.Text;
        using System.Threading.Tasks;
using Newtonsoft.Json;

namespace CRUDProduits
{
    class DAOJson
    {

        //Méthodes

        static public void EcrireFichier(List<Produits> liste, string path)
        {
            string[] contenu = { JsonConvert.SerializeObject(liste) };
            File.WriteAllLines(path, contenu);
        }

        static public List<Produits> LireFichier(string path)
        //Renvoi un tableau de chaine contenant les records stockées dans le fichier records
        {
            string contenu;
            List<Produits> liste= new List<Produits>();
            //Lecture et stockage 
            contenu = File.ReadAllText(path);
            //transformation en liste d'object
            liste = JsonConvert.DeserializeObject<List<Produits>>(contenu);
            return liste; // renvoi la liste des tableaux
        }
    }
}

	