using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CrudProduitsProgression
{
    class CategoriesService
    {
        const string PATH = @"../../Categories.json";

        public static List<Categories> ListCategories()
        {
            string contenu;
            List<Categories> liste;
            // on récupère le contenu brut du fichier
            contenu = DaoJson.LireFichier(PATH);
            // on transforme le JSOn en objet métier
            // Deserialize prend un paramètre entre <> pour préciser le type de sortie
            // et un paramètre entre (), la valeur à convertir
            liste = JsonConvert.DeserializeObject<List<Categories>>(contenu);
            return liste;
        }

        public static void EcrireProduits(List<Categories> liste)
        {
            // on tranforme la liste en string
            string contenu = JsonConvert.SerializeObject(liste);
            // on écrit dans le fichier
            DaoJson.EcrireFichier(PATH, contenu);
        }

        public static void UpdateCategorie(Categories cat)
        {
            List<Categories> liste;
            // on extrait la liste des produits
            liste = ListCategories();
            // on modifie le produit concerné
            foreach (var elt in liste)
            {
                if (cat.IdCategorie == elt.IdCategorie)
                {
                    elt.LibelleCategorie = cat.LibelleCategorie;
                    elt.DescCategorie = cat.DescCategorie;
                }
            }
            // on enregistre les modifications
            EcrireProduits(liste);
        }
    }
}
